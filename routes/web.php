<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;


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


Route::get('/', function () {


    if (Auth::check()) {
        $user = Auth::user();

        if ($user->role == 'superadmin') {
            return redirect()->intended('/bvbbyh0n3y88/boszoya');
        } elseif ($user->role == 'admin') {
            return redirect()->intended('/bvbbyh0n3y88/boslinda');
        } elseif ($user->role == 'shorten') {
            return redirect()->intended('/bvbbyh0n3y88/bosmega');
        } else {
            return redirect()->intended('/bvbbyh0n3y88');
        }
    }
    return redirect()->intended('/bvbbyh0n3y88');
});



Route::group(['middleware' => ['superadmin']], function () {
    Route::get('/bvbbyh0n3y88/boszoya', function () {
        return view('dashboard.voucher.create', [
            'title' => 'ZOYA',
        ]);
    });

    if (Auth::check()) {
        return redirect()->intended('/superadmin');
    }

    return redirect()->intended('/login');
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
