<?php

namespace App\Http\Controllers;

use App\Models\Bo_Link;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SuperAdminController extends Controller
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
    public function index(string $id)
    {
        $user = $id;
        $data_user = Bo_Link::where('nama_team', $user)
            ->first();
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.superadmin.bolink.index', [
            'datauser' => $data_user,
            'title' => $user,
            'total_team' => $total_team
        ]);
    }

    // public function superadmindex(string $id)
    // {
    //     $user = $id;
    //     $data_user = Bo_Link::where('nama_team', $user)
    //     ->first();
    // $total_team = Bo_Link::select('nama_team')
    //     ->distinct()
    //     ->pluck('nama_team')
    //     ->toArray();
    // return view('dashboard.superadmin.bolink.index', [
    //     'datauser' => $data_user,
    //     'title' => $user,
    //     'total_team' => $total_team
    // ]);
    // }

    public function meta(string $id)
    {
        $user = $id;
        $data_user = Bo_Link::where('nama_team', $user)
            ->first();
        $total_team = Bo_Link::select('nama_team')
            ->distinct()
            ->pluck('nama_team')
            ->toArray();
        return view('dashboard.superadmin.meta.index', [
            'datauser' => $data_user,
            'title' => $user,
            'total_team' => $total_team
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
