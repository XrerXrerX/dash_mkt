<?php

namespace App\Http\Controllers;

use App\Models\Bo_Link;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\SumBio;
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

    public function boszoya()
    {
        $user = 'bos zoya';
        $css = "assetszoyaweb";
        $data_user = Bo_Link::where('nama_team', $user)->first();
        SumWeb::where('nama_team', $user)->increment('webtrack');
        return view('website.boszoya', [
            'nama_team' => $user,
            'data_team' => $data_user,
            'css' => $css
        ]);
    }

    public function bosmega()
    {
        $user = 'bos mega';
        $css = "assetsmegaweb";
        $data_user = Bo_Link::where('nama_team', $user)->first();
        SumWeb::where('nama_team', $user)->increment('webtrack');
        return view('website.boszoya', [
            'nama_team' => $user,
            'data_team' => $data_user,
            'css' => $css
        ]);
    }


    public function bosgema()
    {
        $user = 'bos gema';
        $css = "assetsgemaweb";
        $data_user = Bo_Link::where('nama_team', $user)->first();
        SumWeb::where('nama_team', $user)->increment('webtrack');
        return view('website.boszoya', [
            'nama_team' => $user,
            'data_team' => $data_user,
            'css' => $css
        ]);
    }


    public function boslinda()
    {
        $user = 'bos linda';
        $css = "assetslindaweb";
        $data_user = Bo_Link::where('nama_team', $user)->first();
        SumWeb::where('nama_team', $user)->increment('webtrack');
        return view('website.boszoya', [
            'nama_team' => $user,
            'data_team' => $data_user,
            'css' => $css
        ]);
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
