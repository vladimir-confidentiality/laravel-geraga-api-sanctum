<?php

use App\Http\Controllers\ServicesController;
use App\Models\Services;
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
Route::resource('services', ServicesController::class);
Route::get('/services/search/{name}', [ServicesController::class, 'search']);

//Route::get('/services', [ServicesController::class, 'index']);
//Route::post('/services', [ServicesController::class, 'store']);

//Route::get('/services', function(){
    //return Services::create([
        //'name' => 'Service one',
        //'slug' => 'Service-one',
        //'description' => 'first service, we offer',
        //'price' => '99.99'
    //]);
//});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});