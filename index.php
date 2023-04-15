<?php
		// Set variable untuk biodata
		$nama = "Husein Syahfikri";
		$tgl_lhr = "Jakarta, 4 September 2001";
		$jns_klm = "Pria";
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biodata Husein</title>
        <link href="../fswd2-arkatama-php/assets/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-5">
            <h1><?php echo $nama; ?></h1>
            <p class="lead">
                Program MSIB Fullstack Web Developer ARKATAMA
            </p>
        </div>
        <div class="container">
            <nav>
                <ul class="nav nav-pills my-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../fswd2-arkatama-php/pages/phpinfo.php">phpinfo</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="../fswd2-arkatama-php/assets/img/foto.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nama; ?></h5>
                        <p class="card-text"><?php echo $tgl_lhr; ?><br><?php echo $jns_klm; ?><br>Jl. Pulo Besar 1 RT05/RW11 No.15 <br> Sunter Jaya, Tanjung Priok, Jakarta Utara <br> DKI Jakarta 14350</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="mb-3">Riwayat Pendidikan</h3>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4>Universitas Muhammadiyah Jakarta</h4>
                            <h5>Teknik Informatika</h5>
                            <strong>2020 - Sekarang</strong>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4>PPKD Sertifikasi Jaringan Komputer</h4>
                            <h5>Teknik Jaringan Komputer</h5>
                            <strong>2019</strong>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4>SMKN 54 Jakarta</h4>
                            <h5>Teknik Komputer Jaringan</h5>
                            <strong>2016 - 2019</strong>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4>SMPN 152 Jakarta</h4>
                            <strong>2013 - 2016</strong>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4>SDN 10 Sunter Jaya</h4>
                            <strong>2007 - 2013</strong>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="mb-3">Hobby</h3>
                    <div class="card">
                        <div class="card-body">
                            <h4>Menonton Film</h4>
                            <h4>Membaca Manhwa</h4>
                            <h4>Bermain Game</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <script src="../fswd2-arkatama-php/assets/script.js"></script>
    </body>
</html>