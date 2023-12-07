<?php

namespace App\Http\Controllers;

use App\Models\Bo_Link;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\SumBio;
use App\Models\LiveStream;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;


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


    public function sitemapbosmika()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://bosmika.com/index.php</loc>
           <lastmod>2023-11-02</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }


    public function sitemapboszoya()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://boszoya.com/index.php</loc>
           <lastmod>2023-08-20</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }
    public function sitemapbosmega()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://bosmega.com/index.php</loc>
           <lastmod>2023-08-20</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }
    public function sitemapbosgema()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://bosgema.com/index.php</loc>
           <lastmod>2023-08-20</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }
    public function sitemapboslinda()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://boslinda.com/index.php</loc>
           <lastmod>2023-08-20</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }

    public function sitemapboscitra()
    {
        $xmlContent = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
           <loc>https://boscitra.com/index.php</loc>
           <lastmod>2023-09-15</lastmod>
           <changefreq>daily</changefreq>
           <priority>1.0</priority>
        </url>
     </urlset>';

        return Response::make($xmlContent, 200)->header('Content-Type', 'text/xml');
    }


    public function boszoya()
    {
        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos zoya';
            $favicon = 'zoya-icon_0.png';
            $nama_bio = 'zoya';
            $css = "assetszoyaweb";
            $marquee = "Melayani dengan sepenuh hati, Saya Admin BOS ZOYA memiliki komitmen untuk memberikan pelayanan secara profesional sebagai Admin Collection Terpercaya untuk selalu hadir memberikan pelayanan paling the best.";
            $quote = "Hadir untuk Anda dalam menyuguhkan beragam informasi penting, BOS ZOYA selalu berkomitmen mengedepankan tindakan dengan respon yang cepat yang sudah menjadi sebuah prioritas bagi saya selaku Admin Profesional.";
            $medsos = "Beragam informasi penting akan selalu Bos Zoya kembangkan khususnya pada platform media sosial yang selalu menyajikan beragam kebutuhan penting untuk Anda.";
            $cepat = "Admin Collection Profesional memiliki tanggung jawabyang sudah menjadi sebuah prioritas utama dalam memberikan setiap tindakan dengan cepat dan responsif. Dengan sigap, Bos Zoya akan selalu memberikan informasi yang berharga dan pastinya berguna sekali untuk langkah selanjutnya.";
            $informasi = "Admin Bos Zoya merupakan sebuah sumber informasi terpercaya dan terpenting untuk Anda dalam mencari tahu berbagai pengetahuan dan memperluas wawasan.";
            $sumberProfesional = "Bos Zoya akan memastikan semua tanggung jawabnya berjalan dengan cukup optimal dan efisien pastinya. Pengalaman dan pengetahuan dari Bos Zoya tentunya akan selalu disampaikan secara penuh untuk Anda, agar memiliki manfaat dan pengalaman terbaik terhadap layanan ini.";
            $adminProfesional = "Bos Zoya memiliki kewajiban dalam memberikan rasa kepercayaan yang paling baik dan berkesan ketika menginformasikan sesuatu harus didasari dengan rasa tanggung jawab yang tinggi.";
            $aktifjam = "Admin Bos Zoya akan selalu stand by selama 24 jam penuh dalam memberikan segala pelayanan seperti informasi, panduan, dan juga solusi dari setiap permasalahan yang terjadi untuk Anda.";
            $cp = "©Copyright 2023 - BOSZOYA right reserved";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();
            SumWeb::where('nama_team', $user)->increment('webtrack');
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos zoya';
            $nama_bio = 'zoya';
            $favicon = 'zoya-icon_0.png';
            $css = "assetszoyaweb";
            $marquee = "Melayani dengan sepenuh hati, Saya Admin BOS ZOYA memiliki komitmen untuk memberikan pelayanan secara profesional sebagai Admin Collection Terpercaya untuk selalu hadir memberikan pelayanan paling the best.";
            $quote = "Hadir untuk Anda dalam menyuguhkan beragam informasi penting, BOS ZOYA selalu berkomitmen mengedepankan tindakan dengan respon yang cepat yang sudah menjadi sebuah prioritas bagi saya selaku Admin Profesional.";
            $medsos = "Beragam informasi penting akan selalu Bos Zoya kembangkan khususnya pada platform media sosial yang selalu menyajikan beragam kebutuhan penting untuk Anda.";
            $cepat = "Admin Collection Profesional memiliki tanggung jawabyang sudah menjadi sebuah prioritas utama dalam memberikan setiap tindakan dengan cepat dan responsif. Dengan sigap, Bos Zoya akan selalu memberikan informasi yang berharga dan pastinya berguna sekali untuk langkah selanjutnya.";
            $informasi = "Admin Bos Zoya merupakan sebuah sumber informasi terpercaya dan terpenting untuk Anda dalam mencari tahu berbagai pengetahuan dan memperluas wawasan.";
            $sumberProfesional = "Bos Zoya akan memastikan semua tanggung jawabnya berjalan dengan cukup optimal dan efisien pastinya. Pengalaman dan pengetahuan dari Bos Zoya tentunya akan selalu disampaikan secara penuh untuk Anda, agar memiliki manfaat dan pengalaman terbaik terhadap layanan ini.";
            $adminProfesional = "Bos Zoya memiliki kewajiban dalam memberikan rasa kepercayaan yang paling baik dan berkesan ketika menginformasikan sesuatu harus didasari dengan rasa tanggung jawab yang tinggi.";
            $aktifjam = "Admin Bos Zoya akan selalu stand by selama 24 jam penuh dalam memberikan segala pelayanan seperti informasi, panduan, dan juga solusi dari setiap permasalahan yang terjadi untuk Anda.";
            $cp = "©Copyright 2023 - BOSZOYA right reserved";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        }
    }

    public function boscitra()
    {
        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos citra';
            $favicon = 'citra_icon_0.png';
            $nama_bio = 'citra';
            $css = "assetscitraweb";
            $marquee = "Bos citra admin terbaik yang selalu siap melayani kalian semua sepanjang hari dan memberikan solusi terupdate tentang dunia digital marketing.";
            $quote = "Bos citra seorang wanita karir yang bergerak di bidang pengembang perusahaan dengan memiliki ide-ide cemerlang. Tentu bukan hanya itu saja boscitra sudah banyak sekali melayani perusahaan besar yang berada di negara indonesia. Maka dari itu untuk skil bos atau admin citra tidak di ragukan lagi.";
            $medsos = "Media sosial juga menjadi penghubung untuk bos citra membagikan pengalaman atau informasi terbaru tentang dunia marketing. Dimana bisa kalian ikuti media sosial nya yaitu? Facebook, Instagram, TikTok, dan lain-lain. Karena akan banyak sekali ilmu yang bisa anda dapatkan.";
            $cepat = "Admin bos citra selalu menanggapi semua pengaduan dari berbagai member dengan respon yang sangat cepat dan tentu di layani oleh boscitra sendiri. Pelayanan profesional yang di berikan selama jam kerja bos citra tentu sudah banyak mendapatkan pujian atas kesopanan serta bantuan dari admin citra.";
            $informasi = "Mencari sumber informasi tentang digital marketing yang saat ini sedang viral kalian bisa mendapatkan nya dari sini. Bos citra sudah banyak mendapatkan sumber-sumber informasi yang valid dari berbagai sumber yang dapat di percaya hingga 90% valid.";
            $sumberProfesional = "Bos citra juga sering kali di sebut seorang admin yang sangat baik dan handal dengan kriteria profesional dalam menangani segala hal dengan sangat sabar dan tenang. Dalam bentuk masalah yang kalian alami tentu saja selalu ada solusi yang bisa bos citra berikan kepada kalian.";
            $adminProfesional = "Menjadi seorang admin terpercaya seorang bos citra mampu menyimpan semua rahasia atau data-data pribadi milik member yang sudah bergabung. Dalam komitmen moto bos citra menjadi admin yang terpercaya dalam dunia digital marketing selalu menjaga keamanan dan kenyamanan.";
            $aktifjam = "Pelayanan yang bisa bos citra berikan dalam waktu 24 jam penuh untuk semua konsumen yang ingin mengadukan komplainan, masalah website, hingga keuntungan. Kalian bisa kunjungi situs resmi bos citra, yang dimana sudah di sediakan livechat aktif dan di layani oleh orang asli bukan robot.";
            $cp = "©2023 BOSCITRA All Right Reserved";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();
            SumWeb::where('nama_team', $user)->increment('webtrack');
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos citra';
            $favicon = 'citra_icon_0.png';
            $nama_bio = 'citra';
            $css = "assetscitraweb";
            $marquee = "Bos citra admin terbaik yang selalu siap melayani kalian semua sepanjang hari dan memberikan solusi terupdate tentang dunia digital marketing.";
            $quote = "Bos citra seorang wanita karir yang bergerak di bidang pengembang perusahaan dengan memiliki ide-ide cemerlang. Tentu bukan hanya itu saja boscitra sudah banyak sekali melayani perusahaan besar yang berada di negara indonesia. Maka dari itu untuk skil bos atau admin citra tidak di ragukan lagi.";
            $medsos = "Media sosial juga menjadi penghubung untuk bos citra membagikan pengalaman atau informasi terbaru tentang dunia marketing. Dimana bisa kalian ikuti media sosial nya yaitu? Facebook, Instagram, TikTok, dan lain-lain. Karena akan banyak sekali ilmu yang bisa anda dapatkan.";
            $cepat = "Admin bos citra selalu menanggapi semua pengaduan dari berbagai member dengan respon yang sangat cepat dan tentu di layani oleh boscitra sendiri. Pelayanan profesional yang di berikan selama jam kerja bos citra tentu sudah banyak mendapatkan pujian atas kesopanan serta bantuan dari admin citra.";
            $informasi = "Mencari sumber informasi tentang digital marketing yang saat ini sedang viral kalian bisa mendapatkan nya dari sini. Bos citra sudah banyak mendapatkan sumber-sumber informasi yang valid dari berbagai sumber yang dapat di percaya hingga 90% valid.";
            $sumberProfesional = "Bos citra juga sering kali di sebut seorang admin yang sangat baik dan handal dengan kriteria profesional dalam menangani segala hal dengan sangat sabar dan tenang. Dalam bentuk masalah yang kalian alami tentu saja selalu ada solusi yang bisa bos citra berikan kepada kalian.";
            $adminProfesional = "Menjadi seorang admin terpercaya seorang bos citra mampu menyimpan semua rahasia atau data-data pribadi milik member yang sudah bergabung. Dalam komitmen moto bos citra menjadi admin yang terpercaya dalam dunia digital marketing selalu menjaga keamanan dan kenyamanan.";
            $aktifjam = "Pelayanan yang bisa bos citra berikan dalam waktu 24 jam penuh untuk semua konsumen yang ingin mengadukan komplainan, masalah website, hingga keuntungan. Kalian bisa kunjungi situs resmi bos citra, yang dimana sudah di sediakan livechat aktif dan di layani oleh orang asli bukan robot.";
            $cp = "©2023 BOSCITRA All Right Reserved";

            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        }
    }


    public function bosmega()
    {

        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos mega';
            $css = "assetsmegaweb";
            $nama_bio = 'mega';
            $marquee = "Bos Mega adalah salah satu sosok Admin Digital Content Profesional yang memberikan adanya layanan secara profesional kepada setiap penikmat konten di Indonesia.";
            $quote = "Seperti yang diketahui Bos Mega adalah sosok Admin Terbaik dan Terpercaya karena memberikan berbagai wawasan penting serta informatif kepada setiap penikmat konten yang ingin mencari tahu update tentang keuntungan yang menggiurkan setiap harinya.";
            $medsos = "Media Sosial Bos Mega selalu diupdate setiap harinya, cepat tanggap merupakan salah satu kelebihan yang ditanamkan kepada pelayanan dari Bos Mega, Anda dapat menikmati beragam informasi dari sumber terpercaya lewat media sosial Bos Mega.";
            $cepat = "Bos Mega selaku Admin Profesional Selalu memiliki prioritas tinggi dalam memberikan setiap pelayanan maksimal dan tercepat agar tidak membuang waktu Anda. Bos Mega selalu sigap dalam menjunjung tinggi rasa kepeduliaan kepada Anda agar dapat memiliki beragam pengetahuan.";
            $informasi = "Selaku Admin Profesional, Bos Mega merupakan salah satu sumber informasi paling valid dan dapat dipercaya oleh Anda. Dengan memilih Bos Mega, maka keputusan yang sudah Anda putuskan merupakan hal yang tepat dan benar.";
            $sumberProfesional = "Bos Mega adalah sosok Admin profesional yang akan memenuhi setiap kebutuhan Anda dan menguntungkan. Hal tersebut sudah dipertimbangkan dengan respon cepat tanggap dalam memberikan panduan kepada Anda. ";
            $adminProfesional = "Bos Mega memiliki kewajiban untuk mempersiapkan segala berita terupdate untuk Anda yang berasal dari sumber vali dan melalui berbagai perhitungan yang tepat dan matang.";
            $aktifjam = "Bos Mega selalu aktif selama 24 jam penuh, Hal tersebut untuk membantu Anda mendapatkan informasi maupun solusi yang cepat tanggap kapanpun dan dimanapun.";
            $cp = "BOSMEGA - Registered Copyright 2023";

            $favicon = 'mega-icon_0.png';
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();

            SumWeb::where('nama_team', $user)->increment('webtrack');
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos mega';
            $nama_bio = 'mega';
            $favicon = 'mega-icon_0.png';
            $css = "assetsmegaweb";
            $marquee = "Bos Mega adalah salah satu sosok Admin Digital Content Profesional yang memberikan adanya layanan secara profesional kepada setiap penikmat konten di Indonesia.";
            $quote = "Seperti yang diketahui Bos Mega adalah sosok Admin Terbaik dan Terpercaya karena memberikan berbagai wawasan penting serta informatif kepada setiap penikmat konten yang ingin mencari tahu update tentang keuntungan yang menggiurkan setiap harinya.";
            $medsos = "Media Sosial Bos Mega selalu diupdate setiap harinya, cepat tanggap merupakan salah satu kelebihan yang ditanamkan kepada pelayanan dari Bos Mega, Anda dapat menikmati beragam informasi dari sumber terpercaya lewat media sosial Bos Mega.";
            $cepat = "Bos Mega selaku Admin Profesional Selalu memiliki prioritas tinggi dalam memberikan setiap pelayanan maksimal dan tercepat agar tidak membuang waktu Anda. Bos Mega selalu sigap dalam menjunjung tinggi rasa kepeduliaan kepada Anda agar dapat memiliki beragam pengetahuan.";
            $informasi = "Selaku Admin Profesional, Bos Mega merupakan salah satu sumber informasi paling valid dan dapat dipercaya oleh Anda. Dengan memilih Bos Mega, maka keputusan yang sudah Anda putuskan merupakan hal yang tepat dan benar.";
            $sumberProfesional = "Bos Mega adalah sosok Admin profesional yang akan memenuhi setiap kebutuhan Anda dan menguntungkan. Hal tersebut sudah dipertimbangkan dengan respon cepat tanggap dalam memberikan panduan kepada Anda. ";
            $adminProfesional = "Bos Mega memiliki kewajiban untuk mempersiapkan segala berita terupdate untuk Anda yang berasal dari sumber vali dan melalui berbagai perhitungan yang tepat dan matang.";
            $aktifjam = "Bos Mega selalu aktif selama 24 jam penuh, Hal tersebut untuk membantu Anda mendapatkan informasi maupun solusi yang cepat tanggap kapanpun dan dimanapun.";
            $cp = "BOSMEGA - Registered Copyright 2023";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();

            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        }
    }


    public function bosgema()
    {

        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos gema';
            $nama_bio = 'gema';
            $favicon = 'gema-icon_0.png';
            $css = "assetsgemaweb";
            $marquee = "Bos Gema menghadirkan berbagai informasi dan solusi Terbaik untuk Anda yang ingin menambah sebuah pengetahuan terkait tips dan trik menarik.";
            $quote = "Ketahui lebih lanjut tentang Bos Gema agar selalu memperoleh informasi yang terbaru, karena Leader Admin Media Sosial ini mempunyai beragam cara untuk menambah wawasan informasi yang sangat luas.";
            $medsos = "Media Sosial Bos Gema selalu mengembangkan beragam informasi seputar solusi dan informasi yang sangat efektif dan efisisen kepada setiap member. Pastinya para member mempunyai beragam cara mendapatkan sebuah pengetahuan dari sumber yang jelas dan tepat.";
            $cepat = "Bos Gema selalu memberikan tindakan cepat dan optimal sesuai dengan kebutuhan clientnya yang selalu ingin mencari tahu lebih lanjut tentang beberapa data informasi penting yang selalu dibagikan setiap harinya di situs Bos Gema.";
            $informasi = "Situs Bos Gema merupakan sebuah pusat informasi yang valid dari sumber terpercaya dapat memberikan beragam berita terupdate setiap harinya dikhususkan kepada setiap client dari Bos Gema.";
            $sumberProfesional = "Bos Gema merupakan sesosok Admin Profesional yang selalu aktif memberikan kesan dan pengalaman terbaik kepada setiap membernya. Anda dapat menikmati beragam berita seperti perkembangan dari sebuah permainan yang menarik serta tips dan trik menarik lainnya kapanpun.";
            $adminProfesional = "Bos Gema menjadi salah satu Admin Terpercaya karena selalu menanamkan tanggung jawab dan menjadikannya sebuah prioritas agar senantiasa memiliki kepercayaan kepada setiap member.";
            $aktifjam = "Bos Gema mempunyai keunggulan terpenting pada setiap pelayannya, yaitu selalu aktif selama 24 jam penuh secara nonstop dalam memberikan sebuah service yang profesional serta efektif dan efisien.";
            $cp = "BOSGEMA 2023 - All Rights Reserved";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();

            SumWeb::where('nama_team', $user)->increment('webtrack');
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos gema';
            $css = "assetsgemaweb";
            $nama_bio = 'gema';
            $favicon = 'gema-icon_0.png';
            $marquee = "Bos Gema menghadirkan berbagai informasi dan solusi Terbaik untuk Anda yang ingin menambah sebuah pengetahuan terkait tips dan trik menarik.";
            $quote = "Ketahui lebih lanjut tentang Bos Gema agar selalu memperoleh informasi yang terbaru, karena Leader Admin Media Sosial ini mempunyai beragam cara untuk menambah wawasan informasi yang sangat luas.";
            $medsos = "Media Sosial Bos Gema selalu mengembangkan beragam informasi seputar solusi dan informasi yang sangat efektif dan efisisen kepada setiap member. Pastinya para member mempunyai beragam cara mendapatkan sebuah pengetahuan dari sumber yang jelas dan tepat.";
            $cepat = "Bos Gema selalu memberikan tindakan cepat dan optimal sesuai dengan kebutuhan clientnya yang selalu ingin mencari tahu lebih lanjut tentang beberapa data informasi penting yang selalu dibagikan setiap harinya di situs Bos Gema.";
            $informasi = "Situs Bos Gema merupakan sebuah pusat informasi yang valid dari sumber terpercaya dapat memberikan beragam berita terupdate setiap harinya dikhususkan kepada setiap client dari Bos Gema.";
            $sumberProfesional = "Bos Gema merupakan sesosok Admin Profesional yang selalu aktif memberikan kesan dan pengalaman terbaik kepada setiap membernya. Anda dapat menikmati beragam berita seperti perkembangan dari sebuah permainan yang menarik serta tips dan trik menarik lainnya kapanpun.";
            $adminProfesional = "Bos Gema menjadi salah satu Admin Terpercaya karena selalu menanamkan tanggung jawab dan menjadikannya sebuah prioritas agar senantiasa memiliki kepercayaan kepada setiap member.";
            $aktifjam = "Bos Gema mempunyai keunggulan terpenting pada setiap pelayannya, yaitu selalu aktif selama 24 jam penuh secara nonstop dalam memberikan sebuah service yang profesional serta efektif dan efisien.";
            $cp = "BOSGEMA 2023 - All Rights Reserved";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        }
    }


    public function bosmika()
    {

        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos mika';
            $nama_bio = 'mika';
            $favicon = 'mika-icon_0.png';
            $css = "assetsmikaweb";
            $marquee = "Bos Mika adalah Profesional admin yang tidak perlu di ragukan di industri ini. Dengan kemapuan analisa yang baik, Bos mika siap membantu member untuk meraih kemenangan setiap harinya !";
            $quote = "Ketahui lebih lanjut tentang Bos Mika agar selalu memperoleh informasi yang terbaru, karena Leader Admin Media Sosial ini mempunyai beragam cara untuk menambah wawasan informasi yang sangat luas.";
            $medsos = "Informasi lain melalui media sosial bos mika juga bisa anda kunjungi karena banyak sekali terupdate setiap hari. Mungkin akan sangat  membantu anda untuk menemukan solusi yang lebih tepat.";
            $cepat = "Admin atau marketing bos mika memiliki tingkat professional yang sangat tinggi sekali, responsif, dan layanan cepat untuk semua anggota. Bukan hanya itu saja bos mika juga sering kali menggelar seminar yang banyak di kunjungi oleh banyak orang yang ingin tahu pengalaman dari bos mika.";
            $informasi = "nformasi strategi perkembangan dari sumber terpercaya bos mika tentu banyak di tunggu oleh anggota aktif bos mika. Karena dimana ada tren atau viral nya media social apapun pasti semua tim bos mika sudah dapat informasi itu semua.";
            $sumberProfesional = "Seorang admin bos mika bisa di katagorikan sebagai admin yang profesional, karena selama menjalan kan keadlian khusus bidang dunia digital marketing bos mika banyak menjaga data pribadi anggota atau member dengan sangat rapat.";
            $adminProfesional = "Mendapat kepercayaan dari anggota atau member setia lama dan baru bukan sebuah kesengan melainkan tanggung jawab yang sangat besar sekali. Tentu bos mika juga tidak ingin mengecewakan semua anggota dari bos mika.";
            $aktifjam = "Sistem dari bos mika sangatlah bisa kalian andalkan dimana dari pukul 08:00 pm sampai jam 21:00 am anda akan di layani dengan sepenuh hati oleh oprator terbaik dari tim admin bos mika. Apa bila di atas jam yang di tentu kan kalian juga masih di sediakan oprator robot yang bisa menjawab keluhan anda atau masalah tentang bisnis produk yang di jalankan bos mika.";
            $cp = "BOSMIKA 2023 - Reserved Content";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();

            SumWeb::where('nama_team', $user)->increment('webtrack');
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos mika';
            $css = "assetsmikaweb";
            $nama_bio = 'mika';
            $favicon = 'mika-icon_0.png';
            $marquee = "Bos Mika adalah Profesional admin yang tidak perlu di ragukan di industri ini. Dengan kemapuan analisa yang baik, Bos mika siap membantu member untuk meraih kemenangan setiap harinya !";
            $quote = "Ketahui lebih lanjut tentang Bos Mika agar selalu memperoleh informasi yang terbaru, karena Leader Admin Media Sosial ini mempunyai beragam cara untuk menambah wawasan informasi yang sangat luas.";
            $medsos = "Informasi lain melalui media sosial bos mika juga bisa anda kunjungi karena banyak sekali terupdate setiap hari. Mungkin akan sangat  membantu anda untuk menemukan solusi yang lebih tepat.";
            $cepat = "Admin atau marketing bos mika memiliki tingkat professional yang sangat tinggi sekali, responsif, dan layanan cepat untuk semua anggota. Bukan hanya itu saja bos mika juga sering kali menggelar seminar yang banyak di kunjungi oleh banyak orang yang ingin tahu pengalaman dari bos mika.";
            $informasi = "nformasi strategi perkembangan dari sumber terpercaya bos mika tentu banyak di tunggu oleh anggota aktif bos mika. Karena dimana ada tren atau viral nya media social apapun pasti semua tim bos mika sudah dapat informasi itu semua.";
            $sumberProfesional = "Seorang admin bos mika bisa di katagorikan sebagai admin yang profesional, karena selama menjalan kan keadlian khusus bidang dunia digital marketing bos mika banyak menjaga data pribadi anggota atau member dengan sangat rapat.";
            $adminProfesional = "Mendapat kepercayaan dari anggota atau member setia lama dan baru bukan sebuah kesengan melainkan tanggung jawab yang sangat besar sekali. Tentu bos mika juga tidak ingin mengecewakan semua anggota dari bos mika.";
            $aktifjam = "Sistem dari bos mika sangatlah bisa kalian andalkan dimana dari pukul 08:00 pm sampai jam 21:00 am anda akan di layani dengan sepenuh hati oleh oprator terbaik dari tim admin bos mika. Apa bila di atas jam yang di tentu kan kalian juga masih di sediakan oprator robot yang bisa menjawab keluhan anda atau masalah tentang bisnis produk yang di jalankan bos mika.";
            $cp = "BOSMiKA 2023 - Reserved Content";
            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();
            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        }
    }





    public function boslinda()
    {

        if (!Cookie::has('biotrack_done')) {
            // Set cookie dengan waktu kedaluwarsa 1 hari
            Cookie::queue('biotrack_done', 'true', 1440); // 1440 menit = 1 hari

            // Lanjutkan dengan operasi yang Anda butuhkan
            // Contoh:
            $user = 'bos linda';
            $nama_bio = 'linda';
            $favicon = 'linda-icon_0.png';
            $css = "assetslindaweb";
            $marquee = "Bos Linda menghadirkan beragam informasi unggulan dan terbaik yang selalu up to date kepada Anda, agar mendapatkan kesan terbaik serta wawasan luas.";
            $quote = "Admin Media Sosial Bos Linda menyuguhkan beragam informasi penting dan memiliki rasa tanggung jawab kepada Anda agar mendapatkan hal-hal terbaru.";
            $medsos = "Media sosial Bos Linda selalu memiliki pembaharuan untuk Anda yang selalu ditangani dengan profesional, pastinya tindakan responsif serta solusi yang diberikan lewat platform media sosial akan berkesan untuk Anda. Segera hubungi Saya sekarang agar mendapatkan informasi yang efektif dan efisien!";
            $cepat = "Admin Media Sosial seperti Bos Linda merupakan salah satu sosok informan yang bertanggung jawab, lewat perhitungan yang matang dan memastikan informasi tersebut dapat dipercaya sebagai sumber yang tepat untuk Anda. Bos Linda memiliki sebuah prioritas dalam memberikan tindakan yang optimal dan tidak membuang waktu Anda.";
            $informasi = "Bos Linda merupakan sumber informasi yang tepat, dengan memilih saya sebagai salah satu pilihan yang tepat, Anda sudah melakukan tindakan yang benar dalam mencari sebuah informasi yang valid dan benar.";
            $sumberProfesional = "Admin Profesional Bos Linda memastikan setiap tindakan yang diberikan kepada Anda merupakan salah satu hal yang terbaik dan jujur. Hal tersebut agar menjadikan Bos Linda menjadi sebuah wadah dalam mencari tentang informasi yang terbaik dan terpercaya.";
            $adminProfesional = "Admin Bos Linda termasuk memiliki kredibilitas terbaik serta terpercaya karena selalu memberikan sebuah informasi yang sangat valid untuk Anda.";
            $aktifjam = "Admin Bos Linda memiliki pelayanan yang aktif 24 jam secara penuh dan profesional dalam menanggapi setiap keluhan dan juga pertanyaan yang akan segera langsung dijawab dan tidak membuang waktu Anda. Pastinya informasi yang diberikan akan membantu Anda dalam melakukan tindakan ke depannya.";
            $cp = "Registered ©2023 BOSLINDA all rights reserved";

            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();

            SumWeb::where('nama_team', $user)->increment('webtrack');

            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        } else {
            // Jika cookie sudah ada, lakukan hal lain atau tampilkan pesan
            $user = 'bos linda';
            $favicon = 'linda-icon_0.png';
            $nama_bio = 'linda';
            $css = "assetslindaweb";
            $marquee = "Bos Linda menghadirkan beragam informasi unggulan dan terbaik yang selalu up to date kepada Anda, agar mendapatkan kesan terbaik serta wawasan luas.";
            $quote = "Admin Media Sosial Bos Linda menyuguhkan beragam informasi penting dan memiliki rasa tanggung jawab kepada Anda agar mendapatkan hal-hal terbaru.";
            $medsos = "Media sosial Bos Linda selalu memiliki pembaharuan untuk Anda yang selalu ditangani dengan profesional, pastinya tindakan responsif serta solusi yang diberikan lewat platform media sosial akan berkesan untuk Anda. Segera hubungi Saya sekarang agar mendapatkan informasi yang efektif dan efisien!";
            $cepat = "Admin Media Sosial seperti Bos Linda merupakan salah satu sosok informan yang bertanggung jawab, lewat perhitungan yang matang dan memastikan informasi tersebut dapat dipercaya sebagai sumber yang tepat untuk Anda. Bos Linda memiliki sebuah prioritas dalam memberikan tindakan yang optimal dan tidak membuang waktu Anda.";
            $informasi = "Bos Linda merupakan sumber informasi yang tepat, dengan memilih saya sebagai salah satu pilihan yang tepat, Anda sudah melakukan tindakan yang benar dalam mencari sebuah informasi yang valid dan benar.";
            $sumberProfesional = "Admin Profesional Bos Linda memastikan setiap tindakan yang diberikan kepada Anda merupakan salah satu hal yang terbaik dan jujur. Hal tersebut agar menjadikan Bos Linda menjadi sebuah wadah dalam mencari tentang informasi yang terbaik dan terpercaya.";
            $adminProfesional = "Admin Bos Linda termasuk memiliki kredibilitas terbaik serta terpercaya karena selalu memberikan sebuah informasi yang sangat valid untuk Anda.";
            $aktifjam = "Admin Bos Linda memiliki pelayanan yang aktif 24 jam secara penuh dan profesional dalam menanggapi setiap keluhan dan juga pertanyaan yang akan segera langsung dijawab dan tidak membuang waktu Anda. Pastinya informasi yang diberikan akan membantu Anda dalam melakukan tindakan ke depannya.";
            $cp = "Registered ©2023 BOSLINDA all rights reserved";

            $data_user = Bo_Link::where('nama_team', $user)->first();
            $livestream = LiveStream::where('nama_streamer', $data_user->nama_streamer)->first();

            return view('website.boszoya', [
                'nama_team' => $user,
                'data_team' => $data_user,
                'css' => $css,
                'nama_bio' => $nama_bio,
                'livestream' => $livestream,
                'favicon' => $favicon,
                'marquee' => $marquee,
                'quote' => $quote,
                'medsos' => $medsos,
                'cepat' => $cepat,
                'informasi' => $informasi,
                'sumberProfesional' => $sumberProfesional,
                'adminProfesional' => $adminProfesional,
                'aktifjam' => $aktifjam,
                'cp' => $cp
            ]);
        }


        // Cookie::queue('biotrack_done', 'true', 1440);
        // $user = 'bos linda';
        // $css = "assetslindaweb";
        // $data_user = Bo_Link::where('nama_team', $user)->first();
        // SumWeb::where('nama_team', $user)->increment('webtrack');
        // return view('website.boszoya', [
        //     'nama_team' => $user,
        //     'data_team' => $data_user,
        //     'css' => $css,
        //     'nama_bio' => $nama_bio,
        //     'favicon' => $favicon
        // ]);
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
