<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\UserController;
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

/* Route::group(['middleware' => 'auth:sanctum'], function(){ */
    Route::post('create',[UserController::class,'create']);
    Route::post('categorie_create',[CategorieController::class,'create']);
    Route::post('carte_create',[CarteController::class,'create']);
    Route::post('commande_create',[CommandeController::class,'create']);

/* }); */

Route::post("login",[UserController::class,'index']);

