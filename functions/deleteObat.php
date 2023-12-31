<?php
include("../includes/dbconn.php");

$id = $_GET['id'];

$sql = "DELETE FROM obat WHERE id=$id";
if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connect->error;
}
      
header('Location: ../admin_obat.php');
$connect->close();
?>