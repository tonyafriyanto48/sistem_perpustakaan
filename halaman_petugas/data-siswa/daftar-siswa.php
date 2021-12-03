<div class="container">
  <div class="row">
    <?php 
      require_once 'connect.php';
    ?>
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
                 <h4>DAFTAR SISWA</h4>
            </div>
                  </div>
              </div>
        </div>
  </div>

  <div class= "mb-5"></div>

    <table class="table table-light table-striped table-bordered border-dark" id="tabel-data">
    <tr> 
      <th scope="col">No</th>
      <th scope="col">ID Anggota</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
      <th scope="col">RFID</th>
      <th scope="col">Aksi</th>
    </tr>
          <?php
          if(!ISSET($_POST['submit'])){

          $sql = "SELECT * FROM anggota Orders ";
          $query = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($query)){
            

          ?>
      <tr>
        <td><?php echo $row['no']; ?></td>
        <td><?php echo $row['id_anggota']; ?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td><?php echo $row['kelas']; ?></td>
        <td><?php echo $row['jurusan']; ?></td>
        <td><?php echo $row['RFid']; ?></td>
        <td>
        <a href="?p=ubah-siswa&no=<?=$a['no']?>" class="btn btn-secondary btn-sm">Ubah</a>
          <a href="?p=hapus-siswa&no=<?=$a['no']?>" class="btn btn-dark btn-sm">Hapus</a>
        </td>
      </tr>

      <?php } } ?>

      <?php if (ISSET($_POST['submit'])){
          $cari = $_POST['nt'];
          $query2 = "SELECT * FROM anggota WHERE nama_siswa LIKE '%$cari%'";
          
          $sql = mysqli_query($conn, $query2);
          while ($r = mysqli_fetch_array($sql)){
        ?>
      <tr>
      <td><?php echo $r['no']; ?></td>
        <td><?php echo $r['id_anggota']; ?></td>
        <td><?php echo $r['nama_siswa']; ?></td>
        <td><?php echo $r['kelas']; ?></td>
        <td><?php echo $r['jurusan']; ?></td>
        <td><?php echo $r['RFid']; ?></td>
        <td>
          <a href="?p=ubah-siswa&no=<?=$a['no']?>" class="btn btn-secondary btn-sm">Ubah</a>
          <a href="?p=hapus-siswa&no=<?=$a['no']?>" class="btn btn-dark btn-sm">Hapus</a>
        </td>
      </tr>  
      <?php }} ?>

    </table>
     </div>
</div>

