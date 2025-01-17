<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;
use PhpParser\Node\Expr\Print_;

class productController extends Controller
{
    public function detail_product($product_id){
        $product= DB::table('tbl_product')->where('product_id',$product_id)->get();
        return view('pages.sanpham.detail')->with('detail_p',$product);
    }
    public function showproduct(){
        $product= DB::table('tbl_product')->get();
        return view('product_list')->with('product_l',$product);
        
    }
    public function showtimkiem(request $request){
        $key=$request->tim_kiem;
        $product= DB::table('tbl_product')->where("product_name","like","%".$key."%")->get();

        return view('Product_list')->with('product_s',$product);
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');

        }else{
            return Redirect::to('admin')->send();
        }
    }
     public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        return view('admin.add_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
    
    }
    public function all_product(){
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')
        ->join('category_product','category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.all_product',$manager_product);
    }
    public function save_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        // $data['product_size'] = $request->product_size;
        $data['product_gia'] = $request->product_price;
        
        $data['product_desc'] = $request->product_desc;
        //$data['product_content'] = $request->product_content;
        $data['product_status'] = $request->product_status;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_image'] = $request->product_status;
        $get_image = $request->file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('add-product');
        }
        $data['product_image'] = '';    
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-product');
    }
 
    public function edit_product($product_id){
        $this->AuthLogin();
        $cate_product = DB::table('category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product)->with('brand_product',$brand_product);
            
        return view('admin_layout')->with('admin.edit_product',$manager_product);
    }
    public function update_product(Request $request,$product_id){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        
        $data['product_gia'] = $request->product_price;
        
        $data['product_desc'] = $request->product_desc;
        
        $data['product_status'] = $request->product_status;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $get_image = $request->file('product_image');
        

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return Redirect::to('all-product');
        }
        
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công'); 
        return Redirect::to('all-product');
        }
    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }
    //End admin pages
    public function details_product($product_id){
        $cate_product = DB::table('category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $details_product = DB::table('tbl_product')
        ->join('category_product','category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_id',$product_id)->get();

        foreach ($details_product as $key => $value){
            $category_id = $value->category_id;
        }
        

        $related_product = DB::table('tbl_product')
        ->join('category_product','category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();


        return view('pages.sanpham.show_details')->with('category',$cate_product)->with('brand',$brand_product)->with('product_details',$details_product)->with('relate',$related_product); 

    }
}


