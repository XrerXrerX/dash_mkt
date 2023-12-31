<?php

namespace App\Http\Controllers;

use App\Models\Bo_Link;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\SumBio;
use App\Models\SumWeb;
use App\Models\LiveStream;



class BoLinkController extends Controller
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

    public function index()
    {
        // if (strpos(url()->previous(), '/bvbbyh0n3y88/l4stQu0t3s/') !== false) {
        //     $previousUrl = url()->previous();
        //     $pattern = '/\/bvbbyh0n3y88\/l4stQu0t3s\/([^\/]+)/';

        //     if (preg_match($pattern, $previousUrl, $matches)) {
        //         $namaTeam = $matches[1]; // Mengambil nilai yang cocok dari ekspresi reguler
        //         // Lakukan sesuatu dengan $namaTeam
        //         $user = $namaTeam;
        //         // $url = '/bvbbyh0n3y88/l4stQu0t3s/';
        //     }
        //     return redirect()->intended('/bvbbyh0n3y88/l4stQu0t3s/' . $user);
        // } else {
        if (Auth::user()->role == 'superadmin' || Auth::user()->role == 'captain') {
            $user = Bo_Link::orderBy('id')->pluck('nama_team')->first();
        } else {
            $user = Auth::user()->nama_team;
        }

        $data_stream = LiveStream::select('nama_streamer')
            ->distinct()
            ->pluck('nama_streamer')
            ->toArray();
        $data_user = Bo_Link::where('nama_team', $user)
            ->first();
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        $link_streamer = LiveStream::where('nama_streamer', $data_user->nama_streamer)
            ->first();

        return view('dashboard.bolink.index', [
            'datauser' => $data_user,
            'title' => $user,
            'total_team' => $total_team,
            'total_stream' => $data_stream,
            'linkstream' => $link_streamer
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $user = $id;
        $data_user = Bo_Link::where('nama_team', $user)
            ->first();
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.superadmin.bolink.create', [
            'datauser' => $data_user,
            'title' => $user,
            'total_team' => $total_team
        ]);
    }

    public function analytic(string $id)
    {
        if (!$id) {
            $user = Auth::user()->nama_team;
        } else {
            $user = $id;
        }
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
            'analyticweb' => $analyticweb,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $target = $request->nama_team;
        $validatedData = $request->validate([
            'nama_team' => 'required|max:255',
            'login' => 'required|max:255',
            'daftar' => 'required|max:5046',
            'wa' => 'required|max:255',
            'fb' => 'required|max:255',
            'ig' => 'required|max:255',
            // 'link_banner' => 'required|max:255',
            'rtp' => 'required|max:255',
            'alamat' => 'required|max:5046',
            'mail' => 'required|max:5046',
            'lokasi' => 'required|max:5046',
            'nama_streamer' => 'required|max:5046',
            'link_livechat' => 'required|max:255',
            'link_buktijp' => 'required|max:255',
            'link_website' => 'required|max:255',
            'img_profile' => 'image|max:7500',
            'banner_bio' => 'image|max:7500',
            'banner_web' => 'image|max:10000',
            'title' => 'required|max:25',
            'artikel_bio' => 'required',

        ]);
        $validatedData['img_profile'] = $request->file('img_profile')->store('imgBIO/' . $target, 'public');
        $validatedData['banner_bio'] = $request->file('banner_bio')->store('imgBIO/' . $target, 'public');
        $validatedData['banner_web'] = $request->file('banner_web')->store('imgBIO/' . $target, 'public');

        Bo_Link::create($validatedData);

        $uservalidate = $request->validate([
            'nama_team' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'role' => 'required',
            'password' => 'required|min:5|max:255'
        ]);
        $uservalidate['password'] = Hash::make($uservalidate['password']);
        User::create($uservalidate);

        $uservalidate2 = $request->validate([
            'nama_team' => ['required', 'min:3', 'max:255']
        ]);

        SumBio::create($uservalidate2);
        SumWeb::create($uservalidate2);

        $validatedData3 = $request->validate([
            'nama_streamer' => 'required|max:5046',
            'link_streamer' => 'required|max:255',
            'banner_livestream' => 'image|mimes:gif|max:10000'
        ]);

        $validatedData3['banner_livestream'] = $request->file('banner_livestream')->store('imgStream/' . $target, 'public');
        LiveStream::create($validatedData3);



        return redirect('/bvbvbK1n9')->with('success', 'new post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bo_Link $bo_Link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bo_Link $bo_Link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $nama_stream = $request->nama_streamer;

        $target = $request->nama_team;

        $rules = [
            'login' => 'required|max:255',
            'daftar' => 'required|max:5046',
            'wa' => 'required|max:255',
            'fb' => 'required|max:255',
            'ig' => 'required|max:255',
            'nama_streamer' => 'required|max:255',
            'img_profile' => 'image|max:5046',
            'banner_bio' => 'image|max:5046',
            'banner_web' => 'image|max:10000',
            'title' => 'required|max:300',
            'link_website' => 'required|max:300',
            // 'artike_bio' => 'required',
            // 'artikel_web' => 'required',
            // 'meta_tag' => 'required'
        ];


        $rulesStream = [
            'nama_streamer' => 'required|max:255',
            'banner_livestream' => 'image|mimes:gif|max:50000',
            'link_streamer' => 'required|max:255',
        ];




        if (Auth::user()->role == 'admin') {
            $validatedData['nama_team'] = auth()->user()->nama_team;
            $validatedData = $request->validate($rules);
            $validatedData2 = $request->validate($rulesStream);
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
            if ($request->file('banner_livestream')) {

                if ($request->oldbanner_livestream) {
                    Storage::delete('public/' . $request->oldbanner_livestream);
                }
                $validatedData2['banner_livestream'] = $request->file('banner_livestream')->store('imgStream/' . $target, 'public');
            }

            Bo_Link::where('nama_team', $id)->update($validatedData);
            LiveStream::where('nama_streamer', $nama_stream)->update($validatedData2);
            return redirect('/bvbbyh0n3y88/superadmin')->with('success', 'Data berhasil diubah !');
        } else {
            $rules['nama_team'] = 'required';
            $validatedData = $request->validate($rules);
            $validatedData2 = $request->validate($rulesStream);

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

            if ($request->file('banner_livestream')) {

                if ($request->oldbanner_livestream) {
                    Storage::delete('public/' . $request->oldbanner_livestream);
                }
                $validatedData2['banner_livestream'] = $request->file('banner_livestream')->store('imgStream/' . $target, 'public');
            }



            Bo_Link::where('nama_team', $id)->update($validatedData);
            LiveStream::where('nama_streamer', $nama_stream)->update($validatedData2);

            return redirect('/bvbbyh0n3y88/l4stQu0t3s/' .  $target)->with('success', 'Data berhasil diubah !');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bo_Link $bo_Link)
    {
        //
    }
}
