<?php

namespace App\Http\Controllers;

use App\Models\RekapBio;
use App\Models\RekapWeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use PDF;
use Dompdf\Dompdf;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request)
    // {
    //     $search_bulan = $request->input('search_bulan') ?? date('n');
    //     $search_tahun = $request->input('search_tahun') ?? date('Y');
    //     $search_website = $request->input('search_website') ?? '';

    //     $query = $this->Querysql($search_bulan, $search_tahun, $search_website);

    //     $data = DB::select($query);
    //     return view('laporan.index', [
    //         'title' => 'Laporan Rekapitulasi Gaji Team Promo',
    //         'datagaji' => GajiRefferal::get(),
    //         'data' => $data
    //     ]);
    // }

    public function generatePDFRekapBio(Request $request)
    {
        $search_bulan = date('F');
        $search_tahun = date('Y');
        $search_website = '';

        $datas = RekapBio::get();
        $data = [
            'title' => 'Laporan Rekapitulasi Analitik Web Bio',
            'title2' => $search_bulan . ' ' . $search_tahun,
            'title3' => $search_website == '' ? 'All Web' : $search_website,
            'content' => '',
            'data' => $datas
            // 'content' => 'Ini adalah contoh PDF yang di-generate menggunakan dompdf dan Laravel.'
        ];

        // Membuat instance dari Dompdf
        $dompdf = new Dompdf();

        // Render view menjadi HTML
        $html = view('dashboard.pdf.laporanrekapbio', $data)->render();

        // Memasukkan HTML ke dalam Dompdf
        $dompdf->loadHtml($html);

        // (Opsional) Atur ukuran dan orientasi halaman
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF
        $dompdf->render();

        $judul = 'Gaji ' . $datas[0]->bulan . ' ' . $datas[0]->bulan;

        // Mengirimkan PDF sebagai response ke browser
        return $dompdf->stream($judul);
    }

    public function generatePDFRekapWeb(Request $request)
    {
        $search_bulan = date('F');
        $search_tahun = date('Y');
        $search_website = '';

        $datas = RekapWeb::get();
        $data = [
            'title' => 'Laporan Rekapitulasi Analitik Website',
            'title2' => $search_bulan . ' ' . $search_tahun,
            'title3' => $search_website == '' ? 'All Website' : $search_website,
            'content' => '',
            'data' => $datas
            // 'content' => 'Ini adalah contoh PDF yang di-generate menggunakan dompdf dan Laravel.'
        ];

        // Membuat instance dari Dompdf
        $dompdf = new Dompdf();

        // Render view menjadi HTML
        $html = view('dashboard.pdf.laporanrekapweb', $data)->render();

        // Memasukkan HTML ke dalam Dompdf
        $dompdf->loadHtml($html);

        // (Opsional) Atur ukuran dan orientasi halaman
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF
        $dompdf->render();

        $judul = 'Gaji ' . $datas[0]->bulan . ' ' . $datas[0]->bulan;

        // Mengirimkan PDF sebagai response ke browser
        return $dompdf->stream($judul);
    }

    public function generateExcelRekapBio(Request $request)
    {
        $rekapBio = RekapBio::get();

        $dataArray = [];
        $dataArray[] = ["No", "Nama Team", "Biotrack", "Login", "Daftar", "Whatsapp", "Facebook", "Instagram"];

        foreach ($rekapBio as $index => $spv) {
            $rowData = [
                $index + 1,
                $spv->nama_team,
                $spv->biotrack,
                $spv->login,
                $spv->daftar,
                $spv->whatsapp,
                $spv->facebook,
                $spv->instagram
            ];
            $dataArray[] = $rowData;
        }

        return response()->json($dataArray, Response::HTTP_OK);
    }

    public function generateExcelRekapWeb(Request $request)
    {
        $rekapBio = RekapWeb::get();

        $dataArray = [];
        $dataArray[] = ["No", "Nama Team", "Daftar", "Whatsapp", "Facebook", "Instagram", "Rtp", "Bukti_JP", "Livechat"];

        foreach ($rekapBio as $index => $spv) {
            $rowData = [
                $index + 1,
                $spv->nama_team,
                $spv->daftar,
                $spv->whatsapp,
                $spv->facebook,
                $spv->instagram,
                $spv->rtp,
                $spv->bukti_jp,
                $spv->livechat
            ];
            $dataArray[] = $rowData;
        }

        return response()->json($dataArray, Response::HTTP_OK);
    }
}
