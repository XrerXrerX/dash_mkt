<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Models\RekapBio;
use App\Models\RekapWeb;
use App\Models\SumBio;
use App\Models\SumWeb;


class TrackingController extends Controller
{

    public function trackingLogin($nama_team)
    {
        $login = SumBio::where('nama_team', $nama_team)->first()->login;

        if (!empty($nama_team)) {
            $result = SumBio::where('nama_team', $nama_team)->update([
                'login' => $login + 1
            ]);
            if ($result) {
                return response("Kolom 'login' berhasil diperbarui.", 200);
            } else {
                return response("Gagal memperbarui kolom 'login'.", 500);
            }
        } else {
            return response("Nama tim tidak valid.", 400);
        }
    }
}
