<?php
include("../includes/dbconn.php");

$id = $_GET['id'];
$id_dokter = $_GET['id_dokter'];
$hari = $_POST['hari_input'];
$jam_mulai = $_POST['time_start'];
$jam_selesai = $_POST['time_end'];
$aktif = $_POST['aktif'];


$changeAlltoNQuery = "UPDATE jadwal_periksa SET aktif='N' WHERE id_dokter=$id_dokter";
$sql = "UPDATE jadwal_periksa SET hari='$hari',jam_mulai='$jam_mulai',jam_selesai='$jam_selesai',aktif='$aktif' WHERE id=$id";

if (mysqli_query($connect, $changeAlltoNQuery)) {
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. "
        . mysqli_error($connect);
}

if (mysqli_query($connect, $sql)) {
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. "
        . mysqli_error($connect);
}
header('Location: ../pages/dokter/dokter_jadwal.php');
$connect->close();
