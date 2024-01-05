<?php
include("../includes/dbconn.php");

$id_daftar_poli = $_GET['id'];
$tgl_periksa = $_POST['tgl_periksa'];
$catatan = $_POST['catatan'];
// $obat = $_POST['obat'];
$harga = $_POST['harga'] + 150000;
            
    // Insert user data into table
$sql = "INSERT INTO periksa(id_daftar_poli,tgl_periksa,catatan,biaya_periksa) VALUES('$id_daftar_poli','$tgl_periksa','$catatan','$harga')";

// JIKA SUDAH DIPERIKSA, ANTRIAN AKAN JADI 0
$updateQuery = "UPDATE daftar_poli SET no_antrian = 0 WHERE id=$id_daftar_poli";

if ($connect->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error adding record: " . $connect->error;
}

if ($connect->query($updateQuery) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error adding record: " . $connect->error;
}
      
header('Location: ../pages/dokter/dokter_periksa.php');
$connect->close();
?>