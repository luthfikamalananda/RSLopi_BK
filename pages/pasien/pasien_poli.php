<?php
ob_start();
session_start();
include('../../includes/dbconn.php');

if (isset($_SESSION['pasien'])) {
  include('../../includes/dbconn.php');
} else {
  header('Location: ../../login-pasien.php');
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="pages/dokter/dokter_index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Pasien RS Lopi</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="../../assets/img/messages-1.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Maria Hudson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>4 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="../../assets/img/messages-2.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Anna Nelson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>6 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="../../assets/img/messages-3.jpg" alt="" class="rounded-circle">
              <div>
                <h4>David Muldon</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>8 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="dropdown-footer">
            <a href="#">Show all messages</a>
          </li>

        </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['pasien'] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Dokter</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../functions/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="pasien_index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" href="pasien_poli.php">
          <i class="bi bi-journal-text"></i><span>Poli</span></a>
      </li><!-- End Forms Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Poli</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="pages/dokter/dokter_index.php">Home</a></li>
          <li class="breadcrumb-item active">Poli</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Form Pendaftaran Poli</h5>

                  <!-- Floating Labels Form -->
                  <form class="row g-3" action="pasien_poli.php" method="post">
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="NoRM" name="noRM" value="<?php echo $_SESSION['no_RM'] ?>" disabled>
                        <label for="floatingName">Nomor RM</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <select class="form-select" id="poliPilihan" aria-label="State" name="poliPilihan" required>
                          <option selected disabled>Buka untuk memilih Poli</option>
                          <?php
                          $sql = "SELECT * FROM poli";
                          $result = $connect->query($sql);
                          while ($row = $result->fetch_assoc()) {
                            echo "<option value=" . $row['id'] . ">" . $row['nama_poli'] . "</option>";
                          }

                          ?>
                        </select>
                        <label for="poliPilihan">Pilih Poli</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <select class="form-select" id="jadwalPilihan" aria-label="State" name="jadwalPilihan" required>
                          <option selected disabled>Buka untuk memilih Jadwal</option>
                        </select>
                        <label for="jadwalPilihan">Pilih Jadwal</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="keluhan" id="keluhan" style="height: 100px;" name="keluhan" required></textarea>
                        <label for="keluhan">Keluhan</label>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="reset" class="btn btn-secondary">Reset</button>
                      <button type="submit" class="btn btn-primary" name='btnSubmit'>Submit</button>
                    </div>
                  </form><!-- End floating Labels Form -->

                </div>
              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-8 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Default Table</h5>

                  <!-- Default Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Poli</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Selesai</th>
                        <th scope="col">Antrian</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $counter = 1;
                      $id_pasien = $_SESSION['id_pasien'];
                      $bacaData = "SELECT daftar_poli.id, daftar_poli.id_jadwal, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, dokter.nama, daftar_poli.no_antrian, poli.nama_poli FROM daftar_poli INNER JOIN jadwal_periksa ON daftar_poli.id_jadwal = jadwal_periksa.id INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id INNER JOIN poli ON dokter.id_poli = poli.id WHERE daftar_poli.id_pasien ='$id_pasien'";
                      $dataPasien = $connect->query($bacaData);
                      while ($row = $dataPasien->fetch_assoc()) {
                        echo "<tr>
                        <th scope='row'>".$counter."</th>
                        <td>".$row['nama_poli']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['hari']."</td>
                        <td>".$row['jam_mulai']."</td>
                        <td>".$row['jam_selesai']."</td>
                        <td align='center'>".$row['no_antrian']."</td>
                        <td><a href='../../functions/deleteDaftarPoli.php?id=".$row['id']."' class='btn btn-danger rounded-pill btn-sm' value='".$row['id']."' id='btnDelete'>Hapus</a></td>
                          </tr>";
                          $counter = $counter + 1;
                      }
                      ?>

                    </tbody>
                  </table>
                  <!-- End Default Table Example -->
                </div>
              </div>

            </div><!-- End Revenue Card -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- DEPENDANT SELECTBOX -->
  <!-- AJAX SENDING VALUE FROM SELECT BOX TO THE SERVER -->
  <script>
    $(document).ready(function() {
      $('#poliPilihan').change(function() {
        var Stdid = $('#poliPilihan').val();
        console.log('tes');

        $.ajax({
          type: 'POST',
          url: 'pasien_poli.php',
          data: {
            id: Stdid
          },
          success: function(data) {
            $('#jadwalPilihan').html(data);
          }
        });
      });
    });
  </script>

  <!-- FETCHING THE AJAX -->
  <?php
  if (isset($_POST['id'])) {
    $getPoliId = $_POST['id'];
    $sqlJadwal = "SELECT jadwal_periksa.id, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, jadwal_periksa.id_dokter, dokter.nama FROM jadwal_periksa INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id WHERE jadwal_periksa.id_dokter IN (SELECT id FROM dokter WHERE id_poli = $getPoliId)";
    $result = mysqli_query($connect, $sqlJadwal);

    $out = '';
    while ($row = mysqli_fetch_assoc($result)) {
      $out .=  "<option value=" . $row['id'] . ">" . $row['nama'] . " | " . $row['hari'] . " | " . $row['jam_mulai'] . " - " . $row['jam_selesai'] . "</option>";
    }
    echo $out;
  }
  ?>

  <!-- ADD DATA TO DATABASE -->
  <?php

  if (isset($_POST['btnSubmit'])) {
    $keluhan = $_POST['keluhan'];
    $poli = $_POST['poliPilihan'];
    $jadwal = $_POST['jadwalPilihan'];
    $id_pasien = $_SESSION['id_pasien'];

    // Antrian akan bertambah terus
    $cekAntrian = "SELECT no_antrian FROM daftar_poli WHERE id_jadwal='$jadwal' AND no_antrian != 0";
    $antrian = $connect->query($cekAntrian);
    $antrian = mysqli_num_rows($antrian);

    // Insert user data into table
    $sql = "INSERT INTO daftar_poli(id_pasien,id_jadwal,keluhan,no_antrian) VALUES('$id_pasien','$jadwal','$keluhan', $antrian+1)";


    if ($connect->query($sql) === TRUE) {
      echo "Record added successfully";
    } else {
      echo "Error adding record: " . $connect->error;
    }

    header('Location: pasien_poli.php');
    $connect->close();
  }

  ?>



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/assjs/jquery.min.js"></script>
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>