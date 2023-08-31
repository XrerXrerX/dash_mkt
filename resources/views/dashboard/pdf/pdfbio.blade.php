<!DOCTYPE html>
<html>

<head>
    <title>Analytic Data</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .chart-container {
            background-color: rgb(5 5 5);
            width: 100%;
            height: 90%;
            justify-content: center;
            display: flex !important;
        }

        .chidl-chart-container {
            width: 50%;
            height: 90%;
            justify-content: center;
            display: flex !important;
        }
    </style>
</head>

<body>
    <h1>Analytic Data</h1>
    <div class="chart-container">
        <div class="chidl-chart-container">

            <canvas id="dailyChart"></canvas>
            <canvas id="weeklyChart"></canvas>
        </div>
    </div>

    <div class="chart-container">
        <div class="chidl-chart-container">
            <canvas id="monthlyChart"></canvas>
            <canvas id="yearlyChart"></canvas>
        </div>
    </div>
    <script>
        // Data dummy

        var labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var dataHarian = [10, 12, 15, 8, 5, 14, 11, 13, 9, 7, 6, 10];
        var dataMingguan = [50, 60, 70, 45, 55, 75, 65];
        var dataBulanan = [300, 280, 350, 320, 400, 390, 410, 380, 370, 350, 330, 300];
        var dataTahunan = [1500, 1600, 1700, 1400, 1800, 1900, 2000, 1700, 1600, 1500, 1400, 1300];

        // Grafik Harian
        var dailyChart = new Chart(document.getElementById('dailyChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                        label: 'Rekap Harian',
                        data: dataBulanan,
                        borderColor: 'blue',
                        backgroundColor: 'rgba(0, 0, 255, 0.2)',
                        fill: true
                    },
                    {
                        label: 'Rekap Mingguan',
                        data: dataTahunan,
                        borderColor: 'green',
                        backgroundColor: 'rgba(0, 255, 0, 0.2)',
                        fill: true
                    }
                ]
            }
        });

        // Grafik Mingguan
        var weeklyChart = new Chart(document.getElementById('weeklyChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6', 'Week 7'],
                datasets: [{
                    label: 'Rekap Mingguan',
                    data: dataMingguan,
                    backgroundColor: 'rgba(0, 128, 0, 0.6)'
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

        // Grafik Bulanan
        var monthlyChart = new Chart(document.getElementById('monthlyChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Rekap Bulanan',
                    data: dataBulanan,
                    backgroundColor: 'rgba(255, 165, 0, 0.6)'
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
                labels: labels,
                datasets: [{
                    label: 'Rekap Tahunan',
                    data: dataTahunan,
                    borderColor: 'red',
                    backgroundColor: 'rgba(255, 0, 0, 0.2)',
                    fill: true
                }]
            }
        });
    </script>
</body>

</html>
