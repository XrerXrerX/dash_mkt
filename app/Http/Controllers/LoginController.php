<?php

namespace App\Http\Controllers;

use App\Models\Bo_Link;
use App\Models\SumWebHarian;
use App\Models\SumWeb;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/bvbvbK1n9');
        }
        return back()->with('loginError', 'log in failed !');
    }

    public function index()
    {
        // $now = Carbon::now();
        // $tanggalHariIni = $now->day;
        // $namabulan =  $now->format('F');
        // if ($namabulan == 'January') {
        //     $namabulan = 'Januari';
        // } else if ($namabulan == 'February') {
        //     $namabulan = 'Februari';
        // } else if ($namabulan == 'March') {
        //     $namabulan = 'Maret';
        // } else if ($namabulan == 'April') {
        //     $namabulan = 'April';
        // } else if ($namabulan == 'May') {
        //     $namabulan = 'Mei';
        // } else if ($namabulan == 'June') {
        //     $namabulan = 'Juni';
        // } else if ($namabulan == 'July') {
        //     $namabulan = 'Juli';
        // } else if ($namabulan == 'August') {
        //     $namabulan = 'Agustus';
        // } else if ($namabulan == 'September') {
        //     $namabulan = 'September';
        // } else if ($namabulan == 'October') {
        //     $namabulan = 'Oktober';
        // } else if ($namabulan == 'November') {
        //     $namabulan = 'November';
        // } else {
        //     $namabulan = 'Desember';
        // }
        // $tahun = Carbon::now()->endOfMonth()->year;
        // $hariini = Carbon::now()->format('Y-m-d');
        // $akhirhari = $now->endOfYear()->format('Y-m-d');
        $enddate =  now()->endOfMonth()->day;
        // dd($tanggalHariIni === 24);

        $totalRows = SumWebHarian::where('nama_team', 'bos zoya')->count(); // Ganti SumWeb dengan model yang sesuai
        $totalVisitor = SumWebHarian::where('nama_team', 'bos zoya')->get(); // Ganti 'jumlah_visitor' dengan kolom yang sesuai



        $lastData = SumWebHarian::where('nama_team', 'bos zoya')
            ->orderBy('created_at', 'desc')
            ->get();
        $lastDataBioTrack = $lastData->sum('webtrack');

        $startOfYear = now()->startOfYear()->format('Y-m-d');




        dd($startOfYear);


        if (auth()->check()) {
            return redirect('/bvbvbK1n9'); // Arahkan ke /bvbvbK1n9 jika sudah terautentikasi
        } else {
            return view('login.index'); // Arahkan ke view login.index jika belum terautentikasi
        }
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
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/bvbbyh0n3y88');
    }
}
