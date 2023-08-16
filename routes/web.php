<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BoLinkController;
use App\Http\Controllers\LinkShortenController;
use App\Http\Controllers\MetaController;

use function Laravel\Prompts\alert;

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


//================================================AUTHENTICATION

Route::get('/bvbbyh0n3y88', [LoginController::class, 'index'])->name('login');
Route::get('/bvbbyh0n3y88/register', [RegisterController::class, 'index']);
Route::post('/bvbbyh0n3y88/register', [RegisterController::class, 'store']);
Route::post('/bvbbyh0n3y88/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->Middleware('auth');

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



//================================================================MIDDLEWARE SUPERADMIN


Route::get('/bvbbyh0n3y88/superadmin', [BoLinkController::class, 'index'])->Middleware(['auth', 'superadmin']);
Route::resource('/bvbbyh0n3y88/superadmin', BoLinkController::class)->Middleware(['auth', 'superadmin']);
Route::get('/bvbbyh0n3y88/create/{nama_team}', [BoLinkController::class, 'create'])->Middleware(['auth', 'superadmin']);
Route::get('/bvbbyh0n3y88/meta/desc', [MetaController::class, 'index'])->Middleware(['auth', 'superadmin']);



// if (Auth::check()) {
//     return redirect()->intended('/superadmin');
// }

// return redirect()->intended('/login');

//================================================================MIDDLEWARE ADMIN

Route::get('/bvbbyh0n3y88/admin', [BoLinkController::class, 'index'])->Middleware(['auth', 'admin']);

//================================================================MIDDLEWARE SHORTEN

Route::get('/bvbbyh0n3y88/shorten/{nama_website}', [LinkShortenController::class, 'index'])->Middleware(['auth', 'shorten']);
Route::post('/bvbbyh0n3y88/shorten/{nama_website}', [LinkShortenController::class, 'shorten'])->Middleware(['auth', 'shorten']);
Route::delete('/bvbbyh0n3y88/shorten/{id}', [LinkShortenController::class, 'destroy'])->Middleware(['auth', 'shorten']);


Route::get('/x/{kode}', [LinkShortenController::class, 'unshorten']);
// Route::post('/bvbbyh0n3y88/shorten/{nama_website}', function () {
//     dd('test');
// })->Middleware(['auth', 'shorten']);
