<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
});

/* Bootstrap Routes */
Route::group(['prefix' => '/bootstrap'], function () {
	
	Route::get('/', function () {
        return view('bootstrap.index');
    });

    Route::get('/carousel-external-indicators', function () {
        return view('bootstrap.carousel-external-indicators');
       
    });
    
    
});

/* ChartJS Routes */
Route::group(['prefix' => '/chartjs'], function () {

	Route::get('/', function () {
        return view('chartjs.index');
    });

    Route::get('/barchart-vertical', [App\Http\Controllers\chartJsController::class, 'makeBarChartVertical']);
    
    Route::get('/barchart-horizontal', [App\Http\Controllers\chartJsController::class, 'makeBarChartHorizontal']);
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
