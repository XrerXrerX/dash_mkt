<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BoLinkController;
use App\Http\Controllers\LinkShortenController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\LaporanController;
use App\Models\Bo_Link;
use App\Models\SumBio;
use App\Models\SumWeb;

use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Cookie;



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

//================================================FRONTEND

Route::get('/boszoya', function () {
    if (Cookie::has('biotrack_done')) {
        // Set cookie dengan waktu kedaluwarsa 1 hari
        Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

        // Lanjutkan dengan operasi yang Anda butuhkan
        // Contoh:
        $user = 'bos zoya';
        $data_user = Bo_Link::where('nama_team', $user)->first();

        if ($data_user) {
            $nama_team = $user;
            // Melakukan operasi UPDATE pada tabel sum_bio
            SumBio::where('nama_team', $nama_team)->increment('biotrack');

            return view('biolink', [
                'nama_team' => $user,
                'datateam' => $data_user
            ]);
        } else {
            // Handle jika data_user tidak ditemukan
            return response('Data user not found', 404);
        }
    } else {
        // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
        return response('Cookie already set', 200);
    }
});


Route::get('/bosmega', function () {
    if (Cookie::has('biotrack_done')) {
        // Set cookie dengan waktu kedaluwarsa 1 hari
        Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

        // Lanjutkan dengan operasi yang Anda butuhkan
        // Contoh:
        $user = 'bos mega';
        $data_user = Bo_Link::where('nama_team', $user)->first();

        if ($data_user) {
            $nama_team = $user;
            // Melakukan operasi UPDATE pada tabel sum_bio
            SumBio::where('nama_team', $nama_team)->increment('biotrack');

            return view('biolink', [
                'nama_team' => $user,
                'datateam' => $data_user
            ]);
        } else {
            // Handle jika data_user tidak ditemukan
            return response('Data user not found', 404);
        }
    } else {
        // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
        return response('Cookie already set', 200);
    }
});







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
    $analyticbio = SumBio::where('nama_team', $user)->first();
    $analyticweb = SumWeb::where('nama_team', $user)->first();
    return view('dashboard.superadmin.home', [
        'title' => $user,
        'total_team' => $total_team,
        'analytic' => $analyticbio,
        'analyticweb' => $analyticweb
    ]);
})->Middleware(['auth', 'superadmin']);

Route::get('/admin', function () {
    $user = Auth::user()->nama_team;
    $total_team = Bo_Link::select('nama_team')
        ->distinct()
        ->pluck('nama_team')
        ->toArray();
    $analyticbio = SumBio::where('nama_team', $user)->first();
    $analyticweb = SumWeb::where('nama_team', $user)->first();

    return view('dashboard.home', [
        'title' => $user,
        'total_team' => $total_team,
        'analytic' => $analyticbio,
        'analyticweb' => $analyticweb


    ]);
})->Middleware(['auth', 'admin']);

Route::get('/itteam', function () {
    $user = Auth::user()->nama_team;

    $total_team = Bo_Link::select('nama_team')
        ->distinct()
        ->pluck('nama_team')
        ->toArray();
    $analyticbio = SumBio::where('nama_team', $user)->first();
    $analyticweb = SumWeb::where('nama_team', $user)->first();
    return view('dashboard.home', [
        'title' => $user,
        'total_team' => $total_team,
        'analytic' => $analyticbio,
        'analyticweb' => $analyticweb

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



Route::get('//shorten/{nama_website}', [LinkShortenController::class, 'index'])->Middleware(['auth', 'admin']);
Route::post('/bvbbyh0n3y88/shorten/{nama_website}', [LinkShortenController::class, 'shorten'])->Middleware(['auth', 'admin']);
Route::delete('/bvbbyh0n3y88/shorten/{id}', [LinkShortenController::class, 'destroy'])->Middleware(['auth', 'shorten']);


Route::get('/x/{kode}', [LinkShortenController::class, 'unshorten']);



Route::get('/trackinglogin/{nama_team}', [TrackingController::class, 'trackingLogin']);

//===SUPERADMIN
Route::get('/bvbbyh0n3y88/l4stQu0t3s/{nama_team}', [BoLinkController::class, 'analytic'])->Middleware(['auth', 'superadmin']);
Route::get('/bvbbyh0n3y88/l4stQu0t3s/meta/{nama_team}', [SuperAdminController::class, 'meta'])->Middleware(['auth', 'superadmin']);
Route::get('/bvbbyh0n3y88/l4stQu0t3s/create/superadmin/{nama_team}', [BoLinkController::class, 'create'])->Middleware(['auth', 'superadmin']);
Route::get('/bvbbyh0n3y88/l4stQu0t3s/analytic/{nama_team}', [BoLinkController::class, 'analytic'])->Middleware(['auth', 'superadmin']);


Route::get('/bvbbyh0n3y88/l4stQu0t3s/shorten/{nama_website}', [LinkShortenController::class, 'indexsuperadmin'])->Middleware(['auth', 'superadmin']);
Route::post('/bvbbyh0n3y88/l4stQu0t3s/shorten/{nama_website}', [LinkShortenController::class, 'shorten'])->Middleware(['auth', 'superadmin']);
Route::delete('/bvbbyh0n3y88/l4stQu0t3s/shorten/{id}', [LinkShortenController::class, 'destroy'])->Middleware(['auth', 'superadmin']);


Route::get('/sumbio/{nama_team}/{nama_menu}', [TrackingController::class, 'sumBio']);
Route::get('/sumweb/{nama_team}/{nama_menu}', [TrackingController::class, 'sumweb']);
Route::post('/rekapbio', [TrackingController::class, 'rekapBio']);
Route::post('/rekapweb', [TrackingController::class, 'rekapWeb']);



Route::get('/laporan', [LaporanController::class, 'generatePDFRekapBio']);
Route::get('/laporanrekapweb', [LaporanController::class, 'generatePDFRekapWeb']);

Route::get('/laporanexcel', [LaporanController::class, 'generateExcelRekapBio']);
Route::get('/laporanexcelweb', [LaporanController::class, 'generateExcelRekapWeb']);
