<?php
session_start();
if (!isset($_SESSION['dokter'])) {
  header('Location: login.php');
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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- Styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
  <!-- Or for RTL support -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

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

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" id="logoutNav">
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
        <a class="nav-link" href="dokter_periksa.php">
          <i class="bi bi-journal-text"></i><span>Periksa</span></a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dokter_jadwal.php">
          <i class="ri-calendar-event-fill"></i><span>Jadwal</span></a>
      </li><!-- End Forms Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Periksa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dokter_index.php">Home</a></li>
          <li class="breadcrumb-item active">Periksa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pasien yang Harus Diperiksa Dokter <?php echo $_SESSION['dokter'] ?></h5>
              <p>Berikut adalah data dari keseluruhan pasien yang menjadwalkan periksa dengan Dokter <?php echo $_SESSION['dokter'] ?> </p>

              <!-- Table with stripped rows -->
              <table class="table datatable table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Jam Selesai</th>
                    <th scope="col">Antrian</th>
                    <th scope="col" align="center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr> -->
                  <?php
                  $id_dokter = $_SESSION['id_dokter'];
                  $sql = "SELECT daftar_poli.id, pasien.nama, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, daftar_poli.keluhan, daftar_poli.no_antrian FROM dokter INNER JOIN jadwal_periksa ON jadwal_periksa.id_dokter = dokter.id INNER JOIN daftar_poli ON daftar_poli.id_jadwal = jadwal_periksa.id INNER JOIN pasien ON daftar_poli.id_pasien = pasien.id WHERE dokter.id = '$id_dokter' AND daftar_poli.no_antrian != 0";
                  $result = $connect->query($sql);
                  $counter = 1;
                  while ($row = $result->fetch_assoc()) {
                    $nama = $row['nama'];
                    $hari = $row['hari'];
                    $jam_mulai = $row['jam_mulai'];
                    $jam_selesai = $row['jam_selesai'];
                    $keluhan = $row['keluhan'];
                    $no_antrian = $row['no_antrian'];
                    echo '<tr>
                      <th scope="row">' . $counter . '</th>
                      <td>' . $nama . '</td>
                      <td>' . $hari . '</td>
                      <td>' . $keluhan . '</td>
                      <td>' . $jam_mulai . '</td>
                      <td>' . $jam_selesai . '</td>
                      <td>' . $no_antrian . '</td>
                      <td><a class="btn btn-primary rounded-pill btn-sm" value="'.$row["id"].'" id="btnPeriksa" nama-pasien="'. $nama .'" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verticalycentered">Periksa</a></td>
                      </tr>';
                    $counter = $counter + 1;
                  }
                  ?>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

             

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pasien yang Sudah Diperiksa Dokter <?php echo $_SESSION['dokter'] ?></h5>
              <p>Berikut adalah data dari keseluruhan pasien yang menjadwalkan periksa dengan Dokter <?php echo $_SESSION['dokter'] ?> </p>

              <!-- Table with stripped rows -->
              <table class="table datatable table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Jam Selesai</th>
                    <th scope="col">Antrian</th>
                    <th scope="col" align="center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr> -->
                  <?php
                  $id_dokter = $_SESSION['id_dokter'];
                  $tes = "SELECT daftar_poli.id, pasien.nama, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, daftar_poli.keluhan, daftar_poli.no_antrian FROM dokter INNER JOIN jadwal_periksa ON jadwal_periksa.id_dokter = dokter.id INNER JOIN daftar_poli ON daftar_poli.id_jadwal = jadwal_periksa.id INNER JOIN pasien ON daftar_poli.id_pasien = pasien.id WHERE dokter.id = '$id_dokter' AND daftar_poli.no_antrian = 0";
                  $result_done = $connect->query($tes);
                  $counter2 = 1;
                  while ($row = $result_done->fetch_assoc()) {
                    $nama = $row['nama'];
                    $hari = $row['hari'];
                    $jam_mulai = $row['jam_mulai'];
                    $jam_selesai = $row['jam_selesai'];
                    $keluhan = $row['keluhan'];
                    $no_antrian = $row['no_antrian'];
                    echo '<tr>
                      <th scope="row">' . $counter2 . '</th>
                      <td>' . $nama . '</td>
                      <td>' . $hari . '</td>
                      <td>' . $keluhan . '</td>
                      <td>' . $jam_mulai . '</td>
                      <td>' . $jam_selesai . '</td>
                      <td>' . $no_antrian . '</td>
                      <td><a class="btn btn-success rounded-pill btn-sm" value="'.$row["id"].'" id="btnPeriksa" nama-pasien="'. $nama .'" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verticalycentered">EDIT</a></td>
                      </tr>';
                    $counter2 = $counter2 + 1;
                  }
                  ?>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

             

            </div>
          </div>

        </div>
      </div>


    </section>


    <!-- PERIKSA MODALS -->
    <!-- Vertically centered Modal -->
    <div class="modal fade" id="verticalycentered" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Periksa Pasien</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Vertical Form (ADD PERIKSA)--> 
            <form class="row g-3" action="" method='post' id="formPeriksa">
              <div class="col-12">
                <label for="namaPasien" class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" name="namaPasien" id="namaPasien" autocomplete="off" disabled>
              </div>
              <div class="col-12">
                <label for="tgl_periksa" class="form-label">Tanggal Periksa</label>
                <input type="datetime-local" class="form-control" name="tgl_periksa" autocomplete="off" required>
              </div>
              <div class="col-12">
                <label for="catatan" class="form-label">Catatan</label>
                <textarea style="height: 100px;" class="form-control" name="catatan" autocomplete="off" required></textarea>
              </div>
              <div class="col-12">
                <label for="obat" class="form-label">Obat</label>
                <select class="js-example-basic-multiple form-select" id="multiple-select-field" name="obat" multiple="multiple" autocomplete="off" required>
                  <?php
                  $obatQuery = "SELECT * FROM obat";
                  $obat = $connect->query($obatQuery);
                  while ($row = $obat->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '|' . $row['harga'] . '">' . $row['nama_obat'] . ' - Rp ' .number_format($row['harga'], 2, ",", ".") . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="col-12">
                <label for="harga" class="form-label">Total Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" autocomplete="off" readonly>
              </div>
              <div class="col-12" hidden>
                <label for="id_obat" class="form-label">Obat</label>
                <input type="text" class="form-control" name="id_obat" id="id_obat" autocomplete="off" readonly>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Periksa</button>
            </form><!-- Vertical Form -->
          </div>
        </div>
      </div>
    </div><!-- End Vertically centered Modal-->

  </main><!-- End #main -->

  <script>
    // SELECT2
    $('#multiple-select-field').select2({
      theme: "bootstrap-5",
      width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
      placeholder: $(this).data('placeholder'),
      closeOnSelect: false,
    });

    // AUTO COUNT HARGA
    $(document).ready(function() {
      $('#multiple-select-field').change(function() {
        var Stdid = $('#multiple-select-field').val();

        console.log(Stdid);

        var counter = 0;
        var id_obat = '';
        Stdid.forEach(element => {
          console.log(element);
          var elementArr = element.split('|');
          id_obat = elementArr[0] + '|' + id_obat;
          var harga = parseInt(elementArr[1]);
          counter = counter + harga;
        });

        document.getElementById('id_obat').value = id_obat
        document.getElementById('harga').value = counter

      });
    });

    // Filling Form
    const btnPeriksa = document.querySelectorAll('#btnPeriksa');
    btnPeriksa.forEach(btn => {
      btn.addEventListener('click', () => {
        const id_daftar_poli = btn.getAttribute('value');
        console.log(id_daftar_poli);
        document.getElementById('namaPasien').value = btn.getAttribute('nama-pasien');
        document.getElementById('formPeriksa').setAttribute('action', `../../functions/addPeriksa.php?id=${id_daftar_poli}`)
      })
    });
  </script>


<!-- <script>
  const btnLogout = document.getElementById('logoutNav');
  btnLogout.onclick(function() {

  })
</script> -->


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