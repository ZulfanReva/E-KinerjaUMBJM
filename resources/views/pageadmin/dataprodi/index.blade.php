<!DOCTYPE html>
<html lang="en">

<x-headeradmin :title="'Data Prodi | E-Kinerja UMBJM'" />

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
          <h6 class="font-weight-bolder mb-0">Selamat Datang di halaman Data Prodi</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
          
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-info btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h6 class="mb-0">Tabel Data Prodi</h6>
              <a href="{{ route('admin.dataprodi.create') }}" class="btn btn-sm bg-gradient-info btn-sm mb-0">Tambah Data</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Prodi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($prodis as $prodi)
                      <tr>
                        <td class="text-start">
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $prodi->nama_prodi }}</h6> <!-- Menampilkan nama prodi -->
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-center">
                          <button 
                            class="btn btn-sm bg-gradient-danger me-2" 
                            onclick="hapusData({{ $prodi->id }})">
                            <i class="fa fa-trash fa-xs"></i>
                          </button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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
            Apakah Anda yakin ingin menghapus jabatan ini?
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

    function hapusData(id) {
      selectedDataId = id; // Menyimpan ID data yang akan dihapus
      const modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
      modal.show(); // Menampilkan modal
    }

    document.getElementById('confirmDeleteBtn').onclick = () => {
      alert("Data dengan ID " + selectedDataId + " berhasil dihapus.");
      const modal = bootstrap.Modal.getInstance(document.getElementById('confirmDeleteModal'));
      modal.hide();
      
      window.location.href = "datajabatan.html"; // Arahkan kembali ke halaman daftar data
    };
  </script>

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
