<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <title>sistem Perpustakaan</title>
</head>

<body>

    <style>
    .navbar-icon-top .navbar-nav .nav-link>.fa {
        position: relative;
        width: 36px;
        font-size: 24px;
    }

    .navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
        font-size: 0.75rem;
        position: absolute;
        right: 0;
        font-family: sans-serif;
    }

    .navbar-icon-top .navbar-nav .nav-link>.fa {
        top: 3px;
        line-height: 12px;
    }

    .navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
        top: -10px;
    }

    @media (min-width: 576px) {
        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
            text-align: center;
            display: table-cell;
            height: 70px;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa {
            display: block;
            width: 48px;
            margin: 2px auto 4px auto;
            top: 0;
            line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa>.badge {
            top: -7px;
        }
    }

    @media (min-width: 768px) {
        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
            text-align: center;
            display: table-cell;
            height: 70px;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa {
            display: block;
            width: 48px;
            margin: 2px auto 4px auto;
            top: 0;
            line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa>.badge {
            top: -7px;
        }
    }

    @media (min-width: 992px) {
        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
            text-align: center;
            display: table-cell;
            height: 70px;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa {
            display: block;
            width: 48px;
            margin: 2px auto 4px auto;
            top: 0;
            line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa>.badge {
            top: -7px;
        }
    }

    @media (min-width: 1200px) {
        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
            text-align: center;
            display: table-cell;
            height: 70px;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa {
            display: block;
            width: 48px;
            margin: 2px auto 4px auto;
            top: 0;
            line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa>.badge {
            top: -7px;
        }
    }
    </style>

    <title>sistem Informasi Dan Menejemen Perpustakaan</title>
    </head>

    <body>

        <?php
        $page = @$_GET['p'];
        $page = explode('-', $page);
        if (count($page) > 1) {
            $page = $page[1];
        } else {
            $page = $page[0];
        }
        ?>
        <!-- nav bar -->
        <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">WEB PERPUSTAKAAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link <?= $page == '' || $page == 'beranda'
                            ? 'active'
                            : '' ?>" href="?p=beranda"> <i class="fa fa-home"></i>Home </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-book"> </i> Data Buku </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?= $page == '' ||
                            $page == 'daftar-buku'
                                ? 'active'
                                : '' ?>" href="?p=daftar-buku">Tabel Data Buku</a>
                            <a class="dropdown-item <?= $page == '' ||
                            $page == 'input-buku'
                                ? 'active'
                                : '' ?>" href="?p=input-buku"> Input Buku Baru</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-handshake"> </i> Data Pinjam </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?= $page == '' ||
                            $page == 'peminjaman'
                                ? 'active'
                                : '' ?>" href="?p=peminjaman">Daftar Peminjam</a>
                            <a class="dropdown-item <?= $page == '' ||
                            $page == 'input-peminjaman'
                                ? 'active'
                                : '' ?>" href="?p=input-peminjaman"> Input Peminjam Baru</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-id-badge"> </i> Data siswa</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?= $page == '' ||
                            $page == 'data-siswa'
                                ? 'active'
                                : '' ?>" href="?p=data-siswa">Daftar Siswa</a>
                            <a class="dropdown-item <?= $page == '' ||
                            $page == 'input-siswa'
                                ? 'active'
                                : '' ?>" href="?p=input-siswa"> Input Siswa Baru</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-file"> </i> Laporan</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?= $page == '' ||
                            $page == 'laporan_peminjaman'
                                ? 'active'
                                : '' ?>" href="?p=laporan_peminjaman">Laporan Peminjaman</a>
                            <a class="dropdown-item <?= $page == '' ||
                            $page == 'input-buku'
                                ? 'active'
                                : '' ?>" href="?p=input-buku"> Laporan Siswa Masuk</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user-circle"></i>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fa fa-share"> </i>
                            Keluar
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End of Navigation Bar -->

        <!--- remote koneksi---->
        <?php
        $page = @$_GET['p'];
        $page = explode('-', $page);
        if (count($page) > 1) {
            $page = $page[1];
        } else {
            $page = $page[0];
        }
        ?>
        <!--- remote koneksi---->

        <!-- isi -->
        <?php include 'koneksi-petugas.php'; ?>
        <!-- tutup isi -->
    </body>

</html>