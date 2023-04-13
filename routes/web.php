<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage', function(){
    return view('mypage/mypage');
});
Route::get('/newPoof', function(){
    return view('mypage/newPoof');
});
Route::get('/newPee', function(){
    return view('mypage/newPee');
});
Route::get('/newFood', function(){
    return view('mypage/newFood');
});
Route::get('/profEdit', function(){
    return view('mypage/profEdit');
});
Route::get('/withdrow', function(){
    return view('mypage/withdrow');
});




