<div class="container">
    <div class="row">
        <?php require_once 'connect.php'; ?>
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
                                                <input type="text" name="nt" class="form-control"
                                                    placeholder="cari ...">
                                                <div class="input-group-append">
                                                    <button type="submit" name="submit"
                                                        class="btn waves-effect waves-light btn-dark"><i
                                                            class="fa fa-search mr-1"></i> Search</button>
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

                                    <div class="mb-5"></div>

                                    <table id="peminjaman"
                                        class="table table-light table-striped table-bordered border-dark">
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
                                        <?php if (!isset($_POST['submit'])) {
              $sql = 'SELECT * FROM peminjaman';
              $query = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($query)) { ?>
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
                                            <?php if ($row['status'] != 1) { ?>
                                            <td>
                                                <a href="?p=ubah-peminjaman&id_peminjaman=<?= $row[
              'id_peminjaman'
          ] ?>" class="btn btn-secondary btn-sm">Selesai</a>
                                            </td>
                                            <?php } ?>
                                        </tr>

                                        <?php }
          } ?>


                                        <script>
                                        $(document).ready(function() {
                                            $('peminjaman').DataTable();
                                        });
                                        </script>