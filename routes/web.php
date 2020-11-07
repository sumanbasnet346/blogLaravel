<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_auth;
use App\Http\Controllers\admin\Post;
use App\Http\Controllers\admin\Page;
use App\Http\Controllers\admin\Contact;
use App\Http\Controllers\front\frontPost;

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


Route::get('/',[frontPost::class,'home']);
Route::get('post/{slug}',[frontPost::class,'post']);
Route::get('page/{slug}',[frontPost::class,'page']);

Route::view('admin/login','admin.login');
Route::post('admin/login_submit',[Admin_auth::class,'login_submit']);


// Route::view('admin/layout','admin.layout.layout');


Route::get('/admin/logout', function () {
    session()->forget('BLOG_USER_ID');
    return redirect('admin/login');
});

Route::group(['middleware'=>['admin_auth']], function(){
    Route::get('admin/post/list',[Post::class,'listing']);
    Route::view('admin/post/add','admin/post.add');
    Route::post('admin/post/submit',[Post::class,'submit']);
    Route::get('admin/post/edit/{id}',[Post::class,'edit']);
    Route::get('admin/post/delete/{id}',[Post::class,'delete']);
    Route::post('admin/post/update/{id}',[Post::class,'update']);
   
    Route::get('admin/page/list',[Page::class,'listing']);
    Route::view('admin/page/add','admin/page.add');
    Route::post('admin/page/submit',[Page::class,'submit']);
    Route::get('admin/page/edit/{id}',[Page::class,'edit']);
    Route::get('admin/page/delete/{id}',[Page::class,'delete']);
    Route::post('admin/page/update/{id}',[Page::class,'update']);
    Route::get('admin/contact/list',[Contact::class,'listing']);
    
});