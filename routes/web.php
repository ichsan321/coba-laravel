<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('Home', [
        "title" => "Home",
        "active"=> "home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
       "title" => "about",
       "active"=> "about",
       "name" => "ichsan Septriansyah",
       "email" => "ichsanseptriansyah23@gmail.com",
       "image" => "ichsan.JPG" 
    ]);
});





Route::get('/post',[ PostController :: class ,'index']);

Route::get('post/{posts:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view ('categories',[
        'title'=> 'Post Categories',
        'active'=> 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);

Route::get('/register',[RegisterController::class,'index']);

Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',[DashboardController::class,'index']);

// Route::get('/categories/{category:slug}', function (Category $category){
//     return view ('post', [
//         'title'=> "Post By Category : $category->name",
//         'active'=> 'categories',
//         'post'=> $category->posts->load ('category','author')
        
//     ]);
//     });

        
    // Route::get('/authors/{author:username}', function(User $author){
    //     return view('post',[
    //         'title'=> "Post By Author : $author->name",
    //         "active"=> "post",
    //         'post'=> $author->posts-> load('category','author'),

    //     ]); 
    // });
