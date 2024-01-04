<?php
include("../includes/dbconn.php");
// Insert user data into table

if (isset($_POST['btnSubmit'])) {
    $id_dokter = $_SESSION['id_dokter'];
    $hari = $_POST['hari_input'];
    $jam_mulai = $_POST['time_start'];
    $jam_selesai = $_POST['time_end'];

    $sql = "INSERT jadwal_periksa(id_dokter, hari, jam_mulai, jam_selesai) VALUES ('$id_dokter', '$hari', '$jam_mulai', '$jam_selesai')";

    if ($connect->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error adding record: " . $connect->error;
    }
    $connect->close();
}


header('Location: ../pages/dokter/dokter_jadwal.php');
$connect->close();
