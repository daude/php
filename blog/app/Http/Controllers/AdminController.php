<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Hash;

use App\User;
use Auth;
use App\PageSetting;



class AdminController extends Controller
{
    //
    public function index(){
       
       
    	return view('admin.index');
    }

    public function logout(){
    	Auth::logout();
    	return view('admin.login');
    }

    public function postChangePassword(Request $request){
    	$this->validate($request,[
    		'opassword'=>'required|min:7',
    		'upassword'=>'required|min:7',
    		'password_confirmation'=>'required|same:upassword'
    	]);
    	$email=$request['uemail'];
    	$user=User::where('email',$email)->first();
   		
   	
    	if( Hash::check($request['opassword'] , $user->password )){
    		$user->password=bcrypt($request['upassword']);
    		$user->save();
    		return redirect()->back()->with('success','Password Changed');
    	}else{
    		return redirect()->back()->with('err','Invalid Old Password');
    	}

    }
}
