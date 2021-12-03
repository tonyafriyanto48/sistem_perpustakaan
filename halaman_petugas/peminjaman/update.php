<?php
require_once 'connect.php';

$id_peminjaman = $_GET["id_peminjaman"];
print_r($id_peminjaman);
function sudahDipinjam($id_peminjaman) {
  global $conn;

  $sql = "UPDATE `peminjaman` SET `status`=1 WHERE id_peminjaman='$id_peminjaman'";
        if ($conn->query($sql) === TRUE) {
        echo "<script>document.location='?p=peminjaman'</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

    //$sql = "UPDATE 'peminjaman' SET 'status`= 1' WHERE id_peminjaman='$id_peminjaman'";
    //$query = mysqli_query($conn, $sql);
    print_r("msduk function");
}
sudahDipinjam($id_peminjaman);
?>