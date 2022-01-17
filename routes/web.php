<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layout.blog.index');
// });


// FRONTEND
Route::get('/',[App\Http\Controllers\FrontendController::class,'index']);
Route::get('/about',[App\Http\Controllers\FrontendController::class,'about']);
Route::get('/our-services',[App\Http\Controllers\FrontendController::class,'services']);
Route::get('/contact',[App\Http\Controllers\FrontendController::class,'contact']);



// BACKEND
Route::get('/dashboard',[App\Http\Controllers\BlogController::class,'index']);
Route::get('/data/blog',[App\Http\Controllers\BlogController::class,'create'])->name('blog.index');
Route::get('/add',[App\Http\Controllers\BlogController::class,'createblog'])->name('blog.create');


//PROSES TAMBAH
Route::post('/post/blog', [App\Http\Controllers\BlogController::class, 'prosestambahblog'])->name('home.prosestambahblog');


// Proses Hapus
Route::get('/blog/hapus/{id}',[App\Http\Controllers\BlogController::class, 'hapusDataBlog'])->name('hapusdatablog');


// Get ada to view
Route::get('/blog/edit/{id}',[App\Http\Controllers\BlogController::class, 'edit'])->name('updatedatablog');

Route::post('/blog/proses/edit/{id}',[App\Http\Controllers\BlogController::class, 'updateDataBlog'])->name('updatedatablogs');


Route::post('ckeditor/upload', 'BlogController@upload')->name('ckeditor.image-upload');
