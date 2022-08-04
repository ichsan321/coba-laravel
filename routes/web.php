<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DasboardPostController;
use App\Http\Controllers\AdminCategoryController;


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


Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',function(){
    return view ('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DasboardPostController::class, 'checkSlug'])
->middleware('auth');

Route::resource('dashboard/posts', DasboardPostController::class)->middleware('auth');

Route::resource('dashboard/categories', AdminCategoryController::class)->except('show');

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

