<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClassDataController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VideoController;
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
Route::apiResource('/classes', ClassDataController::class); 
Route::get('/classes/edit/{id}', [ClassDataController::class,"editById"]);
Route::apiResource('/students', StudentController::class);

Route::get('/students/edit/{id}', [StudentController::class,"editById"]);

Route::post('/videoupload', [VideoController::class,"upload"]);
Route::get('/display', [VideoController::class,"display"]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
