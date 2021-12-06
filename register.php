<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <title>daftar untuk Masuk</title>
</head>

<body>
    <!--header-->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="image/logo_smk_bina_am_ma_mur_tangerang_1.png" width="30" height="30"
                class="d-inline-block align-top" alt="">
            Perpustakaan SMK BINA AM MA'MUR
        </a>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://smkbam.sch.id/">Profil Sekolah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="login.php">Petugas</a>
            </li>
            </li>
        </ul>
    </nav>
    <!--End header-->



    <!---Register-->
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-sm-10 col-sm-1 col-md-4">
                <form method="post" class="form-container">
                    <h4 class="text-center font-weight-bold"> DAFTAR </h4>
                    <div class="form-group">
                        <label for="InputEmail">Nomor Induk Kepegawaian</label>
                        <input type="text" class="form-control" name="id_petugas" placeholder="Masukan NIK">
                    </div>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Jabatan</label>
                        <select class="form-select" name="jabatan" id="inputGroupSelect01">
                            <option selected>Pilih Salah satu</option>
                            <option value="orang">orang</option>
                            <option value="siswa">Siswa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">RFid</label>
                        <input type="text" class="form-control" name="RFid" id="RFid" placeholder="Tempelkan Kartu"
                            readonly>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                    <div class="form-footer mt-2">
                        <p> Sudah punya account? <a href="login.php">Login</a></p>
                    </div>
                    </div>
                </form>
            </section>
        </section>
    </section>
    <!---End Register-->



    <!-- FOOTER -->
    <footer class="fixed-bottom">
        <p style="text-align: center;">&copy; KKP Sistem Informasi Dan Administrasi Perpustakaan (20180801323)~Tony
            Afriyanto </p>
    </footer>
    <!-- End FOOTER -->


    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        readRfid();
    });

    function validasi() {
        var username = document.getElementById("username").value;
        var RFid = document.getElementById("RFid").value;
        if (username != "" && Rfid != "") {
            return true;
        } else {
            alert('Username dan RFid harus di isi !');
            return false;
        }
    }

    function readRfid() {
        setInterval(function() {
            $.get("readrfid.php", function(data, status) {
                var d = JSON.parse(data);
                //alert("Data: " + data + "\nStatus: " + status);
                if (d.status) {
                    console.log(d.data.uuid);
                    $("#RFid").val(d.data.uuid);
                }
            });
        }, 1000);
    }
    </script>


    <?php 
    if(isset($_POST['submit'])){
        $id_petugas = $_POST['id_petugas'];
        $username = $_POST['username'];
        $jabatan= $_POST['jabatan'];
        $RFid = $_POST['RFid'];

        $conn = new mysqli("localhost", "root", "", "perpustakaan");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO petugas (id_petugas, username, jabatan, RFid) VALUES ('$id_petugas','$username','$jabatan','$RFid')";
        $uuidData = "UPDATE `uuid_data` SET `uuid`=\"\" WHERE id = 1";
        if ($conn->query($sql) === TRUE && $conn->query($uuidData) === TRUE) {
            echo "<script>document.location='?p=petugas'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>

</body>

</html>