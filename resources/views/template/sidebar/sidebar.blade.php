@if (Auth::user()->role == '' or Auth::user()->role == '')
<div class="main-sidebar position-fixed">
        <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{'/'}}" style="color:#6777ef;">DATA PEMBAYARAN SPP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a style="color:#6777ef;" href="{{'/'}}">DPS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">DASHBOARD</li>
            <li class="@if (Request::is('admin/dashboard')) active @endif">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </a>
            @if (Auth::user()->role == '' )
            <li class="menu-header">MASTER</li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route('') }}" class="nav-link">
                <i class="fas fa-user"></i>
                <span></span>
            </a>
            </li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="fas fa-user"></i>
                <span></span>
            </a>
            </li>
            @endif
            @if (Auth::user()->role == '' or Auth::user()->role == '')
            <li class="menu-header"></li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="far fa-building"></i>
                <span></span>
            </a>
            </li>
            @endif
            @if (Auth::user()->role == ''  or Auth::user()->role == '' )
            <li class="menu-header"></li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="fas fa-newspaper"></i>
                <span></span>
            </a>
            </li>
            @endif
            @if (Auth::user()->role == '' or Auth::user()->role == '')
            <li class="menu-header"></li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="fas fa-th"></i>
                <span></span>
            </a>
            </li>
            <li class="dropdown
            @if (Request::is())
            active
            @elseif(Request::is())
            active
            @endif

            ">
                <a href="" class="nav-link has-dropdown"><i class="far fa-newspaper"></i><span>Jurnal</span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="@if (Request::is()) active @endif"><a class="nav-link " href="{{ route() }}"></a></li>
                    <li class="@if (Request::is()) active @endif"><a class="nav-link " href="{{ route() }}"></a></li>
                </ul>
            </li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link"><i class="fas fa-users"></i>
                <span></span>
            </a>
            </li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link"><i class="fas fa-file-alt"></i>
                <span></span>
            </a>
            </li>
            @endif
        </aside>
    </div>
@endif



{{-- user sidebar --}}
@if (Auth::user()->role == 'siswa' )

<div class="main-sidebar">
        <aside id="sidebar-wrapper">
        <div class="sidebar-brand ">
            <a href="{{'/'}}" style="color:#6777ef;">DATA PEMBAYARAN SPP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a style="color:#6777ef;" href="{{'/'}}">DPS</a>
        </div>
        <ul class="sidebar-menu mt-2">
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="fas fa-tachometer-alt"></i>
                <span></span>
            </a>
            </li>
                <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="far fa-building"></i>
                <span></span>
            </a>
            </li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="fas fa-newspaper"></i>
                <span></span>
            </a>
            </li>


            @if(empty(Auth::user()->))

            @else
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="fas fa-user"></i>
                <span></span>
            </a>
            </li>
            <li class="dropdown
            @if (Request::is())
            active
            @elseif(Request::is())
            active
            @endif
            ">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-newspaper"></i> <span></span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="@if (Request::is()) active @endif">
                    <a class="nav-link" href="{{ route() }}"></a>
                    </li>
                    <li class="@if (Request::is()) active @endif">
                        <a class="nav-link" href="{{ route() }}"></a>
                    </li>
                </ul>
            </li>
            <li class="@if (Request::is()) active @endif">
            <a href="{{ route() }}" class="nav-link">
                <i class="fas fa-users"></i>
                <span></span>
            </a>
            </li>
            @endif
        </aside>
    </div>

@endif




