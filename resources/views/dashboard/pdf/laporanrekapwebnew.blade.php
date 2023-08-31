<!DOCTYPE html>
<html>

<head>
    <title>Analytic Data {{ $title3 }}</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            box-sizing: border-box;
            background-color: black
        }

        h1 {
            text-align: center;
            justify-content: center;
            margin-bottom: 10px;
            color: antiquewhite
        }

        h3 {
            text-align: center;
            justify-content: center;
            color: antiquewhite
        }

        .chart-container {
            background-color: rgb(5 5 5);
            width: 100%;
            height: 100%;
            justify-content: center;
            display: inline-flex !important;
            padding: 10px;
        }

        .chart-container-child {
            width: 100%;
            height: 100%;
            justify-content: center;
            display: inline-block !important;
        }
    </style>
</head>

<body>
    <h1>Analytic Data {{ $title3 }} Website</h1>
    <div class="chart-container">
        <div class="chart-container-child">
            <h3>Harian</h3>
            <canvas id="dailyChart"></canvas>
        </div>
        <div class="chart-container-child">
            <h3>Mingguan</h3>
            <canvas id="weeklyChart"></canvas>
        </div>
    </div>
    <div class="chart-container">
        <div class="chart-container-child">
            <h3>Bulanan</h3>
            <canvas id="monthlyChart"></canvas>
        </div>
        <div class="chart-container-child">
            <h3>Tahunan</h3>
            <canvas id="yearlyChart"></canvas>
        </div>
    </div>
    <script>
        var dataHarianwebTrack = @json($dataHarianwebTrack);
        var dataHarianDaftar = @json($dataHarianDaftar);
        var dataHarianWhatsapp = @json($dataHarianWhatsapp);
        var dataHarianFacebook = @json($dataHarianFacebook);
        var dataHarianInstagram = @json($dataHarianInstagram);
        var dataHarianRtp = @json($dataHarianRtp);
        var dataHarianBuktiJp = @json($dataHarianBuktiJp);
        var dataHarianlivechat = @json($dataHarianlivechat);
        var dataMingguanwebTrack = @json($dataMingguanwebTrack);
        var dataMingguanDaftar = @json($dataMingguanDaftar);
        var dataMingguanWhatsapp = @json($dataMingguanWhatsapp);
        var dataMingguanFacebook = @json($dataMingguanFacebook);
        var dataMingguanInstagram = @json($dataMingguanInstagram);
        var dataMingguanRtp = @json($dataMingguanRtp);
        var dataMingguanBuktiJp = @json($dataMingguanBuktiJp);
        var dataMingguanLivechat = @json($dataMingguanLivechat);
        var databBulananwebTrack = @json($databBulananwebTrack);
        var databBulananDaftar = @json($databBulananDaftar);
        var databBulananWhatsapp = @json($databBulananWhatsapp);
        var databBulananFacebook = @json($databBulananFacebook);
        var databBulananInstagram = @json($databBulananInstagram);
        var databBulananRtp = @json($databBulananRtp);
        var databBulananBuktiJp = @json($databBulananBuktiJp);
        var databBulananLivechat = @json($databBulananLivechat);
        var rata2HariValuesBulanan = @json($rata2HariValuesBulanan);
        var rata2MingguValuesBulanan = @json($rata2MingguValuesBulanan);
        var dataTahunanwebTrack = @json($dataTahunanwebTrack);
        var dataTahunanDaftar = @json($dataTahunanDaftar);
        var dataTahunanWhatsapp = @json($dataTahunanWhatsapp);
        var dataTahunanFacebook = @json($dataTahunanFacebook);
        var dataTahunanInstagram = @json($dataTahunanInstagram);
        var dataTahunanWebRtp = @json($dataTahunanWebRtp);
        var dataTahunanWebBuktiJp = @json($dataTahunanWebBuktiJp);
        var dataTahunanWebLivechat = @json($dataTahunanWebLivechat);
        var rata2HariValuesTahunan = @json($rata2HariValuesTahunan);
        var rata2MingguValuesTahunan = @json($rata2MingguValuesTahunan);
        var labelHarian = @json($labelHarian);
        var labelMingguan = @json($labelMingguan);
        var labelBulanan = @json($labelBulanan);
        var labelTahunan = @json($labelTahunan);
        var dailyChart = new Chart(document.getElementById('dailyChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: labelHarian,
                datasets: [{
                        label: 'webTrack',
                        data: dataHarianwebTrack,
                        borderColor: 'rgb(207, 80, 20)',
                        backgroundColor: 'rgba(207, 80, 20, 0.2)',
                        fill: true
                    },

                    {
                        label: 'Daftar',
                        data: dataHarianDaftar,
                        borderColor: 'rgb(42, 120, 18)',
                        backgroundColor: 'rgba(42, 120, 18, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Whatsapp',
                        data: dataHarianWhatsapp,
                        borderColor: 'rgb(24, 123, 135)',
                        backgroundColor: 'rgba(24, 123, 135, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Facebook',
                        data: dataHarianFacebook,
                        borderColor: 'rgb(72, 81, 189)',
                        backgroundColor: 'rgba(72, 81, 189, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Instagram',
                        data: dataHarianInstagram,
                        borderColor: 'rgb(164, 82, 219)',
                        backgroundColor: 'rgb(164, 82, 219, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Rtp',
                        data: dataHarianRtp,
                        borderColor: 'rgb(186, 1, 66)',
                        backgroundColor: 'rgb(186, 1, 66, 0.2)',
                        fill: true
                    },
                    {
                        label: 'BuktiJp',
                        data: dataHarianBuktiJp,
                        borderColor: 'rgb(222, 212, 8)',
                        backgroundColor: 'rgb(222, 212, 8, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Livechat',
                        data: dataHarianlivechat,
                        borderColor: 'rgb(224, 39, 204)',
                        backgroundColor: 'rgb(224, 39, 204, 0.2)',
                        fill: true
                    }
                ]
            }
        });

        // Grafik Mingguan
        var weeklyChart = new Chart(document.getElementById('weeklyChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: labelMingguan,
                datasets: [{
                        label: 'webTrack',
                        data: dataMingguanwebTrack,
                        backgroundColor: 'rgba(106, 90, 205, 0.6)'
                    },
                    {
                        label: 'Daftar',
                        data: dataMingguanDaftar,
                        backgroundColor: 'rgba(0, 128, 0, 0.6)'
                    },
                    {
                        label: 'Whatsapp',
                        data: dataMingguanWhatsapp,
                        backgroundColor: 'rgba(201, 187, 184, 0.6)'
                    },
                    {
                        label: 'Facebook',
                        data: dataMingguanFacebook,
                        backgroundColor: 'rgba(52, 144, 186, 0.6)'
                    },
                    {
                        label: 'Instagram',
                        data: dataMingguanInstagram,
                        backgroundColor: 'rgba(19, 63, 184, 0.6)'
                    },
                    {
                        label: 'Rtp',
                        data: dataMingguanRtp,
                        backgroundColor: 'rgba(110, 189, 77, 0.6)'
                    },
                    {
                        label: 'BuktiJp',
                        data: dataMingguanBuktiJp,
                        backgroundColor: 'rgb(194, 18, 18, 0.6)'
                    },
                    {
                        label: 'Livechat',
                        data: dataMingguanLivechat,
                        backgroundColor: 'rgb(180, 120, 50, 0.6)'
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Grafik Bulanan
        var monthlyChart = new Chart(document.getElementById('monthlyChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: labelBulanan,
                datasets: [{
                    label: 'webTrack',
                    data: databBulananwebTrack,
                    backgroundColor: 'rgba(255, 165, 0, 0.6)'
                }, {
                    label: 'Daftar',
                    data: databBulananDaftar,
                    backgroundColor: 'rgba(227, 69, 38, 0.6)'
                }, {
                    label: 'Whatsap',
                    data: databBulananWhatsapp,
                    backgroundColor: 'rgba(0, 128, 0, 0.6)'
                }, {
                    label: 'Facebook',
                    data: databBulananFacebook,
                    backgroundColor: 'rgba(201, 187, 184, 0.6)'
                }, {
                    label: 'Instagram',
                    data: databBulananInstagram,
                    backgroundColor: 'rgba(52, 144, 186, 0.6)'
                }, {
                    label: 'Rtp',
                    data: databBulananRtp,
                    backgroundColor: 'rgba(110, 189, 77, 0.6)'
                }, {
                    label: 'BuktiJp',
                    data: databBulananBuktiJp,
                    backgroundColor: 'rgb(222, 61, 195 , 0.6)'
                }, {
                    label: 'livechat',
                    data: databBulananLivechat,
                    backgroundColor: 'rgb(194, 18, 18, 0.6)'
                }, {
                    label: 'rata2Hari',
                    data: rata2HariValuesBulanan,
                    backgroundColor: 'rgba(207, 80, 20, 0.6)'
                }, {
                    label: 'rata2Minggu',
                    data: rata2MingguValuesBulanan,
                    backgroundColor: 'rgba(19, 63, 184, 0.6)'
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Grafik Tahunan
        var yearlyChart = new Chart(document.getElementById('yearlyChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: labelTahunan,
                datasets: [{
                    label: 'Tahunan',
                    data: dataTahunanwebTrack,
                    borderColor: 'rgb(47, 222, 121)',
                    backgroundColor: 'rgb(47, 222, 121, 0.2)',
                    fill: true
                }]
            }
        });
    </script>
</body>

</html>
