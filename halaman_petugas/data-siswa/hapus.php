<?php
    $conn = new mysqli("localhost", "root", "", "perpustakaan");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $no = $_GET['no'];
    $sql = "DELETE  FROM anggota WHERE no = $no";
    if ($conn->query($sql) === TRUE) {
        echo "<script>document.location='?p=data-siswa'</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
?>