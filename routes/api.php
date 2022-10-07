<?php

use App\Http\Controllers\{contactus,StoreController,CityController,MapController,StoreaddressController,SubscribeController};
use App\Http\Controllers\storelocator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/store',[storelocator::class,'index']);
Route::post('/contactus',[contactus::class,'index']);
Route::post('/city',[storelocator::class,'storeCity']);

                    //--- crud oparations routs --- //
Route::resource('stores', StoreController::class);
Route::resource('citys', CityController::class);
Route::resource('maps', MapController::class);
Route::resource('address', StoreaddressController::class);
Route::resource('subscribe', SubscribeController::class);
