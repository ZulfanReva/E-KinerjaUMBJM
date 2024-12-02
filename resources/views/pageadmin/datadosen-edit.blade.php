<!DOCTYPE html>
<html lang="en">

<x-headeradmin :title="'Edit Data Dosen | E-Kinerja UMBJM'" />

<body class="g-sidenav-show  bg-gray-100">
  <x-navigasiadmin></x-navigasiadmin>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Dosen</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Selamat Datang di halaman Edit Data Dosen</h6>
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
                    
                      <!-- Form logout -->
                      <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn bg-gradient-info">Keluar</button>
                      </form>
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
              <h6>Edit Data Dosen</h6>
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
    
                  <div class="d-flex justify-content-between mt-4">
                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn bg-gradient-info" id="saveButton">Simpan</button>
                    
                    <!-- Tombol Kembali -->
                    <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='datadosen.html'">
                      Kembali
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