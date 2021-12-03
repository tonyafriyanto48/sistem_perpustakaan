<?php
    $conn = new mysqli("localhost", "root", "", "perpustakaan");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id_buku = $_GET['id_buku'];
    $queryGet = "SELECT * FROM buku WHERE id_buku='$id_buku'";
    $buku = $conn->query($queryGet);
    $row = mysqli_fetch_array($buku);
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            Update Data Buku
        </h5>
        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">ID_Buku</label>
                        <input type="text" name="id_buku" readonly value="<?=$row['id_buku']?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kode Buku</label>
                        <input type="text" name="Kode_buku" value="<?=$row['Kode_buku']?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input type="text" name="Judul_buku" value="<?=$row['Judul_buku']?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Penulis Buku</label>
                        <input type="text" name="penulis_buku" value="<?=$row['penulis_buku']?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" value="<?=$row['tahun_terbit']?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="text" name="stok" value="<?=$row['stok']?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nomor Rak</label>
                        <input type="text" name="no_rak" value="<?=$row['no_rak']?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Rak</label>
                        <input type="text" name="nama_rak" value="<?=$row['nama_rak']?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Lokasi Rak</label>
                        <input type="text" name="lokasi_rak" value="<?=$row['lokasi_rak']?>" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="Perbarui" name="submit" class="btn btn-primary">
                        <a href="?p=ubah-buku" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php 
    if(isset($_POST['submit'])){
        $id_anggota = $_POST['id_anggota'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $RFid = $_POST['RFid'];

        $sql = "UPDATE anggota SET no='$no', Kode_buku='$Kode_buku', Judul_buku='$Judul_buku', penulis_buku='$penulis_buku', tahun_terbit='$tahun_terbit', stok='$stok', no_rak='$no_rak', nama_rak='$nama_rak', lokasi_rak='$lokasi_rak' WHERE id_buku='$id_buku'";
        if ($conn->query($sql) === TRUE) {
        echo "<script>document.location='?p=data-siswa'</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>