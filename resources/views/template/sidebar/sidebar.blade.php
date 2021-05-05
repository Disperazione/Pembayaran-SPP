

@if (Auth::guard('petugas')->check())
<div class="main-sidebar position-fixed">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="" style="color:#6777ef;">DATA PEMBAYARAN SPP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a style="color:#6777ef;" href="">DPS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">DASHBOARD</li>
            <li class="@if (Request::is('petugas/dashboard')) active @endif">
                <a href="{{ url('petugas/dashboard') }}" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @if (Auth::guard('petugas')->user()->level == 'admin')
            <li class="menu-header">MASTER</li>
            <li class="@if (Request::is('petugas/siswa','petugas/siswa/*')) active @endif">
                <a href="{{ url('petugas/siswa') }}" class="nav-link">
                    <i class="fas fa-user"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
            <li class="@if (Request::is('petugas/kelas','petugas/kelas/*')) active @endif">
                <a href="{{ url('petugas/kelas') }}" class="nav-link">
                    <i class="far fa-credit-card"></i>
                    <span>Data Kelas</span>
                </a>
            </li>
            <li class="@if (Request::is('petugas/spp','petugas/spp/*')) active @endif">
                <a href="{{ url('petugas/spp') }}" class="nav-link">
                    <i class="far fa-credit-card"></i>
                    <span>Data SPP</span>
                </a>
            </li>
            <li class="@if (Request::is('petugas/main','petugas/main/*')) active @endif">
                <a href="{{ url('petugas/main') }}" class="nav-link">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Data Petugas</span>
                </a>
            </li>
            @endif
            @if (Auth::guard('petugas')->user()->level == 'petugas' or Auth::guard('petugas')->user()->level == 'admin')
            <li class="menu-header">Petugas</li>
            <li class="@if (Request::is('petugas/transaksi','petugas/transaksi/*')) active @endif">
                <a href="{{ url('petugas/transaksi') }}" class="nav-link">
                    <i class="far fa-credit-card"></i>
                    <span>Transaksi</span>
                </a>
            </li>
            @endif
    </aside>
</div>
@elseif (Auth::guard('siswa')->check())
<div class="main-sidebar position-fixed">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="" style="color:#6777ef;">DATA PEMBAYARAN SPP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a style="color:#6777ef;" href="">DPS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">DASHBOARD</li>
            <li class="@if (Request::is('siswa/dashboard')) active @endif">
                <a href="{{ url('siswa/dashboard') }}" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">MASTER</li>
            <li class=" @if (Request::is('siswa/transaksi','siswa/transaksi/*')) active @endif">
                <a href="{{ url('siswa/transaksi') }}" class="nav-link">
                    <i class="fas fa-user"></i>
                    <span>Transaksi</span>
                </a>
            </li>
            <li class="@if (Request::is('siswa/history','siswa/history/*')) active @endif">
                <a href="{{ url('siswa/history') }}" class="nav-link">
                    <i class="far fa-credit-card"></i>
                    <span>History</span>
                </a>
            </li>
    </aside>
</div>
@endif

