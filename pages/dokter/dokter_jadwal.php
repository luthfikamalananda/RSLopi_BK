<?php
ob_start();
session_start();
if (!isset($_SESSION['dokter'])) {
  header('Location: ../../login.php');
  die();
} else {
  include('../../includes/dbconn.php');
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
      <a href="dokter_index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Dokter RS Lopi</span>
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
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['dokter'] ?></span>
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
        <a class="nav-link collapsed" href="dokter_index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dokter_pasien.php">
          <i class="bi bi-journal-text"></i><span>Riwayat Pasien</span></a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dokter_periksa.php">
          <i class="bi bi-journal-text"></i><span>Periksa</span></a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " href="dokter_jadwal.php">
          <i class="ri-calendar-event-fill"></i><span>Jadwal</span></a>
      </li><!-- End Forms Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">


    <?php
    $id_dokter = $_SESSION['id_dokter'];
    $sqlRead = "SELECT id, hari, jam_mulai, jam_selesai, aktif FROM jadwal_periksa WHERE id_dokter=$id_dokter";
    $result = $connect->query($sqlRead);
    ?>

    <div class="pagetitle">
      <h1>Jadwal</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="pages/dokter/dokter_index.php">Home</a></li>
          <li class="breadcrumb-item active">Jadwal</li>
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
                  <h5 class="card-title">Jadwal</h5>

                  <!-- Floating Labels Form -->
                  <form class="row g-3" action="dokter_jadwal.php" method="POST" name="formJadwal">
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="NoRM" name="noRM" value="<?php echo 'Dokter ' . $_SESSION['dokter'] ?>" disabled>
                        <label for="floatingName">Nama Dokter</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="State" name="hari_input">
                          <option selected disabled>Pilih Hari</option>
                          <option value="Senin">Senin</option>
                          <option value="Selasa">Selasa</option>
                          <option value="Rabu">Rabu</option>
                          <option value="Kamis">Kamis</option>
                          <option value="Jumat">Jumat</option>
                          <option value="Sabtu">Sabtu</option>
                        </select>
                        <label for="floatingSelect">Tentukan Hari</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="time" class="form-control" id="floatingTimeStart" placeholder="Waktu Mulai" name="time_start">
                        <label for="floatingName">Jam Mulai</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="time" class="form-control" id="floatingTimeEnd" placeholder="Waktu Selesai" name="time_end">
                        <label for="floatingName">Jam Selesai</label>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="reset" class="btn btn-secondary">Reset</button>
                      <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                    </div>
                  </form><!-- End floating Labels Form -->

                </div>
              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-8 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tabel Jadwal</h5>

                  <!-- Default Table -->
                  <table class="table">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam Mulai</th>
                        <th scope="col">Jam Selesai</th>
                        <th scope="col">Action</th>
                        <th scope="col" >Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $counter = 1;
                      while ($row = $result->fetch_assoc()) {
                        echo '<tr class="text-center">
                        <th scope="row">' . $counter . '</th>
                        <td>' . $row['hari'] . '</td>
                        <td>' . $row['jam_mulai'] . '</td>
                        <td>' . $row['jam_selesai'] . '</td>
                        <td><a type="submit" AKTIF=' . $row['aktif'] . ' HARI='. $row['hari'] .' JMMULAI='. $row['jam_mulai'] .' JMSELESAI='. $row['jam_selesai'] .' id_jadwal='. $row['id'] .' class="btn btn-primary rounded-pill btn-sm" value="' . $row['id'] . '" id="btnEdit" href="admin_obat_edit.php?id=' . $row['id'] . '" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Edit</a> 
                        <a type="submit" class="btn btn-danger rounded-pill btn-sm" value="' . $row['id'] . '" id="btnDelete" href="../../functions/deleteJadwal.php?id=' . $row['id'] . '">Hapus</a>
                        <td align="center"><a type="submit" id="column_aktif">' . $row['aktif'] . '</a></td>
                        </tr>';
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

    <!-- Vertically centered Modal -->
    <div class="modal fade" id="verticalycentered" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Jadwal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form class="row g-3" action="" method="POST" name="formJadwalEdit" id="formJadwalEdit">
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="NoRM" name="noRM" value="<?php echo 'Dokter ' . $_SESSION['dokter'] ?>" disabled>
                        <label for="floatingName">Nama Dokter</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <select class="form-select" id="floatingHari" aria-label="State" name="hari_input">
                          <option selected disabled>Pilih Hari</option>
                          <option value="Senin">Senin</option>
                          <option value="Selasa">Selasa</option>
                          <option value="Rabu">Rabu</option>
                          <option value="Kamis">Kamis</option>
                          <option value="Jumat">Jumat</option>
                          <option value="Sabtu">Sabtu</option>
                        </select>
                        <label for="floatingHari">Tentukan Hari</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="time" class="form-control" id="floatingTimeStartEdit" placeholder="Waktu Mulai" name="time_start">
                        <label for="floatingName">Jam Mulai</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="time" class="form-control" id="floatingTimeEndEdit" placeholder="Waktu Selesai" name="time_end">
                        <label for="floatingName">Jam Selesai</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <select class="form-select" id="floatingAktifEdit" aria-label="State" name="aktif">
                          <option selected disabled>Pilih Hari</option>
                          <option value="Y">Aktif</option>
                          <option value="N">Non Aktif</option>
                        </select>
                        <label for="floatingAktifEdit">Tentukan Hari</label>
                      </div>
                    </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="btnEdit">Save changes</button>
          </div>
        </div>
      </div>
      </form><!-- End floating Labels Form -->
    </div><!-- End Vertically centered Modal-->

    <?php
    if (isset($_POST['btnSubmit'])) {
      $hari = $_POST['hari_input'];
      $jam_mulai = $_POST['time_start'];
      $jam_selesai = $_POST['time_end'];

      $sql = "INSERT jadwal_periksa(id_dokter, hari, jam_mulai, jam_selesai, aktif) VALUES ('$id_dokter', '$hari', '$jam_mulai', '$jam_selesai', 'N')";

      if ($connect->query($sql) === TRUE) {
        echo "Record added successfully";
      } else {
        echo "Error adding record: " . $connect->error;
      }
      header('Location: dokter_jadwal.php');
      $connect->close();
    }
    ?>

  </main><!-- End #main -->

  <script>
    const btnEdit = document.querySelectorAll('#btnEdit');
    btnEdit.forEach(btn => {
      btn.addEventListener('click', () => {
        const hari = btn.getAttribute('HARI');
        const jmmulai = btn.getAttribute('JMMULAI');
        const jmselesai = btn.getAttribute('JMSELESAI');
        const id = btn.getAttribute('id_jadwal');
        const aktif = btn.getAttribute('AKTIF');

        document.getElementById('formJadwalEdit').setAttribute('action', `../../functions/editJadwal.php?id=${id}`)

        console.log(hari, jmmulai, jmselesai, id);

        document.getElementById('floatingHari').value = hari;
        document.getElementById('floatingTimeStartEdit').value = jmmulai;
        document.getElementById('floatingTimeEndEdit').value = jmselesai;
        document.getElementById('floatingAktifEdit').value = aktif;
      })
    });

    // Change Aktif from 'Y' to 'N'
    const kolomAktif = document.querySelectorAll('#column_aktif');
    kolomAktif.forEach(kolom => {
      if (kolom.innerText == 'Y') {
        kolom.setAttribute('class', 'btn btn-success rounded-pill btn-sm');
        kolom.innerText = 'AKTIF'
      } else if (kolom.innerText == 'N') {
        kolom.setAttribute('class', 'btn btn-danger rounded-pill btn-sm');
        kolom.innerText = 'NON-AKTIF'
      }
    });

  </script>

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