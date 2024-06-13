{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-tittle">Grebeg Sudiro Surakarta</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Titik Spot Grebeg Sudiro</h4>
                            <p style="font-size: 20pt">{{ $total_points }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa-solid fa-route"></i> Jalur Kirab Grebeg Sudiro</h4>
                            <p style="font-size: 20pt">{{ $total_polylines }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa-solid fa-landmark"></i> Bangunan Wisata</h4>
                            <p style="font-size: 20pt">{{ $total_polygons }}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p>Anda login sebagai <b>{{ Auth::user()->name }}</b> dengan email
                    <i> {{Auth::user()->email}}</i></p>
            </div>
        </div>
    </div>

</x-app-layout> --}}


<?php
// Data statistik jumlah pengunjung
$data = [
    'Pukul 06.00' => 264,
    'Pukul 09.00' => 1322,
    'Pukul 12.00' => 925,
    'Pukul 15.00' => 594,
    'Pukul 18.00' => 228,
    'Pukul 00.00' => 102,
];

// Konversi array PHP ke format JSON
$dataLabels = json_encode(array_keys($data));
$dataValues = json_encode(array_values($data));
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="container py-12">

        <div style="width: 60%; margin: auto;">
            <canvas id="barChart"></canvas>
        </div>

        <br></br>
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-tittle">Tabel Jumlah Pengunjung Grebeg Sudiro</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Jam</th>
                            <th>Jumlah Pengunjung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $jam => $jumlah): ?>
                        <tr>
                            <td><?php echo $jam; ?></td>
                            <td><?php echo $jumlah; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="card shadow mt-4">
            <div class="card-header">
                <h3 class="card-tittle">Grebeg Sudiro Surakarta</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Titik Spot Grebeg Sudiro</h4>
                            <p style="font-size: 20pt">{{ $total_points }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa-solid fa-route"></i> Jalur Kirab Grebeg Sudiro</h4>
                            <p style="font-size: 20pt">{{ $total_polylines }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa-solid fa-landmark"></i> Bangunan Wisata</h4>
                            <p style="font-size: 20pt">{{ $total_polygons }}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p>Anda login sebagai <b>{{ Auth::user()->name }}</b> dengan email
                    <i> {{ Auth::user()->email }}</i>
                </p>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const ctx = document.getElementById('barChart').getContext('2d');

            // Data untuk diagram batang dari PHP
            const labels = <?php echo $dataLabels; ?>;
            const dataValues = <?php echo $dataValues; ?>;

            // Konfigurasi data
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Pengunjung',
                    data: dataValues,

                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            new Chart(ctx, config);
        });
    </script>
</x-app-layout>
