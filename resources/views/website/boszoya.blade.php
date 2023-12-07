<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! $data_team->meta_tag !!}
    <link rel="icon" href="/{{ $css }}/img/{{ $favicon }}">
    <link rel="stylesheet" href="/{{ $css }}/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
</head>

<body>
    <a href="{{ $livestream->link_streamer }}" target="_blank">
        <div class="saint">
            <img src="../storage/{{ $livestream->banner_livestream }}" alt="bos zoya live">
            <button>x</button>
        </div>
    </a>
    <div class="container">
        <header>
            <div class="grp_navbar">
                <a href=""><img class="logo_img" src="../storage/{{ $data_team->img_profile }}" alt="">
                    <p>{{ $data_team->nama_team }}</p>
                </a>
                <div class="menu">
                    <div class="navkiri">
                        <a href="{{ $data_team->rtp }}"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'rtp')">RTP</a>
                        <a href="{{ $data_team->link_buktijp }}"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'bukti_jp')">BUKTI JACKPOT</a>
                    </div>
                    <div class="navkanan">
                        <a href="{{ $data_team->wa }}"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'whatsapp')">WHATSAPP</a>
                        <a href="{{ $data_team->link_livechat }}"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'livechat')">LIVECHAT</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile_stick">
            <div class="menu_mobile">
                <a href="{{ $data_team->rtp }}" onclick="handleLoginClick('{{ $data_team->nama_team }}', 'rtp')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple-arcade"
                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path
                            d="M20 12.5v4.75a.734 .734 0 0 1 -.055 .325a.704 .704 0 0 1 -.348 .366l-5.462 2.58a5 5 0 0 1 -4.27 0l-5.462 -2.58a.705 .705 0 0 1 -.401 -.691l0 -4.75" />
                        <path
                            d="M4.431 12.216l5.634 -2.332a5.065 5.065 0 0 1 3.87 0l5.634 2.332a.692 .692 0 0 1 .028 1.269l-5.462 2.543a5.064 5.064 0 0 1 -4.27 0l-5.462 -2.543a.691 .691 0 0 1 .028 -1.27z" />
                        <path d="M12 7l0 6" />
                    </svg>
                    <p>RTP</p>
                </a>
                <a href="{{ $data_team->link_buktijp }}"
                    onclick="handleLoginClick('{{ $data_team->nama_team }}', 'bukti_jp')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gift"
                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
                        <path d="M12 8l0 13" />
                        <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
                        <path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
                    </svg>
                    <p>BUKTI JP</p>
                </a>
                <a href="">
                    <img class="logo_mobile" src="../storage/{{ $data_team->img_profile }}" alt="">
                    <p>{{ $data_team->nama_team }}</p>
                </a>
                <a href="{{ $data_team->wa }}" onclick="handleLoginClick('{{ $data_team->nama_team }}', 'whatsapp')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp"
                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path
                            d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                    </svg>
                    <p>WHATSAPP</p>
                </a>
                <a href="{{ $data_team->link_livechat }}"
                    onclick="handleLoginClick('{{ $data_team->nama_team }}', 'livechat')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2"
                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                    </svg>
                    <p>LIVECHAT</p>
                </a>
            </div>
        </div>
        <section class="target-section marrqq">
            <div class="spotss left"></div>
            <marquee behavior="scroll" direction="left">{{ $marquee }}
            </marquee>
            <div class="spotss right"></div>
        </section>
        <section class="target-section" style="padding: 0; margin-top: 20px;">
            <div class="promo_sec">
                <img src="../storage/{{ $data_team->banner_web }}" alt="">
                <a href="{{ $data_team->link_banner }}" target="_blank">Lihat Promo</a>
            </div>
        </section>
        <section class="target-section">
            <div class="deskripsi_sec">
                <h1 class="text_title" style="border: none; padding-bottom: 0; margin-bottom: 10px">
                    {{ $data_team->nama_team }}</h1>
                <p class="quotes">"{{ $quote }}"
                </p>
            </div>
        </section>
        <section class="target-section">
            <div class="deskripsi_sec">
                <span class="clue_text">media sosial</span>
                <h1 class="text_title">{{ $data_team->nama_team }}</h1>
                <div class="grp_med">
                    <div class="list_med">
                        <a id="daftar" class="data_med" href="https://mainduo.com/bos{{ $nama_bio }}"
                            target="_blank" onclick="handleLoginClick('{{ $data_team->nama_team }}', 'daftar')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M16 19h6" />
                                <path d="M19 16v6" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                            </svg>
                            <span>DAFTAR</span>
                        </a>
                        <a id="whatsapp" class="data_med" href="{{ $data_team->wa }}" target="_blank"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'whatsapp')">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24"
                                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path
                                    d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                            </svg>
                            <span>WHATSAPP</span>
                        </a>
                        <a id="facebook" class="data_med" href="{{ $data_team->fb }}" target="_blank"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'facebook')">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24"
                                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                            <span>FACEBOOK</span>
                        </a>
                        <a id="instagram" class="data_med" href="{{ $data_team->ig }}" target="_blank"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'instagram')">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24"
                                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M16.5 7.5l0 .01" />
                            </svg>
                            <span>INSTAGRAM</span>
                        </a>
                    </div>
                    <div class="kanan_med">
                        <img src="/{{ $css }}/img/mediasosial.png" alt="">
                        <p class="type_text">{{ $medsos }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="target-section">
            <div class="deskripsi_sec">
                <span class="clue_text">admin profesional</span>
                <h1 class="text_title">{{ $data_team->nama_team }}</h1>
                <div class="adm_prof">
                    <div class="ck_satu">
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-activity"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                </svg>
                                <h3>bertindak cepat</h3>
                            </div>
                            <p>{{ $cepat }}</p>
                        </div>
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-info-circle" viewBox="0 0 24 24"
                                    stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 9h.01" />
                                    <path d="M11 12h1v4h1" />
                                </svg>
                                <h3>sumber informasi</h3>
                            </div>
                            <p>{{ $informasi }}</p>
                        </div>
                    </div>
                    <div class="ck_satu">
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-star"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h.5" />
                                    <path
                                        d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                </svg>
                                <h3>admin profesional</h3>
                            </div>
                            <p>{{ $sumberProfesional }}</p>
                        </div>
                    </div>
                    <div class="ck_satu">
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-circle-check" viewBox="0 0 24 24"
                                    stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M9 12l2 2l4 -4" />
                                </svg>
                                <h3>admin terpercaya</h3>
                            </div>
                            <p>{{ $adminProfesional }}</p>
                        </div>
                        <div class="list_cksatu">
                            <div class="kecil_list">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-24-hours"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                    <path d="M4 13a8.094 8.094 0 0 0 3 5.24" />
                                    <path
                                        d="M11 15h2a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-1a1 1 0 0 0 -1 1v1a1 1 0 0 0 1 1h2" />
                                    <path d="M17 15v2a1 1 0 0 0 1 1h1" />
                                    <path d="M20 15v6" />
                                </svg>
                                <h3>aktif 24 jam</h3>
                            </div>
                            <p>{{ $aktifjam }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="target-section">
            <div class="konten_lord">{!! $data_team->artikel_web !!}</div>
        </section>
        <footer>
            <img class="line2s" src="/{{ $css }}/img/line.png" alt="">
            <img class="line2ss" src="/{{ $css }}/img/line.png" alt="">
            <div class="grd1">
                <img src="../storage/{{ $data_team->img_profile }}" alt="">
                <div class="list_grd1">
                    <span>Address</span>
                    <p>{!! $data_team->alamat !!}</p>
                </div>
                <div class="list_grd1">
                    <span>Mail</span>
                    <p>{{ $data_team->mail }}</p>
                </div>
                <div class="list_grd1">
                    <span>Customer Support</span>
                    <div class="grp_meds">
                        <a href="{{ $data_team->daftar }}" target="_blank"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'daftar')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                <path d="M16 19h6"></path>
                                <path d="M19 16v6"></path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                            </svg>
                        </a>
                        <a href="{{ $data_team->wa }}" target="_blank"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'whatsapp')">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24"
                                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                <path
                                    d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1">
                                </path>
                            </svg>
                        </a>
                        <a href="{{ $data_team->fb }}" target="_blank"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'facebook')">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24"
                                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a>
                        <a href="{{ $data_team->ig }}" target="_blank"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'instagram')">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24"
                                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a>
                        <a href="{{ $data_team->link_livechat }}" target="_blank"
                            onclick="handleLoginClick('{{ $data_team->nama_team }}', 'livechat')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 9h8" />
                                <path d="M8 13h6" />
                                <path
                                    d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grd1">
                <div class="list_grd1">
                    <span class="titles">menu</span>
                    <a href="{{ $data_team->rtp }}"
                        onclick="handleLoginClick('{{ $data_team->nama_team }}', 'rtp')">RTP</a>
                    <a href="{{ $data_team->link_buktijp }}"
                        onclick="handleLoginClick('{{ $data_team->nama_team }}', 'bukti_jp')">Bukti Jackpot</a>
                    <a href="{{ $data_team->wa }}"
                        onclick="handleLoginClick('{{ $data_team->nama_team }}', 'whatsapp')">Whatsapp</a>
                    <a href="{{ $data_team->link_livechat }}"
                        onclick="handleLoginClick('{{ $data_team->nama_team }}', 'livechat')">Live Chat</a>
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
                <iframe src="{{ $data_team->lokasi }}" width="100%" height="100%"
                    style="border:0;border-radius: 6px;border: 1px solid rgba(var(---rgba-primary), 0.3);padding: 5px;z-index: 1;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="bawahss">
                <p>{{ $cp }}</p>
            </div>
        </footer>
    </div>

    <script src="/{{ $css }}/script.js"></script>
    <script>
        function handleLoginClick(param1, param2) {
            $.ajax({
                url: 'https://mainduo.com/sumweb/' + param1 + '/' + param2,
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
