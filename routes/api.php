<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('apiregister', [App\Http\Controllers\ApiController::class, 'apiregister']);
Route::post('apilogin', [App\Http\Controllers\ApiController::class, 'apilogin']);
Route::post('maiddetails', [App\Http\Controllers\ApiController::class, 'maiddetails']);
Route::post('agentaddmaid', [App\Http\Controllers\ApiController::class, 'agentaddmaid']);
Route::get('agentmaids/{id}', [App\Http\Controllers\ApiController::class, 'agentmaids']);
Route::get('individualjobs', [App\Http\Controllers\ApiController::class, 'individualjobs']);
Route::get('viagentsjobs', [App\Http\Controllers\ApiController::class, 'viagentsjobs']);
Route::post('bookmaid', [App\Http\Controllers\ApiController::class, 'bookmaid']);
Route::get('hiredmaid/{id}', [App\Http\Controllers\ApiController::class, 'hiredmaid']);
Route::get('employertohiremaid/{id}', [App\Http\Controllers\ApiController::class, 'employertohiremaid']);
Route::get('ismaidaccept/{id}', [App\Http\Controllers\ApiController::class, 'ismaidaccept']);
Route::get('maidacceptjon/{id}', [App\Http\Controllers\ApiController::class, 'maidacceptjon']);
Route::get('maiddeclinejob/{id}', [App\Http\Controllers\ApiController::class, 'maiddeclinejob']);
