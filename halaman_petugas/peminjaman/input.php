<div class="card">
 <h5 class="card-title">
           Input Peminjaman
        </h5>

        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" placeholder="tanggal">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">ID BUKU</label>
                        <input type="number" name="id_buku" class="form-control" placeholder="id buku" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" placeholder="judul">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">id Anggota</label>
                        <input type="text" name="id_anggota" class="form-control" placeholder="id_anggota">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">nama siswa</label>
                        <input type="text" name="nama_siswa" class="form-control" placeholder="nama_siswa">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">RFID</label>
                        <input type="text" name="RFid" class="form-control" placeholder="tap kartu">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">JUMLAH</label>
                        <input type="number" name="qty" class="form-control" placeholder="jumlah">
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="myTable">
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        <a href="?p=beranda" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<?php 
    if(isset($_POST['submit'])){
        $tanggal = $_POST['tanggal'];
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $id_anggota = $_POST['id_anggota'];
        $nama_siswa = $_POST['nama_siswa'];
        $RFid = $_POST['RFid'];
        $qty= $_POST['qty'];
   

        $conn = new mysqli("localhost", "root", "", "perpustakaan");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO `peminjaman`( `tanggal`, `id_buku`, `judul_buku`, `id_anggota`, `nama_siswa`, `RFid`, `qty`) VALUES ('$tanggal' ,'$id_buku' ,'$judul_buku' ,'$id_anggota' ,'$nama_siswa' ,'$RFid' ,'$qty' )";
        if ($conn->query($sql) === TRUE) {
        echo "<script>document.location='?p=daftar-buku'</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
</div>