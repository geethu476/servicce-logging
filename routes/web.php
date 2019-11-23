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
      

        Route::prefix('employee')->group(function () {
            Route::get('/', 'EmployeeController@index');
            Route::get('/create', 'EmployeeController@create');
            Route::post('/', 'EmployeeController@store');
            Route::get('/{employee}', 'EmployeeController@show');
            // Route::get('/{supplier}/edit', 'SupplierController@edit');
            Route::put('/{employee}', 'EmployeeController@update');
            // Route::get('/{supplier}/destroy', 'SupplierController@destroy');
        });
    // });


    // ============== admin routes ===========================================
 // Route::middleware('check_privilege:manage_supplier')->group(function () {
      

        Route::prefix('product')->group(function () {
            Route::get('/', 'ProductController@index');
            // Route::get('/create', 'EmployeeController@create');
            // Route::post('/', 'EmployeeController@store');
            // Route::get('/{employee}', 'EmployeeController@show');
            // Route::get('/{supplier}/edit', 'SupplierController@edit');
            // Route::put('/{employee}', 'EmployeeController@update');
            // Route::get('/{supplier}/destroy', 'SupplierController@destroy');
        });
    // });
    
       });
