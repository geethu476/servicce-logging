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
//     return view('welcome');
// });

Route::prefix('country')->group(function () {
    Route::get('/{country}/states/json', 'CountryController@stateJson');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/home', 'DashboardController@home');

    Route::prefix('branch')->group(function () {
        Route::get('/', 'BranchController@index');
        Route::get('/create', 'BranchController@create');
        Route::post('/', 'BranchController@store');
        Route::get('/{branch}', 'BranchController@show');
        // Route::get('/{job}/destroy', 'JobTitleController@destroy');
        // Route::put('/{job}', 'JobTitleController@update');
    });

// ============== admin routes ===========================================
 // Route::middleware('check_privilege:manage_supplier')->group(function () {
      

        // Route::prefix('supplier')->group(function () {
        //     Route::get('/', 'SupplierController@index');
        //     Route::get('/create', 'SupplierController@create');
        //     Route::post('/', 'SupplierController@store');
        //     Route::get('/{supplier}', 'SupplierController@show');
        //     Route::get('/{supplier}/edit', 'SupplierController@edit');
        //     Route::put('/{supplier}', 'SupplierController@update');
        //     Route::get('/{supplier}/destroy', 'SupplierController@destroy');
        // });
    // });


    // Route::middleware('check_privilege:admin')->group(function () {

    //     Route::prefix('login-log')->group(function () {
    //         Route::get('/', 'LoginLogController@index');
    //     });

       

    // });
    
       });
