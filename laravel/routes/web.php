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
    return view('hello');
    // return view('welcome');
});
Route::get('/about',function(){
    return  'I love you';
});
Route::get('/box',function(){
    return  view('layouts/app');
});
//通过控制器来调用路由
// Route::get('/con','SiteController@index');
// Route::get('/articles','ArticlesController@index');
// //创建文章路由
// Route::get('/articles/create','ArticlesController@create');
// //提交文章
// Route::post('/articles','ArticlesController@store');
// //修改文章
// Route::get('/articles/{id}/edit','ArticlesController@edit');
Route::resource('articles','ArticlesController');