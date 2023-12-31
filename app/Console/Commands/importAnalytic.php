<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Carbon\Carbon;
use App\Models\SumBioHarian;
use App\Models\SumWebHarian;
use App\Models\SumBioMingguan;
use App\Models\SumWebMingguan;
use App\Models\SumBioBulanan;
use App\Models\SumWebBulanan;
use App\Models\SumBioTahunan;
use App\Models\SumWebTahunan;
use App\Models\Bo_Link;
use Illuminate\Support\Facades\Config;
use App\Models\SumBio;
use App\Models\SumWeb;



class importAnalytic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:analytic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically export data ke database.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Ambil nilai visitweb dari sumber yang sesuai
        $now = Carbon::now();
        $tanggalHariIni = now()->day;
        $namabulan =  $now->format('F');
        if ($namabulan == 'January') {
            $namabulan = 'Januari';
        } else if ($namabulan == 'February') {
            $namabulan = 'Februari';
        } else if ($namabulan == 'March') {
            $namabulan = 'Maret';
        } else if ($namabulan == 'April') {
            $namabulan = 'April';
        } else if ($namabulan == 'May') {
            $namabulan = 'Mei';
        } else if ($namabulan == 'June') {
            $namabulan = 'Juni';
        } else if ($namabulan == 'July') {
            $namabulan = 'Juli';
        } else if ($namabulan == 'August') {
            $namabulan = 'Agustus';
        } else if ($namabulan == 'September') {
            $namabulan = 'September';
        } else if ($namabulan == 'October') {
            $namabulan = 'Oktober';
        } else if ($namabulan == 'November') {
            $namabulan = 'November';
        } else {
            $namabulan = 'Desember';
        }
        $tahun = $now->endOfMonth()->year;
        $hariini = $now->format('Y-m-d');
        $akhirhari = $now->endOfYear()->format('Y-m-d');
        $enddate =  $now->endOfMonth()->day;
        $startOfYear = now()->startOfYear()->format('Y-m-d');




        // $namaTimArray = Bo_Link::distinct('nama_team')->pluck('nama_team')->toArray();
        $namaTimArray = Bo_Link::pluck('nama_team')->toArray();
        foreach ($namaTimArray as $teamToProcess) {

            //data sumbio
            $data = SumBio::where('nama_team', $teamToProcess)->first();
            $biotrack = $data->biotrack;
            $login = $data->login;
            $daftar = $data->daftar;
            $whatsapp = $data->whatsapp;
            $facebook = $data->facebook;
            $instagram = $data->instagram;
            $livestream = $data->livestream;
            $website_grup = $data->website_grup;


            //datasumweb
            $data = SumWeb::where('nama_team', $teamToProcess)->first();
            $webtrack = $data->webtrack;
            $webdaftar = $data->daftar;
            $webwhatsapp = $data->whatsapp;
            $webfacebook = $data->facebook;
            $webinstagram = $data->instagram;
            $rtp = $data->rtp;
            $bukti_jp = $data->bukti_jp;
            $livechat = $data->livechat;
            $livestreamweb = $data->livestream;



            // Simpan nilai visitweb ke dalam database
            if ($tanggalHariIni == 1) {

                SumBioHarian::where('nama_team', $teamToProcess)->create([
                    'hari' => $tanggalHariIni,
                    'nama_team' => $teamToProcess,
                    'biotrack' =>  $biotrack,
                    'login' =>  $login,
                    'daftar' =>  $daftar,
                    'whatsapp' =>  $whatsapp,
                    'facebook' =>  $facebook,
                    'instagram' =>  $instagram,
                    'livestream' =>  $livestream,
                    'website_grup' =>  $website_grup,
                    'created_at' => now()
                ]);

                SumWebHarian::where('nama_team', $teamToProcess)->create([
                    'hari' => $tanggalHariIni,
                    'nama_team' => $teamToProcess,
                    'webtrack' =>  $webtrack,
                    'daftar' =>  $webdaftar,
                    'whatsapp' =>  $webwhatsapp,
                    'facebook' =>  $webfacebook,
                    'instagram' =>  $webinstagram,
                    'rtp' =>  $rtp,
                    'bukti_jp' => $bukti_jp,
                    'livechat' => $livechat,
                    'livestream' => $livestreamweb,
                    'created_at' => now()
                ]);
                //terakhir setelah post 
                SumBio::where('nama_team', $teamToProcess)->update([
                    'nama_team' => $teamToProcess,
                    'biotrack' =>  '0',
                    'login' =>  '0',
                    'daftar' =>  '0',
                    'whatsapp' =>  '0',
                    'facebook' =>  '0',
                    'instagram' =>  '0',
                    'livestream' =>  '0',
                    'website_grup' =>  '0',
                ]);

                SumWeb::where('nama_team', $teamToProcess)->update([
                    'nama_team' => $teamToProcess,
                    'webtrack' =>  '0',
                    'daftar' =>  '0',
                    'whatsapp' =>  '0',
                    'facebook' =>  '0',
                    'instagram' =>  '0',
                    'rtp' =>  '0',
                    'bukti_jp' => '0',
                    'livechat' => '0',
                    'livestream' => '0',
                ]);
            } else {
                $lastData = SumBioHarian::where('nama_team', $teamToProcess)
                    ->orderBy('created_at', 'desc')
                    ->get();
                $lastDataBioTrack = $lastData->sum('biotrack');
                $lastLogin = $lastData->sum('login');
                $lastDaftar = $lastData->sum('daftar');
                $lastWhatsapp = $lastData->sum('whatsapp');
                $lastFacebook = $lastData->sum('facebook');
                $lastInstagram = $lastData->sum('instagram');
                $lastlivestream = $lastData->sum('livestream');
                $lastWebsite_grup = $lastData->sum('website_grup');


                //recentdata
                $recentDatabiotrack = $biotrack - $lastDataBioTrack;
                $recentDatalogin = $login - $lastLogin;
                $recentDatadaftar  = $daftar - $lastDaftar;
                $recentDatawhatsapp  = $whatsapp - $lastWhatsapp;
                $recentDatafacebook  = $facebook - $lastFacebook;
                $recentDatainstagram  = $instagram - $lastInstagram;
                $recentDatalivestream  = $livestream - $lastlivestream;
                $recentDatawebsite_grup  = $website_grup - $lastWebsite_grup;
                SumBioHarian::where('nama_team', $teamToProcess)->create([
                    'hari' => $tanggalHariIni,
                    'nama_team' => $teamToProcess,
                    'biotrack' =>  $recentDatabiotrack,
                    'login' =>  $recentDatalogin,
                    'daftar' =>  $recentDatadaftar,
                    'whatsapp' =>  $recentDatawhatsapp,
                    'facebook' =>  $recentDatafacebook,
                    'instagram' =>  $recentDatainstagram,
                    'livestream' =>  $recentDatalivestream,
                    'website_grup' =>  $recentDatawebsite_grup,
                    'created_at' => now()
                ]);


                //datalasttable website
                $lastwebdata = SumWebHarian::where('nama_team', $teamToProcess)
                    ->orderBy('created_at', 'desc')
                    ->get();
                $lastWebTrack = $lastwebdata->sum('webtrack');
                $lastwebDaftar = $lastwebdata->sum('daftar');
                $lastwebwhatsapp = $lastwebdata->sum('whatsapp');
                $lastwebfacebook = $lastwebdata->sum('facebook');
                $lastwebinstagram = $lastwebdata->sum('instagram');
                $lastwebRtp = $lastwebdata->sum('rtp');
                $lastwebwebsite_grup = $lastwebdata->sum('bukti_jp');
                $lastwebLivechat = $lastwebdata->sum('livechat');
                $lastweblivestream = $lastwebdata->sum('livestream');

                //recentdataweb
                $recentwebDatatrack = $webtrack - $lastWebTrack;
                $recentwebDataDaftar = $webdaftar - $lastwebDaftar;
                $recentwebDataWhatsapp  = $webwhatsapp - $lastwebwhatsapp;
                $recentwebDataFacebook  = $webfacebook - $lastwebfacebook;
                $recentwebDataInstagram  = $webinstagram - $lastwebinstagram;
                $recentwebDataRtp  = $rtp - $lastwebRtp;
                $recentwebDataBuktiJp  = $bukti_jp - $lastwebwebsite_grup;
                $recentwebDataLivechat  = $livechat - $lastwebLivechat;
                $recentwebDatalivestream  = $livestream - $lastweblivestream;

                SumWebHarian::where('nama_team', $teamToProcess)->create([
                    'hari' => $tanggalHariIni,
                    'nama_team' => $teamToProcess,
                    'webtrack' =>  $recentwebDatatrack,
                    'daftar' =>  $recentwebDataDaftar,
                    'whatsapp' =>  $recentwebDataWhatsapp,
                    'facebook' =>  $recentwebDataFacebook,
                    'instagram' =>  $recentwebDataInstagram,
                    'rtp' =>  $recentwebDataRtp,
                    'bukti_jp' => $recentwebDataBuktiJp,
                    'livechat' => $recentwebDataLivechat,
                    'livestream' => $recentwebDatalivestream,
                    'created_at' => now()
                ]);
            }
            if ($tanggalHariIni == 7) {
                SumBioMingguan::where('nama_team', $teamToProcess)->create([
                    'minggu' => $tanggalHariIni,
                    'nama_team' => $teamToProcess,
                    'biotrack' =>  $biotrack,
                    'login' =>  $login,
                    'daftar' =>  $daftar,
                    'whatsapp' =>  $whatsapp,
                    'facebook' =>  $facebook,
                    'instagram' =>  $instagram,
                    'website_grup' =>  $website_grup,
                    'livestream' =>  $livestream,
                    'created_at' => now(),
                ]);
                SumWebMingguan::where('nama_team', $teamToProcess)->create([
                    'minggu' => $tanggalHariIni,
                    'nama_team' => $teamToProcess,
                    'webtrack' =>  $webtrack,
                    'daftar' =>  $webdaftar,
                    'whatsapp' =>  $webwhatsapp,
                    'facebook' =>  $webfacebook,
                    'instagram' =>  $webinstagram,
                    'rtp' =>  $rtp,
                    'bukti_jp' => $bukti_jp,
                    'livechat' => $livechat,
                    'livestream' => $livestreamweb,
                    'created_at' => now()
                ]);
            }
            if ($tanggalHariIni == 14 || $tanggalHariIni == 21 || $tanggalHariIni == $enddate) {
                //datalasttableMingguan
                $lastDatamingguan = SumBioMingguan::where('nama_team', $teamToProcess)
                    ->orderBy('created_at', 'desc')
                    ->get();
                $lastDataBioTrackMingguan = $lastDatamingguan->sum('biotrack');
                $lastLoginMingguan = $lastDatamingguan->sum('login');
                $lastDaftarMingguan = $lastDatamingguan->sum('daftar');
                $lastWhatsappMingguan = $lastDatamingguan->sum('whatsapp');
                $lastFacebookMingguan = $lastDatamingguan->sum('facebook');
                $lastInstagramMingguan = $lastDatamingguan->sum('instagram');
                $lastlivestreamMingguan = $lastDatamingguan->sum('livestream');
                $lastWebsite_grupMingguan = $lastDatamingguan->sum('website_grup');

                //recentdata
                $recentDatabiotrackMingguan = $biotrack - $lastDataBioTrackMingguan;
                $recentDataloginMingguan = $login - $lastLoginMingguan;
                $recentDatadaftarMingguan  = $daftar - $lastDaftarMingguan;
                $recentDatawhatsappMingguan  = $whatsapp - $lastWhatsappMingguan;
                $recentDatafacebookMingguan  = $facebook - $lastFacebookMingguan;
                $recentDatainstagramMingguan  = $instagram - $lastInstagramMingguan;
                $recentDatalivestreamMingguan  = $instagram - $lastlivestreamMingguan;
                $recentDatawebsite_grupMingguan  = $website_grup - $lastWebsite_grupMingguan;
                SumBioMingguan::where('nama_team', $teamToProcess)->create([
                    'minggu' => $tanggalHariIni,
                    'nama_team' => $teamToProcess,
                    'biotrack' =>  $recentDatabiotrackMingguan,
                    'login' =>  $recentDataloginMingguan,
                    'daftar' =>  $recentDatadaftarMingguan,
                    'whatsapp' =>  $recentDatawhatsappMingguan,
                    'facebook' =>  $recentDatafacebookMingguan,
                    'instagram' =>  $recentDatainstagramMingguan,
                    'livestream' =>  $recentDatalivestreamMingguan,
                    'website_grup' =>  $recentDatawebsite_grupMingguan,
                    'created_at' => now()
                ]);

                //datalasttable website mingguan
                $lastwebdataMingguan = SumWebMingguan::where('nama_team', $teamToProcess)
                    ->orderBy('created_at', 'desc')
                    ->get();
                $lastWebTrackMingguan = $lastwebdataMingguan->sum('webtrack');
                $lastwebDaftarMingguan = $lastwebdataMingguan->sum('daftar');
                $lastwebwhatsappMingguan = $lastwebdataMingguan->sum('whatsapp');
                $lastwebfacebookMingguan = $lastwebdataMingguan->sum('facebook');
                $lastwebinstagramMingguan = $lastwebdataMingguan->sum('instagram');
                $lastweblivestreamMingguan = $lastwebdataMingguan->sum('livestream');
                $lastwebRtpMingguan = $lastwebdataMingguan->sum('rtp');
                $lastwebwebsite_grupMingguan = $lastwebdataMingguan->sum('bukti_jp');
                $lastwebLivechatMingguan = $lastwebdataMingguan->sum('livechat');



                //recentdatawebMingguan
                $recentwebDatatrackMingguan = $webtrack - $lastWebTrackMingguan;
                $recentwebDataDaftarMingguan = $webdaftar - $lastwebDaftarMingguan;
                $recentwebDataWhatsappMingguan = $webwhatsapp - $lastwebwhatsappMingguan;
                $recentwebDataFacebookMingguan = $webfacebook - $lastwebfacebookMingguan;
                $recentwebDataInstagramMingguan = $webinstagram - $lastwebinstagramMingguan;
                $recentwebDataRtpMingguan = $rtp - $lastwebRtpMingguan;
                $recentwebDatalivestreamMingguan = $rtp - $lastweblivestreamMingguan;
                $recentwebDataBuktiJpMingguan = $bukti_jp - $lastwebwebsite_grupMingguan;
                $recentwebDataLivechatMingguan = $livechat - $lastwebLivechatMingguan;
                SumWebMingguan::where('nama_team', $teamToProcess)->create([
                    'minggu' => $tanggalHariIni,
                    'nama_team' => $teamToProcess,
                    'webtrack' =>  $recentwebDatatrackMingguan,
                    'daftar' =>  $recentwebDataDaftarMingguan,
                    'whatsapp' =>  $recentwebDataWhatsappMingguan,
                    'facebook' =>  $recentwebDataFacebookMingguan,
                    'instagram' =>  $recentwebDataInstagramMingguan,
                    'rtp' =>  $recentwebDataRtpMingguan,
                    'livestream' =>  $recentwebDatalivestreamMingguan,
                    'bukti_jp' => $recentwebDataBuktiJpMingguan,
                    'livechat' => $recentwebDataLivechatMingguan,
                    'created_at' => now()
                ]);
            }
            if ($tanggalHariIni == $enddate) {

                //average data
                $bariswebharian = SumWebHarian::where('nama_team', $teamToProcess)->count(); // Ganti SumWeb dengan model yang sesuai
                $avgvisitorwebharian = SumWebHarian::where('nama_team', $teamToProcess)->sum('webtrack'); // Ganti 'jumlah_visitor' dengan kolom yang sesuai
                $bariswebmingguan = SumWebMingguan::where('nama_team', $teamToProcess)->count(); // Ganti SumWeb dengan model yang sesuai
                $avgvisitorwebmingguan = SumWebMingguan::where('nama_team', $teamToProcess)->sum('webtrack'); // Ganti 'jumlah_visitor' dengan kolom yang sesuai
                $rata2hariweb = $avgvisitorwebharian / $bariswebharian;
                $rata2mingguweb =  $avgvisitorwebmingguan / $bariswebmingguan;
                $barisBioharian = SumBioHarian::where('nama_team', $teamToProcess)->count(); // Ganti SumBio dengan model yang sesuai
                $avgvisitorBioharian = SumBioHarian::where('nama_team', $teamToProcess)->sum('biotrack'); // Ganti 'jumlah_visitor' dengan kolom yang sesuai
                $barisBiomingguan = SumBioMingguan::where('nama_team', $teamToProcess)->count(); // Ganti SumBio dengan model yang sesuai
                $avgvisitorBiomingguan = SumBioMingguan::where('nama_team', $teamToProcess)->sum('biotrack'); // Ganti 'jumlah_visitor' dengan kolom yang sesuai
                $rata2hariBio = $avgvisitorBioharian / $barisBioharian;
                $rata2mingguBio =  $avgvisitorBiomingguan / $barisBiomingguan;

                SumBioBulanan::where('nama_team', $teamToProcess)->create([
                    'bulan' => $namabulan,
                    'nama_team' => $teamToProcess,
                    'biotrack' =>  $biotrack,
                    'login' =>  $login,
                    'daftar' =>  $daftar,
                    'whatsapp' =>  $whatsapp,
                    'facebook' =>  $facebook,
                    'instagram' =>  $instagram,
                    'livestream' =>  $livestream,
                    'website_grup' =>  $website_grup,
                    'rata2_hari' => $rata2hariBio,
                    'rata2_minggu' => $rata2mingguBio,
                    'created_at' => now()
                ]);

                SumWebBulanan::where('nama_team', $teamToProcess)->create([
                    'bulan' => $namabulan,
                    'nama_team' => $teamToProcess,
                    'webtrack' =>  $webtrack,
                    'daftar' =>  $webdaftar,
                    'whatsapp' =>  $webwhatsapp,
                    'facebook' =>  $webfacebook,
                    'instagram' =>  $webinstagram,
                    'rtp' =>  $rtp,
                    'bukti_jp' => $bukti_jp,
                    'livechat' => $livechat,
                    'livestream' => $livestreamweb,
                    'rata2_hari' => $rata2hariweb,
                    'rata2_minggu' => $rata2mingguweb,
                    'created_at' => now()
                ]);
            }
            if ($hariini == $akhirhari) {
                $dataBioBulanan = SumBioBulanan::where('nama_team', $teamToProcess)->get();
                $dataWebBulanan = SumWebBulanan::where('nama_team', $teamToProcess)->get();

                $lastDataBioTrackBulanan = $dataBioBulanan->sum('biotrack');
                $lastLoginBulanan = $dataBioBulanan->sum('login');
                $lastDaftarBulanan = $dataBioBulanan->sum('daftar');
                $lastWhatsappBulanan = $dataBioBulanan->sum('whatsapp');
                $lastFacebookBulanan = $dataBioBulanan->sum('facebook');
                $lastInstagramBulanan = $dataBioBulanan->sum('instagram');
                $lastlivestreamBulanan = $dataBioBulanan->sum('livestream');
                $lastWebsite_grupBulanan = $dataBioBulanan->sum('website_grup');
                $lastrata2_hari_Bulanan = $dataBioBulanan->sum('rata2_hari');
                $lastrata2_minggu_Bulanan = $dataBioBulanan->sum('rata2_minggu');

                //recentdatawebBulanan
                $recentwebDatatrackBulanan = $dataWebBulanan->sum('webtrack');
                $recentwebDataDaftarBulanan = $dataWebBulanan->sum('daftar');
                $recentwebDataWhatsappBulanan = $dataWebBulanan->sum('whatsapp');
                $recentwebDataFacebookBulanan = $dataWebBulanan->sum('facebook');
                $recentwebDataInstagramBulanan = $dataWebBulanan->sum('instagram');
                $recentwebDataRtpBulanan = $dataWebBulanan->sum('rtp');
                $recentwebDataBuktiJpBulanan = $dataWebBulanan->sum('bukti_jp');
                $recentwebDataLivechatBulanan = $dataWebBulanan->sum('livechat');
                $recentwebDatalivestreamBulanan = $dataWebBulanan->sum('livestream');
                $recentrata2_hari_Bulanan = $dataWebBulanan->sum('rata2_hari');
                $recentmingguBulanan = $dataWebBulanan->sum('rata2_minggu');

                SumBioTahunan::where('nama_team', $teamToProcess)->create([
                    'tahun' => $tahun,
                    'nama_team' => $teamToProcess,
                    'biotrack' =>  $lastDataBioTrackBulanan,
                    'login' =>  $lastLoginBulanan,
                    'daftar' =>  $lastDaftarBulanan,
                    'whatsapp' =>  $lastWhatsappBulanan,
                    'facebook' =>  $lastFacebookBulanan,
                    'instagram' =>  $lastInstagramBulanan,
                    'livestream' =>  $lastlivestreamBulanan,
                    'website_grup' =>  $lastWebsite_grupBulanan,
                    'rata2_hari' => $lastrata2_hari_Bulanan,
                    'rata2_minggu' => $lastrata2_minggu_Bulanan,
                    'created_at' => now()
                ]);
                SumWebTahunan::where('nama_team', $teamToProcess)->create([
                    'tahun' => $tahun,
                    'nama_team' => $teamToProcess,
                    'webtrack' =>  $recentwebDatatrackBulanan,
                    'daftar' =>  $recentwebDataDaftarBulanan,
                    'whatsapp' =>  $recentwebDataWhatsappBulanan,
                    'facebook' =>  $recentwebDataFacebookBulanan,
                    'instagram' =>  $recentwebDataInstagramBulanan,
                    'rtp' =>  $recentwebDataRtpBulanan,
                    'bukti_jp' => $recentwebDataBuktiJpBulanan,
                    'livechat' => $recentwebDataLivechatBulanan,
                    'livestream' => $recentwebDatalivestreamBulanan,
                    'rata2_hari' => $recentrata2_hari_Bulanan,
                    'rata2_minggu' => $recentmingguBulanan,
                    'created_at' => now()
                ]);
            }
        }


        //habis truncate jadikan  
        if ($tanggalHariIni == 1) {
            SumWebHarian::truncate();
            SumBioHarian::truncate();
        }

        if ($tanggalHariIni == 1) {
            SumWebMingguan::truncate();
            SumBioMingguan::truncate();
        }

        if ($hariini == $startOfYear) {
            SumWebBulanan::truncate();
            SumBioBulanan::truncate();
        }
    }
}
