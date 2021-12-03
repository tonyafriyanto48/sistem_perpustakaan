<div class="card">
 <h5 class="card-title">
            Input Buku Baru
        </h5>

        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">NIS</label>
                        <input type="text" name="id_anggota" class="form-control" placeholder="kode buku">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama_siswa" class="form-control" placeholder="Masukan Judul Buku" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" name="kelas" class="form-control" placeholder="nama penulis" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" placeholder="Masukan Tahun">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="InputPassword">RFid</label>
                        <input type="text" class="form-control" name="RFid" id="RFid"  placeholder="Tempelkan Kartu" readonly>
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

<script type="text/javascript">
    $( document ).ready(function() {
        readRfid();
    });
	function validasi() {
		var username = document.getElementById("username").value;
		var RFid = document.getElementById("RFid").value;		
		if (username != "" && Rfid!="") {
			return true;
		}else{
			alert('Username dan RFid harus di isi !');
			return false;
		}
	}
    function readRfid(){
        setInterval(function(){
            $.get("/sistem_perpustakaan/readrfid.php", function(data, status){
                var d = JSON.parse(data);
                //alert("Data: " + data + "\nStatus: " + status);
                if (d.status){
                    console.log(d.data.uuid);
                    $("#RFid").val(d.data.uuid);
                }
            });  
        }, 1000);  
    }
</script>

<?php 
    if(isset($_POST['submit'])){
        $id_anggota = $_POST['id_anggota'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $RFid = $_POST['RFid'];


        $conn = new mysqli("localhost", "root", "", "perpustakaan");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT  INTO anggota ( id_anggota, nama_siswa, kelas, jurusan, RFid) 
	VALUES ('$id_anggota','$nama_siswa','$kelas','$jurusan','$RFid')";
    $uuidData = "UPDATE `uuid_data` SET `uuid`=\"\" WHERE id = 1";
        if ($conn->query($sql) === TRUE) {
        echo "<script>document.location='?p=data-siswa'</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
</div>