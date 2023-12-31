<?php
include("../includes/dbconn.php");

$id = $_GET['id'];
$namaObat = $_POST['nama_obat'];
$kemasan = $_POST['kemasan'];
$harga = $_POST['harga'];
            
$sql = "UPDATE obat SET nama_obat='$namaObat',kemasan='$kemasan',harga=$harga WHERE id=$id";

if(mysqli_query($connect, $sql)){ 
    echo "Record was updated successfully."; 
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($connect); 
}  
header('Location: ../admin_obat.php');
$connect->close();
?>