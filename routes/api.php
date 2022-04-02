<?php

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
Route::get('/surah',[\App\Http\Controllers\WrapperController::class, 'surah'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('surah');
Route::get('/surah/nomorsurah',[\App\Http\Controllers\WrapperController::class, 'nomorsurah'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('nomorsurah');
Route::get('/surah/search/namasurah',[\App\Http\Controllers\WrapperController::class, 'searchnamasurah'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('searchnamasurah');
Route::get('/surat/namasurah',[\App\Http\Controllers\WrapperController::class, 'namasurah'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('namasurah');
Route::get('/user/identitas', function (){
    return [
        'code' => 0,
        'data' => [
            'npm' =>'197006074',
            'nama' => 'Tasya Nurul Annisa',
            'email' => '197006074@student.unsil.ac.id'
        ]
        ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');
