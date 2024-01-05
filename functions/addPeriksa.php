<?php
include("../includes/dbconn.php");

$id_daftar_poli = $_GET['id'];
$tgl_periksa = $_POST['tgl_periksa'];
$catatan = $_POST['catatan'];
$obat = $_POST['id_obat'];
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

// MASUKKAN KE detail_periksa UNTUK OBAT
// $obatArr = explode('|', $obat);
// $cari_id_periksa = "SELECT id FROM periksa WHERE id_daftar_poli=$id_daftar_poli";
// $id_periksa = $connect->query($cari_id_periksa);
// while ($row = $id_periksa->fetch_assoc()) {
//     $id_periksa = $row['id'];
//   };
// foreach ($obatArr as $key) {
//     $key = trim($key);
//     echo '<script>console.log('.$key.')</script>';
//     echo '<script>console.log(id periksa'.$id_periksa.')</script>';
//     // $obatQuery = "INSERT INTO detail_periksa(id_periksa,id_obat) VALUES('$id_periksa', '$key')";
//     if ($connect->query($obatQuery) === TRUE) {
//         echo "Record added successfully";
//     } else {
//         echo "Error adding record: " . $connect->error;
//     }
// }
      
header('Location: ../pages/dokter/dokter_periksa.php');
$connect->close();
?>