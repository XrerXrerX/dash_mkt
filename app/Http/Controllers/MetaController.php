<?php

namespace App\Http\Controllers;

use App\Models\Bo_Link;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MetaController extends Controller
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

        if (Auth::user()->role == 'superadmin') {
            $user = Bo_Link::orderBy('id')->pluck('nama_team')->first();
        } else {
            $user = Auth::user()->nama_team;
        }

        $data_user = Bo_Link::where('nama_team', $user)
            ->first();
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.meta.index', [
            'datauser' => $data_user,
            'title' => $user,
            'total_team' => $total_team,
            // 'url' => $url
        ]);
    }

    public function meta(string $id)
    {
        if (Auth::user()->role == 'superadmin' && !$id) {
            $user = Bo_Link::orderBy('id')->pluck('nama_team')->first();
        } else if (Auth::user()->role == 'superadmin' && $id) {
            $user = $id;
        } else {
            $user = Auth::user()->nama_team;
        }

        $data_user = Bo_Link::where('nama_team', $user)
            ->first();
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.meta.index', [
            'datauser' => $data_user,
            'title' => $user,
            'total_team' => $total_team,
            // 'url' => $url
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
        $user = Auth::user()->role;
        $datateam = Bo_Link::where('nama_team', $id)->first();
        if ($user != 'superadmin') {
            return redirect()->intended('/bvbvbK1n9');
        }

        $rules = [
            'artikel_bio' => 'required|max:30000',
            'artikel_web' => 'required|max:30000',
            'meta_tag' => 'required|max:30000',
        ];
        $validatedData = $request->validate($rules);

        if ($request->nama_team != $datateam->nama_team) {
            $validatedData['nama_team'] = auth()->user()->nama_team;
            Bo_Link::where('nama_team', $id)->update($validatedData);
            return redirect('/bvbbyh0n3y88/meta/desc')->with('success', 'post has been updated!');
        } else {
            Bo_Link::where('nama_team', $request->nama_team)->update($validatedData);
            return redirect('/bvbbyh0n3y88/l4stQu0t3s/meta/' . $request->nama_team)->with('success', 'post has been updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
