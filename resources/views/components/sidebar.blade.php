<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>

       
              <ul class="sidebar-menu">
                @hasanyrole('admin|staff') 
            <li class="menu-header">Dashboard</li>@endhasanyrole
            <li class="nav-item dropdown ">
                  @hasanyrole('admin|staff') 
                <a href="#"
                
                    class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Management User</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link"
                            href="{{ route('users.index') }} by ">List User</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="{{ route('users.create') }}">Tambah User</a>
                    </li>
                </ul>
            </li>
            @endhasanyrole
            <li class="menu-header">Absensi</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-calendar-check"></i><span>Absensi</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link"
                            href="{{ route('absensi.index') }}">List Absensi</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="{{ route('absensi.create') }}">Absensi Datang</a>
                    </li>

                     <li class="">
                        <a class="nav-link"
                            href="{{ route('absen_pulang.create') }}">Absensi Pulang</a>
                    </li>
                </ul>
            </li>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="#"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
