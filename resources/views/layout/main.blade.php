<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/utama/g21-icon.ico">
    <title>Dashboard | L21</title>
    <link rel="stylesheet" href="/../assets/style.css">
    <link rel="stylesheet" href="/../assets/design.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            adjustElementSize();
        });
    </script>
</head>

<body>
    <div class="sec_container_utama">
        @include('partial.sidebar')
        <div class="sec_groupmain">
            @include('partial.navbar')
            <div class="sec_main_konten">
                <div class="title_main_content">
                    <h3>dashboard</h3>
                </div>
                <div class="content_body">
                    @yield('container')
                    <div class="footer" id="footer">
                        <span>© Copyright 2010 - 2023 L21 All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <script src="/../assets/script.js"></script>
    <script src="/../assets/design.js"></script>
    <script src="/../assets/component.js"></script>
</body>

</html>
