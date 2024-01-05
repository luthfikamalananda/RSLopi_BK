<?php
include("../includes/dbconn.php");

$id = $_GET['id'];
$nama_poli = $_POST['nama_poli'];
$keterangan = $_POST['keterangan'];
            
$sql = "UPDATE poli SET nama_poli='$nama_poli',keterangan='$keterangan' WHERE id=$id";

if(mysqli_query($connect, $sql)){ 
    echo "Record was updated successfully."; 
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($connect); 
}  
header('Location: ../pages/admin/admin_poli.php');
$connect->close();
?>