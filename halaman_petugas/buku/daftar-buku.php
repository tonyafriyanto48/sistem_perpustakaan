<?php 
  require_once 'connect.php';
?>
<?php
function cekDipinjam($idBuku, $jumlah) {
  global $conn;
    $sql = "SELECT * FROM peminjaman WHERE id_buku='$idBuku' and status=0";
    $query = mysqli_query($conn, $sql);
    $totalDipinjam = 0;
    while ($row = mysqli_fetch_array($query)){
    $totalDipinjam = $totalDipinjam + $row['qty'];
    }
    return $jumlah-$totalDipinjam;
}
?>
<div class="container">
  <div class="row">

<form method="post">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="search-result-box card-box">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                      <div class="pt-3 pb-4">
                        <div class="input-group">
                        <input type="text" name="nt" class="form-control"  placeholder="cari ...">
                      <div class="input-group-append">
                          <button type="submit"  name="submit" class="btn waves-effect waves-light btn-dark"><i class="fa fa-search mr-1"></i> Search</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  <form>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="mt-4 text-center">
                 <h4>DAFTAR BUKU</h4>
            </div>
                  </div>
              </div>
        </div>
  </div>

  <div class= "mb-5"></div>

    <table  id="buku" class="table table-light table-striped table-bordered border-dark">
    <thead>
    <tr> 
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tahun</th>
      <th scope="col">Kategori</th>
      <th scope="col">Rak</th>
      <th scope="col">Tersedia</th>
      <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
          <?php
          if(!ISSET($_POST['submit'])){

          $sql = "SELECT * FROM buku";
          $query = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($query)){

          ?>
      <tr>
        <td><?php echo $row['id_buku']; ?></td>
        <td><?php echo $row['Judul_buku']; ?></td>
        <td><?php echo $row['penulis_buku']; ?></td>
        <td><?php echo $row['tahun_terbit']; ?></td>
        <td><?php echo $row['nama_rak']; ?></td>
        <td><?php echo $row['lokasi_rak']; ?></td>
        <td><?php echo cekDipinjam($row['id_buku'],$row['stok']) ; ?></td>
        <td>
          <a href="?p=ubah-buku&id_buku=<?=$row['id_buku']?>" class="btn btn-secondary btn-sm">Ubah</a>
          <a href="?p=hapus-buku&id_buku=<?=$row['id_buku']?>" class="btn btn-dark btn-sm">Hapus</a>
        </td>
      </tr>

      <?php } } ?>
          </tbody>
      <?php if (ISSET($_POST['submit'])){
          $cari = $_POST['nt'];
          $query2 = "SELECT * FROM buku WHERE judul_buku LIKE '%$cari%'";
          
          $sql = mysqli_query($conn, $query2);
          while ($r = mysqli_fetch_array($sql)){
        ?>
      <tr>
        <td><?php echo $r['id_buku']; ?></td>
        <td><?php echo $r['Judul_buku']; ?></td>
        <td><?php echo $r['penulis_buku']; ?></td>
        <td><?php echo $r['tahun_terbit']; ?></td>
        <td><?php echo $r['nama_rak']; ?></td>
        <td><?php echo $r['lokasi_rak']; ?></td>
        <td><?php echo $r['stok']; ?></td>
        <td>
          <a href="?p=ubah-buku&id_buku=<?=$a['id_buku']?>" class="btn btn-secondary btn-sm">Ubah</a>
          <a href="?p=hapus-buku&id_buku=<?=$a['id_buku']?>" class="btn btn-dark btn-sm">Hapus</a>
        </td>
      </tr>  
      <?php }} ?>

    </table>
     </div>
</div>

<script>
  $(document).ready(function() {
    $('#buku').DataTable();
} );
</script>
