<!DOCTYPE html>
<html lang="en">

<x-headeradmin :title="'Data Dosen | E-Kinerja UMBJM'" />

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
          <h6 class="font-weight-bolder mb-0">Selamat Datang di halaman Data Dosen</h6>
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
        <!-- Header dengan tombol Tambah Data -->
        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
          <h6 class="mb-0">Tabel Data Dosen</h6>
          <!-- Ganti href dengan route Laravel -->
          <a href="{{ route('tambahdatadosen') }}" class="btn btn-sm bg-gradient-info btn-sm mb-0">Tambah Data</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-start">NIDN</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Prodi</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <!-- Baris 1 -->
                <tr>
                  <td class="text-start">
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Nama 1</h6>
                      </div>
                    </div>
                  </td>
                  <td class="text-start">
                    <p class="text-xs font-weight-bold mb-0">123456</p>
                  </td>
                  <td class="text-start">
                    <p class="text-xs font-weight-bold mb-0">Prodi 1</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge bg-gradient-success btn-sm mb-0">Aktif</span>
                  </td>
                  <td class="align-middle text-center">
                    <button 
                      class="btn btn-sm bg-gradient-info me-2" 
                      onclick="window.location.href='datadosen-edit.html'">
                      <i class="fa fa-edit fa-xs"></i>
                    </button>
                    <button 
                      class="btn btn-sm bg-gradient-danger me-2" 
                      onclick="hapusData(1)">
                      <i class="fa fa-trash fa-xs"></i>
                    </button>
                  </td>
                </tr>
                <!-- Baris 2 -->
                <tr>
                  <td class="text-start">
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Nama 2</h6>
                      </div>
                    </div>
                  </td>
                  <td class="text-start">
                    <p class="text-xs font-weight-bold mb-0">789012</p>
                  </td>
                  <td class="text-start">
                    <p class="text-xs font-weight-bold mb-0">Prodi 2</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge bg-gradient-danger btn-sm mb-0">Nonaktif</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-sm bg-gradient-info me-2" onclick="window.location.href='datadosen-edit.html'">
                      <i class="fa fa-edit fa-xs"></i>
                    </button>
                    <button class="btn btn-sm bg-gradient-danger me-2" onclick="hapusData(2)">
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
          Apakah Anda yakin ingin menghapus data dosen ini?
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
  function hapusData(id) {
    selectedDataId = id; // Menyimpan ID data yang akan dihapus
    const modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal')); // Inisialisasi modal
    modal.show(); // Menampilkan modal
  }

  // Menangani klik tombol "Ya" pada modal
  document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
    const dataId = selectedDataId; // Mengambil ID data yang dipilih

    // Logika penghapusan data bisa ditambahkan di sini (misalnya melalui AJAX)
    alert("Data dengan ID " + dataId + " berhasil dihapus.");
    
    // Menutup modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('confirmDeleteModal'));
    modal.hide();

    // Redirect atau perbarui halaman
    window.location.href = "datadosen.html"; // Atau sesuaikan dengan kebutuhan
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