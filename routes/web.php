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
// Route::get('/', function () {
//     return view('Home/login');
// });

//后台
Route::get('/admin', function () {
    return redirect('/admin/post');
});
/**
 * 管理后台
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('post', 'PostController');
    Route::resource('tag', 'TagController', ['except' => 'show']);
    Route::get('tag/create', 'TagController@create');
    Route::post('tag/store', 'TagController@store');  //提交表单
    Route::get('tag/edit', 'TagController@edit');   //显示编辑标签
    Route::get('tag.destory', 'TagController@destory');   //删除
    Route::post('tag/update', 'TagController@update');  //

//    upload相关路由
    Route::get('upload', 'UploadController@index');
    Route::post('upload/file', 'UploadController@uploadFile');
    Route::delete('upload/file', 'UploadController@deleteFile');
    Route::post('upload/folder', 'UploadController@createFolder');
    Route::delete('upload/folder', 'UploadController@deleteFolder');
});


// 登录退出
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//后台end

//    首页

Route::group (['namespace' => 'Home'], function () {

    Route::get('/', 'IndexController@index');

});

//Home模块
Route::group (['prefix' => 'home' , 'namespace' => 'Home'], function () {

    //登录
    Route::get('login', 'IndexController@login');
    Route::post('login', 'IndexController@dologin');
    Route::get('{slug}', 'IndexController@showPost')->name('home.detail');

});


//开发博客
//Route::get('/', function () {
//    return redirect('/blog');
//});

Route::get('/blog', 'BlogController@index')->name('blog.home');
Route::get('/blog/{slug}', 'BlogController@showPost')->name('blog.detail');
