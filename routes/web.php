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

Route::middleware(['web'])->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::get('register', 'Auth\RegisterController@showRegisterForm');
    Route::post('register', 'Auth\RegisterController@register');
});
Route::middleware(['web','admin'])->group(function () {
    Route::get('category', 'Category\CategoryController@show');
    //Route::get('admin/login', 'Admin\AdminController@login');
    Route::get('admin/index', 'Admin\AdminController@index');
    Route::get('user/person', 'Admin\UserController@person')->name('user.person');
    Route::post('user/personSave', 'Admin\UserController@personSave');
    Route::get('user/resetPassword', 'Admin\UserController@reset')->name('user.resetPassword');
    Route::post('user/resetPassword', 'Admin\UserController@resetPassword');
    Route::get('user/index', 'Admin\UserController@usersList')->name('user.index');
    Route::get('user/show/{id}', 'Admin\UserController@usersShow')->name('user.show');
    Route::put('user/update/{id}', 'Admin\UserController@usersUpdate')->name('user.update');
    Route::post('user/delete/{id}', 'Admin\UserController@usersDelete')->name('user.delete');
    Route::get('share','Admin\RightController@share');
    Route::get('evaluate','Admin\GoodsEvaluateController@evaluate');

    Route::resource('right', 'Admin\RightController');
    Route::resource('role', 'Admin\RoleController');
    Route::resource('shopCategory', 'Admin\ShopCategotyController');
    Route::resource('shop', 'Admin\ShopController');
    Route::resource('goodsCategory', 'Admin\GoodsCategoryController');
    Route::resource('goods', 'Admin\GoodsController');
    Route::resource('goodsEvaluate', 'Admin\GoodsEvaluateController');

});

Route::any('unAuth', function () {
    return response()->json(['code' => 0,'msg' => '未认证或认证失败']);
})->name('unAuth');
Route::post('elementLogin','Admin\UserController@login');
Route::middleware(['api'])->group(function () {
   Route::post('user/logout','Admin\UserController@logout');
   Route::post('getMenus','Admin\RightController@getMenus');
   Route::post('shopCategoryApi/getShopCategoryList','Admin\ShopCategotyController@getShopCategoryList');
   Route::post('shopCategoryApi/shopCategorySave','Admin\ShopCategotyController@shopCategorySave');
   Route::post('shopCategoryApi/shopCategoryDel','Admin\ShopCategotyController@shopCategoryDel');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
