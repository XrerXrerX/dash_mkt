<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BoLinkController;


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

Route::get('/bvbbyh0n3y88', [LoginController::class, 'index'])->name('login');
Route::get('/bvbbyh0n3y88/register', [RegisterController::class, 'index']);
Route::post('/bvbbyh0n3y88/register', [RegisterController::class, 'store']);
Route::post('/bvbbyh0n3y88/login', [LoginController::class, 'authenticate']);
Route::get('/bvbvbK1n9', function () {
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->role == 'superadmin') {
            return redirect()->intended('/bvbbyh0n3y88/superadmin');
        } elseif ($user->role == 'admin') {
            return redirect()->intended('/bvbbyh0n3y88/admin');
        } elseif ($user->role == 'shorten') {
            return redirect()->intended('/bvbbyh0n3y88/shorten');
        } else {
            return redirect()->intended('/bvbbyh0n3y88/itteam');
        }
    }
    return redirect()->intended('/logout');
});



Route::group(['middleware' => ['superadmin']], function () {
    // Route::get('/bvbbyh0n3y88/boszoya', function () {
    //     return view('dashboard.bolink.create', [
    //         'title' => 'ZOYA',
    //     ]);
    // });

    Route::get('/bvbbyh0n3y88/superadmin', [BoLinkController::class, 'index']);
    Route::resource('/bvbbyh0n3y88/superadmin', BoLinkController::class);
    Route::get('/bvbbyh0n3y88/create/{nama_team}', [BoLinkController::class, 'create']);

    if (Auth::check()) {
        return redirect()->intended('/superadmin');
    }

    return redirect()->intended('/login');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/bvbbyh0n3y88/admin', [BoLinkController::class, 'index']);
});


Route::group(['middleware' => ['shorten']], function () {
    Route::get('/bvbbyh0n3y88/shorten', [BoLinkController::class, 'index']);
});




Route::post('/logout', [LoginController::class, 'logout'])->Middleware('auth');
