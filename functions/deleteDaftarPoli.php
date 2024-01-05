<?php
include("../includes/dbconn.php");

$id = $_GET['id'];

$sql = "DELETE FROM daftar_poli WHERE id=$id";
if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connect->error;
}
      
header('Location: ../pages/pasien/pasien_poli.php');
$connect->close();
?>