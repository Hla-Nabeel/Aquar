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

// Route::get('/', function(){
//     return view('Front.index');
// })->name('home');

Route::view('/', 'Front.index')->name('home');


Route::view('about/', 'Front.about')->name('about');
Route::view('contact/', 'Front.contact')->name('contact');
Route::view('details/', 'Front.details')->name('details');

Route::view('admin/', 'Admin.index')->name('admin.index');
Route::view('admin/', 'Admin.department')->name('admin.department');
