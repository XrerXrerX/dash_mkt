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
use App\Http\Controllers\WebsiteFrontEndController;
use App\Models\Bo_Link;
use App\Models\SumBio;
use App\Models\LiveStream;
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


//================================================WEBSITE
Route::domain('boszoya.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'boszoya']);
    Route::get('/sitemap.xml', [WebsiteFrontEndController::class, 'sitemapboszoya']);
});

Route::domain('www.boszoya.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'boszoya']);
});

Route::domain('www.bosmega.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'bosmega']);
});

Route::domain('bosmega.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'bosmega']);
    Route::get('/sitemap.xml', [WebsiteFrontEndController::class, 'sitemapbosmega']);
});


Route::domain('www.bosgema.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'bosgema']);
});

Route::domain('bosgema.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'bosgema']);
    Route::get('/sitemap.xml', [WebsiteFrontEndController::class, 'sitemapbosgema']);
});

Route::domain('www.boslinda.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'boslinda']);
});

Route::domain('boslinda.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'boslinda']);
    Route::get('/sitemap.xml', [WebsiteFrontEndController::class, 'sitemapboslinda']);
});

Route::domain('www.boscitra.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'boscitra']);
});

Route::domain('boscitra.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'boscitra']);
    Route::get('/sitemap.xml', [WebsiteFrontEndController::class, 'sitemapboscitra']);
});

Route::domain('www.bosmika.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'bosmika']);
});


Route::domain('bosmika.com')->group(function () {
    Route::get('/', [WebsiteFrontEndController::class, 'bosmika']);
    Route::get('/sitemap.xml', [WebsiteFrontEndController::class, 'sitemapbosmika']);
});

Route::domain('h3b4t.com')->group(function () {
    Route::get('/{kode}', [LinkShortenController::class, 'unshorten']);

    Route::get('/', function () {
        $nama_team = 'Boss Team';
        return view('home', [
            'nama_team' => $nama_team
        ]);
    });
});



//================================================FRONTEND
Route::domain('https://mainduo.com')->group(function () {
    Route::get('/', function () {
        $nama_team = 'Boss Team';
        return view('home', [
            'nama_team' => $nama_team
        ]);
    });

    Route::get('/boszoya', function () {
        // Set cookie dengan waktu kedaluwarsa 1 hari
        Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

        // Lanjutkan dengan operasi yang Anda butuhkan
        // Contoh:
        $csszoya = 'bos_zoya';
        $user = 'bos zoya';
        $nama_bio = 'zoya';
        $data_user = Bo_Link::where('nama_team', $user)->first();
        $datastream = $data_user->nama_streamer;

        $data_stream = LiveStream::where('nama_streamer', $datastream)->first();


        if ($data_user) {
            $nama_team = $user;
            // Melakukan operasi UPDATE pada tabel sum_bio
            SumBio::where('nama_team', $nama_team)->increment('biotrack');

            return view('biolink', [
                'nama_team' => $user,
                'datateam' => $data_user,
                'datastream' => $data_stream,
                'nama_bio' => $nama_bio,
                'css' => $csszoya
            ]);
        } else {
            // Handle jika data_user tidak ditemukan
            return response('Data user not found', 404);
        }
    });


    Route::get('/bosmika', function () {
        // Set cookie dengan waktu kedaluwarsa 1 hari
        Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

        // Lanjutkan dengan operasi yang Anda butuhkan
        // Contoh:
        $cssmika = 'bos_mika';
        $user = 'bos mika';
        $nama_bio = 'mika';
        $data_user = Bo_Link::where('nama_team', $user)->first();
        $datastream = $data_user->nama_streamer;

        $data_stream = LiveStream::where('nama_streamer', $datastream)->first();


        if ($data_user) {
            $nama_team = $user;
            // Melakukan operasi UPDATE pada tabel sum_bio
            SumBio::where('nama_team', $nama_team)->increment('biotrack');

            return view('biolink', [
                'nama_team' => $user,
                'datateam' => $data_user,
                'datastream' => $data_stream,
                'nama_bio' => $nama_bio,
                'css' => $cssmika
            ]);
        } else {
            // Handle jika data_user tidak ditemukan
            return response('Data user not found', 404);
        }
    });


    Route::get('/boscitra', function () {
        // Set cookie dengan waktu kedaluwarsa 1 hari
        Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari
        // Lanjutkan dengan operasi yang Anda butuhkan
        // Contoh:
        $user = 'bos citra';
        $csscitra = 'bos_citra';
        $nama_bio = 'citra';
        $data_user = Bo_Link::where('nama_team', $user)->first();
        $datastream = $data_user->nama_streamer;
        $data_stream = LiveStream::where('nama_streamer', $datastream)->first();
        if ($data_user) {
            $nama_team = $user;
            // Melakukan operasi UPDATE pada tabel sum_bio
            SumBio::where('nama_team', $nama_team)->increment('biotrack');

            return view('biolink', [
                'nama_team' => $user,
                'datateam' => $data_user,
                'datastream' => $data_stream,
                'nama_bio' => $nama_bio,
                'css' => $csscitra
            ]);
        } else {
            // Handle jika data_user tidak ditemukan
            return response('Data user not found', 404);
        }
    });


    Route::get('/bosmega', function () {
        // Set cookie dengan waktu kedaluwarsa 1 hari
        Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

        // Lanjutkan dengan operasi yang Anda butuhkan
        // Contoh:
        $user = 'bos mega';
        $cssmega = 'bos_mega';
        $nama_bio = 'mega';
        $data_user = Bo_Link::where('nama_team', $user)->first();
        $datastream = $data_user->nama_streamer;
        $data_stream = LiveStream::where('nama_streamer', $datastream)->first();

        if ($data_user) {
            $nama_team = $user;
            // Melakukan operasi UPDATE pada tabel sum_bio
            SumBio::where('nama_team', $nama_team)->increment('biotrack');

            return view('biolink', [
                'nama_team' => $user,
                'datateam' => $data_user,
                'datastream' => $data_stream,
                'nama_bio' => $nama_bio,
                'css' => $cssmega
            ]);
        } else {
            // Handle jika data_user tidak ditemukan
            return response('Data user not found', 404);
        }
    });

    Route::get('/bosgema', function () {
        // Set cookie dengan waktu kedaluwarsa 1 hari
        Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

        // Lanjutkan dengan operasi yang Anda butuhkan
        // Contoh:
        $user = 'bos gema';
        $nama_bio = 'gema';
        $cssgema = 'bos_gema';
        $data_user = Bo_Link::where('nama_team', $user)->first();
        $datastream = $data_user->nama_streamer;
        $data_stream = LiveStream::where('nama_streamer', $datastream)->first();

        if ($data_user) {
            $nama_team = $user;
            // Melakukan operasi UPDATE pada tabel sum_bio
            SumBio::where('nama_team', $nama_team)->increment('biotrack');

            return view('biolink', [
                'nama_team' => $user,
                'datateam' => $data_user,
                'datastream' => $data_stream,
                'nama_bio' => $nama_bio,
                'css' => $cssgema
            ]);
        } else {
            // Handle jika data_user tidak ditemukan
            return response('Data user not found', 404);
        }
    });



    Route::get('/boslinda', function () {
        // Set cookie dengan waktu kedaluwarsa 1 hari
        Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

        // Lanjutkan dengan operasi yang Anda butuhkan
        // Contoh:
        $user = 'bos linda';
        $csslinda = 'bos_linda';
        $nama_bio = 'linda';
        $data_user = Bo_Link::where('nama_team', $user)->first();
        $datastream = $data_user->nama_streamer;
        $data_stream = LiveStream::where('nama_streamer', $datastream)->first();

        if ($data_user) {
            $nama_team = $user;
            // Melakukan operasi UPDATE pada tabel sum_bio
            SumBio::where('nama_team', $nama_team)->increment('biotrack');
            return view('biolink', [
                'nama_team' => $user,
                'datateam' => $data_user,
                'datastream' => $data_stream,
                'nama_bio' => $nama_bio,
                'css' => $csslinda
            ]);
        } else {
            // Handle jika data_user tidak ditemukan
            return response('Data user not found', 404);
        }
    });






    // ================================================AUTHENTICATION

    Route::get('/bvbbyh0n3y88', [LoginController::class, 'index'])->name('login');
    // Route::get('/bvbbyh0n3y88/register', [RegisterController::class, 'index']);
    // Route::post('/bvbbyh0n3y88/register', [RegisterController::class, 'store']);
    Route::post('/bvbbyh0n3y88/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout'])->Middleware('auth');


    Route::get('/bvbvbK1n9', function () {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'superadmin') {
                return redirect()->intended('/superadmin');
            } elseif ($user->role == 'admin') {
                return redirect()->intended('/admin');
            } elseif ($user->role == 'captain') {
                return redirect()->intended('/captain');
            } else {
                return redirect()->intended('/bvbbyh0n3y88');
            }
        }
        return redirect()->intended('/bvbbyh0n3y88');
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
        $datauser = Bo_Link::where('nama_team', $user)->first();
        $analyticbio = SumBio::where('nama_team', $user)->first();
        $analyticweb = SumWeb::where('nama_team', $user)->first();

        return view('dashboard.home', [
            'title' => $user,
            'total_team' => $total_team,
            'analytic' => $analyticbio,
            'analyticweb' => $analyticweb,
            'datauser' => $datauser

        ]);
    })->Middleware(['auth', 'admin']);

    Route::get('/captain', function () {
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
    })->Middleware(['auth', 'captain']);


    //================================================================MIDDLEWARE SUPERADMIN



    Route::get('/bvbbyh0n3y88/superadmin', [BoLinkController::class, 'index'])->Middleware(['auth', 'admin']);
    Route::resource('/bvbbyh0n3y88/superadmin', BoLinkController::class)->Middleware(['auth']);
    Route::get('/bvbbyh0n3y88/create/superadmin/{nama_team}', [BoLinkController::class, 'create'])->Middleware(['auth', 'superadmin']);


    //================================================================MIDDLEWARE ADMIN

    Route::get('/bvbbyh0n3y88/admin', [BoLinkController::class, 'index'])->Middleware(['auth', 'admin']);

    //================================================================MIDDLEWARE SUPERADMIN CAN DO

    Route::get('/bvbbyh0n3y88/meta/desc', [MetaController::class, 'index'])->Middleware(['auth', 'superadmin']);
    Route::resource('/bvbbyh0n3y88/meta/desc', MetaController::class)->Middleware(['auth', 'superadmin']);



    Route::get('/bvbbyh0n3y88/shorten/{nama_website}', [LinkShortenController::class, 'index'])->Middleware(['auth', 'admin']);
    Route::post('/bvbbyh0n3y88/shorten/{nama_website}', [LinkShortenController::class, 'shorten'])->Middleware(['auth', 'admin']);
    Route::delete('/bvbbyh0n3y88/shorten/{id}', [LinkShortenController::class, 'destroy'])->Middleware(['auth']);


    Route::get('/x/{kode}', [LinkShortenController::class, 'unshorten']);



    Route::get('/trackinglogin/{nama_team}', [TrackingController::class, 'trackingLogin']);

    //===SUPERADMIN
    Route::get('/bvbbyh0n3y88/l4stQu0t3s/{nama_team}', [SuperAdminController::class, 'index'])->Middleware(['auth', 'captain']);
    Route::get('/bvbbyh0n3y88/l4stQu0t3s/meta/{nama_team}', [SuperAdminController::class, 'meta'])->Middleware(['auth', 'superadmin']);
    Route::get('/bvbbyh0n3y88/l4stQu0t3s/create/superadmin/{nama_team}', [BoLinkController::class, 'create'])->Middleware(['auth', 'superadmin']);
    Route::get('/bvbbyh0n3y88/l4stQu0t3s/analytic/{nama_team}', [BoLinkController::class, 'analytic'])->Middleware(['auth', 'captain']);


    Route::get('/bvbbyh0n3y88/l4stQu0t3s/shorten/{nama_website}', [LinkShortenController::class, 'indexsuperadmin'])->Middleware(['auth', 'captain']);
    Route::post('/bvbbyh0n3y88/l4stQu0t3s/shorten/{nama_website}', [LinkShortenController::class, 'shorten'])->Middleware(['auth', 'captain']);
    Route::delete('/bvbbyh0n3y88/l4stQu0t3s/shorten/{id}', [LinkShortenController::class, 'destroy'])->Middleware(['auth', 'captain']);
    Route::get('/bvbbyh0n3y88/l4stQu0t3s/laporan/{id}', [LaporanController::class, 'generatePDFRekapBio2'])->Middleware(['auth', 'captain']);
    Route::get('/bvbbyh0n3y88/l4stQu0t3s/laporanrekapweb/{id}', [LaporanController::class, 'generatePDFRekapWeb2'])->Middleware(['auth', 'captain']);



    Route::get('/sumbio/{nama_team}/{nama_menu}', [TrackingController::class, 'sumBio']);
    Route::get('/sumweb/{nama_team}/{nama_menu}', [TrackingController::class, 'sumweb']);
    Route::post('/rekapbio', [TrackingController::class, 'rekapBio']);
    Route::post('/rekapbio2', [TrackingController::class, 'rekapBio2']);

    Route::post('/rekapweb', [TrackingController::class, 'rekapWeb']);
    Route::post('/rekapweb2', [TrackingController::class, 'rekapWeb2']);


    Route::get('/laporan', [LaporanController::class, 'generatePDFRekapBio']);
    Route::get('/laporanrekapweb', [LaporanController::class, 'generatePDFRekapWeb']);

    Route::get('/laporanexcel/{id}', [LaporanController::class, 'generateExcelRekapBio']);
    Route::get('/laporanexcelweb/{id}', [LaporanController::class, 'generateExcelRekapWeb']);
});
