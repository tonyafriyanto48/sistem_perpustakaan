<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Staff Gudang</title>
</head>

<body>

    <?php
    $page = @$_GET['s'];
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
                            : '' ?>" href="?p=input-buku">
                            Input Buku Baru</a>
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
                            : '' ?>" href="?p=input-buku">
                            Laporan Siswa Masuk</a>
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
</body>

</html>