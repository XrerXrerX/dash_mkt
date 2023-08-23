@extends('dashboard.superadmin.layout.main')
@section('container')
    <div class="sec_head_form2">
        <h3> <span>Bio Traffic</span> {{ $title }} </h3>
        <h3> <span>Web Traffic</span> {{ $title }} </h3>
    </div>

    <div class="sec_box hgi-100">
        <div class="containercard dua">

            <div class="list_total">
                <div class="detail_count" data-klik="{{ $analytic->website_grup }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click" viewBox="0 0 24 24"
                            stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik Website</span>
                    <h3>{{ $analytic->website_grup }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analytic->login }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik Login</span>
                    <h3>{{ $analytic->login }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analytic->daftar }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik Daftar</span>
                    <h3>{{ $analytic->daftar }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analytic->whatsapp }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik WA</span>
                    <h3>{{ $analytic->whatsapp }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analytic->facebook }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik FB</span>
                    <h3>{{ $analytic->facebook }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analytic->instagram }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik IG</span>
                    <h3>{{ $analytic->instagram }}</h3>
                </div>
            </div>
            <div class="total_visitor">
                <div class="detail_count" data-visit-bio="{{ $analytic->biotrack }}">
                    <h3>{{ $analytic->biotrack }}</h3>
                    <span>Visitor BioLink</span>
                    <div class="half_circle"></div>
                </div>
            </div>
        </div>
        <div class="containercard2 dua">
            <div class="list_total">
                <div class="detail_count" data-klik="{{ $analyticweb->daftar }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik Daftar</span>
                    <h3>{{ $analyticweb->daftar }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analyticweb->whatsapp }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik WA</span>
                    <h3>{{ $analyticweb->whatsapp }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analyticweb->facebook }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik Facebook</span>
                    <h3>{{ $analyticweb->facebook }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analyticweb->instagram }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik IG</span>
                    <h3>{{ $analyticweb->instagram }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analyticweb->rtp }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik RTP</span>
                    <h3>{{ $analyticweb->rtp }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analyticweb->bukti_jp }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik Bukti JP</span>
                    <h3>{{ $analyticweb->bukti_jp }}</h3>
                </div>
                <div class="detail_count" data-klik="{{ $analyticweb->livechat }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-click"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12l3 0" />
                            <path d="M12 3l0 3" />
                            <path d="M7.8 7.8l-2.2 -2.2" />
                            <path d="M16.2 7.8l2.2 -2.2" />
                            <path d="M7.8 16.2l-2.2 2.2" />
                            <path d="M12 12l9 3l-4 2l-2 4l-3 -9" />
                        </svg>
                        Klik Livechat</span>
                    <h3>{{ $analyticweb->livechat }}</h3>
                </div>
            </div>
            <div class="total_visitor">
                <div class="detail_count" data-visit-web="{{ $analyticweb->webtrack }}">
                    <h3>{{ $analyticweb->webtrack }}</h3>
                    <span>Visitor Web</span>
                    <div class="half_circle"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="sec_box">
        <table>
            <thead>
                <tr class="head_table">
                    <th><button class="sec_botton btn_primary" type="button" onclick="confirmDownload()">Export to Excel
                            Bio</button></th>
                    <th><button class="sec_botton btn_primary" type="button" onclick="confirmDownload2()">Export to
                            Excel Web</button></th>
                </tr>
            </thead>
        </table>
    </div> --}}

    <div class="sec_box hgi-100">
        <form action="" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            <select id="selectOption" onchange="handleSelectChange()">
                <option value="" disabled selected>Pilih Menu export</option>
                <option value="rekapBiopdf">Export BIOLINK to PDF</option>
                <option value="rekapWebpdf">Export WEBSITE to PDF</option>
                <option value="rekapbioexcel">Export BIOLINK to Excel</option>
                <option value="rekapWebexcel">Export WEBSITE to Excel</option>
                <option value="rekapbio2">Rekap Data BIO</option>
                <option value="rekapweb2">Rekap Data WEB</option>
                <option value="rekapbio">Closing Rekap BIO</option>
                <option value="rekapweb">Closing Rekap Web</option>



            </select>
            <button class="sec_botton btn_primary" type="button" id="rekapButton" name="rekapButton"
                onclick="handleButtonClick()">Export Data</button>
        </form>
    </div>
    {{-- <div class="sec_box hgi-100">
        <button class="sec_botton btn_primary" type="button" onclick="confirmDownload()"> Export to Excel Bio</button>
        <button class="sec_botton btn_primary" type="button" onclick="confirmDownload2()"> Export to Excel Web</button>
    </div> --}}
    {{-- <div class="sec_box hgi-100">
        <form action="" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            <input type="hidden" id="bio_team" name="bio_team" value="{{ $title }}">
            <button class="sec_botton btn_primary" type="button" id="rekapButton" name="rekapButton"
                onclick="confirmExportToPdf()">Rekap Data Bio & update pdf</button>
        </form>

        <form action="" method="POST" enctype="multipart/form-data" id="form-2">
            @csrf
            <input type="hidden" id="web_nama_team" name="web_nama_team" value="{{ $title }}">
            <button class="sec_botton btn_primary" type="button" id="rekapButton2" name="rekapButton2"
                onclick="confirmExportToPdfwebsite()">Rekap Data Web</button>
        </form>
    </div> --}}


    <script>
        function handleButtonClick() {

            var selectOption = document.getElementById("selectOption").value;
            if (selectOption === "rekapBiopdf") {
                confirmExportToPdf();
            } else if (selectOption === "rekapWebpdf") {
                confirmExportToPdfwebsite();
            } else if (selectOption === "rekapbio2") {
                var bio_team = "{{ $title }}";
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "https://mainduo.com/rekapbio2",
                    method: "POST",
                    data: {
                        _token: token,
                        team: bio_team
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Berhasil',
                            icon: 'success'
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            } else if (selectOption === "rekapweb2") {
                var web_nama_team = "{{ $title }}";
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "https://mainduo.com/rekapweb2",
                    method: "POST",
                    data: {
                        _token: token,
                        team: web_nama_team
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Berhasil',
                            icon: 'success'
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            } else if (selectOption === "rekapbioexcel") {
                confirmDownload();
            } else if (selectOption === "rekapWebexcel") {
                confirmDownload2();
            } else if (selectOption === "rekapbio") {
                var bio_team = "{{ $title }}";
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "https://mainduo.com/rekapbio",
                    method: "POST",
                    data: {
                        _token: token,
                        team: bio_team
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Berhasil',
                            icon: 'success'
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            } else if (selectOption === "rekapweb") {
                var web_nama_team = "{{ $title }}";
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "https://mainduo.com/rekapweb",
                    method: "POST",
                    data: {
                        _token: token,
                        team: web_nama_team
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Berhasil',
                            icon: 'success'
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }


        }
    </script>



    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script>
        function confirmExportToPdf() {
            var confirmation = confirm("Are you sure you want to export to PDF?");
            if (confirmation) {
                exportToPdf();
            }
        }

        function confirmExportToPdfwebsite() {
            var confirmation = confirm("Are you sure you want to export to PDF?");
            if (confirmation) {
                exportToPdfwebsite();
            }
        }

        function exportToPdf() {
            var title = "{{ $title }}";
            var url = '/bvbbyh0n3y88/l4stQu0t3s/laporan/' + title;

            window.open(url, '_blank');
        }


        function exportToPdfwebsite() {
            var title = "{{ $title }}";
            var url = '/bvbbyh0n3y88/l4stQu0t3s/laporanrekapweb/' + title;

            window.open(url, '_blank');
        }

        function confirmDownload() {
            exportArrayToExcel();
        }

        function confirmDownload2() {
            exportArrayToExcelWeb();
        }





        function exportArrayToExcelWeb() {
            var title = "{{ $title }}";
            var url = "/laporanexcelweb/" + title; // Ganti dengan URL rute yang sesuai
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    var worksheet = XLSX.utils.aoa_to_sheet(data);
                    var columnWidths = [{
                            wch: 5
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                    ];

                    // Mengatur lebar kolom pada sheet
                    worksheet["!cols"] = columnWidths;

                    var workbook = XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet 1");

                    var excelBuffer = XLSX.write(workbook, {
                        bookType: "xlsx",
                        type: "array",
                    });

                    var blob = new Blob([excelBuffer], {
                        type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
                    });

                    var downloadLink = document.createElement("a");
                    document.body.appendChild(downloadLink);
                    downloadLink.href = window.URL.createObjectURL(blob);
                    downloadLink.download = title + " website.xlsx"; // Ganti dengan nama file yang diinginkan
                    downloadLink.click();
                })
                .catch(error => {
                    // Tangani kesalahan jika terjadi
                    console.error('Terjadi kesalahan:', error);
                });
        }

        function exportArrayToExcel() {
            var title = "{{ $title }}";
            var url = "/laporanexcel/" + title; // Ganti dengan URL rute yang sesuai
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    var worksheet = XLSX.utils.aoa_to_sheet(data);
                    var columnWidths = [{
                            wch: 5
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                        {
                            wch: 20
                        },
                    ];

                    // Mengatur lebar kolom pada sheet
                    worksheet["!cols"] = columnWidths;

                    var workbook = XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet 1");

                    var excelBuffer = XLSX.write(workbook, {
                        bookType: "xlsx",
                        type: "array",
                    });

                    var blob = new Blob([excelBuffer], {
                        type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
                    });

                    var downloadLink = document.createElement("a");
                    document.body.appendChild(downloadLink);
                    downloadLink.href = window.URL.createObjectURL(blob);
                    downloadLink.download = title + " bio.xlsx"; // Ganti dengan nama file yang diinginkan
                    downloadLink.click();
                })
                .catch(error => {
                    // Tangani kesalahan jika terjadi
                    console.error('Terjadi kesalahan:', error);
                });
        }

        // $(document).ready(function() {
        //     $("#rekapButton").click(function() {
        //         var bio_team = "{{ $title }}";
        //         var token = $("input[name='_token']").val();
        //         $.ajax({
        //             url: "https://mainduo.com/rekapbio",
        //             method: "POST",
        //             data: {
        //                 _token: token,
        //                 team: bio_team
        //             },
        //             success: function(response) {
        //                 Swal.fire({
        //                     title: 'Success!',
        //                     text: 'Berhasil',
        //                     icon: 'success'
        //                 });
        //             },
        //             error: function(xhr, status, error) {
        //                 console.error(error);
        //             }
        //         });
        //     });
        //     $("#rekapButton2").click(function() {
        //         var web_nama_team = "{{ $title }}";
        //         var token = $("input[name='_token']").val();
        //         $.ajax({
        //             url: "https://mainduo.com/rekapweb",
        //             method: "POST",
        //             data: {
        //                 _token: token,
        //                 team: web_nama_team
        //             },
        //             success: function(response) {
        //                 Swal.fire({
        //                     title: 'Success!',
        //                     text: 'Berhasil',
        //                     icon: 'success'
        //                 });
        //             },
        //             error: function(xhr, status, error) {
        //                 console.error(error);
        //             }
        //         });
        //     });
        // });
    </script>
    <script>
        $(document).ready(function() {
            $('.sec_box .containercard .list_total .detail_count[data-klik]').each(function() {
                var visitorCount = parseInt($(this).closest('.containercard').find(
                    '.total_visitor .detail_count h3').text());
                var clickCount = parseInt($(this).data('klik'));
                var percentage = visitorCount !== 0 ? (clickCount / visitorCount) * 100 : 0;
                $(this).find('h3').css('background',
                    'linear-gradient(to right, rgba(var(--rgba-primary)) 0%, transparent ' +
                    percentage + '%)');
                var percentageText = $('<p>').text(Math.round(percentage) + '%');
                $(this).append(percentageText);
            });

            $('.sec_box .containercard2 .list_total .detail_count[data-klik]').each(function() {
                var visitorCount = parseInt($(this).closest('.containercard2').find(
                    '.total_visitor .detail_count h3').text());
                var clickCount = parseInt($(this).data('klik'));
                var percentage = visitorCount !== 0 ? (clickCount / visitorCount) * 100 : 0;
                $(this).find('h3').css('background',
                    'linear-gradient(to right, rgba(var(--rgba-primary)) 0%, transparent ' +
                    percentage + '%)');
                var percentageText = $('<p>').text(Math.round(percentage) + '%');
                $(this).append(percentageText);
            });
        });
    </script>
@endsection
