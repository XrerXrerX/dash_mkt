<?php

namespace App\Http\Controllers;

use App\Models\Bo_Link;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\SumBio;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;


use App\Models\SumWeb;

class WebsiteFrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function sitemapboszoya()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://boszoya.com/index.php</loc>
           <lastmod>2023-08-20</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }
    public function sitemapbosmega()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://bosmega.com/index.php</loc>
           <lastmod>2023-08-20</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }
    public function sitemapbosgema()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://bosgema.com/index.php</loc>
           <lastmod>2023-08-20</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }
    public function sitemapboslinda()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://boslinda.com/index.php</loc>
           <lastmod>2023-08-20</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }


    public function boszoya()
    {
        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos zoya';
            $favicon = 'zoya-icon_0.png';
            $nama_bio = 'zoya';
            $css = "assetszoyaweb";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            SumWeb::where('nama_team', $user)->increment('webtrack');

            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'favicon' => $favicon
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos zoya';
            $nama_bio = 'zoya';
            $favicon = 'zoya-icon_0.png';
            $css = "assetszoyaweb";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'favicon' => $favicon
            ]);
        }
    }


    public function bosmega()
    {

        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos mega';
            $css = "assetsmegaweb";
            $nama_bio = 'mega';
            $favicon = 'mega-icon_0.png';
            $data_user = Bo_Link::where('nama_team', $user)->first();
            SumWeb::where('nama_team', $user)->increment('webtrack');
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'favicon' => $favicon
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos mega';
            $nama_bio = 'mega';
            $favicon = 'mega-icon_0.png';
            $css = "assetsmegaweb";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'favicon' => $favicon
            ]);
        }
    }


    public function bosgema()
    {

        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos gema';
            $nama_bio = 'gema';
            $favicon = 'gema-icon_0.png';
            $css = "assetsgemaweb";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            SumWeb::where('nama_team', $user)->increment('webtrack');
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'favicon' => $favicon
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos gema';
            $css = "assetsgemaweb";
            $nama_bio = 'gema';
            $favicon = 'gema-icon_0.png';
            $data_user = Bo_Link::where('nama_team', $user)->first();
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'favicon' => $favicon
            ]);
        }
    }


    public function boslinda()
    {

        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos linda';
            $nama_bio = 'linda';
            $favicon = 'linda-icon_0.png';
            $css = "assetslindaweb";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            SumWeb::where('nama_team', $user)->increment('webtrack');
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'favicon' => $favicon
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos linda';
            $favicon = 'linda-icon_0.png';
            $nama_bio = 'linda';
            $css = "assetslindaweb";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'favicon' => $favicon
            ]);
        }


        // Cookie::queue('biotrack_done', 'true', 1440);
        // $user = 'bos linda';
        // $css = "assetslindaweb";
        // $data_user = Bo_Link::where('nama_team', $user)->first();
        // SumWeb::where('nama_team', $user)->increment('webtrack');
        // return view('website.boszoya', [
        //     'nama_team' => $user,
        //     'data_team' => $data_user,
        //     'css' => $css,
        //     'nama_bio' => $nama_bio,
        //     'favicon' => $favicon
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
