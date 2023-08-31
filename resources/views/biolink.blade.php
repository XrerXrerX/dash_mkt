<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! $datateam->meta_tag !!}
    <link rel="icon" href="/assetsbio/img/admin-icon.png">
    <link rel="stylesheet" href="/assetsbio/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
</head>

<body>
    <section>
        <img class="line2" src="/assetsbio/img/line2.png" alt="">
        <div class="line_cls">
            <div class="pst">
                <img src="/assetsbio/img/line.png" alt="">
                <div class="shadd"></div>
            </div>
        </div>
        <div class="grp_atas">
            <div class="csl_profilee">
                <img class="img_profile" src="/storage/{{ $datateam->img_profile }}" alt="{{ $nama_team }}">
                <div class="stt"></div>
            </div>
            <img class="img_banner" src="/storage/{{ $datateam->banner_bio }}" alt="Promo {{ $nama_team }}">
        </div>
        <div class="name_page">
            <h1>{{ $nama_team }}</h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check"
                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M9 12l2 2l4 -4" />
            </svg>
        </div>
        <div class="button_grp">
            <a href="{{ $datateam->login }}" target="_blank" class="login_cek" data-analytics="login"
                onclick="handleLoginClick('{{ $nama_team }}', 'login')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" viewBox="0 0 24 24"
                    stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                </svg>
                <p>LOGIN</p>
            </a>
            <a href="{{ $datateam->daftar }}" target="_blank" class="daftar" data-analytics="daftar"
                onclick="handleLoginClick('{{ $nama_team }}', 'daftar')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M16 19h6" />
                    <path d="M19 16v6" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                </svg>
                <p>DAFTAR</p>
            </a>
            <a href="{{ $datateam->wa }}" target="_blank" class="whatsapp" data-analytics="whatsapp"
                onclick="handleLoginClick('{{ $nama_team }}', 'whatsapp')">
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
            <a href="{{ $datateam->fb }}" target="_blank" class="facebook" data-analytics="facebook"
                onclick="handleLoginClick('{{ $nama_team }}', 'facebook')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
                <p>FACEBOOK</p>
            </a>
            <a href="{{ $datateam->ig }}" target="_blank" class="instagram" data-analytics="instagram"
                onclick="handleLoginClick('{{ $nama_team }}', 'instagram')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M16.5 7.5l0 .01" />
                </svg>
                <p>INSTAGRAM</p>
            </a>
            <a href="{{ $datastream->link_streamer }}" target="_blank" class="livestream"
                data-analytics="livestream" onclick="handleLoginClick('{{ $nama_team }}', 'livestream')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-atom-2" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M12 21l0 .01"></path>
                    <path d="M3 9l0 .01"></path>
                    <path d="M21 9l0 .01"></path>
                    <path d="M8 20.1a9 9 0 0 1 -5 -7.1"></path>
                    <path d="M16 20.1a9 9 0 0 0 5 -7.1"></path>
                    <path d="M6.2 5a9 9 0 0 1 11.4 0"></path>
                </svg>

                <p>LIVE STREAMING</p>
            </a>

            <a href="{{ $datateam->link_website }}" target="_blank"
                onclick="handleLoginClick('{{ $nama_team }}', 'website_grup')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world-www"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M19.5 7a9 9 0 0 0 -7.5 -4a8.991 8.991 0 0 0 -7.484 4" />
                    <path d="M11.5 3a16.989 16.989 0 0 0 -1.826 4" />
                    <path d="M12.5 3a16.989 16.989 0 0 1 1.828 4" />
                    <path d="M19.5 17a9 9 0 0 1 -7.5 4a8.991 8.991 0 0 1 -7.484 -4" />
                    <path d="M11.5 21a16.989 16.989 0 0 1 -1.826 -4" />
                    <path d="M12.5 21a16.989 16.989 0 0 0 1.828 -4" />
                    <path d="M2 10l1 4l1.5 -4l1.5 4l1 -4" />
                    <path d="M17 10l1 4l1.5 -4l1.5 4l1 -4" />
                    <path d="M9.5 10l1 4l1.5 -4l1.5 4l1 -4" />
                </svg>
                <p>{{ $nama_team }}</p>
            </a>
        </div>

        <div class="artikel">
            <h2>{{ $datateam->title }}</h2>
            <p>{{ $datateam->artikel_bio }}</p>
        </div>
        <footer>
            <p>© Copyright 2023 <span>{{ $nama_team }}</span> All Rights Reserved.</p>
        </footer>
    </section>

    <script src="/assetsbio/script.js"></script>
    <script>
        function handleLoginClick(param1, param2) {
            $.ajax({
                url: 'https://mainduo.com/sumbio/' + param1 + '/' + param2,
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
