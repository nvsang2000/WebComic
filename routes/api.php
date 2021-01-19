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

Route::get('gettruyen','ApiController@getApiTruyen');
Route::get('getuser','ApiController@getAllUser');
Route::get('getChapter','ApiController@getChapter');
    


Route::post('auth/register', 'UserController@register');
Route::post('auth/login', 'UserController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    
    Route::post('updateUser', 'UserController@updateUser');
    
    Route::get('user-info', 'UserController@getUserInfo');
});
