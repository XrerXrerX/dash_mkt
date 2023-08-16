<?php

namespace App\Http\Controllers;

use App\Models\LinkShorten;
use App\Models\Bo_Link;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class LinkShortenController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if ($request->session()->has('login_expired') && $request->session()->get('login_expired')) {
                return redirect('/bvbbyh0n3y88')->withErrors(['login_expired' => 'Session habis. Silakan login kembali.']);
            }
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index($nama_team)
    {
        $user = Auth::user()->nama_team;
        $data = LinkShorten::get();
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.linkshorten.index', [
            'data' => $data,
            'title' => $user,
            'total_team' => $total_team,
            'nama_team' => $user
        ]);
    }

    public function indexsuperadmin(string $id)
    {
        $user = $id;
        $data = LinkShorten::get();
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.superadmin.linkshorten.index', [
            'data' => $data,
            'title' => $user,
            'total_team' => $total_team,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->nama_team;
        $data_user = LinkShorten::where('nama_team', $user)
            ->first();
        $total_team = LinkShorten::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.linkshorten.create', [
            'datauser' => $data_user,
            'title' => $user,
            'total_team' => $total_team
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $linkToShorten = $request->input('link');

        $shortenedLink = "https://short.link/abc123";

        return response()->json(['shortened_link' => $shortenedLink]);

        return redirect('/bvbvbK1n9')->with('success', 'new post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(LinkShorten $bo_Link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LinkShorten $bo_Link)
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

    public function shorten(Request $request)
    {
        $linkToShorten = $request->input('paste_link');
        $nama_team = $request->input('nama_team');

        $shortenedLink = new LinkShorten();
        $shortenedLink->nama_team = $nama_team;
        $shortenedLink->link_awal = $linkToShorten;
        $shortenedLink->link_hasil = 'http://dash_marketing.test/x/' . $this->generateRandomShortCode();
        $shortenedLink->save();

        return response()->json(['shortened_link' => $shortenedLink->link_hasil]);
    }

    private function generateRandomShortCode($length = 8)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    public function unshorten($kode)
    {
        $kode = 'http://dash_marketing.test/x/' . $kode;
        $result = LinkShorten::where('link_hasil', $kode)
            ->select('link_awal')
            ->first();
        return Redirect::away($result->link_awal);
        // return redirect($result->link_awal)->with('success', 'post has been updated!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = LinkShorten::find($id);

        if ($data) {
            $data->delete();
            return response()->json(['message' => 'Data berhasil dihapus.']);
        } else {
            return response()->json(['message' => 'Data tidak ditemukan.'], 404);
        }
    }
}
