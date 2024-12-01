<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/foto/logo.png">
  <title>
    Input Nilai PK | E-Kinerja UMBJM
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/foto/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">E-Kinerja UMBJM</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Utama</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="berandapengawas.html">
              <div class="bg-gradient-info icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <img src="../assets/foto/dashboard.png" alt="Beranda" width="30" height="30">
              </div>
              <span class="nav-link-text ms-1">Beranda</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">HALAMAN</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">
            <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/foto/pk.png" alt="PK" width="50" height="50">
            </div>
            <span class="nav-link-text ms-1">Penilaian PK</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akun</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="profilpengawas.html">
            <div class="bg-gradient-info icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/foto/profil.png" alt="Infrastructure" width="30" height="30">
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>

      </ul>
    </div>
    
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Form Penilaian PK</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Selamat datang di halaman Form Penilaian PK</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar"></div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <!-- Tombol Keluar -->
              <a class="btn btn-outline-info btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</a>
          
              <!-- Modal Konfirmasi Keluar -->
              <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Keluar</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apakah Anda yakin ingin keluar dari akun?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <a href="../index.html" class="btn bg-gradient-info">Keluar</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Form -->
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
      <div class="container-fluid">
        <!-- Header Gambar -->
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/foto/bginputpk.png'); background-position-y: 50%;">
          <span class="mask bg-gradient-info opacity-6"></span>
        </div>
    
        <!-- FORM PENILAIAN -->
        <div class="card card-body blur shadow-blur mx-4 mt-4 overflow-hidden">
          <h6 class="text-center text-info mb-4 font-weight-bold">FORM PENILAIAN PERILAKU KERJA</h6>
          
          <!-- Profil Dosen dan Pengawas -->
          <div class="row">
            <!-- Grid Pertama: Profil Dosen -->
            <div class="col-md-6">
              <h6 class="font-weight-bold text-info">Profil Dosen</h6>
              <div class="form-group">
                <label for="nama-dosen">Nama</label>
                <input type="text" class="form-control" id="nama-dosen" readonly>
              </div>
              <div class="form-group">
                <label for="nidn">NIDN</label>
                <input type="text" class="form-control" id="nidn" readonly>
              </div>
              <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" class="form-control" id="prodi" readonly>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" readonly>
              </div>
            </div>
        
            <!-- Grid Kedua: Profil Pengawas -->
            <div class="col-md-6">
              <h6 class="font-weight-bold text-info">Profil Pengawas</h6>
              <div class="form-group">
                <label for="nama-pengawas">Nama</label>
                <input type="text" class="form-control" id="nama-pengawas" readonly>
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" readonly>
              </div>
              <div class="form-group">
                <label for="waktu-penilaian">Waktu Penilaian</label>
                <input type="date" class="form-control" id="waktu-penilaian">
              </div>
              <div class="form-group">
                <label for="periode">Periode</label>
                <select class="form-control" id="periode">
                  <option value="">Pilih Periode</option>
                  <option value="semester1">Semester 1</option>
                  <option value="semester2">Semester 2</option>
                </select>
              </div>
            </div>
          </div>
        
          <!-- Form Penilaian -->
          <div class="row mt-4">
            <h6 class="font-weight-bold text-info text-center">Penilaian Perilaku Kerja</h6>
            <div class="col-md-6">
              <div class="form-group">
                <label for="orientasi-pelayanan">Orientasi Pelayanan</label>
                <select class="form-control" id="orientasi-pelayanan">
                  <option value="">Pilih Nilai</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="integritas">Integritas</label>
                <select class="form-control" id="integritas">
                  <option value="">Pilih Nilai</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="disiplin">Disiplin</label>
                <select class="form-control" id="disiplin">
                  <option value="">Pilih Nilai</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="kerjasama">Kerjasama</label>
                <select class="form-control" id="kerjasama">
                  <option value="">Pilih Nilai</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="kepemimpinan">Kepemimpinan</label>
                <select class="form-control" id="kepemimpinan">
                  <option value="">Pilih Nilai</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
          </div>
          
        
          <!-- Tombol Simpan -->
          <button type="submit" class="btn bg-gradient-info w-100 mt-4">Simpan</button>
        </div>
        
      </div>
    </div>
    <!-- End Form -->
      
    </div>
  </main>
</body>

</html>