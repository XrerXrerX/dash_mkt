<?php

namespace App\Http\Controllers;

use App\Models\Bo_Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $user = Auth::user()->nama_team;
        $data_user = Bo_Link::where('nama_team', $user)
            ->first();
        return view('dashboard.bolink.index', [
            'datauser' => $data_user,
            'title' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user()->nama_team;
        $data_user = Bo_Link::where('nama_team', $user)
            ->first();
        return view('dashboard.bolink.index', [
            'datauser' => $data_user,
            'title' => $user
        ]);
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
        $datateam = Bo_Link::where('nama_team', $id)->first();

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
            $validatedData['img_profile'] = $request->file('img_profile')->store('banner', 'public');
        }

        if ($request->file('banner_bio')) {

            if ($request->oldbanner_bio) {
                Storage::delete('public/' . $request->oldbanner_bio);
            }
            $validatedData['banner_bio'] = $request->file('banner_bio')->store('banner', 'public');
        }

        if ($request->file('banner_web')) {

            if ($request->oldbanner_web) {
                Storage::delete('public/' . $request->oldbanner_web);
            }
            $validatedData['banner_web'] = $request->file('banner_web')->store('banner', 'public');
        }

        $validatedData['nama_team'] = auth()->user()->nama_team;
        Bo_Link::where('nama_team', $id)->update($validatedData);
        return redirect('/bvbvbK1n9')->with('success', 'post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bo_Link $bo_Link)
    {
        //
    }
}
