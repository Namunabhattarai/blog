<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PostsController;
Use App\Models\Post;
Use App\Models\Category;


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
    $posts = Post::Latest()->get();
    return view('home', ['posts'=> $posts] );
    
});

Route::get('/postsmore/{Post}',function(Post $post){
    return view('admin/post/detail', ['post'=>$post]);

});
// Route::get('/postsmore/{Post}',function(Post $post){
//     // $products = product::whereCategoryId($category->id)->get();
//     // $posts = $category->posts;
//     // return $products;
//     return view('admin/post/detail',['post'=>$post]);



// });


Route::get('/admin/posts', [App\Http\Controllers\admin\PostsController::class, 'index'])->name('post_list');
Route::get('/admin/post/create' , [App\Http\Controllers\admin\PostsController::class, 'create']);
Route::post('/admin/post/store' , [App\Http\Controllers\admin\PostsController::class, 'store']);
Route::get('admin/post/edit/{post}', [App\Http\Controllers\admin\PostsController::class, 'edit']);
Route::post('admin/post/update/{post}', [App\Http\Controllers\admin\PostsController::class, 'update']);
Route::get('admin/post/destroy/{post}', [App\Http\Controllers\admin\PostsController::class, 'destroy']);


