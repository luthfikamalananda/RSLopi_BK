<?php
include("../includes/dbconn.php");

$id = $_GET['id'];

$sql = "DELETE FROM jadwal_periksa WHERE id=$id";
if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connect->error;
}
      
header('Location: ../pages/dokter/dokter_jadwal.php');
$connect->close();
?>