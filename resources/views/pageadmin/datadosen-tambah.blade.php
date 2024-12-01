<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/foto/logo.png">
  <title>
    Tambah Data Dosen | E-Kinerja UMBJM
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
            <a class="nav-link" href="penilaianpk.html">
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
            <a class="nav-link active" href="#">
              <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <img src="../assets/foto/dosenaktif.png" alt="Government" width="50" height="50">
              </div>
              <span class="nav-link-text ms-1">Data Dosen</span>
            </a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="penilaianpk.html">
              <div class="bg-gradient-info icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <img src="../assets/foto/profilpengawas.png" alt="Government" width="30" height="30">
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
          <h6 class="font-weight-bolder mb-0">Selamat Datang di halaman Tambah Data Dosen</h6>
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
            <div class="card-header pb-0">
              <h6>Tambah Data Dosen</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="p-4">
                <form id="formContainer">
                  <div id="formGroup">
                    <!-- Form pertama -->
                    <div class="form-group mb-4">
                      <div class="row">
                        <!-- Input Nama -->
                        <div class="col-md-3 mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
    
                        <!-- Input NIDN -->
                        <div class="col-md-3 mb-3">
                          <label for="nidn" class="form-label">NIDN</label>
                          <input type="text" id="nidn" class="form-control" placeholder="Masukkan NIDN">
                        </div>
    
                        <!-- Dropdown Prodi -->
                        <div class="col-md-3 mb-3">
                          <label for="prodi" class="form-label">Prodi</label>
                          <select id="prodi" class="form-select">
                            <option selected>Pilih Prodi</option>
                            <option value="1">Prodi 1</option>
                            <option value="2">Prodi 2</option>
                            <option value="3">Prodi 3</option>
                          </select>
                        </div>
    
                        <!-- Dropdown Status -->
                        <div class="col-md-3 mb-3">
                          <label for="status" class="form-label">Status</label>
                          <select id="status" class="form-select">
                            <option selected>Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
    
                  <!-- Kontainer untuk Form Baru -->
                  <div id="additionalForms"></div>
    
                  <div class="d-flex justify-content-between mt-4">
                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn bg-gradient-info" id="saveButton">Simpan</button>
    
                    <!-- Tombol Tambah Form -->
                    <button type="button" class="btn btn-outline-info" id="addFormButton">
                      <i class="fa fa-plus"></i> Tambah Form
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      // Seleksi tombol tambah dan elemen kontainer form
      const addFormButton = document.getElementById('addFormButton');
      const additionalFormsContainer = document.getElementById('additionalForms');
    
      // Event listener untuk tombol tambah
      addFormButton.addEventListener('click', () => {
        // Membuat elemen form baru
        const newForm = document.createElement('div');
        newForm.classList.add('form-group', 'mb-4');
        newForm.innerHTML = `
          <div class="row">
            <!-- Input Nama -->
            <div class="col-md-3 mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama">
            </div>
    
            <!-- Input NIDN -->
            <div class="col-md-3 mb-3">
              <label for="nidn" class="form-label">NIDN</label>
              <input type="text" class="form-control" placeholder="Masukkan NIDN">
            </div>
    
            <!-- Dropdown Prodi -->
            <div class="col-md-3 mb-3">
              <label for="prodi" class="form-label">Prodi</label>
              <select class="form-select">
                <option selected>Pilih Prodi</option>
                <option value="1">Prodi 1</option>
                <option value="2">Prodi 2</option>
                <option value="3">Prodi 3</option>
              </select>
            </div>
    
            <!-- Dropdown Status -->
            <div class="col-md-3 mb-3">
              <label for="status" class="form-label">Status</label>
              <select class="form-select">
                <option selected>Aktif</option>
                <option value="nonaktif">Nonaktif</option>
              </select>
            </div>
          </div>
        `;
    
        // Menambahkan form baru ke kontainer
        additionalFormsContainer.appendChild(newForm);
      });
    
      // Menangani submit tombol simpan
      document.getElementById('formContainer').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form disubmit secara default
    
        // Redirection ke halaman sebelumnya (datadosen.html)
        window.location.href = "datadosen.html";
      });
    </script>
    
      

    <script>
      function editData(id) {
        alert("Edit data dengan ID: " + id);
        // Logika edit data
      }
    
      function hapusData(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data dengan ID: " + id + "?")) {
          alert("Data dengan ID " + id + " berhasil dihapus.");
          // Logika hapus data
        }
      }
    </script>
    
  </main>

</body>

</html>