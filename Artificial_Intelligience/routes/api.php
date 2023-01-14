<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtificialController;

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
//show all data
Route::get("list", [ArtificialController::class, "index"]);

//add data
Route::post("add", [ArtificialController::class, "store"]);

//show specific data
Route::get("show/{id}", [ArtificialController::class, "show"]);

//update data 
Route::put("update/{id}", [ArtificialController::class, "update"]);
Route::patch("update/{id}", [ArtificialController::class, "update"]);

//remove data 
Route::delete("remove/{id}", [ArtificialController::class, "destroy"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
