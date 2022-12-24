<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;

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
    return view('frontend/index');
});
Route::group(['namespace' => 'frontend'], function () {
    //pendaftaran
    Route::group(['prefix' => 'inventory', 'namespace' => 'inventory'], function () {
        Route::get('/inventory', 'InventoryController@index');
    });        
    
});
