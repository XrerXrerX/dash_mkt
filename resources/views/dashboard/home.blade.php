@extends('layout.main')
@section('container')
    <div class="sec_head_form">
        <h3>BIO Analytic {{ $title }}</h3>
        <h3>WEB Analytic {{ $title }}</h3>
    </div>
    <div class="sec_box hgi-100">
        <div class="containercard">
            <div class="sec_card_count">
                <div class="prog_icon_circle primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analytic->biotrack }}</h3>
                    <span>Visitor BioLink</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analytic->website_grup }}</h3>
                    <span>Klik Website</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analytic->login }}</h3>
                    <span>Visitor LoginS</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle danger">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analytic->daftar }}</h3>
                    <span>Visitor Daftar</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analytic->whatsapp }}</h3>
                    <span>Visitor WA</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analytic->facebook }}</h3>
                    <span>Visitor FB</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analytic->instagram }}</h3>
                    <span>Visitor IG</span>
                </div>
            </div>
        </div>
        <div class="containercard2 ">
            <div class="sec_card_count">
                <div class="prog_icon_circle primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analyticweb->webtrack }}</h3>
                    <span>Visitor Web</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analyticweb->daftar }}</h3>
                    <span>Visitor Daftar</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analyticweb->whatsapp }}</h3>
                    <span>Visitor WA</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analyticweb->facebook }}</h3>
                    <span>Visitor Daftar</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle danger">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analyticweb->instagram }}</h3>
                    <span>Visitor IG</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analyticweb->rtp }}</h3>
                    <span>Visitor RTP</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analyticweb->bukti_jp }}</h3>
                    <span>Visitor BuktiJP</span>
                </div>
            </div>
            <div class="sec_card_count">
                <div class="prog_icon_circle success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <path d="M8 8l4 0" />
                        <path d="M8 12l4 0" />
                        <path d="M8 16l4 0" />
                    </svg>
                    <div class="half_circle"></div>
                </div>
                <div class="detail_count">
                    <h3>{{ $analyticweb->livechat }}</h3>
                    <span>Visitor Livechat</span>
                </div>
            </div>
        </div>
    </div>

    <button class="sec_botton btn_primary" onclick="confirmExportToPdf()">Export to PDF Web Bio</button>
    <button class="sec_botton btn_primary" onclick="confirmExportToPdfwebsite()">Export to PDF
        Website</button>
    <button type="button" onclick="confirmDownload()"> Export to Excel Bio</button>
    <button type="button" onclick="confirmDownload2()"> Export to Excel Web</button>

    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <input type="hidden" id="bio_team" name="bio_team" value="{{ $title }}">
        <button type="button" id="rekapButton" name="rekapButton">Rekap Data Bio</button>
    </form>

    <form action="" method="POST" enctype="multipart/form-data" id="form-2">
        @csrf
        <input type="hidden" id="web_nama_team" name="web_nama_team" value="{{ $title }}">
        <button type="button" id="rekapButton2" name="rekapButton2">Rekap Data Web</button>
    </form>

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
            var url = '/laporan';

            window.open(url, '_blank');
        }


        function exportToPdfwebsite() {
            var url = '/laporanrekapweb';

            window.open(url, '_blank');
        }

        function confirmDownload() {
            if (confirm('Apakah Anda yakin ingin mendownload?')) {
                exportArrayToExcel();
            }
        }

        function confirmDownload2() {
            if (confirm('Apakah Anda yakin ingin mendownload?')) {
                exportArrayToExcelWeb();
            }
        }



        function exportArrayToExcel() {
            var url = "/laporanexcel"; // Ganti dengan URL rute yang sesuai
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
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
                    downloadLink.download = "data.xlsx"; // Ganti dengan nama file yang diinginkan
                    downloadLink.click();
                })
                .catch(error => {
                    // Tangani kesalahan jika terjadi
                    console.error('Terjadi kesalahan:', error);
                });
        }

        function exportArrayToExcelWeb() {
            var url = "/laporanexcelweb"; // Ganti dengan URL rute yang sesuai
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
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
                    downloadLink.download = "data.xlsx"; // Ganti dengan nama file yang diinginkan
                    downloadLink.click();
                })
                .catch(error => {
                    // Tangani kesalahan jika terjadi
                    console.error('Terjadi kesalahan:', error);
                });
        }

        function exportArrayToExcel() {
            var url = "/laporanexcel"; // Ganti dengan URL rute yang sesuai
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
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
                    downloadLink.download = "data.xlsx"; // Ganti dengan nama file yang diinginkan
                    downloadLink.click();
                })
                .catch(error => {
                    // Tangani kesalahan jika terjadi
                    console.error('Terjadi kesalahan:', error);
                });
        }

        $(document).ready(function() {
            $("#rekapButton").click(function() {
                var bio_team = $("#bio_team").val();
                var token = $("input[name='_token']").val();

                $.ajax({
                    url: "http://dash_marketing.test/rekapbio",
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
            });
            $("#rekapButton2").click(function() {
                var web_nama_team = $("#web_nama_team").val();
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: "http://dash_marketing.test/rekapbio",
                    method: "POST",
                    data: {
                        _token: token,
                        nama_team: web_nama_team
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
            });
        });
    </script>
@endsection
