<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'front\IndexController@index')->name('index.site');




Route::get('/ckeditor', function(){
    return view('vendor.file-manager.ckeditor');
});
Route::prefix('/full-panel')->middleware(['role:developer'])->group(function () {

    route::get('/', 'admin\AdminPanelController@index')->name('admin');
    //route::get('users','admin\UserController@index' )->name('users');
  
   


   //   OTM-AXBOROT prefixdagi routerlar
    Route::prefix('/otm-axborot')->middleware(['role:developer'])->group(function () {



   
    /* ///////////////////////////////
        Yangiliklar routerlari
    */ //////////////////////////////
    Route::prefix('yangiliklar')->middleware(['role:developer'])->group(function () {

        route::resource('/','admin\ArticleController' )->names([
            'create' => 'yangilik.qoshish',
            'index' => 'yangiliklar',
            'store' => 'yangiliklar.store',
            'show' => 'yangiliklar.show',    
    
        ]);

        // * Qo'shimcha ishlarga
        Route::get('tekshirilmagan', 'admin\ArticleController@approw')->name('yangiliklar.approw');
        Route::get('tekshirilgan', 'admin\ArticleController@yesapprow')->name('yangiliklar.yesapprow');
        Route::get('activmaslar', 'admin\ArticleController@activmas')->name('yangiliklar.activmas');
        Route::get('activlar', 'admin\ArticleController@active')->name('yangiliklar.activlar');

    });
   
    /* ///////////////////////////////
        tugadi
    */ //////////////////////////////


    // * Yangilik bo'limlari
    Route::resource('/yangilik-bolimlari', 'admin\ArticleCategoryController')->names([
        'index' => 'yangilik-bolim.index',
        'store' => 'yangilik-bolim.store',
    ]);

    /* ///////////////////////////////
        E'lonlar bo'limi
    */ //////////////////////////////

    Route::prefix('elonlar')->middleware(['role:developer'])->group(function () {
        
        route::resource('/','admin\PosterController' )->names([
            'create' => 'elon.create',
            'index' => 'elon.index',
            'store' => 'elon.store',
            'show' => 'elon.show',    
    
        ]);

        // * Qo'shimcha ishlarga
    Route::get('/elonlar/tekshirilmagan', 'admin\PosterController@approw')->name('elonlar.approw');
    Route::get('/elonlar/tekshirilgan', 'admin\PosterController@yesapprow')->name('elonlar.yesapprow');
    Route::get('/elonlar/activmaslar', 'admin\PosterController@activmas')->name('elonlar.activmas');
    Route::get('/elonlar/activlar', 'admin\PosterController@active')->name('elonlar.activlar');

    });

    

    
        


    });



    //Route::get('/yangiliklar', 'admin\ArticleController@indexTasdiqlanmaganlar')->name('yangiliklar.nottasdiq');
    Route::resource('talabalar', 'admin\StudentController');

});
Auth::routes();
Route::get('/roles', 'admin\PermissionController@Permission');


