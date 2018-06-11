<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
	public function index(){
		$posts = Post::all();
		$cats = Category::all();

		return view('index')->with([
       "posts" => $posts,
       "cats" => $cats,
    ]);

	}
}
