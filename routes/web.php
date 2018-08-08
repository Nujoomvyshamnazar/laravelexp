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


Route::get('/login', function () {
    return "This is login";
});

Route::get('/register', function () {
    return "This is register";
});

Route::get('/about',function ()
{
  return "This is about";
});

Route::get('/contact',function ()
{
  return "This is Contact";
});

Route::get('/post/{id}',function ($id)
{
  return "This id is ". $id;
});

Route::get('admin/example',array('as'=>'admin.home',function ()
{
   $url = route('admin.home');
  return "This URL is ".$url;
}));


Route::group(['middleware' => ['web']], function () {

});
