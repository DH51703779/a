<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;
use PhpParser\Node\Expr\Print_;
use App\Models\User;



session_start();
class UserController extends Controller
{
    public function Show_login(){
        return view('login'); 
    
    }

    public function login(Request $request){
        $user_email = $request->email;
        $user_password = md5($request->password) ;

        $Result = DB::table('users')->where('email',$user_email)->where('password',$user_password)->first();
        if($Result){
            Session::put('user_name',$Result->name);
            Session::put('user_id',$Result->id);
            return redirect::to('/');   
        }
        else{
            Session::put('false','email hoặc mật khẩu sai , xin nhập lại ');
            Session::put('message','email hoặc mật khẩu sai , xin nhập lại ');
            return Redirect::to('/login');
        }
        
    }
    public function logout(){
        Session::put('user_name',null);
        Session::put('user_id',null);
        return Redirect::to('/login');
    }
    public function Show_dangky(){
        return view('dangky'); 
    
    }
    public function dangky(Request $request){
        $this->validate($request, //kiểm tra form
        [
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20|alpha_num',
            'name'=>'required|',
            
        ],
        [
            'email.required'=>'Vui lòng nhập Email',
            'email.email'=>'Email không đúng định dạng! (ten_email@gmail.com)',
            'email.unique'=>'Email này đã được đăng ký!Vui lòng nhập Email khác !',
            'password.required'=>'Vui lòng nhập mật khẩu <3',
            're_password.same'=>'Mật khẩu không giống nhau :(',
            'password.min'=>'Mật khẩu ít nhất có 6 ký tự ',
            'password.max'=>'Mật khẩu quá 20 ký tự',
            'password.alpha_num'=>'du lieu phai la chuoi va so'
           
        
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= md5($request->password);
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoảng thành công');
        
    }
   
}

