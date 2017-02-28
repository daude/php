<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Illuminate\Support\Str;

use Auth;

use Illuminate\Support\Facades\File;


class PostController extends Controller
{
    public function index(){
    	$posts=Post::orderBy('id','desc')->get();
    	return view('admin.pages.posts.index',compact('posts'));
    }

    public function create(){
    	return view('admin.pages.posts.form');
    }

    public function insert(Request $request){
    	$post=new Post();
    	$post->title=$request['title'];
    	$post->excerpt=$request['excerpt'];
    	$post->user_id=Auth::user()->id;
    	$post->slug=Str::slug($request['title']);	
    	$post->body=$request['desc'];
    	$post->published_date=$request['date'];
    	$post->status=$request['status'];
    	$image=$request['image'];
    	$name=null;
    	if($image){
    		// echo $name=md5(time());
    		$name=md5(time().$image->getClientOriginalName()).".".$image->getClientOriginalExtension();
    		$image->move('uploads',$name);
    	}

    	$post->image=$name;
    	$post->save();

    	return redirect()->back()->with(['msg'=>'Post Added']);
    }

    public function delete($id){
    	$post=Post::findorfail($id);
    	$image=$post->image;
    	
    	if(!is_null($image)){
    		File::delete(public_path().'/uploads/'.$image);
    	}

    	$post->delete();
    	return redirect()->back()->with(['msg'=>'Post Deleted']);
    }
}
