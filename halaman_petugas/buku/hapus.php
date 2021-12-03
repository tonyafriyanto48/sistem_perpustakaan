<?php
    $conn = new mysqli("localhost", "root", "", "perpustakaan");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id_buku = $_GET['id_buku'];
    $sql = "DELETE  FROM buku WHERE id_buku = $id_buku";
    if ($conn->query($sql) === TRUE) {
        echo "<script>document.location='?p=daftar-buku'</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
?>