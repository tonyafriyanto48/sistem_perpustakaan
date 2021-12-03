<?php 
// menghubungkan php dengan koneksi database
include 'koneksi.php';

$rfid = isset($_GET["rfid"]) ? $_GET["rfid"] : "";
if(isset($rfid) && $rfid != ""){
    $uuidData = mysqli_query($koneksi, "UPDATE `uuid_data` SET `uuid`=\"$rfid\" WHERE id = 1");
    if($uuidData){
        echo json_encode(["status" => true, "massage" => "Ok"]);
    }else{
        echo json_encode(["status" => false, "massage" => "Error"]);
    }
}else{
    // menyeleksi data user dengan username dan password yang sesuai
    $uuidData = mysqli_query($koneksi,"SELECT * FROM uuid_data LIMIT 1");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($uuidData);
    // cek apakah username dan password di temukan pada database
    if($cek > 0){
        $data = mysqli_fetch_assoc($uuidData);
        echo json_encode(["status" => true, "data" => $data]);
    }else{
        echo json_encode(["status" => false, "massage" => "kosong"]);
    }
}
?>