<div class="card">
 <h5 class="card-title">
            Input Buku Baru
        </h5>

        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kode Buku</label>
                        <input type="text" name="Kode_buku" class="form-control" placeholder="kode buku">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input type="text" name="Judul_buku" class="form-control" placeholder="Masukan Judul Buku" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Penulis Buku</label>
                        <input type="text" name="penulis_buku" class="form-control" placeholder="nama penulis" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" placeholder="Masukan Tahun">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="Number" name="stok" class="form-control" placeholder="masukan nomor">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nomor Rak</label>
                        <input type="number" name="no_rak" class="form-control" placeholder="masukan Nomor">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Rak</label>
                        <input type="text" name="nama_rak" class="form-control" placeholder="nama Kategori">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Lokasi Rak</label>
                        <input type="text" name="lokasi_rak" class="form-control" placeholder="lokasi rak">
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
        $Kode_buku = $_POST['Kode_buku'];
        $judul_buku = $_POST['Judul_buku'];
        $penulis_buku = $_POST['penulis_buku'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $stok = $_POST['stok'];
        $no_rak = $_POST['no_rak'];
        $nama_rak = $_POST['nama_rak'];
        $lokasi_rak = $_POST['lokasi_rak'];

        $conn = new mysqli("localhost", "root", "", "perpustakaan");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT  INTO buku ( Kode_buku, Judul_buku, penulis_buku, tahun_terbit, stok, no_rak, nama_rak, lokasi_rak) 
	VALUES ('$Kode_buku','$judul_buku','$penulis_buku','$tahun_terbit','$stok','$no_rak','$nama_rak','$lokasi_rak')";
        if ($conn->query($sql) === TRUE) {
        echo "<script>document.location='?p=daftar-buku'</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
</div>