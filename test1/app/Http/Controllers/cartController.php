<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;
use PhpParser\Node\Expr\Print_;
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;
class cartController extends Controller
{
    public function save_cart(Request $request){
        $userid=Session::get('user_id');
        $productid = $request->id_hidden;
        $quantity = $request->qty;
        $quantity2 = $request->qty2;
        $product = DB::table('tbl_product')->where('Product_id',$productid)->get()->first();
        $data['product_id']=$product->product_id;
        $data['product_name']=$product->product_name;
        $data['product_gia']=$product->product_gia;
        $data['product_img']=$product->product_image;
        $data['id_user']= isset($userid)?$userid:0;
        
        $product_cart = DB::table('cart')->where('Product_id',$productid)->get()->first();
        if($quantity2 == null){
        if($product_cart !=null){
            $data['product_qty'] = $product_cart->product_qty + (int)($quantity);
            $data['total']= $product->product_gia * ($product_cart->product_qty+(int)($quantity));
            DB::table('cart')->where('product_id',$productid)->update($data);
        }
        else{
            $data['product_qty']=(int)$quantity;
            $data['total']= $product->product_gia*(int)$quantity;
            DB::table('cart')->insert($data);
        }
        }else{
            $data['product_qty']=(int)$quantity2;
            $data['total']= $product->product_gia*(int)$quantity2;
            DB::table('cart')->where('product_id',$productid)->update($data);
        }
      
        return redirect('/cart');
       
      
       
    }

    public function delete_cart($product_id){
        DB::table('cart')->where('product_id',$product_id)->delete();
        return redirect('/cart');
    }
    public function Show_cart(){
        $userid=Session::get('user_id');
        $product = DB::table('cart')->where('id_user',$userid)->get();
        $Sum = DB::table('cart')->where('id_user',$userid)->sum('total');
        if($userid){
        return view('pages.sanpham.cart')->with('Cart_list',$product)->with('total',$Sum);
        }else{
            return Redirect::to('/login');
        }
      
    }
    public function check(){
        return view('checkout');
    }


  
}
