<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;


class UserController extends Controller
{
    public function postRegister(Request $request){
    	$this->validate($request,[
    		'uname'=>'required',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:7',
    		'password_confirmation'=>'required|same:password'
    	]);
       
    	$user=new User();
    	$user->name=$request['uname'];
    	$user->email=$request['email'];
    	$user->password=bcrypt($request['password']);
    	$user->save();



    	return redirect()->route('dashboard');
    }

    public function postLogin(Request $request){

    	$this->validate($request,[
    		
    		'email'=>'required|email',
    		'password'=>'required|min:7',
    		
    	]);

    	if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){

    		return redirect()->route('dashboard');
    	}else{
    		return view('admin.login',['err','Invalid Username or Password']);
    	}
    }
}
