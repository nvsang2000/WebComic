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
Route::resource('Truyen','ControllerTruyen');
Route::resource('Chitiet','ControllerCTtruyen');
Route::resource('Danhmuc','ControllerDanhmuc');
Route::resource('Theloai','ControllerTheloai');
Route::resource('Taikhoan','ControllerTaikhoan');

Route::group(['prefix'=>''],function() {
	Route::get('admin',[
		'as' =>'admin',
	    'uses' =>'AdminController@getIndex'
    ]);
	Route::group(['prefix'=>''],function() {
		Route::get('danhsach',[
		    'as' =>'user',
	        'uses' =>'AdminController@getUser'
        ]);
        Route::get('themuser',[
		    'as' =>'themuser',
	        'uses' =>'AdminController@getThemUser'
        ]);
        Route::post('them',[
        	'as' =>'them',
        	'uses' =>'ControllerTaikhoan@postThem'
        ]);
        Route::get('sua/{id}','ControllerTaikhoan@getSua');
        Route::post('sua/{id}','ControllerTaikhoan@update');
        Route::get('xoa/{id}','ControllerTaikhoan@destroy');
    }); 
    Route::group(['prefix'=>''],function() {
    	Route::get('danhmuc',[
		    'as' =>'danhmuc',
	        'uses' =>'AdminController@getDanhmuc'
        ]);
    	Route::get('themdanhmuc',[
		    'as' =>'themdanhmuc',
	        'uses' =>'AdminController@getThemDanhmuc'
        ]);
    	Route::post('them',[
        	'as' =>'them',
        	'uses' =>'ControllerDanhmuc@postThem'
        ]);
        Route::get('sua/{id}','ControllerDanhmuc@getSua');
        Route::post('sua/{id}','ControllerDanhmuc@update');
        Route::get('xoa/{id}','ControllerDanhmuc@destroy');
    }); 
    Route::group(['prefix'=>''],function() {
    	Route::get('theloai',[
		    'as' =>'theloai',
	        'uses' =>'AdminController@getTheloai'
        ]);
    	Route::get('themtheloai',[
		    'as' =>'themtheloai',
	        'uses' =>'AdminController@getThemTheloai'
        ]);
    	Route::post('them',[
        	'as' =>'them',
        	'uses' =>'ControllerTheloai@postThem'
        ]);
        Route::get('sua/{id}','ControllerTheloai@getSua');
        Route::post('sua/{id}','ControllerTheloai@update');
        Route::get('xoa/{id}','ControllerTheloai@destroy');
    });
    Route::group(['prefix'=>''],function() {
    	Route::get('truyen',[
		    'as' =>'truyen',
	        'uses' =>'AdminController@getTruyen'
        ]);
    	Route::get('them',[
		    'as' =>'them',
	        'uses' =>'AdminController@getThemTruyen'
        ]);
    	Route::post('them',[
        	'as' =>'them',
        	'uses' =>'ControllerTruyen@postThem'
        ]);
        Route::get('uploadFile','ControllerTruyen@getupload');
        Route::post('uploadFile','ControllerTruyen@postFile');
        Route::get('sua/{id}','ControllerTruyen@getSua');
        Route::post('sua/{id}','ControllerTruyen@update');
        Route::get('xoa/{id}','ControllerTruyen@destroy');
    }); 
    Route::group(['prefix'=>''],function() {
    	Route::get('binhluan',[
		    'as' =>'binhluan',
	        'uses' =>'AdminController@getBinhluan'
        ]);
     //    Route::get('sua/{id}','ControllerTruyen@getSua');
     //    Route::post('sua/{id}','ControllerTruyen@update');
        // Route::get('xoa/{id}','AdminController@xoaBinhluan');
    });            
});
Route::get('chi-tiet-truyen/{id}',[
	'as' =>'chitiet',
	'uses' =>'AdminController@getCTtruyen'
]);

Route::group(['prefix'=>''],function() {
    Route::get('index',[
	    'as' =>'index',
	    'uses' =>'PageController@getIndex'
    ]);
    Route::get('loai_danhmuc/{type}',[
	    'as' =>'loaidanhmuc',
	    'uses' =>'PageController@getDanhmuc'
    ]);
    Route::get('loai_theloai/{type}',[
	    'as' =>'loaitheloai',
	    'uses' =>'PageController@getTheloai'
    ]);
    Route::get('login',[
		'as' =>'login',
	    'uses' =>'PageController@getLogin'
    ]);
    Route::post('login',[
	    'as' =>'login',
	    'uses' =>'PageController@postLogin'
    ]);
    Route::get('logout',[
	    'as' =>'logout',
	    'uses' =>'PageController@postLogout'
    ]);
    Route::get('register',[
	    'as' =>'reg',
	    'uses' =>'PageController@getReg'
    ]);
    Route::post('register',[
	    'as' =>'reg',
	    'uses' =>'PageController@postReg'
    ]);
    Route::get('chi_tiet/{id}',[
	    'as' =>'chitiet',
	    'uses' =>'PageController@getChitiet'
    ]);
    Route::get('search',[
	    'as' =>'search',
	    'uses' =>'PageController@getSearch'
    ]);
    Route::get('ca_nhan/{id}',[
	    'as' =>'canhan',
	    'uses' =>'PageController@getCanhan'
    ]);
    Route::post('ca_nhan/{id}',[
	    'as' =>'canhan',
	    'uses' =>'PageController@postCanhan'
    ]);
    Route::get('mat_khau/{id}',[
	    'as' =>'matkhau',
	    'uses' =>'PageController@getMatkhau'
    ]);
    Route::post('mat_khau/{id}',[
	    'as' =>'matkhau',
	    'uses' =>'PageController@postMatkhau'
    ]);
    Route::post('comment/{id}',[
	    'as' =>'comment',
	    'uses' =>'PageController@postComment'
    ]);
});