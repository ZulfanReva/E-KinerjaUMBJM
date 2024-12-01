<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/foto/logo.png">
  <title>
    Data Pengawas | E-Kinerja UMBJM
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
  <!--   Ikon Font Awesome   -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Tambahkan link ke Bootstrap JS dan Popper.js (untuk modal) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

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
            <a class="nav-link" href="berandaadmin.html">
                <div class="bg-gradient-info icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <img src="../assets/foto/dashboard.png" alt="Government" width="30" height="30">
                </div>
                <span class="nav-link-text ms-1">Beranda</span>
            </a>
          </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">HALAMAN</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="datadosen.html">
              <div class="bg-gradient-info icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <img src="../assets/foto/dosenaktif.png" alt="Government" width="30" height="30">
              </div>
              <span class="nav-link-text ms-1">Data Dosen</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">
            <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <img src="../assets/foto/profilpengawas.png" alt="Government" width="50" height="50">
            </div>
            <span class="nav-link-text ms-1">Data Pengawas</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="penilaianpk.html">
              <div class="bg-gradient-info icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <img src="../assets/foto/jabatan.png" alt="Government" width="30" height="30">
              </div>
              <span class="nav-link-text ms-1">Data Jabatan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="penilaianpk.html">
              <div class="bg-gradient-info icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <img src="../assets/foto/pm.png" alt="Government" width="30" height="30">
              </div>
              <span class="nav-link-text ms-1">Penilaian PM</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akun</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="profiladmin.html">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Beranda</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Selamat Datang di halaman Data Pengawas</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          
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
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h6 class="mb-0">Tabel Data Pengawas</h6>
              <a href="datapengawas-tambah.html" class="btn btn-sm bg-gradient-info btn-sm mb-0">Tambah Data</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Jabatan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Nama Pengguna</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kata Sandi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Baris 1 -->
                    <tr>
                      <td class="text-start">
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Pengawas 1</h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-start">
                        <p class="text-xs font-weight-bold mb-0">Koordinator</p>
                      </td>
                      <td class="text-start">
                        <p class="text-xs font-weight-bold mb-0">pengawas1</p>
                      </td>
                      <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">********</p>
                      </td>
                      <td class="align-middle text-center">
                        <button class="btn btn-sm bg-gradient-info me-2" onclick="window.location.href='datapengawas-edit.html'">
                          <i class="fa fa-edit fa-xs"></i>
                        </button>
                        <button class="btn btn-sm bg-gradient-danger me-2" onclick="hapusDataPengawas(1)">
                          <i class="fa fa-trash fa-xs"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Modal Konfirmasi Hapus -->
      <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Apakah Anda yakin ingin menghapus data pengawas ini?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
              <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Ya</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      let selectedDataId = null;
    
      // Fungsi untuk menampilkan modal konfirmasi
      function hapusDataPengawas(id) {
        selectedDataId = id; // Menyimpan ID data yang akan dihapus
        const modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal')); // Inisialisasi modal
        modal.show(); // Menampilkan modal
      }
    
      // Menangani klik tombol "Ya" pada modal
      document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
        const dataId = selectedDataId; // Mengambil ID data yang dipilih
    
        // Logika penghapusan data bisa ditambahkan di sini (misalnya melalui AJAX)
        alert("Data pengawas dengan ID " + dataId + " berhasil dihapus.");
        
        // Menutup modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('confirmDeleteModal'));
        modal.hide();
    
        // Redirect atau perbarui halaman
        window.location.href = "datapengawas.html"; // Atau sesuaikan dengan kebutuhan
      });
    </script>    
    
    <!-- Footer -->
    <footer class="footer pt-3">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>document.write(new Date().getFullYear())</script>, created by <a href="#" class="font-weight-bold" target="_blank">Universitas Muhammadiyah Banjarmasin</a>.
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  </main>

</body>

</html>