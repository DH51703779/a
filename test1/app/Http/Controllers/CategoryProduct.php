<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Product;
session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');

        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_category_product(){
        $this->AuthLogin();
    	return view('admin.add_category_product');
    }
    public function all_category_product(){
        $this->AuthLogin();
    	$all_category_product = DB::table('category_product')->get();
    	$manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
    	return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    }
    public function save_category_product(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['category_name'] = $request->category_product_name;
        // $data['category_product_keywords'] = $request->meta_keywords;
    	$data['category_desc'] = $request->category_product_desc;
    	$data['category_status'] = $request->category_product_status;
        $data['category_image'] = $request->product_image;
        $get_image = $request->file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('category_product')->insert($data);
            Session::put('message','Thêm danh mục sản phẩm thành công');
            return Redirect::to('add-category-product');
        }
            

   		DB::table('category_product')->insert($data);
   		Session::put('message','Thêm danh mục sản phẩm thành công');
   		return Redirect::to('add-category-product');
    }
    public function unactive_category_product($category_product_id){
        $this->AuthLogin();
    	DB::table('category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
    	Session::put('message','Không kích hoạt danh mục sản phẩm thành công');
    	return Redirect::to('all-category-product');
    }
    public function active_category_product($category_product_id){
        $this->AuthLogin();
    	DB::table('category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
    	Session::put('message','Kích hoạt danh mục sản phẩm thành công');
    	return Redirect::to('all-category-product');
    }
    public function edit_category_product($category_product_id){
        $this->AuthLogin();
    	$edit_category_product = DB::table('category_product')->where('category_id',$category_product_id)->get();
    	$manager_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
    	return view('admin_layout')->with('admin.edit_category_product',$manager_category_product);
    }
    public function update_category_product(Request $request,$category_product_id){
        $this->AuthLogin();
    	$data = array();
    	$data['category_name'] = $request->category_product_name;
        // $data['meta_keywords'] = $request->category_product_keywords;
    	$data['category_desc'] = $request->category_product_desc;
    	DB::table('category_product')->where('category_id',$category_product_id)->update($data);
    	Session::put('message','Cập nhật danh mục sản phẩm thành công');
    	return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id){
        $this->AuthLogin();
        $sanpham = Product::all();
        foreach ($sanpham as  $value) 
        {
            if($value->category_id==$category_product_id){
                Session::put('Thongbao','Không thể xóa danh mục');
                return Redirect::to('all-category-product');
            }
        }
    	DB::table('category_product')->where('category_id',$category_product_id)->delete();
    	Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    	
    }


    //End Function Admin Page
    public function show_category_home(Request $request, $category_id){
        
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.category_id',$category_id)->get();

        // foreach ($category_by_id as $key => $val) {
        //     //seo
        // $meta_desc = $val->category_desc;
        // $meta_keywords = $val->meta_keywords;
        // $meta_title = $val->category_name;
        // $url_canonical = $request->url();
        // //---seo
        // }
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();
        return view('pages.category.show_category')->with('category',$cate_product)->with('brand',$brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name);
    }
    
}
