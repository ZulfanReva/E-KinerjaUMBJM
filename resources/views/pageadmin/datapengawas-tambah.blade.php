<!DOCTYPE html>
<html lang="en">

<x-headeradmin :title="'Tambah Data Pengawas | E-Kinerja UMBJM'" />

<body class="g-sidenav-show  bg-gray-100">
  <x-navigasiadmin></x-navigasiadmin>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Beranda</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Selamat Datang di halaman Tambah Data Pengawas</h6>
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
              <h6>Tambah Data Pengawas</h6>
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
                          <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama Pengawas" required>
                        </div>
    
                        <!-- Dropdown Jabatan -->
                        <div class="col-md-3 mb-3">
                          <label for="jabatan" class="form-label">Jabatan</label>
                          <select id="jabatan" class="form-select" required>
                            <option selected disabled>Pilih Jabatan</option>
                            <option value="Koordinator">Koordinator</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Staff Administrasi">Staff Administrasi</option>
                          </select>
                        </div>
    
                        <!-- Input Nama Pengguna -->
                        <div class="col-md-3 mb-3">
                          <label for="namaPengguna" class="form-label">Nama Pengguna</label>
                          <input type="text" id="namaPengguna" class="form-control" placeholder="Masukkan Nama Pengguna" required>
                        </div>
    
                        <!-- Input Kata Sandi -->
                        <div class="col-md-3 mb-3">
                          <label for="kataSandi" class="form-label">Kata Sandi</label>
                          <input type="password" id="kataSandi" class="form-control" placeholder="Masukkan Kata Sandi" required>
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
    
      // Event listener untuk tombol tambah form baru
      addFormButton.addEventListener('click', () => {
        // Membuat elemen form baru
        const newForm = document.createElement('div');
        newForm.classList.add('form-group', 'mb-4');
        newForm.innerHTML = `
          <div class="row">
            <!-- Input Nama -->
            <div class="col-md-3 mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama Pengawas" required>
            </div>
    
            <!-- Dropdown Jabatan -->
            <div class="col-md-3 mb-3">
              <label for="jabatan" class="form-label">Jabatan</label>
              <select class="form-select" required>
                <option selected disabled>Pilih Jabatan</option>
                <option value="Koordinator">Koordinator</option>
                <option value="Supervisor">Supervisor</option>
                <option value="Staff Administrasi">Staff Administrasi</option>
              </select>
            </div>
    
            <!-- Input Nama Pengguna -->
            <div class="col-md-3 mb-3">
              <label for="namaPengguna" class="form-label">Nama Pengguna</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama Pengguna" required>
            </div>
    
            <!-- Input Kata Sandi -->
            <div class="col-md-3 mb-3">
              <label for="kataSandi" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
            </div>
          </div>
        `;
    
        // Menambahkan form baru ke kontainer
        additionalFormsContainer.appendChild(newForm);
      });
    
      // Menangani tombol simpan untuk submit data
      document.getElementById('formContainer').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form dikirim secara default
    
        // Redirection ke halaman data pengawas
        window.location.href = "datapengawas.html";
      });
    
      // Fungsi untuk mengedit data (placeholder)
      function editData(id) {
        alert("Edit data dengan ID: " + id);
        // Implementasikan logika edit data
      }
    
      // Fungsi untuk menghapus data
      function hapusData(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data dengan ID: " + id + "?")) {
          alert("Data dengan ID " + id + " berhasil dihapus.");
          // Implementasikan logika hapus data
        }
      }
    </script>
    
  </main>

</body>

</html>