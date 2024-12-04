<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin.beranda') }}">
            <img src="{{ asset('assets/foto/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">E-Kinerja UMBJM</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Section Utama -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Utama</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.beranda') ? 'active' : '' }}" href="{{ route('admin.beranda') }}">
                    <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/foto/dashboard.png') }}" alt="Dashboard" width="50" height="50">
                    </div>
                    <span class="nav-link-text ms-1">Beranda</span>
                </a>
            </li>
            
            <!-- Section Halaman -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.datadosen*') ? 'active' : '' }}" href="{{ route('admin.datadosen.index') }}">
                    <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/foto/dosenaktif.png') }}" alt="Data Dosen" width="50" height="50">
                    </div>
                    <span class="nav-link-text ms-1">Data Dosen</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.datapengawas*') ? 'active' : '' }}" href="{{ route('admin.datapengawas.index') }}">
                    <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/foto/profilpengawas.png') }}" alt="Data Pengawas" width="50" height="50">
                    </div>
                    <span class="nav-link-text ms-1">Data Pengawas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.datajabatan*') ? 'active' : '' }}" href="{{ route('admin.datajabatan.index') }}">
                    <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/foto/jabatan.png') }}" alt="Data Jabatan" width="50" height="50">
                    </div>
                    <span class="nav-link-text ms-1">Data Jabatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dataprodi*') ? 'active' : '' }}" href="{{ route('admin.dataprodi.index') }}">
                    <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/foto/prodi.png') }}" alt="Data Prodi" width="50" height="50">
                    </div>
                    <span class="nav-link-text ms-1">Data Prodi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.penilaianpm') ? 'active' : '' }}" href="{{ route('admin.penilaianpm') }}">
                    <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/foto/pm.png') }}" alt="Penilaian PM" width="50" height="50">
                    </div>
                    <span class="nav-link-text ms-1">Penilaian PM</span>
                </a>
            </li>
            
            <!-- Section Akun -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akun</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.profiladmin') ? 'active' : '' }}" href="{{ route('admin.profiladmin') }}">
                    <div class="bg-gradient-info icon-shape shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/foto/profil.png') }}" alt="Profil Admin" width="50" height="50">
                    </div>
                    <span class="nav-link-text ms-1">Profil</span>
                </a>
            </li>
        </ul>
    </div>
</aside>