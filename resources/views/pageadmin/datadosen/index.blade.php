<!DOCTYPE html>
<html lang="en">

<x-headeradmin :title="'Data Dosen | E-Kinerja UMBJM'" />

<body class="g-sidenav-show bg-gray-100">
  <x-navigasiadmin></x-navigasiadmin>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
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
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a class="btn btn-outline-info btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</a>
            <!-- Modal Logout -->
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
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <!-- Header dengan tombol Tambah Data -->
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h6 class="mb-0">Tabel Data Dosen</h6>
              <a href="{{ route('admin.datadosen.create') }}" class="btn btn-sm bg-gradient-info btn-sm mb-0">Tambah Data</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">NIDN</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-start">Prodi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($dosens as $dosen)
                    <tr>
                      <td class="text-start">
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $dosen->nama }}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-start">
                        <p class="text-xs font-weight-bold mb-0">{{ $dosen->nidn }}</p>
                      </td>
                      <td class="text-start">
                        <p class="text-xs font-weight-bold mb-0">{{ $dosen->prodi }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge bg-gradient-{{ $dosen->status === 'aktif' ? 'success' : 'danger' }} btn-sm mb-0">
                          {{ ucfirst($dosen->status) }}
                        </span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="{{ route('admin.datadosen.edit', $dosen->id) }}" class="btn btn-sm bg-gradient-info me-2">
                          <i class="fa fa-edit fa-xs"></i>
                        </a>
                        <form action="{{ route('admin.datadosen.destroy', $dosen->id) }}" method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm bg-gradient-danger me-2">
                            <i class="fa fa-trash fa-xs"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="5" class="text-center text-secondary py-4">
                        <h6 class="mb-0">Belum ada data dosen.</h6>
                      </td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <x-footeradminpengawas></x-footeradminpengawas>

  </main>
</body>

</html>
