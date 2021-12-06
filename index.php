<!doctype html>
<html lang="en">

<head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!---- data tabel--->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <title>Perpustakaan Bina Am Ma'mur</title>

    </style>
</head>

<body>


    <!--header-->
    <nav class="navbar navbar-dark bg-info">
        <a class="navbar-brand" href="#">
            <img src="image/logo_smk_bina_am_ma_mur_tangerang_1.png" width="30" height="30"
                class="d-inline-block align-top" alt="">
            Perpustakaan SMK BINA AM MA'MUR
        </a>
        <ul class="nav nav-tabs ">
            <li class="nav-item ">
                <a class="nav-link active " aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="halaman_index/berita.php">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="https://smkbam.sch.id/">Profil Sekolah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                    Petugas</a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu Petugas</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            Tidak Disarankan Bagi siswa untuk Login ! <p></p>
                            <p>Apa Anda Benar Ingin Login ? </p>
                        </div>
                        <a class="btn btn-primary btn-sm" href="login.php">login</a>
                    </div>
                </div>
            </li>
            </li>
        </ul>
    </nav>
    <!--End header-->

    <!--Main isi-->
    <div class="shadow p-3 mb-5 bg-info rounded ">
        <main class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-2 text-white ">Selamat Datang Di sistem <p>Perpustakaan SMK Bina AM Ma'mur</p>
                </h1>
                <p class="lead text-white ">Website Ini membantu siswa dalam Mencari Buku yang Tersedia di perpustakaan
                    ini</p>
                <p class="text-white">Baca <a href="halaman_index/peraturan.php" class="docs-creator">Peraturan
                        Perpustakaan</a> Untuk lebih Lanjut.</p>
            </div>
        </main>
    </div>
    <!--tabel-->
    <div class="container">
        <table id="buku" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Tersedia</th>
                    <th>NO Rak</th>
                    <th>Nama Rak</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
          include 'Koneksi.php';
          $buku= mysqli_query($koneksi," SELECT * FROM  buku");
          while ($row = mysqli_fetch_array($buku)){
            echo
             "<tr>
            <td>".$row['id_buku']."</td>
            <td>".$row['Kode_buku']."</td>
            <td>".$row['Judul_buku']."</td>
            <td>".$row['penulis_buku']."></td>
            <td>".$row['tahun_terbit']."</td>
            <td>".$row['stok']."</td>
            <td>".$row['no_rak']."</td>
            <td>".$row['nama_rak']."</td>
            <td>".$row['lokasi_rak']."</td>
            </tr>";
          }
          ?>
                </dv>

                <script>
                $(document).ready(function() {
                    $('#buku').DataTable();
                });
                </script>

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                    crossorigin="anonymous"></script>
</body>

</html>