<?php 
	session_start();
	include('includes/dbconn.php');
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
		      	<h3 class="text-center mb-4">Login Pasien</h3>
						<form action="login-pasien.php" class="login-form" name="loginForm" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="nama" autocomplete="off" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="register.php">Belum Punya Akun</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" value="Login" name="btnLogin" class="btn btn-primary rounded submit p-3 px-5">Login</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<?php 
	// Cek Kredensial
		if (isset($_POST['btnLogin'])) {
			$username = $_POST['nama'];
			$password = $_POST['password'];

			if (!empty($_POST['nama']) && !empty($_POST['password'])) {
				$sql = 'SELECT nama, no_ktp, no_rm FROM pasien';
				$result = $connect->query($sql);
				while($row = $result->fetch_assoc()) {
					echo $row['nama'];
					if ($username == $row["nama"]) {
						if ($password == $row["no_ktp"]) {
							echo 'Kredensial Diterima';
							$_SESSION['pasien'] = substr($row["nama"], 0, strpos($row["nama"], ' '));
							$_SESSION['no_RM'] = $row["no_rm"];
							header('Location: pages/pasien/pasien_index.php');
    						die();
						}
						else {
							echo 'Password Salah';
						}
					}
					else {
						echo 'Username Salah';
					}
				}

			}

		}
	?>

	<script src="assets/assjs/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

	</body>
</html>

