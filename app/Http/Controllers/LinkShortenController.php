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
        $data_user = Bo_Link::where('nama_team', $user)
            ->first()->nama_team;
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.linkshorten.index', [
            'data' => $data,
            'title' => 'Link Shortener',
            'total_team' => $total_team,
            'nama_team' => $user
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
        $datateam = LinkShorten::where('nama_team', $id)->first();
        $target = $request->nama_team;
        $rules = [
            'login' => 'required|max:255',
            'daftar' => 'required|max:5046',
            'wa' => 'required|max:255',
            'fb' => 'required|max:255',
            'ig' => 'required|max:255',
            'img_profile' => 'image|file|max:5046',
            'banner_bio' => 'image|file|max:5046',
            'banner_web' => 'image|file|max:5046',
            // 'title' => 'required|max:300',
            // 'artike_bio' => 'required',
            // 'artikel_web' => 'required',
            // 'meta_tag' => 'required'
        ];

        if ($request->nama_team != $datateam->nama_team) {
            $rules['nama_team'] = 'required';
        }
        $validatedData = $request->validate($rules);

        if ($request->file('img_profile')) {

            if ($request->oldimg_profile) {
                Storage::delete('public/' . $request->oldimg_profile);
            }
            $validatedData['img_profile'] = $request->file('img_profile')->store('imgBIO/' . $target, 'public');
        }

        if ($request->file('banner_bio')) {

            if ($request->oldbanner_bio) {
                Storage::delete('public/' . $request->oldbanner_bio);
            }
            $validatedData['banner_bio'] = $request->file('banner_bio')->store('imgBIO/' . $target, 'public');
        }

        if ($request->file('banner_web')) {

            if ($request->oldbanner_web) {
                Storage::delete('public/' . $request->oldbanner_web);
            }
            $validatedData['banner_web'] = $request->file('banner_web')->store('imgBIO/' . $target, 'public');
        }

        $validatedData['nama_team'] = auth()->user()->nama_team;
        LinkShorten::where('nama_team', $id)->update($validatedData);
        return redirect('/bvbvbK1n9')->with('success', 'post has been updated!');
    }

    public function shorten(Request $request)
    {
        $linkToShorten = $request->input('paste_link');
        $nama_team = $request->input('nama_team');

        $shortenedLink = new LinkShorten();
        $shortenedLink->nama_team = $nama_team;
        $shortenedLink->link_awal = $linkToShorten;
        $shortenedLink->link_hasil = 'http://127.0.0.1:8000/x/' . $this->generateRandomShortCode();
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
        $kode = 'http://127.0.0.1:8000/x/' . $kode;
        $result = LinkShorten::where('link_hasil', $kode)
            ->select('link_awal')
            ->first();
        return Redirect::away($result->link_awal);
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
