<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SuperAdminMiddleware;



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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => ['superadmin']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/2', function () {
        return 'oke2';
    });
});


Route::group(['middleware' => ['shorten']], function () {
    Route::get('/3', function () {
        return 'oke3';
    });
});
