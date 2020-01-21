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
Route::get('/','PagesController@index');
Route::get('category/{id}','PagesController@viewCategory')->name('category');
Route::get('info/{id}','PagesController@categoryInfo')->name('info');
Route::post('comment/{id}',['uses'=>'PagesController@comment','middleware'=>'auth'])->name('comment');


Auth::routes();
Route::get('test',function (){
    $cats=\App\Category::all();
    $t=$cats->pluck('name','id');
    return $t;
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload',[
    'uses'=>'UploadController@index',

    'middleware'=>'check-role',
    'roles'=>['admins','users']
])->name('upload');
Route::post('/upload', [
    'uses'=>'UploadController@upload',

    'middleware'=>'check-role',
    'roles'=>['admins','users']
])->name('upload.save');
Route::group(['prefix'=>'admin','middleware'=>['check-role'],'roles'=>'admins'],function (){

Route::resource('users','AdminUsersController');
Route::resource('categories','AdminCategoriesController');


});











//Route::get('test',function (){
//    $user=\App\User::find(1);
////    $user->roles()->attach(\App\Role::where('name','users')->first());
////    $user=\App\Role::where('name','users')->first();
////    return $user;
//    $user->roles()->attach(2000);
//
//});
//Route::get('test1',[
//    'uses'=>'TestController@test',
//    'as'=>'ahmed.ahmed',
//    'roles'=>'admins'
//]);
//Route::get('test2',[
//'uses'=>'TestController@test',
//    'as'=>'ahmed.ahmed',
//    'roles'=>'admins'
//])->middleware('check-role');
//Route::get('test3',function (){
//    $user=\App\User::find(2);
//    if($user->hasAnyRole('users')){
//        return 'godooooo';
//    }
//});
//Route::get('test10',function (){
//    return view('admin.index');
//});
