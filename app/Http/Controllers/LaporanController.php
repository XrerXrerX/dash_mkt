<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\RekapBio;
use App\Models\RekapWeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use PDF;
use Dompdf\Dompdf;
use App\Models\SumBioHarian;
use App\Models\SumWebHarian;
use App\Models\SumBioMingguan;
use App\Models\SumWebMingguan;
use App\Models\SumBioBulanan;
use App\Models\SumWebBulanan;
use App\Models\SumBioTahunan;
use App\Models\SumWeb;
use App\Models\SumWebTahunan;

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
        $target = Auth::user()->nama_team;
        $search_bulan = date('F');
        $search_tahun = date('Y');

        $dataharian = SumBioHarian::where('nama_team', $target)->get();
        $dataMingguan = SumBioMingguan::where('nama_team', $target)->get();
        $dataBulanan = SumBioBulanan::where('nama_team', $target)->get();
        $dataTahunan = SumBioTahunan::where('nama_team', $target)->get();
        $labelHarian = SumBioHarian::distinct('hari')->pluck('hari')->toArray();
        $labelMingguan = SumBioMingguan::distinct('minggu')->pluck('minggu')->toArray();
        $labelBulanan = SumBioBulanan::distinct('bulan')->pluck('bulan')->toArray();
        $labelTahunan = SumBioTahunan::distinct('tahun')->pluck('tahun')->toArray();

        $hariValues = [];
        $biotrackValues = [];
        $loginValues = [];
        $daftarValues = [];
        $whatsappValues = [];
        $facebookValues = [];
        $instagramValues = [];
        $website_grupValues = [];
        $livestream_grupValues = [];


        foreach ($dataharian as $data) {
            $hariValues[] = $data->hari;
            $biotrackValues[] = $data->biotrack;
            $loginValues[] = $data->login;
            $daftarValues[] = $data->daftar;
            $whatsappValues[] = $data->whatsapp;
            $facebookValues[] = $data->facebook;
            $instagramValues[] = $data->instagram;
            $website_grupValues[] = $data->website_grup;
            $livestream_grupValues[] = $data->livestream;
        }

        $mingguValues = [];
        $biotrackValuesMingguan = [];
        $loginValuesMingguan = [];
        $daftarValuesMingguan = [];
        $whatsappValuesMingguan = [];
        $facebookValuesMingguan = [];
        $instagramValuesMingguan = [];
        $website_grupValuesMingguan = [];
        $livestream_grupValuesMingguan = [];

        foreach ($dataMingguan as $data2) {
            $mingguValues[] = $data2->minggu;
            $biotrackValuesMingguan[] = $data2->biotrack;
            $loginValuesMingguan[] = $data2->login;
            $daftarValuesMingguan[] = $data2->daftar;
            $whatsappValuesMingguan[] = $data2->whatsapp;
            $facebookValuesMingguan[] = $data2->facebook;
            $instagramValuesMingguan[] = $data2->instagram;
            $website_grupValuesMingguan[] = $data2->website_grup;
            $livestream_grupValuesMingguan[] = $data->livestream;
        }

        $bulanValues = [];
        $biotrackValuesBulanan = [];
        $loginValuesBulanan = [];
        $daftarValuesBulanan = [];
        $whatsappValuesBulanan = [];
        $facebookValuesBulanan = [];
        $instagramValuesBulanan = [];
        $website_grupValuesBulanan = [];
        $livestream_grupValuesBulanan = [];
        $rata2HariValuesBulanan = [];
        $rata2MingguValuesBulanan = [];

        foreach ($dataBulanan as $data3) {
            $bulanValues[] = $data3->bulan;
            $biotrackValuesBulanan[] = $data3->biotrack;
            $loginValuesBulanan[] = $data3->login;
            $daftarValuesBulanan[] = $data3->daftar;
            $whatsappValuesBulanan[] = $data3->whatsapp;
            $facebookValuesBulanan[] = $data3->facebook;
            $instagramValuesBulanan[] = $data3->instagram;
            $website_grupValuesBulanan[] = $data3->website_grup;
            $rata2HariValuesBulanan[] = $data3->rata2_hari;
            $rata2MingguValuesBulanan[] = $data3->rata2_minggu;
            $livestream_grupValuesBulanan[] = $data->livestream;
        }

        $tahunValues = [];
        $biotrackValuesTahunan = [];
        $loginValuesTahunan = [];
        $daftarValuesTahunan = [];
        $whatsappValuesTahunan = [];
        $facebookValuesTahunan = [];
        $instagramValuesTahunan = [];
        $website_grupValuesTahunan = [];
        $livestream_grupValuesTahunan = [];
        $rata2HariValuesTahunan = [];
        $rata2MingguValuesTahunan = [];

        foreach ($dataTahunan as $data3) {
            $tahunValues[] = $data3->tahun;
            $biotrackValuesTahunan[] = $data3->biotrack;
            $loginValuesTahunan[] = $data3->login;
            $daftarValuesTahunan[] = $data3->daftar;
            $whatsappValuesTahunan[] = $data3->whatsapp;
            $facebookValuesTahunan[] = $data3->facebook;
            $instagramValuesTahunan[] = $data3->instagram;
            $website_grupValuesTahunan[] = $data3->website_grup;
            $livestream_grupValuesTahunan[] = $data->livestream;
            $rata2HariValuesTahunan[] = $data3->rata2_hari;
            $rata2MingguValuesTahunan[] = $data3->rata2_minggu;
        }


        $data = [
            'title' => 'Analytic Data' . $target,
            'title2' => $search_bulan . ' ' . $search_tahun,
            'title3' =>  $target,
            'content' => '',
            'dataHarianBiotrack' => $biotrackValues,
            'dataHarianLogin' => $loginValues,
            'dataHarianDaftar' => $daftarValues,
            'dataHarianWhatsapp' => $whatsappValues,
            'dataHarianFacebook' => $facebookValues,
            'dataHarianInstagram' => $instagramValues,
            'dataHarianWebsiteGrup' => $website_grupValues,
            'dataHarianLivestream' => $livestream_grupValues,
            'dataMingguanBiotrack' => $biotrackValuesMingguan,
            'dataMingguanLogin' => $loginValuesMingguan,
            'dataMingguanDaftar' => $daftarValuesMingguan,
            'dataMingguanWhatsapp' => $whatsappValuesMingguan,
            'dataMingguanFacebook' => $facebookValuesMingguan,
            'dataMingguanInstagram' => $instagramValuesMingguan,
            'dataMingguanWebsiteGrup' => $website_grupValuesMingguan,
            'dataMingguanLivestream' => $livestream_grupValuesMingguan,
            'databBulananBiotrack' => $biotrackValuesBulanan,
            'databBulananLogin' => $loginValuesBulanan,
            'databBulananDaftar' => $daftarValuesBulanan,
            'databBulananWhatsapp' => $whatsappValuesBulanan,
            'databBulananFacebook' => $facebookValuesBulanan,
            'databBulananInstagram' => $instagramValuesBulanan,
            'databBulananWebsiteGrup' => $website_grupValuesBulanan,
            'dataBulananLivestream' => $livestream_grupValuesBulanan,
            'rata2HariValuesBulanan' => $rata2HariValuesBulanan,
            'rata2MingguValuesBulanan' => $rata2MingguValuesBulanan,
            'dataTahunanBiotrack' => $biotrackValuesTahunan,
            'dataTahunanLogin' => $loginValuesTahunan,
            'dataTahunanDaftar' => $daftarValuesTahunan,
            'dataTahunanWhatsapp' => $whatsappValuesTahunan,
            'dataTahunanFacebook' => $facebookValuesTahunan,
            'dataTahunanInstagram' => $instagramValuesTahunan,
            'dataTahunanWebsiteGrup' => $website_grupValuesTahunan,
            'dataTahunanLivestream' => $livestream_grupValuesTahunan,
            'rata2HariValuesTahunan' => $rata2HariValuesTahunan,
            'rata2MingguValuesTahunan' => $rata2MingguValuesTahunan,
            'labelHarian' => $labelHarian,
            'labelMingguan' => $labelMingguan,
            'labelBulanan' => $labelBulanan,
            'labelTahunan' => $labelTahunan,
        ];

        // Data yang akan Anda kirimkan ke tampilan




        return view('dashboard.pdf.laporanrekapbionew', $data);
    }

    public function generatePDFRekapBio2(String $id)
    {
        $target = $id;

        $search_bulan = date('F');
        $search_tahun = date('Y');

        $dataharian = SumBioHarian::where('nama_team', $target)->get();
        $dataMingguan = SumBioMingguan::where('nama_team', $target)->get();
        $dataBulanan = SumBioBulanan::where('nama_team', $target)->get();
        $dataTahunan = SumBioTahunan::where('nama_team', $target)->get();

        $labelHarian = SumBioHarian::distinct('hari')->pluck('hari')->toArray();
        $labelMingguan = SumBioMingguan::distinct('minggu')->pluck('minggu')->toArray();
        $labelBulanan = SumBioBulanan::distinct('bulan')->pluck('bulan')->toArray();
        $labelTahunan = SumBioTahunan::distinct('tahun')->pluck('tahun')->toArray();

        $hariValues = [];
        $biotrackValues = [];
        $loginValues = [];
        $daftarValues = [];
        $whatsappValues = [];
        $facebookValues = [];
        $instagramValues = [];
        $website_grupValues = [];
        $livestream_grupValues = [];


        foreach ($dataharian as $data) {
            $hariValues[] = $data->hari;
            $biotrackValues[] = $data->biotrack;
            $loginValues[] = $data->login;
            $daftarValues[] = $data->daftar;
            $whatsappValues[] = $data->whatsapp;
            $facebookValues[] = $data->facebook;
            $instagramValues[] = $data->instagram;
            $website_grupValues[] = $data->website_grup;
            $livestream_grupValues[] = $data->livestream;
        }

        $mingguValues = [];
        $biotrackValuesMingguan = [];
        $loginValuesMingguan = [];
        $daftarValuesMingguan = [];
        $whatsappValuesMingguan = [];
        $facebookValuesMingguan = [];
        $instagramValuesMingguan = [];
        $website_grupValuesMingguan = [];
        $livestream_grupValuesMingguan = [];

        foreach ($dataMingguan as $data2) {
            $mingguValues[] = $data2->minggu;
            $biotrackValuesMingguan[] = $data2->biotrack;
            $loginValuesMingguan[] = $data2->login;
            $daftarValuesMingguan[] = $data2->daftar;
            $whatsappValuesMingguan[] = $data2->whatsapp;
            $facebookValuesMingguan[] = $data2->facebook;
            $instagramValuesMingguan[] = $data2->instagram;
            $website_grupValuesMingguan[] = $data2->website_grup;
            $livestream_grupValuesMingguan[] = $data2->livestream;
        }

        $bulanValues = [];
        $biotrackValuesBulanan = [];
        $loginValuesBulanan = [];
        $daftarValuesBulanan = [];
        $whatsappValuesBulanan = [];
        $facebookValuesBulanan = [];
        $instagramValuesBulanan = [];
        $website_grupValuesBulanan = [];
        $livestream_grupValuesBulanan = [];
        $rata2HariValuesBulanan = [];
        $rata2MingguValuesBulanan = [];

        foreach ($dataBulanan as $data3) {
            $bulanValues[] = $data3->bulan;
            $biotrackValuesBulanan[] = $data3->biotrack;
            $loginValuesBulanan[] = $data3->login;
            $daftarValuesBulanan[] = $data3->daftar;
            $whatsappValuesBulanan[] = $data3->whatsapp;
            $facebookValuesBulanan[] = $data3->facebook;
            $instagramValuesBulanan[] = $data3->instagram;
            $website_grupValuesBulanan[] = $data3->website_grup;
            $rata2HariValuesBulanan[] = $data3->rata2_hari;
            $rata2MingguValuesBulanan[] = $data3->rata2_minggu;
            $livestream_grupValuesBulanan[] = $data3->livestream;
        }

        $tahunValues = [];
        $biotrackValuesTahunan = [];
        $loginValuesTahunan = [];
        $daftarValuesTahunan = [];
        $whatsappValuesTahunan = [];
        $facebookValuesTahunan = [];
        $instagramValuesTahunan = [];
        $website_grupValuesTahunan = [];
        $livestream_grupValuesTahunan = [];
        $rata2HariValuesTahunan = [];
        $rata2MingguValuesTahunan = [];

        foreach ($dataTahunan as $data4) {
            $tahunValues[] = $data4->tahun;
            $biotrackValuesTahunan[] = $data4->biotrack;
            $loginValuesTahunan[] = $data4->login;
            $daftarValuesTahunan[] = $data4->daftar;
            $whatsappValuesTahunan[] = $data4->whatsapp;
            $facebookValuesTahunan[] = $data4->facebook;
            $instagramValuesTahunan[] = $data4->instagram;
            $website_grupValuesTahunan[] = $data4->website_grup;
            $livestream_grupValuesTahunan[] = $data->livestream;
            $rata2HariValuesTahunan[] = $data4->rata2_hari;
            $rata2MingguValuesTahunan[] = $data4->rata2_minggu;
        }


        $data = [
            'title' => 'Analytic Data' . $target,
            'title2' => $search_bulan . ' ' . $search_tahun,
            'title3' =>  $target,
            'content' => '',
            'dataHarianBiotrack' => $biotrackValues,
            'dataHarianLogin' => $loginValues,
            'dataHarianDaftar' => $daftarValues,
            'dataHarianWhatsapp' => $whatsappValues,
            'dataHarianFacebook' => $facebookValues,
            'dataHarianInstagram' => $instagramValues,
            'dataHarianWebsiteGrup' => $website_grupValues,
            'dataHarianLivestream' => $livestream_grupValues,
            'dataMingguanBiotrack' => $biotrackValuesMingguan,
            'dataMingguanLogin' => $loginValuesMingguan,
            'dataMingguanDaftar' => $daftarValuesMingguan,
            'dataMingguanWhatsapp' => $whatsappValuesMingguan,
            'dataMingguanFacebook' => $facebookValuesMingguan,
            'dataMingguanInstagram' => $instagramValuesMingguan,
            'dataMingguanWebsiteGrup' => $website_grupValuesMingguan,
            'dataMingguanLivestream' => $livestream_grupValuesMingguan,
            'databBulananBiotrack' => $biotrackValuesBulanan,
            'databBulananLogin' => $loginValuesBulanan,
            'databBulananDaftar' => $daftarValuesBulanan,
            'databBulananWhatsapp' => $whatsappValuesBulanan,
            'databBulananFacebook' => $facebookValuesBulanan,
            'databBulananInstagram' => $instagramValuesBulanan,
            'databBulananWebsiteGrup' => $website_grupValuesBulanan,
            'dataBulananLivestream' => $livestream_grupValuesBulanan,
            'rata2HariValuesBulanan' => $rata2HariValuesBulanan,
            'rata2MingguValuesBulanan' => $rata2MingguValuesBulanan,
            'dataTahunanBiotrack' => $biotrackValuesTahunan,
            'dataTahunanLogin' => $loginValuesTahunan,
            'dataTahunanDaftar' => $daftarValuesTahunan,
            'dataTahunanWhatsapp' => $whatsappValuesTahunan,
            'dataTahunanFacebook' => $facebookValuesTahunan,
            'dataTahunanInstagram' => $instagramValuesTahunan,
            'dataTahunanWebsiteGrup' => $website_grupValuesTahunan,
            'dataTahunanLivestream' => $livestream_grupValuesTahunan,
            'rata2HariValuesTahunan' => $rata2HariValuesTahunan,
            'rata2MingguValuesTahunan' => $rata2MingguValuesTahunan,
            'labelHarian' => $labelHarian,
            'labelMingguan' => $labelMingguan,
            'labelBulanan' => $labelBulanan,
            'labelTahunan' => $labelTahunan,
        ];

        // Data yang akan Anda kirimkan ke tampilan




        return view('dashboard.pdf.laporanrekapbionew', $data);





        // // Membuat instance dari Dompdf
        // $dompdf = new Dompdf();

        // // Render view menjadi HTML
        // $html = view('dashboard.pdf.pdfbio', $data)->render();

        // // Memasukkan HTML ke dalam Dompdf
        // $dompdf->loadHtml($html);

        // // (Opsional) Atur ukuran dan orientasi halaman
        // $dompdf->setPaper('A4', 'landscape');

        // // Render PDF
        // $dompdf->render();

        // $judul = $target;

        // // Mengirimkan PDF sebagai response ke browser
        // return $dompdf->stream($judul);
    }


    public function generatePDFRekapWeb(Request $request)
    {
        $target = Auth::user()->nama_team;

        $search_bulan = date('F');
        $search_tahun = date('Y');

        $dataharian = SumWebHarian::where('nama_team', $target)->get();
        $dataMingguan = SumWebMingguan::where('nama_team', $target)->get();
        $dataBulanan = SumWebBulanan::where('nama_team', $target)->get();
        $dataTahunan = SumWebTahunan::where('nama_team', $target)->get();

        $labelHarian = SumWebHarian::distinct('hari')->pluck('hari')->toArray();
        $labelMingguan = SumWebMingguan::distinct('minggu')->pluck('minggu')->toArray();
        $labelBulanan = SumWebBulanan::distinct('bulan')->pluck('bulan')->toArray();
        $labelTahunan = SumWebTahunan::distinct('tahun')->pluck('tahun')->toArray();

        $hariValues = [];
        $webTrackValues = [];
        $daftarValues = [];
        $whatsappValues = [];
        $facebookValues = [];
        $instagramValues = [];
        $rtpValues = [];
        $buktiJpValues = [];
        $livechatValues = [];
        $livestreamValues = [];

        foreach ($dataharian as $data) {
            $hariValues[] = $data->hari;
            $webTrackValues[] = $data->webtrack;
            $daftarValues[] = $data->daftar;
            $whatsappValues[] = $data->whatsapp;
            $facebookValues[] = $data->facebook;
            $instagramValues[] = $data->instagram;
            $rtpValues[] = $data->rtp;
            $buktiJpValues[] = $data->bukti_jp;
            $livechatValues[] = $data->livechat;
            $livestreamValues[] = $data->livestream;
        }

        $mingguValues = [];
        $webTrackValuesMingguan = [];
        $daftarValuesMingguan = [];
        $whatsappValuesMingguan = [];
        $facebookValuesMingguan = [];
        $instagramValuesMingguan = [];
        $rtpValuesMingguan = [];
        $buktiJpValuesMingguan = [];
        $livechatValuesMingguan = [];
        $livestreamValuesMingguan = [];

        foreach ($dataMingguan as $data2) {
            $mingguValues[] = $data2->minggu;
            $webTrackValuesMingguan[] = $data2->webtrack;
            $daftarValuesMingguan[] = $data2->daftar;
            $whatsappValuesMingguan[] = $data2->whatsapp;
            $facebookValuesMingguan[] = $data2->facebook;
            $instagramValuesMingguan[] = $data2->instagram;
            $rtpValuesMingguan[] = $data2->rtp;
            $buktiJpValuesMingguan[] = $data2->bukti_jp;
            $livechatValuesMingguan[] = $data2->livechat;
            $livestreamValuesMingguan[] = $data->livestream;
        }

        $bulanValues = [];
        $webTrackValuesBulanan = [];
        $daftarValuesBulanan = [];
        $whatsappValuesBulanan = [];
        $facebookValuesBulanan = [];
        $instagramValuesBulanan = [];
        $rtpValuesBulanan = [];
        $buktiJpValuesBulanan = [];
        $livechatValuesBulanan = [];
        $livestreamValuesBulanan = [];
        $rata2HariValuesBulanan = [];
        $rata2MingguValuesBulanan = [];

        foreach ($dataBulanan as $data3) {
            $bulanValues[] = $data3->bulan;
            $webTrackValuesBulanan[] = $data3->webtrack;
            $daftarValuesBulanan[] = $data3->daftar;
            $whatsappValuesBulanan[] = $data3->whatsapp;
            $facebookValuesBulanan[] = $data3->facebook;
            $instagramValuesBulanan[] = $data3->instagram;
            $rtpValuesBulanan[] = $data3->rtp;
            $buktiJpValuesBulanan[] = $data3->bukti_jp;
            $livechatValuesBulanan[] = $data3->livechat;
            $livestreamValuesBulanan[] = $data->livestream;
            $rata2HariValuesBulanan[] = $data3->rata2_hari;
            $rata2MingguValuesBulanan[] = $data3->rata2_minggu;
        }

        $tahunValues = [];
        $webTrackValuesTahunan = [];
        $daftarValuesTahunan = [];
        $whatsappValuesTahunan = [];
        $facebookValuesTahunan = [];
        $instagramValuesTahunan = [];
        $rtpValuesTahunan = [];
        $buktiJpValuesTahunan = [];
        $livechatValuesTahunan = [];
        $livestreamValuesTahunan = [];
        $rata2HariValuesTahunan = [];
        $rata2MingguValuesTahunan = [];

        foreach ($dataTahunan as $data4) {
            $tahunValues[] = $data4->bulan;
            $webTrackValuesTahunan[] = $data4->webtrack;
            $daftarValuesTahunan[] = $data4->daftar;
            $whatsappValuesTahunan[] = $data4->whatsapp;
            $facebookValuesTahunan[] = $data4->facebook;
            $instagramValuesTahunan[] = $data4->instagram;
            $rtpValuesTahunan[] = $data4->rtp;
            $buktiJpValuesTahunan[] = $data4->bukti_jp;
            $livechatValuesTahunan[] = $data4->livechat;
            $livestreamValuesTahunan[] = $data->livestream;
            $rata2HariValuesTahunan[] = $data4->rata2_hari;
            $rata2MingguValuesTahunan[] = $data4->rata2_minggu;
        }

        $data = [
            'title' => 'Analytic Data' . $target,
            'title2' => $search_bulan . ' ' . $search_tahun,
            'title3' =>  $target,
            'content' => '',
            'dataHarianwebTrack' => $webTrackValues,
            'dataHarianDaftar' => $daftarValues,
            'dataHarianWhatsapp' => $whatsappValues,
            'dataHarianFacebook' => $facebookValues,
            'dataHarianInstagram' => $instagramValues,
            'dataHarianRtp' => $rtpValues,
            'dataHarianBuktiJp' => $buktiJpValues,
            'dataHarianlivechat' => $livechatValues,
            'dataHarianlivechat' => $livechatValues,
            'dataMingguanwebTrack' => $webTrackValuesMingguan,
            'dataMingguanDaftar' => $daftarValuesMingguan,
            'dataMingguanWhatsapp' => $whatsappValuesMingguan,
            'dataMingguanFacebook' => $facebookValuesMingguan,
            'dataMingguanInstagram' => $instagramValuesMingguan,
            'dataMingguanRtp' => $rtpValuesMingguan,
            'dataMingguanBuktiJp' => $buktiJpValuesMingguan,
            'dataMingguanLivechat' => $livechatValuesMingguan,
            'dataMingguanLivechat' => $livechatValuesMingguan,
            'databBulananwebTrack' => $webTrackValuesBulanan,
            'databBulananDaftar' => $daftarValuesBulanan,
            'databBulananWhatsapp' => $whatsappValuesBulanan,
            'databBulananFacebook' => $facebookValuesBulanan,
            'databBulananInstagram' => $instagramValuesBulanan,
            'databBulananRtp' => $rtpValuesBulanan,
            'databBulananBuktiJp' => $buktiJpValuesBulanan,
            'databBulananLivechat' => $livechatValuesBulanan,
            'databBulananLivechat' => $livechatValuesBulanan,
            'rata2HariValuesBulanan' => $rata2HariValuesBulanan,
            'rata2MingguValuesBulanan' => $rata2MingguValuesBulanan,
            'dataTahunanwebTrack' => $webTrackValuesTahunan,
            'dataTahunanDaftar' => $daftarValuesTahunan,
            'dataTahunanWhatsapp' => $whatsappValuesTahunan,
            'dataTahunanFacebook' => $facebookValuesTahunan,
            'dataTahunanInstagram' => $instagramValuesTahunan,
            'dataTahunanWebRtp' => $rtpValuesBulanan,
            'dataTahunanWebBuktiJp' => $buktiJpValuesBulanan,
            'dataTahunanWebLivechat' => $livechatValuesBulanan,
            'dataTahunanWebLivechat' => $livechatValuesBulanan,
            'rata2HariValuesTahunan' => $rata2HariValuesTahunan,
            'rata2MingguValuesTahunan' => $rata2MingguValuesTahunan,
            'labelHarian' => $labelHarian,
            'labelMingguan' => $labelMingguan,
            'labelBulanan' => $labelBulanan,
            'labelTahunan' => $labelTahunan,
            // 'content' => 'Ini adalah contoh PDF yang di-generate menggunakan dompdf dan Laravel.'
        ];

        // Data yang akan Anda kirimkan ke tampilan




        return view('dashboard.pdf.laporanrekapwebnew', $data);
    }

    public function generatePDFRekapWeb2(String $id)
    {
        $target = $id;

        $search_bulan = date('F');
        $search_tahun = date('Y');

        $dataharian = SumWebHarian::where('nama_team', $target)->get();
        $dataMingguan = SumWebMingguan::where('nama_team', $target)->get();
        $dataBulanan = SumWebBulanan::where('nama_team', $target)->get();
        $dataTahunan = SumWebTahunan::where('nama_team', $target)->get();

        $labelHarian = SumWebHarian::distinct('hari')->pluck('hari')->toArray();
        $labelMingguan = SumWebMingguan::distinct('minggu')->pluck('minggu')->toArray();
        $labelBulanan = SumWebBulanan::distinct('bulan')->pluck('bulan')->toArray();
        $labelTahunan = SumWebTahunan::distinct('tahun')->pluck('tahun')->toArray();

        $hariValues = [];
        $webTrackValues = [];
        $daftarValues = [];
        $whatsappValues = [];
        $facebookValues = [];
        $instagramValues = [];
        $rtpValues = [];
        $buktiJpValues = [];
        $livechatValues = [];

        foreach ($dataharian as $data) {
            $hariValues[] = $data->hari;
            $webTrackValues[] = $data->webtrack;
            $daftarValues[] = $data->daftar;
            $whatsappValues[] = $data->whatsapp;
            $facebookValues[] = $data->facebook;
            $instagramValues[] = $data->instagram;
            $rtpValues[] = $data->rtp;
            $buktiJpValues[] = $data->bukti_jp;
            $livechatValues[] = $data->livechat;
        }

        $mingguValues = [];
        $webTrackValuesMingguan = [];
        $daftarValuesMingguan = [];
        $whatsappValuesMingguan = [];
        $facebookValuesMingguan = [];
        $instagramValuesMingguan = [];
        $rtpValuesMingguan = [];
        $buktiJpValuesMingguan = [];
        $livechatValuesMingguan = [];

        foreach ($dataMingguan as $data2) {
            $mingguValues[] = $data2->minggu;
            $webTrackValuesMingguan[] = $data2->webtrack;
            $daftarValuesMingguan[] = $data2->daftar;
            $whatsappValuesMingguan[] = $data2->whatsapp;
            $facebookValuesMingguan[] = $data2->facebook;
            $instagramValuesMingguan[] = $data2->instagram;
            $rtpValuesMingguan[] = $data2->rtp;
            $buktiJpValuesMingguan[] = $data2->bukti_jp;
            $livechatValuesMingguan[] = $data2->livechat;
        }

        $bulanValues = [];
        $webTrackValuesBulanan = [];
        $daftarValuesBulanan = [];
        $whatsappValuesBulanan = [];
        $facebookValuesBulanan = [];
        $instagramValuesBulanan = [];
        $rtpValuesBulanan = [];
        $buktiJpValuesBulanan = [];
        $livechatValuesBulanan = [];
        $rata2HariValuesBulanan = [];
        $rata2MingguValuesBulanan = [];

        foreach ($dataBulanan as $data3) {
            $bulanValues[] = $data3->bulan;
            $webTrackValuesBulanan[] = $data3->webtrack;
            $daftarValuesBulanan[] = $data3->daftar;
            $whatsappValuesBulanan[] = $data3->whatsapp;
            $facebookValuesBulanan[] = $data3->facebook;
            $instagramValuesBulanan[] = $data3->instagram;
            $rtpValuesBulanan[] = $data3->rtp;
            $buktiJpValuesBulanan[] = $data3->bukti_jp;
            $livechatValuesBulanan[] = $data3->livechat;
            $rata2HariValuesBulanan[] = $data3->rata2_hari;
            $rata2MingguValuesBulanan[] = $data3->rata2_minggu;
        }

        $tahunValues = [];
        $webTrackValuesTahunan = [];
        $daftarValuesTahunan = [];
        $whatsappValuesTahunan = [];
        $facebookValuesTahunan = [];
        $instagramValuesTahunan = [];
        $rtpValuesTahunan = [];
        $buktiJpValuesTahunan = [];
        $livechatValuesTahunan = [];
        $rata2HariValuesTahunan = [];
        $rata2MingguValuesTahunan = [];

        foreach ($dataTahunan as $data4) {
            $tahunValues[] = $data4->bulan;
            $webTrackValuesTahunan[] = $data4->webtrack;
            $daftarValuesTahunan[] = $data4->daftar;
            $whatsappValuesTahunan[] = $data4->whatsapp;
            $facebookValuesTahunan[] = $data4->facebook;
            $instagramValuesTahunan[] = $data4->instagram;
            $rtpValuesTahunan[] = $data4->rtp;
            $buktiJpValuesTahunan[] = $data4->bukti_jp;
            $livechatValuesTahunan[] = $data4->livechat;
            $rata2HariValuesTahunan[] = $data4->rata2_hari;
            $rata2MingguValuesTahunan[] = $data4->rata2_minggu;
        }

        $data = [
            'title' => 'Analytic Data' . $target,
            'title2' => $search_bulan . ' ' . $search_tahun,
            'title3' =>  $target,
            'content' => '',
            'dataHarianwebTrack' => $webTrackValues,
            'dataHarianDaftar' => $daftarValues,
            'dataHarianWhatsapp' => $whatsappValues,
            'dataHarianFacebook' => $facebookValues,
            'dataHarianInstagram' => $instagramValues,
            'dataHarianRtp' => $rtpValues,
            'dataHarianBuktiJp' => $buktiJpValues,
            'dataHarianlivechat' => $livechatValues,
            'dataMingguanwebTrack' => $webTrackValuesMingguan,
            'dataMingguanDaftar' => $daftarValuesMingguan,
            'dataMingguanWhatsapp' => $whatsappValuesMingguan,
            'dataMingguanFacebook' => $facebookValuesMingguan,
            'dataMingguanInstagram' => $instagramValuesMingguan,
            'dataMingguanRtp' => $rtpValuesMingguan,
            'dataMingguanBuktiJp' => $buktiJpValuesMingguan,
            'dataMingguanLivechat' => $livechatValuesMingguan,
            'databBulananwebTrack' => $webTrackValuesBulanan,
            'databBulananDaftar' => $daftarValuesBulanan,
            'databBulananWhatsapp' => $whatsappValuesBulanan,
            'databBulananFacebook' => $facebookValuesBulanan,
            'databBulananInstagram' => $instagramValuesBulanan,
            'databBulananRtp' => $rtpValuesBulanan,
            'databBulananBuktiJp' => $buktiJpValuesBulanan,
            'databBulananLivechat' => $livechatValuesBulanan,
            'rata2HariValuesBulanan' => $rata2HariValuesBulanan,
            'rata2MingguValuesBulanan' => $rata2MingguValuesBulanan,
            'dataTahunanwebTrack' => $webTrackValuesTahunan,
            'dataTahunanDaftar' => $daftarValuesTahunan,
            'dataTahunanWhatsapp' => $whatsappValuesTahunan,
            'dataTahunanFacebook' => $facebookValuesTahunan,
            'dataTahunanInstagram' => $instagramValuesTahunan,
            'dataTahunanWebRtp' => $rtpValuesBulanan,
            'dataTahunanWebBuktiJp' => $buktiJpValuesBulanan,
            'dataTahunanWebLivechat' => $livechatValuesBulanan,
            'rata2HariValuesTahunan' => $rata2HariValuesTahunan,
            'rata2MingguValuesTahunan' => $rata2MingguValuesTahunan,
            'labelHarian' => $labelHarian,
            'labelMingguan' => $labelMingguan,
            'labelBulanan' => $labelBulanan,
            'labelTahunan' => $labelTahunan,
            // 'content' => 'Ini adalah contoh PDF yang di-generate menggunakan dompdf dan Laravel.'
        ];

        // Data yang akan Anda kirimkan ke tampilan




        return view('dashboard.pdf.laporanrekapwebnew', $data);

        // // Membuat instance dari Dompdf
        // $dompdf = new Dompdf();

        // // Render view menjadi HTML
        // $html = view('dashboard.pdf.laporanrekapweb', $data)->render();

        // // Memasukkan HTML ke dalam Dompdf
        // $dompdf->loadHtml($html);

        // // (Opsional) Atur ukuran dan orientasi halaman
        // $dompdf->setPaper('A4', 'landscape');

        // // Render PDF
        // $dompdf->render();

        // $judul = $target . ' Website' . $datas[0]->bulan . ' ' . $datas[0]->bulan;

        // // Mengirimkan PDF sebagai response ke browser
        // return $dompdf->stream($judul);
    }




    public function generateExcelRekapBio(String $id)
    {
        $target = $id;
        $rekapBio = SumBioHarian::where('nama_team', $target)->get();
        $rekapBioMingguan = SumBioMingguan::where('nama_team', $target)->get();
        $rekapBioBulanan = SumBioBulanan::where('nama_team', $target)->get();
        $rekapBioTahunan = SumBioTahunan::where('nama_team', $target)->get();
        $dataArray = [];
        $dataArray[] = ["No", "hari", "Nama Team", "Biotrack", "Login", "Daftar", "Whatsapp", "Facebook", "Instagram", "Livestream", "website_grup"];
        $dataArrayMingguan = [];
        $dataArrayMingguan[] = ["No", "tanggal", "Nama Team", "Biotrack", "Login", "Daftar", "Whatsapp", "Facebook", "Instagram", "Livestream", "website_grup"];

        $dataArrayBulanan = [];
        $dataArrayBulanan[] = ["No", "bulan", "Nama Team", "Biotrack", "Login", "Daftar", "Whatsapp", "Facebook", "Instagram", "Livestream", "website_grup", "rata2_hari", "rata2_minggu"];
        $dataArrayTahunan = [];
        $dataArrayTahunan[] = ["No", "bulan", "Nama Team", "Biotrack", "Login", "Daftar", "Whatsapp", "Facebook", "Instagram", "Livestream", "website_grup", "rata2_hari", "rata2_minggu"];

        foreach ($rekapBio as $index => $spv) {
            $rowData = [
                $index + 1,
                $spv->hari,
                $spv->nama_team,
                $spv->biotrack,
                $spv->login,
                $spv->daftar,
                $spv->whatsapp,
                $spv->facebook,
                $spv->instagram,
                $spv->livestream,
                $spv->website_grup
            ];
            $dataArray[] = $rowData;
        }

        foreach ($rekapBioMingguan as $index => $spv2) {
            $rowDataminggu = [
                $index + 1,
                $spv2->minggu,
                $spv2->nama_team,
                $spv2->biotrack,
                $spv2->login,
                $spv2->daftar,
                $spv2->whatsapp,
                $spv2->facebook,
                $spv2->instagram,
                $spv2->livestream,
                $spv2->website_grup
            ];
            $dataArrayMingguan[] = $rowDataminggu;
        }

        foreach ($rekapBioBulanan as $index => $spv3) {
            $rowDatabulan = [
                $index + 1,
                $spv3->bulan,
                $spv3->nama_team,
                $spv3->biotrack,
                $spv3->login,
                $spv3->daftar,
                $spv3->whatsapp,
                $spv3->facebook,
                $spv3->instagram,
                $spv3->livestream,
                $spv3->website_grup,
                $spv3->rata2_hari,
                $spv3->rata2_minggu
            ];
            $dataArrayBulanan[] = $rowDatabulan;
        }
        foreach ($rekapBioTahunan as $index => $spv4) {
            $rowDataTahun = [
                $index + 1,
                $spv4->tahun,
                $spv4->nama_team,
                $spv4->biotrack,
                $spv4->login,
                $spv4->daftar,
                $spv4->whatsapp,
                $spv4->facebook,
                $spv4->instagram,
                $spv4->livestream,
                $spv4->website_grup,
                $spv4->rata2_hari,
                $spv4->rata2_minggu
            ];
            $dataArrayTahunan[] = $rowDataTahun;
        }

        return response()->json([
            'data1' => $dataArray,
            'data2' => $dataArrayMingguan,
            'data3' => $dataArrayBulanan,
            'data4' => $dataArrayTahunan,
        ], Response::HTTP_OK);
    }

    public function generateExcelRekapWeb(String $id)
    {
        // if ($id) {
        $target = $id;
        $rekapBio = SumWebHarian::where('nama_team', $target)->get();
        $rekapBioMingguan = SumWebMingguan::where('nama_team', $target)->get();
        $rekapBioBulanan = SumWebBulanan::where('nama_team', $target)->get();
        $rekapBioTahunan = SumWebTahunan::where('nama_team', $target)->get();


        //     $dataArray[] = [
        //         ["No","webtrack", "Nama Team", "Daftar", "Whatsapp", "Facebook", "Instagram", "Rtp", "Bukti_JP", "Livechat"],
        //         [$rekapBio->no,$rekapBio->nama_team, $rekapBio->nama_team, $rekapBio->daftar, $rekapBio->whatsapp, $rekapBio->facebook, $rekapBio->instagram, $rekapBio->rtp, $rekapBio->bukti_jp, $rekapBio->livechat]
        //     ];
        // } else {
        // $rekapBio = RekapWeb::get();

        $dataArray = [];
        $dataArray[] = ["No", "Hari", "Nama Team", "Webtrack", "Daftar", "Whatsapp", "Facebook", "Instagram", "Rtp", "Bukti_JP", "Livechat", "Livestream"];

        $dataArrayMingguan = [];
        $dataArrayMingguan[] = ["No", "Hari", "Nama Team", "Webtrack", "Daftar", "Whatsapp", "Facebook", "Instagram", "Rtp", "Bukti_JP", "Livechat", "Livestream"];

        $dataArrayBulanan = [];
        $dataArrayBulanan[] = ["No", "Bulan", "Nama Team", "Webtrack", "Daftar", "Whatsapp", "Facebook", "Instagram", "Rtp", "Bukti_JP", "Livechat", "Livestream", "Rata2 Per hari", "Rata2 Per Minggu"];
        $dataArrayTahunan = [];
        $dataArrayTahunan[] = ["No", "Bulan", "Nama Team", "Webtrack", "Daftar", "Whatsapp", "Facebook", "Instagram", "Rtp", "Bukti_JP", "Livechat", "Livestream", "Rata2 Per hari", "Rata2 Per Minggu"];

        foreach ($rekapBio as $index => $spv) {
            $rowData = [
                $index + 1,
                $spv->hari,
                $spv->nama_team,
                $spv->webtrack,
                $spv->daftar,
                $spv->whatsapp,
                $spv->facebook,
                $spv->instagram,
                $spv->rtp,
                $spv->bukti_jp,
                $spv->livechat,
                $spv->livestream
            ];
            $dataArray[] = $rowData;
        }

        foreach ($rekapBioMingguan as $index => $spv2) {
            $rowDataMinggu = [
                $index + 1,
                $spv2->minggu,
                $spv2->nama_team,
                $spv2->webtrack,
                $spv2->daftar,
                $spv2->whatsapp,
                $spv2->facebook,
                $spv2->instagram,
                $spv2->rtp,
                $spv2->bukti_jp,
                $spv2->livechat,
                $spv2->livestream
            ];
            $dataArrayMingguan[] = $rowDataMinggu;
        }


        foreach ($rekapBioBulanan as $index => $spv3) {
            $rowDatabulan = [
                $index + 1,
                $spv3->bulan,
                $spv3->nama_team,
                $spv3->webtrack,
                $spv3->daftar,
                $spv3->whatsapp,
                $spv3->facebook,
                $spv3->instagram,
                $spv3->rtp,
                $spv3->bukti_jp,
                $spv3->livechat,
                $spv3->livestream,
                $spv3->rata2_hari,
                $spv3->rata2_minggu
            ];
            $dataArrayBulanan[] = $rowDatabulan;
        }

        foreach ($rekapBioTahunan as $index => $spv4) {
            $rowDatatahun = [
                $index + 1,
                $spv4->tahun,
                $spv4->nama_team,
                $spv4->webtrack,
                $spv4->daftar,
                $spv4->whatsapp,
                $spv4->facebook,
                $spv4->instagram,
                $spv4->rtp,
                $spv4->bukti_jp,
                $spv4->livechat,
                $spv4->livestream,
                $spv4->rata2_hari,
                $spv4->rata2_minggu
            ];
            $dataArrayTahunan[] = $rowDatatahun;
        }

        return response()->json([
            'data1' => $dataArray,
            'data2' => $dataArrayMingguan,
            'data3' => $dataArrayBulanan,
            'data4' => $dataArrayTahunan
        ], Response::HTTP_OK);
    }



    //     $rekapBio = RekapWeb::get();

    //     $dataArray = [];
    //     $dataArray[] = ["No", "Nama Team", "Daftar", "Whatsapp", "Facebook", "Instagram", "Rtp", "Bukti_JP", "Livechat"];

    //     foreach ($rekapBio as $index => $spv) {
    //         $rowData = [
    //             $index + 1,
    //             $spv->nama_team,
    //             $spv->daftar,
    //             $spv->whatsapp,
    //             $spv->facebook,
    //             $spv->instagram,
    //             $spv->rtp,
    //             $spv->bukti_jp,
    //             $spv->livechat
    //         ];
    //         $dataArray[] = $rowData;
    //     }

    //     return response()->json($dataArray, Response::HTTP_OK);
    // }
}
