<?php

include "p009wer.php";
$nama_team = "bos mega";
$sql = "SELECT * FROM bo_link WHERE nama_team = '$nama_team' ";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

if (!isset($_COOKIE['webtrack_done'])) {

    setcookie("webtrack_done", "true", time() + 86400);

    $sqlweb = "UPDATE sum_web SET webtrack = webtrack + 1 WHERE nama_team = '$nama_team'";
    $result = $koneksi->query($sqlweb);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $row['meta_tag']; ?>
    <link rel="icon" href="assets/img/admin-icon.png">
    <title><?php echo $row['nama_team']; ?> | Admin profesional</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="grp_navbar">
                <a href=""><img class="logo_mobile" src="../storage/<?php echo $row['img_profile']; ?>" alt="">
                    <p><?php echo $row['nama_team']; ?></p>
                </a>
                <div class="menu">
                    <div class="navkiri">
                        <a href="<?php echo $row['rtp']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'rtp')">RTP</a>
                        <a href="<?php echo $row['link_buktijp']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'bukti_jp')">BUKTI JACKPOT</a>
                    </div>
                    <div class="navkanan">
                        <a href="<?php echo $row['wa']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'whatsapp')">WHATSAPP</a>
                        <a href="<?php echo $row['link_livechat']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'livechat')">LIVECHAT</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile_stick">
            <div class="menu_mobile">
                <a href="<?php echo $row['rtp']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'rtp')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple-arcade" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 12.5v4.75a.734 .734 0 0 1 -.055 .325a.704 .704 0 0 1 -.348 .366l-5.462 2.58a5 5 0 0 1 -4.27 0l-5.462 -2.58a.705 .705 0 0 1 -.401 -.691l0 -4.75" />
                        <path d="M4.431 12.216l5.634 -2.332a5.065 5.065 0 0 1 3.87 0l5.634 2.332a.692 .692 0 0 1 .028 1.269l-5.462 2.543a5.064 5.064 0 0 1 -4.27 0l-5.462 -2.543a.691 .691 0 0 1 .028 -1.27z" />
                        <path d="M12 7l0 6" />
                    </svg>
                    <p>RTP</p>
                </a>
                <a href="<?php echo $row['link_buktijp']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'bukti_jp')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gift" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
                        <path d="M12 8l0 13" />
                        <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
                        <path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
                    </svg>
                    <p>BUKTI JP</p>
                </a>
                <a href="">
                    <img class="logo_mobile" src="https://gcdnb.pbrd.co/images/RJcnZILS0owV.png?o=1" alt="">
                    <p><?php echo $row['nama_team']; ?></p>
                </a>
                <a href="<?php echo $row['wa']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'whatsapp')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                    </svg>
                    <p>WHATSAPP</p>
                </a>
                <a href="<?php echo $row['link_livechat']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'livechat')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                    </svg>
                    <p>LIVECHAT</p>
                </a>
            </div>
        </div>
        <section class="target-section marrqq">
            <div class="spotss left"></div>
            <marquee behavior="scroll" direction="left">Dalam setiap pelayanan, saya sebagai Admin <span><?php echo $row['nama_team']; ?></span>, berkomitmen untuk memberikan yang terbaik kepada pelanggan. Kepuasan mereka adalah prioritas utama dalam setiap tindakan kami.</marquee>
            <div class="spotss right"></div>
        </section>
        <section class="target-section" style="padding: 0; margin-top: 20px;">
            <div class="promo_sec">
                <img src="../storage/<?php echo $row['banner_web']; ?>" alt="">
                <a href="<?php echo $row['link_banner']; ?>" target="_blank">Lihat Promo</a>
            </div>
        </section>
        <section class="target-section">
            <div class="deskripsi_sec">
                <h1 class="text_title" style="border: none; padding-bottom: 0; margin-bottom: 10px"><?php echo $row['nama_team']; ?></h1>
                <p class="quotes">"Dalam setiap pelayanan, saya sebagai Admin <span><?php echo $row['nama_team']; ?></span>, berkomitmen untuk memberikan yang terbaik kepada pelanggan. Kepuasan mereka adalah prioritas utama dalam setiap tindakan kami."</p>
            </div>
        </section>
        <section class="target-section">
            <div class="deskripsi_sec">
                <span class="clue_text">media sosial</span>
                <h1 class="text_title"><?php echo $row['nama_team']; ?></h1>
                <div class="grp_med">
                    <div class="list_med">
                        <a id="daftar" class="data_med" href="<?php echo $row['daftar']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'daftar')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M16 19h6" />
                                <path d="M19 16v6" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                            </svg>
                            <span>DAFTAR</span>
                        </a>
                        <a id="whatsapp" class="data_med" href="<?php echo $row['wa']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'whatsapp')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                            </svg>
                            <span>WHATSAPP</span>
                        </a>
                        <a id="facebook" class="data_med" href="<?php echo $row['fb']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'facebook')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                            <span>FACEBOOK</span>
                        </a>
                        <a id="instagram" class="data_med" href="<?php echo $row['ig']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'instagram')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M16.5 7.5l0 .01" />
                            </svg>
                            <span>INSTAGRAM</span>
                        </a>
                    </div>
                    <div class="kanan_med">
                        <img src="assets/img/mediasosial.png" alt="">
                        <p class="type_text">Media sosial kami tetap up-to-date dan responsif, selalu siap sedia memberikan bantuan, menangani keluhan, serta memenuhi kebutuhan member setia kami dengan tanggap dan efektif. Silahkan Hubungi kami sekarang !
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="target-section">
            <div class="deskripsi_sec">
                <span class="clue_text">admin profesional</span>
                <h1 class="text_title"><?php echo $row['nama_team']; ?></h1>
                <div class="adm_prof">
                    <div class="ck_satu">
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-activity" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                </svg>
                                <h3>bertindak cepat</h3>
                            </div>
                            <p>Sebagai admin, ketangkasan dalam tindakan adalah prinsip utama saya. Dengan sigap, saya merespon dan menyelesaikan keperluan Anda, memberikan layanan yang efisien dan efektif setiap saat.</p>
                        </div>
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 9h.01" />
                                    <path d="M11 12h1v4h1" />
                                </svg>
                                <h3>sumber informasi</h3>
                            </div>
                            <p>Sebagai admin, saya hadir untuk menyediakan sumber informasi terpercaya. Silakan ajukan pertanyaan atau minta panduan terkait informasi terbaru yang ingin anda dapatkan!</p>
                        </div>
                    </div>
                    <div class="ck_satu">
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-star" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h.5" />
                                    <path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                </svg>
                                <h3>admin profesional</h3>
                            </div>
                            <p>Sebagai seorang admin profesional, saya memastikan memberikan informasi terpercaya, pengelolaan yang efisien, dan respons yang cepat. Dengan pengalaman dan pengetahuan dalam bidang ini, komitmen saya adalah memastikan pengalaman yang lancar dan bermanfaat bagi semua yang berinteraksi dengan layanan ini.</p>
                        </div>
                    </div>
                    <div class="ck_satu">
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M9 12l2 2l4 -4" />
                                </svg>
                                <h3>admin terpercaya</h3>
                            </div>
                            <p>Sebagai admin yang terpercaya, kami wajib mempersiapkan informasi dari sumber yang valid sebagai kebutuhan member setia kami untuk memperoleh informasi yang tepat dan efisien kapanpun informasi tersebut dibutuhkan.</p>
                        </div>
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-24-hours" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                    <path d="M4 13a8.094 8.094 0 0 0 3 5.24" />
                                    <path d="M11 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2" />
                                    <path d="M17 15v2a1 1 0 0 0 1 1h1" />
                                    <path d="M20 15v6" />
                                </svg>
                                <h3>aktif 24 jam</h3>
                            </div>
                            <p>Saya adalah admin yang aktif selama 24 jam penuh. Kapan pun Anda memerlukan bantuan, informasi, atau panduan, saya siap merespons dengan cepat dan membantu Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="target-section">
            <div class="konten_lord"><?php echo $row['artikel_web']; ?></div>
        </section>
        <footer>
            <img class="line2s" src="assets/img/line.png" alt="">
            <img class="line2ss" src="assets/img/line.png" alt="">
            <div class="grd1">
                <img src="../storage/<?php echo $row['img_profile']; ?>" alt="">
                <div class="list_grd1">
                    <span>Address</span>
                    <p><?php echo $row['alamat']; ?></p>
                </div>
                <div class="list_grd1">
                    <span>Mail</span>
                    <p><?php echo $row['mail']; ?></p>
                </div>
                <div class="list_grd1">
                    <span>Customer Support</span>
                    <div class="grp_meds">
                        <a href="<?php echo $row['daftar']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'daftar')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M16 19h6"></path>
                                <path d="M19 16v6"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                            </svg>
                        </a>
                        <a href="<?php echo $row['wa']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'whatsapp')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"></path>
                            </svg>
                        </a>
                        <a href="<?php echo $row['fb']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'facebook')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                            </svg>
                        </a>
                        <a href="<?php echo $row['ig']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'instagram')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a>
                        <a href="<?php echo $row['link_livechat']; ?>" target="_blank" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'livechat')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 9h8" />
                                <path d="M8 13h6" />
                                <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grd1">
                <div class="list_grd1">
                    <span class="titles">menu</span>
                    <a href="<?php echo $row['rtp']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'rtp')">RTP</a>
                    <a href="<?php echo $row['link_buktijp']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'bukti_jp')">Bukti Jackpot</a>
                    <a href="<?php echo $row['wa']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'whatsapp')">Whatsapp</a>
                    <a href="<?php echo $row['link_livechat']; ?>" onclick="handleLoginClick('<?php echo $row['nama_team']; ?>', 'livechat')">Live Chat</a>
                </div>
            </div>
            <div class="grd1">
                <div class="list_grd1">
                    <span class="titles">bagaimana kami</span>
                    <a href="">Admin Profesional</a>
                    <a href="">Bertindak Cepat</a>
                    <a href="">Sumber Informasi</a>
                    <a href="">Admin Terpercaya</a>
                    <a href="">Aktif 24 Jam</a>
                </div>
            </div>
            <div class="grd1">
                <iframe src="<?php echo $row['lokasi']; ?>" width="100%" height="100%" style="border:0;border-radius: 6px;border: 1px solid rgba(var(---rgba-primary), 0.3);padding: 5px;z-index: 1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="bawahss">
                <p>© Copyright 2023 <span><?php echo $row['nama_team']; ?></span> All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    <script src="assets/script.js"></script>
    <script>
        function handleLoginClick(param1, param2) {
            $.ajax({
                url: 'http://127.0.0.1:8074/sumweb/' + param1 + '/' + param2,
                method: 'GET',
                dataType: 'html',
                success: function(responseData) {
                    $('#resultContainer').html(responseData);
                },
                error: function() {
                    $('#resultContainer').html('Failed to load data.');
                }
            });
        }
    </script>
</body>

</html>