<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;

        }

        footer {
            background-color: #B71113;
            /* Warna pink */
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin-bottom: 5px;
            /* Mengurangi margin bawah antar paragraf */
        }

        footer .fa-college {
            margin-top: -10px;
            /* Mengatur posisi ikon ke atas */
            margin-right: 5px;
            /* Memberi margin kanan pada ikon */
        }

        .intro-section {
            display: flex;
            height: 550px;
            background-color: #f5f5f5;

        }

        .intro-image {
            flex: 1;
            background-image: url('https://img.jakpost.net/c/2018/02/13/2018_02_13_40540_1518523584._large.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 550px;
        }

        .intro-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: rgb(183, 17, 18);
            color: #f1f1f1;
            text-align: center;
            height: 550px;
        }

        .intro-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .intro-content p {
            font-size: 1.5rem;
        }

        .scroll-down {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            font-size: 2rem;
            cursor: pointer;
            animation: bounce 2s infinite;
            height: 550px;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .about-section {
            padding: 60px 15px;
            text-align: center;
            background-color: #f5f5f5;
        }

        .about-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .card-deck {
            margin: 20px;


        }

        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgb(183, 17, 18);

        }

        .about-section p {
            font-size: 1.2rem;
            color: #000000;
            text-align: justify;
            line-height: 1.6;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 1.5rem;
        }

        .card-body {
            height: 600px;
            padding: 20px;
            text-align: justify;
        }

        .card-bodyy {
            height: 300px;
            padding: 20px;
            text-align: justify;

        }
    </style>
</head>

<body>

    @extends('layouts.template')

    @section('styles')
        <style>
            /* Additional styles if needed */
        </style>
    @endsection

    @section('content')
        <br>
        <div class="container py-12">

            <div style="width: 60%; margin: auto;">

            </div>

            <div class="card shadow">
                <div class="card-header">
                    <h3 class="card-tittle"> </h3>
                </div>
                <div class="card-body">

                    <div class="intro-section">
                        <div class="intro-image"></div>
                        <div class="intro-content">
                            <h1>Mengenal lebih jauh tentang budaya Kirab Grebeg Sudiro di Surakarta</h1>
                        </div>
                        <div class="scroll-down" onclick="scrollToContent()">
                            &#x21e3;
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="about-section" id="about-section">
            <div class="container">
                <h1>Kirab Grebeg Sudiro</h1>
                <p>
                    Dalam tradisi jawa, Grebeg bermakna perayaan rutin dan ucapan syukur dalam memperingati suatu peristiwa
                    penting. Di Solo, perayaan Grebeg sudah hidup cukup lama dalam tradisi Keraton Surakarta Hadiningrat.
                    Dalam setiap penyelenggaraan Grebeg, sebagai salah satu penanda khasnya adalah munculnya gunungan atau
                    tumpeng yang biasanya berisi hasil bumi dan jajanan lokal. Sementara Sudiro merupakan nama yang diambil
                    dari sebuah kampung bernama Kampung Sudiroprajan yang
                    berada di sekitar kawasan Pasar Gede. Grebeg Sudiro adalah perayaan grebeg yang menjadi penanda
                    akulturasi etnis Jawa dan Tionghoa di Kampung Sudiroprajan itu sendiri. Terdapat sumber yang mengatakan,
                    Tradisi Grebeg Sudiro semula untuk memperingati ulang tahun Pasar Gede Hardjonagoro setiap tanggal 12
                    Januari. Perayaan Grebeg Sudiro digagas oleh warga etnis Tionghoa dan etnis Jawa yang tinggal di kawasan
                    Kampung Sudiroprajan.
                    <br><br>
                    Lantaran memiliki semangat mengusung kebhinnekaan dan keberagaman, maka Pemerintah Kota Solo mendukung
                    menjadi perayaan rutin tahunan. Grebeg Sudiro sendiri memiliki dua kegiatan pokok yaitu sedekah bumi dan
                    kirab budaya. Sedekah bumi merupakan bentuk rasa syukur para pedagang di Pasar Gede dan masyarakat
                    sekitar dan Kirab Budaya dimaknai sebagai kerukunan dua etnis yaitu Tionghoa dan Jawa. Tentu yang
                    ditampilkan dalam kirab budaya seperti tarian khas Jawa serta perform Liong dan Barongsai.
                    Kelurahan Sudiroprajan merupakan wilayah perkampungan yang masuk dalam Kecamatan Jebres, Solo. Kampung
                    ini akrab disebut Kampung Pecinan, sebab banyaknya etnis Tionghoa bermukim di sana. Kelurahan
                    Sudiroprajan wilayahnya mencakup Kampung Kepanjen, Balong, Mijen, Ngampil, Samaan, Ketandan, Limolasan,
                    dan Balong Lengkong.

                </p>
            </div>
        </div>

        <div class="container">
            <div class="card-deck">
                <div class="card">
                    <img src="https://imgcdn.solopos.com/@space/2022/02/rsz_1barongsai.jpg" class="card-img-top"
                        alt="Pertunjukkan Barongsai">
                    <div class="card-header" style="font-size: 1rem;">
                        Pertunjukkan Barongsai
                    </div>
                    <div class="card-bodyy">
                        <p>Pertunjukkan Barongsai dan Reog Ponorogo oleh beberapa tim yang datang dari berbagai daerah di
                            Kota Surakarta. Tim tersebut mewakili daerahnya masing-masing untuk ikut berkontribusi di Grebeg
                            Sudiro.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/84/2024/04/14/FT-A-Kirab-Joko-Tingkir-dan-Arak-arakan-Gunungan-Ketupat-di-Solo-Safari-7-of-13-71630791.jpg"
                        class="card-img-top" alt="Pesta Lempar Gunungan">
                    <div class="card-header" style="font-size: 1rem;">
                        Pesta Lempar Gunungan
                    </div>
                    <div class="card-bodyy">
                        <p>Gunungan dilakukan sebagai ungkapan rasa syukur kepada Tuhan, serta sebagai simbol kebersamaan
                            dan persatuan masyarakat. Prosesi gunungan biasanya menggunakan hidangan khas Jawa.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://assets.promediateknologi.id/crop/92x0:1076x656/750x500/webp/photo/2023/01/10/844219994.jpg"
                        class="card-img-top" alt="Penampilan Kostum">
                    <div class="card-header" style="font-size: 1rem;">
                        Penampilan Kostum
                    </div>
                    <div class="card-bodyy">
                        <p>Tim yang mewakili masing-masing daerah di Kota Surakarta memamerkan kostum dan keahlian seperti
                            bernyanyi, menari, dan atraksi. Ada banyak tim yang membuat kostumnya sendiri secara kreatif.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://asset.kompas.com/crops/E6amX-1fPfxgDd5Ew8_1MJwPRpI=/0x9:1000x676/750x500/data/photo/2018/02/11/15152429842.jpg"
                        class="card-img-top" alt="Titik Awal Grebeg Sudiro">
                    <div class="card-header" style="font-size: 1rem;">
                        Titik Awal Grebeg Sudiro
                    </div>
                    <div class="card-bodyy">
                        <p>Grebeg Sudiro dimulai dengan pembukaan menyanyikan lagu kebangsaan Indonesia Raya bersama-sama.
                            Setelah itu dilanjutkan dengan sambutan oleh tokoh masyarakat Kota Surakarta.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.solopos.com/2012/01/nJ9NxCQm-normal_Grebeg_Sudiro_di_depan_Pasar_Gede_Solo2.jpg"
                        class="card-img-top" alt="Titik Akhir Grebeg Sudiro">
                    <div class="card-header" style="font-size: 1rem;">
                        Titik Akhir Grebeg Sudiro
                    </div>
                    <div class="card-bodyy">
                        <p>Pada titik akhir perayaan Grebeg Sudiro, masyarakat menunjukkan karyanya dari masing-masing
                            daerah. Karya yang dibuat tidak tanggung-tanggu, bisa seperti patung yang berukuran besar.</p>
                    </div>
                </div>
            </div>
        </div>


        <footer>
            <p>Rasyidini Ayu Rahmawati</p>
            <p>22/499856/SV/21374</p>
            <p>
                <i class="fa-solid fa-envelope-open" style="margin-right: 10px;"></i>
                <i class="fa-brands fa-github" style="margin-right: 10px;"></i>
                <i class="fas fa-university fa-college" style="margin-right: 10px;"></i>
            </p>
            <p>Universitas Gadjah Mada</p>
        </footer>
    @endsection

    @section('script')
        <script>
            function scrollToContent() {
                document.getElementById('about-section').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        </script>
    @endsection

</body>

</html>
