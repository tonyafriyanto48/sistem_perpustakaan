<?php
 require_once 'connect.php';
if(isset($_GET["p"])){
    $page = $_GET["p"];
}else{
    $page = 'beranda';
}   
switch ($page){

    case "beranda":
        require ("beranda.php");
        break;

    case "daftar-buku":
        require ("buku/daftar-buku.php");
        break;
    case "input-buku":
        require ("buku/input.php");
        break;
    case "ubah-buku":
        require ("buku/update.php");
        break;
    case "hapus-buku":
        require ("buku/hapus.php");
        break;

    case "peminjaman":
        require ("peminjaman/index.php");
        break;
    case "input-peminjaman":
        require ("peminjaman/input.php");
        break;
    case "ubah-peminjaman":
        require ("peminjaman/update.php");
        break;
    case "hapus-peminjaman":
        require ("peminjaman/hapus.php");
        break;

    case "data-siswa":
        require ("data-siswa/daftar-siswa.php");
        break;
    case "input-siswa":
        require ("data-siswa/input.php");
        break;
    case "ubah-siswa":
        require ("data-siswa/update.php");
        break;
    case "hapus-siswa":
        require ("data-siswa/hapus.php");
        break;

    case "laporan_peminjaman":
        require ("laporan/laporan_peminjaman.php");
        break;
    case "input-kelas":
        require ("halaman/kelas/input.php");
        break;
    case "detail-kelas":
        require ("halaman/kelas/detail.php");
        break;

    default:
        require ("beranda.php");
}
?>