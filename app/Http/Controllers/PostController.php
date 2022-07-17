<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use App\Models\Category;


class PostController extends Controller
{
    //
    public function index ()
    {
      $title='';
      if(request('category')){
        $category =Category::firstWhere('slug', request('category'));
        $title = ' in ' . $category->name;
      }
  if (request('author')){
    $author =User::firstWhere('username', request('author'));
    $title = ' by ' . $author->name;
  }

        return view ('post', [
            "title"=> "All Posts" .$title,
            "active"=> 'post',

            // "post" => post::all()
            "post" => Post::latest()->filter(request(['search', 'category','author']))->paginate(7)->withQueryString()
        ]);
    }
    public function show (Post $posts){

        return view ('posts',[
            "title"=> "Single Post",
            "active"=> 'post',
            "posts" => $posts
        ]);
    }
    
}
