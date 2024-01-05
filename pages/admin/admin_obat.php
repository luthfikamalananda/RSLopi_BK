<?php 
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
        <a class="nav-link collapsed" href="admin_index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" href="admin_obat.php">
          <i class="bi bi-journal-text"></i><span>Obat</span></a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin_poli.php">
          <i class="bi bi-journal-text"></i><span>Poli</span></a>
      </li><!-- End Forms Nav -->

    </ul>

  </aside><!-- End Sidebar-->

 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Obat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin_index.php">Home</a></li>
          <li class="breadcrumb-item active">Obat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Obat RS Lopi</h5>
              <p>Berikut adalah data dari keseluruhan obat yang ada pada RS Lopi</p>

              <!-- Table with stripped rows -->
              <table class="table datatable table-striped table-hover">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Kemasan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
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
                    $sql = "SELECT * FROM obat";
                    $result = $connect->query($sql);
                    $counter = 1;
                    while($row = $result->fetch_assoc()) {
                      $id = $row['id'];
                      $nama_obat = $row['nama_obat'];
                      $kemasan = $row['kemasan'];
                      $harga = $row['harga'];
                      echo '<tr>
                      <th scope="row">'.$counter.'</th>
                      <td>'.$nama_obat.'</td>
                      <td>'.$kemasan.'</td>
                      <td>Rp '.number_format("$harga", 2, ",", ".").'</td>
                      <td><a type="submit" class="btn btn-primary rounded-pill btn-sm" value="'.$id.'" id="btnEdit" namaObat="'.$nama_obat.'" 
                      kemasan="'.$kemasan.'" harga="'.$harga.'" href="admin_obat_edit.php?id='.$id.'">Edit</a> 
                      <button type="submit" class="btn btn-danger rounded-pill btn-sm" value="'.$id.'" id="btnDelete" onclick="delFunc('.$id.')">Hapus</button></td>
                      </tr>';
                      $counter = $counter + 1;
                    }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

      <!-- ADD MODALS -->
              <!-- Vertically centered Modal -->
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verticalycentered" style="margin-top: -30px;">
                Tambah Obat
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Obat Baru</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Vertical Form -->
              <form class="row g-3" action="../../functions/addObat.php" method='post'>
                <div class="col-12">
                  <label for="Nama Obat" class="form-label">Nama Obat</label>
                  <input type="text" class="form-control" name="namaObat" autocomplete="off">
                </div>
                <div class="col-12">
                  <label for="Kemasan" class="form-label">Kemasan</label>
                  <input type="text" class="form-control" name="kemasan" autocomplete="off">
                </div>
                <div class="col-12">
                  <label for="Harga" class="form-label">Harga</label>
                  <input type="number" class="form-control" name="harga" autocomplete="off">
                </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                      </form><!-- Vertical Form -->
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

              
              <!-- EDIT MODAL Discontinued, nanti coba edit dibuat modal daripada beda page-->
              <div class="modal fade" id="verticalycenteredEDIT" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Obat</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Vertical Form -->
              <form class="row g-3" action="functions/addObat.php" method='post'>
                <div class="col-12">
                  <label for="Nama Obat" class="form-label">Nama Obat</label>
                  <input type="text" class="form-control" name="namaObat" autocomplete="off" id="namaObatEDIT">
                </div>
                <div class="col-12">
                  <label for="Kemasan" class="form-label">Kemasan</label>
                  <input type="text" class="form-control" name="kemasan" autocomplete="off" id="kemasanEDIT">
                </div>
                <div class="col-12">
                  <label for="Harga" class="form-label">Harga</label>
                  <input type="number" class="form-control" name="harga" autocomplete="off" id="hargaEDIT">
                </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                      </form><!-- Vertical Form -->
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->
    </section>

    

  </main><!-- End #main -->

  <script>
    const btnsDelete = document.querySelectorAll('#btnDelete');

    // Passing ID, (Karena tidak pakai AJAX & JQuery, passing dilakukan manual dg JS ke URL yang nantinya akan refresh dan dibaca lagi oleh Web)
    function delFunc(id) {
      console.log(id);
      location.href = `../../functions/deleteObat.php?id=${id}`;
    };

    // Mengubah Edit Obat Modal agar memiliki existing value
    function editFunc (e) {
      const namaObatEDIT = document.getElementById('namaObatEDIT')
      const hargaEDIT = document.getElementById('hargaEDIT')
      const kemasanEDIT = document.getElementById('kemasanEDIT')

      // const namaObatValue = namaObatEDIT.getAttribute('namaObat')
      // const hargaValue = hargaEDIT.getAttribute('harga')
      // const kemasanValue = kemasanEDIT.getAttribute('kemasan')

      const x = document.getElementById('btnEdit').getAttribute('kemasan')

      // namaObatEDIT.value = namaObatValue;
      // hargaEDIT.value = hargaValue;
      kemasanEDIT.value = x;
    }

    


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