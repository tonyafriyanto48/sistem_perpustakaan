<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Login PERPUSTAKAAN</title>
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

    <!---Login-->
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-sm-10 col-sm-1 col-md-4">
                <form action="ceklogin.php" method="post" onSubmit="return validasi()">
                    <h4 class="text-center font-weight-bold"> Silahkan Masuk </h4>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" name="username" id="username"
                            placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">RFid</label>
                        <input type="text" class="form-control" name="RFid" id="RFid" placeholder="Tempelkan Kartu"
                            readonly>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" value="Login" class="tombol">
                    </div>
                    <div class="form-footer mt-2">
                        <p> Belum punya akun ? <a href="register.php">daftar</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>
    <!---End login-->



    <!-- FOOTER -->
    <footer class="fixed-bottom">
        <p style="text-align: center;">&copy; KKP Sistem Informasi Dan Administrasi Perpustakaan (20180801323) ~ Tony
            Afriyanto </p>
    </footer>
    <!-- End FOOTER -->

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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
</body>

</html>