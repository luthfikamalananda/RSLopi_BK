<?php
ob_start();
session_start();
if (!isset($_SESSION['admin'])) {
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
      <a href="admin_index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin RS Lopi</span>
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
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
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
            </li> -->

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
        <a class="nav-link collapsed" href="admin_index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin_obat.php">
          <i class="bi bi-journal-text"></i><span>Obat</span></a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin_poli.php">
          <i class="bi bi-journal-text"></i><span>Poli</span></a>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link" href="admin_dokter.php">
          <i class="bi bi-journal-text"></i><span>Dokter</span></a>
      </li><!-- End Forms Nav -->
    </ul>

  </aside><!-- End Sidebar-->



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Obat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin_index.php">Home</a></li>
          <li class="breadcrumb-item active">Poli</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Dokter RS Lopi</h5>
              <p>Berikut adalah data dari keseluruhan Dokter yang ada pada RS Lopi</p>

              <!-- Table with stripped rows -->
              <table class="table datatable table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Poli</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT dokter.id, dokter.alamat, dokter.nama, dokter.no_hp, poli.nama_poli FROM dokter INNER JOIN poli ON dokter.id_poli = poli.id";
                  $result = $connect->query($sql);
                  $counter = 1;
                  while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $nama = $row['nama'];
                    $alamat = $row['alamat'];
                    $no_hp = $row['no_hp'];
                    $nama_poli = $row['nama_poli'];
                    echo '<tr>
                      <th scope="row">' . $counter . '</th>
                      <td>' . $nama . '</td>
                      <td>' . $alamat . '</td>
                      <td>' . $no_hp . '</td>
                      <td>' . $nama_poli . '</td>
                      <td>
                      <button type="submit" class="btn btn-danger rounded-pill btn-sm" value="' . $id . '" id="btnDelete" onclick="delFunc(' . $id . ')">Hapus</button>
                      </tr>';
                    $counter = $counter + 1;
                  }
                  ?>
                </tbody>
              </table>
              <!-- <a type="submit" class="btn btn-primary rounded-pill btn-sm" value="' . $id . '" id="btnEdit" namaPoli="' . $nama . '" 
                      alamat="' . $alamat . '" href="admin_poli_edit.php?id=' . $id . '">Edit</a>  edit btn-->
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

      <!-- ADD MODALS -->
      <!-- Vertically centered Modal -->
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verticalycentered" style="margin-top: -30px;">
        Tambah Dokter
      </button>
      <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Poli Baru</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Vertical Form -->
              <form class="row g-3" action="admin_dokter.php" method='post'>
                <div class="col-12">
                  <label for="Nama Dokter" class="form-label">Nama Dokter</label>
                  <input type="text" class="form-control" name="namaDokter" autocomplete="off" required>
                </div>
                <div class="col-12">
                  <label for="alamat" class="form-label">Alamat</label>
                  <textarea type="text" class="form-control" name="alamat" autocomplete="off" required></textarea>
                </div>
                <div class="col-12">
                  <label for="no_hp" class="form-label">Nomor HP</label>
                  <input type="number" class="form-control" name="no_hp" autocomplete="off" required>
                </div>
                <div class="col-12">
                  <label for="poli" class="form-label">Poli</label>
                  <select class="form-select" id="floatingHari" aria-label="State" name="poli">
                    <?php
                      $dataPoliQuery = "SELECT * FROM poli";
                      $dataPoli = $connect->query($dataPoliQuery);
                      while($row = $dataPoli->fetch_assoc()) {
                        echo "<option value='".$row['id']."'>".$row['nama_poli']."</option>";
                      }
                    ?>
                  </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary" name="btnTambah">Tambah</button>
              </form><!-- Vertical Form -->
            </div>
          </div>
        </div>
      </div><!-- End Vertically centered Modal-->

      <?php
      if (isset($_POST['btnTambah'])) {
        $nama_dokter = $_POST['namaDokter'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $poli = $_POST['poli'];
        $tambahDataQuery = "INSERT INTO dokter(nama,alamat,no_hp,id_poli) VALUES ('$nama_dokter','$alamat','$no_hp','$poli')";

        if ($connect->query($tambahDataQuery) === TRUE) {
          echo "Record added successfully";
        } else {
          echo "Error adding record: " . $connect->error;
        }

        header('Location: admin_dokter.php');
      }
      ?>


    </section>



  </main><!-- End #main -->

  <script>
    const btnsDelete = document.querySelectorAll('#btnDelete');
    // Passing ID, (Karena tidak pakai AJAX & JQuery, passing dilakukan manual dg JS ke URL yang nantinya akan refresh dan dibaca lagi oleh Web)
    function delFunc(id) {
      console.log(id);
      location.href = `../../functions/deleteDokter.php?id=${id}`;
    };
  </script>

  <?php
  if (isset($_POST['btnEdit'])) {
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

  <script>
    const btnsTEST = document.querySelectorAll('#btnTest');
    btnsTEST.forEach(btn => {
      btn.addEventListener('click', (e) => {
        console.log(btn);
        let namaObat = btn.getAttribute('namaobat')
        let kemasan = btn.getAttribute('kemasan')
        let harga = btn.getAttribute('harga')
        console.log(namaObat, kemasan, harga);
      })
    });
  </script>
</body>



</html>