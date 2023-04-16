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

Route::get('/withdrow', function(){
    return view('mypage/withdrow');
});

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/mypage', 'MypageController@mypage')->name('mypage');
    Route::get('/newFood', 'FoodController@new')->name('new_food');
    Route::post('/newFood', 'FoodController@create')->name('create_food');
    Route::get('/newPee', 'PeeController@new')->name('new_pee');
    Route::post('/newPee', 'PeeController@create')->name('create_pee');
    Route::get('/newPoof', 'PoofController@new')->name('new_poof');
    Route::post('/newPoof', 'PoofController@create')->name('create_poof');
    Route::get('/prof/{id}/edit', 'MypageController@profEdit')->name('prof_edit');
    Route::post('/prof/{id}/edit', 'MypageController@profUpdate')->name('prof_update');
});





