<?php
include("../includes/dbconn.php");

$id = $_GET['id'];
$hari = $_POST['hari_input'];
$jam_mulai = $_POST['time_start'];
$jam_selesai = $_POST['time_end'];

$sql = "UPDATE jadwal_periksa SET hari='$hari',jam_mulai='$jam_mulai',jam_selesai='$jam_selesai' WHERE id=$id";

if (mysqli_query($connect, $sql)) {
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. "
        . mysqli_error($connect);
}
header('Location: ../pages/dokter/dokter_jadwal.php');
$connect->close();
