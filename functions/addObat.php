<?php
include("../includes/dbconn.php");

$namaObat = $_POST['namaObat'];
$kemasan = $_POST['kemasan'];
$harga = $_POST['harga'];
            
    // Insert user data into table
$sql = "INSERT INTO obat(nama_obat,kemasan,harga) VALUES('$namaObat','$kemasan',$harga)";


if ($connect->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error adding record: " . $connect->error;
}
      
header('Location: ../admin_obat.php');
$connect->close();
?>