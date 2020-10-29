<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('unAuth', function () {
    return response()->json(['code' => 0,'msg' => '未认证或认证失败']);
})->name('unAuth');
Route::middleware(['auth:api'])->group(function () {
    Route::post('user/logout','Admin\UserController@logout');
    Route::post('getMenus','Admin\RightController@getMenus');
    Route::post('shopCategoryApi/getShopCategoryList','Admin\ShopCategotyController@getShopCategoryList');
    Route::post('shopCategoryApi/shopCategorySave','Admin\ShopCategotyController@shopCategorySave');
    Route::post('shopCategoryApi/shopCategoryDel','Admin\ShopCategotyController@shopCategoryDel');
});
