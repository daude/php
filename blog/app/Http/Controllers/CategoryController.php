<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function index(){
    	return view('admin.pages.posts.category.index');
    }

    public function add(){
    	return view('admin.pages.posts.category.add');
    }
}
