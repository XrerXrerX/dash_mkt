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
    <h1>Analytic Data {{ $title3 }} BioLink</h1>
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
        var dataHarianBiotrack = @json($dataHarianBiotrack);
        var dataHarianLogin = @json($dataHarianLogin);
        var dataHarianDaftar = @json($dataHarianDaftar);
        var dataHarianWhatsapp = @json($dataHarianWhatsapp);
        var dataHarianFacebook = @json($dataHarianFacebook);
        var dataHarianInstagram = @json($dataHarianInstagram);
        var dataHarianWebsiteGrup = @json($dataHarianWebsiteGrup);
        var dataHarianLivestream = @json($dataHarianLivestream);
        var dataMingguanBiotrack = @json($dataMingguanBiotrack);
        var dataMingguanLogin = @json($dataMingguanLogin);
        var dataMingguanDaftar = @json($dataMingguanDaftar);
        var dataMingguanWhatsapp = @json($dataMingguanWhatsapp);
        var dataMingguanFacebook = @json($dataMingguanFacebook);
        var dataMingguanInstagram = @json($dataMingguanInstagram);
        var dataMingguanWebsiteGrup = @json($dataMingguanWebsiteGrup);
        var dataMingguanLivestream = @json($dataMingguanLivestream);
        var databBulananBiotrack = @json($databBulananBiotrack);
        var databBulananLogin = @json($databBulananLogin);
        var databBulananDaftar = @json($databBulananDaftar);
        var databBulananWhatsapp = @json($databBulananWhatsapp);
        var databBulananFacebook = @json($databBulananFacebook);
        var databBulananInstagram = @json($databBulananInstagram);
        var databBulananWebsiteGrup = @json($databBulananWebsiteGrup);
        var dataBulananLivestream = @json($dataBulananLivestream);
        var rata2HariValuesBulanan = @json($rata2HariValuesBulanan);
        var rata2MingguValuesBulanan = @json($rata2MingguValuesBulanan);
        var dataTahunanBiotrack = @json($dataTahunanBiotrack);
        var dataTahunanLogin = @json($dataTahunanLogin);
        var dataTahunanDaftar = @json($dataTahunanDaftar);
        var dataTahunanWhatsapp = @json($dataTahunanWhatsapp);
        var dataTahunanFacebook = @json($dataTahunanFacebook);
        var dataTahunanInstagram = @json($dataTahunanInstagram);
        var dataTahunanWebsiteGrup = @json($dataTahunanWebsiteGrup);
        var dataTahunanWebsiteGrup = @json($dataTahunanWebsiteGrup);
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
                        label: 'Biotrack',
                        data: dataHarianBiotrack,
                        borderColor: 'rgb(207, 80, 20)',
                        backgroundColor: 'rgba(207, 80, 20, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Login',
                        data: dataHarianLogin,
                        borderColor: 'rgb(21, 207, 102)',
                        backgroundColor: 'rgba(21, 207, 102, 0.2)',
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
                        label: 'website',
                        data: dataHarianWebsiteGrup,
                        borderColor: 'rgb(186, 1, 66)',
                        backgroundColor: 'rgb(186, 1, 66, 0.2)',
                        fill: true

                    },
                    {
                        label: 'Livestream',
                        data: dataHarianLivestream,
                        borderColor: 'rgb(186, 1, 66)',
                        backgroundColor: 'rgb(186, 1, 66, 0.2)',
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
                        label: 'Biotrack',
                        data: dataMingguanBiotrack,
                        backgroundColor: 'rgba(106, 90, 205, 0.6)'
                    },
                    {
                        label: 'Login',
                        data: dataMingguanLogin,
                        backgroundColor: 'rgba(227, 69, 38, 0.6)'
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
                        label: 'WebsiteGrup',
                        data: dataMingguanWebsiteGrup,
                        backgroundColor: 'rgba(110, 189, 77, 0.6)'
                    },
                    {
                        label: 'Livestream',
                        data: dataMingguanLivestream,
                        backgroundColor: 'rgba(110, 189, 77, 0.6)'
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
                    label: 'Biotrack',
                    data: databBulananBiotrack,
                    backgroundColor: 'rgba(255, 165, 0, 0.6)'
                }, {
                    label: 'Login',
                    data: databBulananLogin,
                    backgroundColor: 'rgba(106, 90, 205, 0.6)'
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
                    label: 'WebsiteGrup',
                    data: databBulananWebsiteGrup,
                    backgroundColor: 'rgba(110, 189, 77, 0.6)'
                }, {
                    label: 'rata2Hari',
                    data: rata2HariValuesBulanan,
                    backgroundColor: 'rgba(207, 80, 20, 0.6)'
                }, {
                    label: 'rata2Minggu',
                    data: rata2MingguValuesBulanan,
                    backgroundColor: 'rgba(19, 63, 184, 0.6)'
                }, {
                    label: 'Livestream',
                    data: dataBulananLivestream,
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
                    data: dataTahunanBiotrack,
                    borderColor: 'rgb(47, 222, 121)',
                    backgroundColor: 'rgb(47, 222, 121, 0.2)',
                    fill: true
                }]
            }
        });
    </script>
</body>

</html>
