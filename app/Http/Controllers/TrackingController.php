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

use function Laravel\Prompts\alert;

class TrackingController extends Controller
{

    public function sumBio($nama_team, $nama_menu)
    {

        if (empty($nama_team)) {
            return response("Nama tim tidak valid.", 400);
        }
        $sumBio = SumBio::where('nama_team', $nama_team)->first();

        if ($sumBio) {
            $loginCount = $sumBio->$nama_menu;

            $result = SumBio::where('nama_team', $nama_team)->update([
                $nama_menu => $loginCount + 1
            ]);

            if ($result) {
                return response("Kolom '{$nama_menu}' berhasil diperbarui.", 200);
            } else {
                return response("Gagal memperbarui kolom '{$nama_menu}'.", 500);
            }
        } else {
            return response("Nama tim '{$nama_team}' tidak ditemukan.", 404);
        }
    }

    public function sumWeb($nama_team, $nama_menu)
    {
        if (empty($nama_team)) {
            return response("Nama tim tidak valid.", 400);
        }

        $SumWeb = SumWeb::where('nama_team', $nama_team)->first();

        if ($SumWeb) {
            $loginCount = $SumWeb->$nama_menu;

            $result = SumWeb::where('nama_team', $nama_team)->update([
                $nama_menu => $loginCount + 1
            ]);

            if ($result) {
                return response("Kolom '{$nama_menu}' berhasil diperbarui.", 200);
            } else {
                return response("Gagal memperbarui kolom '{$nama_menu}'.", 500);
            }
        } else {
            return response("Nama tim '{$nama_team}' tidak ditemukan.", 404);
        }
    }

    public function rekapBio(Request $request)
    {

        $teamToProcess = $request->input('team');

        try {
            $resultSelect = SumBio::where('nama_team', $teamToProcess)->first();

            if ($resultSelect) {
                $newLogin = new RekapBio();
                $newLogin->nama_team = $teamToProcess;
                $newLogin->biotrack = $resultSelect->biotrack;
                $newLogin->login = $resultSelect->login;
                $newLogin->daftar = $resultSelect->daftar;
                $newLogin->whatsapp = $resultSelect->whatsapp;
                $newLogin->facebook = $resultSelect->facebook;
                $newLogin->instagram = $resultSelect->instagram;

                if ($newLogin->save()) {
                    // Simpan data berhasil, kemudian update data di SumBio menjadi 0
                    try {
                        $resultUpdate = SumBio::where('nama_team', $teamToProcess)->update([
                            'biotrack' => 0,
                            'login' => 0,
                            'daftar' => 0,
                            'whatsapp' => 0,
                            'facebook' => 0,
                            'instagram' => 0,
                            'website_grup' => 0
                        ]);

                        if ($resultUpdate !== false) {
                            return "Update was successful.";
                        } else {
                            return "An error occurred during update.";
                        }
                    } catch (\Exception $e) {
                        return "Error: " . $e->getMessage();
                    }
                    if ($resultUpdate) {
                        return response("Data berhasil disimpan dan data SumBio diupdate.", 200);
                    } else {
                        return response("Data berhasil disimpan tetapi gagal mengupdate data SumBio.", 500);
                    }
                } else {
                    return response("Gagal menyimpan data.", 500);
                }
            } else {
                return response("Data tidak ditemukan.", 404);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return "Error: " . $e->getMessage();
        }
    }
    public function rekapBio2(Request $request)
    {

        $teamToProcess = $request->input('team');

        try {
            $resultSelect = SumBio::where('nama_team', $teamToProcess)->first();

            if ($resultSelect) {
                $newLogin = new RekapBio();
                $newLogin->nama_team = $teamToProcess;
                $newLogin->biotrack = $resultSelect->biotrack;
                $newLogin->login = $resultSelect->login;
                $newLogin->daftar = $resultSelect->daftar;
                $newLogin->whatsapp = $resultSelect->whatsapp;
                $newLogin->facebook = $resultSelect->facebook;
                $newLogin->instagram = $resultSelect->instagram;

                if ($newLogin->save()) {
                    // Simpan data berhasil, kemudian update data di SumBio menjadi 0
                    try {
                        return "Update was successful.";
                    } catch (\Exception $e) {
                        return "Error: " . $e->getMessage();
                    }

                    return response("Data berhasil disimpan dan data SumBio diupdate.", 200);
                } else {
                    return response("Gagal menyimpan data.", 500);
                }
            } else {
                return response("Data tidak ditemukan.", 404);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return "Error: " . $e->getMessage();
        }
    }


    public function rekapWeb(Request $request)
    {
        $teamToProcess = $request->input('team');
        $resultSelect = SumWeb::where('nama_team', $teamToProcess)->first();

        if ($resultSelect) {
            $newLogin = new RekapWeb();
            $newLogin->nama_team = $teamToProcess;
            $newLogin->webtrack = $resultSelect->webtrack;
            $newLogin->daftar = $resultSelect->daftar;
            $newLogin->whatsapp = $resultSelect->whatsapp;
            $newLogin->facebook = $resultSelect->facebook;
            $newLogin->instagram = $resultSelect->instagram;
            $newLogin->rtp = $resultSelect->rtp;
            $newLogin->bukti_jp = $resultSelect->bukti_jp;
            $newLogin->livechat = $resultSelect->livechat;

            if ($newLogin->save()) {
                try {
                    $resultUpdate = SumWeb::where('nama_team', $teamToProcess)->update([
                        'nama_team' => $teamToProcess,
                        'webtrack' => 0,
                        'daftar' => 0,
                        'whatsapp' => 0,
                        'facebook' => 0,
                        'instagram' => 0,
                        'rtp' => 0,
                        'bukti_jp' => 0,
                        'livechat' => 0
                    ]);

                    if ($resultUpdate !== false) {
                        return "Update was successful.";
                    } else {
                        return "An error occurred during update.";
                    }
                } catch (\Exception $e) {
                    return "Error: " . $e->getMessage();
                }
            } else {
                return response("Gagal menyimpan data.", 500);
            }
        } else {
            return response("Data tidak ditemukan.", 404);
        }
    }
    public function rekapWeb2(Request $request)
    {
        $teamToProcess = $request->input('team');
        $resultSelect = SumWeb::where('nama_team', $teamToProcess)->first();

        if ($resultSelect) {
            $newLogin = new RekapWeb();
            $newLogin->nama_team = $teamToProcess;
            $newLogin->webtrack = $resultSelect->webtrack;
            $newLogin->daftar = $resultSelect->daftar;
            $newLogin->whatsapp = $resultSelect->whatsapp;
            $newLogin->facebook = $resultSelect->facebook;
            $newLogin->instagram = $resultSelect->instagram;
            $newLogin->rtp = $resultSelect->rtp;
            $newLogin->bukti_jp = $resultSelect->bukti_jp;
            $newLogin->livechat = $resultSelect->livechat;

            if ($newLogin->save()) {
                try {

                    return "Update was successful.";
                } catch (\Exception $e) {
                    return "Error: " . $e->getMessage();
                }
            } else {
                return response("Gagal menyimpan data.", 500);
            }
        } else {
            return response("Data tidak ditemukan.", 404);
        }
    }
}
