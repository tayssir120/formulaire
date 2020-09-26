<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Formulaire;

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
Route::get('/create','App\Http\Controllers\FormulaireController@create');
Route::get('/showall','App\Http\Controllers\FormulaireController@showall');
Route::apiResource('formulaires','App\Http\Controllers\FormulaireController');




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
