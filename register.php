<?php 
	session_start();
	include('includes/dbconn.php');
	session_destroy();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login Pasien</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/styleForm.css">

	</head>
	<body>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Register Pasien</h3>
						<form action="register.php" class="login-form" name="registerForm" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Nama Lengkap" name="NamaLengkap" autocomplete="off" required>
		      		</div>
					<div class="form-group">
		      			<input type="number" class="form-control rounded-left" placeholder="No. KTP" name="NoKTP" autocomplete="off" required>
		      		</div>
					<div class="form-group">
		      			<input type="number" class="form-control rounded-left" placeholder="No. Telepon" name="NoTelepon" autocomplete="off" required>
		      		</div>
					  <textarea class="form-control" placeholder="Alamat" id="alamat" style="height: 100px;" name="alamat" required></textarea>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
								</div>
								<div class="w-50 text-md-right">
									<a href="login-pasien.php">Sudah Punya Akun</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" value="submit" name="btnRegister" class="btn btn-primary rounded submit p-3 px-5">Daftar</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<?php

if (isset($_POST['btnRegister'])) {

	$nama = $_POST['NamaLengkap'];
	$noktp = $_POST['NoKTP'];
	$notelp = $_POST['NoTelepon'];
	$alamat = $_POST['alamat'];

	$sqlCheckAmount = 'SELECT * FROM pasien';
	$resultAmount = $connect->query($sqlCheckAmount);
	$total_data = mysqli_num_rows($resultAmount);

	$no_rm = date("Y").date("m").'-'.$total_data+1;
				
	$sql = "INSERT INTO pasien (nama, alamat, no_ktp, no_hp, no_rm) VALUES ('$nama', '$alamat','$noktp','$notelp','$no_rm')";
	if ($connect->query($sql) === TRUE) {
	"New record created successfully";
	header('Location: ../login-pasien.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$connect->close();
	header('Location: login-pasien.php');
}

?>

	<script src="assets/assjs/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

	</body>
</html>

