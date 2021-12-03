<?php
    session_start();
    //logout
    session_destroy();
    // arahkan ke halaman index.php 
    header("location: \sistem_perpustakaan\index.php");
?>