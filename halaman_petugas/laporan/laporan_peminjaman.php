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

<table  id="peminjaman" class="table table-light table-striped table-bordered border-dark">
    <tr> 
      <th scope="col">id peminjaman</th>
      <th scope="col">tanggal</th>
      <th scope="col">status</th>
      <th scope="col">Buku</th>
      <th scope="col">judul buku</th>
      <th scope="col">id anggota</th>
      <th scope="col">nama siswa</th>
      <th scope="col">RFID</th>
      <th scope="col">Qty</th>
    </tr>
          <?php
          if(!ISSET($_POST['submit'])){

          $sql = "SELECT * FROM peminjaman";
          $query = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($query)){

          ?>
      <tr>
        <td><?php echo $row['id_peminjaman']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td><?php echo $row['id_buku']; ?></td>
        <td><?php echo $row['judul_buku']; ?></td>
        <td><?php echo $row['id_anggota']; ?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td><?php echo $row['RFid']; ?></td>
        <td><?php echo $row['qty']; ?></td>
      </tr>

      <?php } } ?>
	</div>

    <div class="btn-group">
  <a href="laporan/cetak_pinjam.php" class="btn btn-primary">Link</a>
</div>