<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BoLinkController;
use App\Http\Controllers\LinkShortenController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\SuperAdminController;
use App\Models\Bo_Link;
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
            return redirect()->intended('/superadmin');
        } elseif ($user->role == 'admin') {
            return redirect()->intended('/admin');
        } elseif ($user->role == 'shorten') {
            return redirect()->intended('/shorten');
        } else {
            return redirect()->intended('/itteam');
        }
    }
    return redirect()->intended('/logout');
});


Route::get('/superadmin', function () {

    $user = Auth::user()->nama_team;
    $total_team = Bo_Link::select('nama_team')
        ->distinct()
        ->pluck('nama_team')
        ->toArray();
    return view('dashboard.home', [
        'title' => $user,
        'total_team' => $total_team
    ]);
})->Middleware(['auth', 'superadmin']);

Route::get('/admin', function () {
    $user = Auth::user()->nama_team;
    $total_team = Bo_Link::select('nama_team')
        ->distinct()
        ->pluck('nama_team')
        ->toArray();
    return view('dashboard.home', [
        'title' => $user,
        'total_team' => $total_team

    ]);
})->Middleware(['auth', 'admin']);

Route::get('/itteam', function () {
    $user = Auth::user()->nama_team;

    $total_team = Bo_Link::select('nama_team')
        ->distinct()
        ->pluck('nama_team')
        ->toArray();
    return view('dashboard.home', [
        'title' => $user,
        'total_team' => $total_team

    ]);
})->Middleware(['auth', 'shorten']);


//================================================================MIDDLEWARE SUPERADMIN



Route::get('/bvbbyh0n3y88/superadmin', [BoLinkController::class, 'index'])->Middleware(['auth', 'admin']);
Route::resource('/bvbbyh0n3y88/superadmin', BoLinkController::class)->Middleware(['auth', 'admin']);
Route::get('/bvbbyh0n3y88/create/superadmin/{nama_team}', [BoLinkController::class, 'create'])->Middleware(['auth', 'superadmin']);


//================================================================MIDDLEWARE ADMIN

Route::get('/bvbbyh0n3y88/admin', [BoLinkController::class, 'index'])->Middleware(['auth', 'admin']);

//================================================================MIDDLEWARE SUPERADMIN CAN DO

Route::get('/bvbbyh0n3y88/meta/desc', [MetaController::class, 'index'])->Middleware(['auth', 'superadmin']);
Route::resource('/bvbbyh0n3y88/meta/desc', MetaController::class)->Middleware(['auth', 'superadmin']);

Route::get('/bvbbyh0n3y88/shorten/{nama_website}', [LinkShortenController::class, 'index'])->Middleware(['auth', 'admin']);
Route::post('/bvbbyh0n3y88/shorten/{nama_website}', [LinkShortenController::class, 'shorten'])->Middleware(['auth', 'admin']);
Route::delete('/bvbbyh0n3y88/shorten/{id}', [LinkShortenController::class, 'destroy'])->Middleware(['auth', 'shorten']);

Route::get('/x/{kode}', [LinkShortenController::class, 'unshorten']);


//===SUPERADMIN
Route::get('/bvbbyh0n3y88/l4stQu0t3s/{nama_team}', [SuperAdminController::class, 'index'])->Middleware(['auth', 'superadmin']);
Route::get('/bvbbyh0n3y88/l4stQu0t3s/meta/{nama_team}', [SuperAdminController::class, 'meta'])->Middleware(['auth', 'superadmin']);
Route::get('/bvbbyh0n3y88/l4stQu0t3s/create/superadmin/{nama_team}', [BoLinkController::class, 'create'])->Middleware(['auth', 'superadmin']);
Route::get('/bvbbyh0n3y88/l4stQu0t3s/analytic/{nama_team}', [BoLinkController::class, 'analytic'])->Middleware(['auth', 'superadmin']);


Route::get('/bvbbyh0n3y88/l4stQu0t3s/shorten/{nama_website}', [LinkShortenController::class, 'indexsuperadmin'])->Middleware(['auth', 'superadmin']);
Route::post('/bvbbyh0n3y88/l4stQu0t3s/shorten/{nama_website}', [LinkShortenController::class, 'shorten'])->Middleware(['auth', 'superadmin']);
Route::delete('/bvbbyh0n3y88/l4stQu0t3s/shorten/{id}', [LinkShortenController::class, 'destroy'])->Middleware(['auth', 'superadmin']);

