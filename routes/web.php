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

//Route::get('/', function () {  return view('welcome');});

//assigning controller to router and method and passing data
//Route::get('/posts/{id}','PostController@index' );

// using Resource method to get crud features automatically
//Route::resource('post','PostController' );


//Custom contact Routes
//Route::get('/contact','PostController@contact' );

/*
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

// define name
Route::get('admin/example',array('as'=>'admin.home',function ()
{
   $url = route('admin.home');
  return "This URL is ".$url;
}));

// use middleware
Route::group(['middleware' => ['web']], function () {

});

*/

/*

  Database Row Sql querys
*/
// using Raw query method insert data from Route
/*
// insert
Route::get('/post/create', function () {
  DB::insert('insert into posts(title,body,is_admin,image) values(?,?,?,?)',['this is title','this is body',1,'image.png']);
});

*/

// select
/*
Route::get('/post/read', function () {
$results=  DB::select('select *from  posts where id=?',[1]);
return $results;
*/
/*
foreach($results as $result)
{
echo $result->title;
echo $result->body;

});
}*/

// Update
/*
Route::get('/post/update', function () {
$updated=  DB::update('update posts set title="thi is Nujoom da" where id=?',[1]);
return $updated;
});
*/

// Delete
/*
Route::get('post/delete',function()
{
  $delete=DB::delete('delete from posts where id=?',[1]);
  return $delete;
});

*/
