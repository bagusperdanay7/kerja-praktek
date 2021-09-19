<nav>
    <div class="sidebar shadow-sm">
        <div class="logo-brand">
            <img src="https://www.telkom.co.id/images/logo_horizontal.svg" alt="telkom logo" width="200px">
        </div>
        <ul class="menu">
            <li class="menu-list {{ ($title === "Dashboard") ? 'active-menu' : '' }}">
                <a href="/dashboard" class="{{ ($title === "Dashboard") ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="menu-list">
                <a href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-table"></i> Data Master
                    <i class="float-right mt-1 fas fa-caret-down" id="arrow"></i>
                </a>
                <ul class="datamaster-menu disable-menu">
                    <li class="drop-menu {{ ($title === "Database") ? 'active-menu' : '' }}">
                        <a href="{{ route('database.index') }}" class="{{ ($title === "Database") ? 'active' : '' }}"> Database</a>
                    </li>
                    <li class="drop-menu {{ ($title === "Pekerjaan Lapangan") ? 'active-menu' : '' }}">
                        <a href="" class="{{ ($title === "Pekerjaan Lapangan") ? 'active' : '' }}"> Pekerjaan Lapangan</a>
                    </li>
                    <li class="drop-menu {{ ($title === "Pekerjaan Lapangan") ? 'active-menu' : '' }}">
                        <a href="{{ route('wfm.index') }}" class="{{ ($title === "Pekerjaan Lapangan") ? 'active' : '' }}"> WFM</a>
                    </li>
                    <li class="drop-menu {{ ($title === "Pekerjaan Lapangan") ? 'active-menu' : '' }}">
                        <a href="" class="{{ ($title === "Pekerjaan Lapangan") ? 'active' : '' }}"> OSM</a>
                    </li>
                    <li class="drop-menu {{ ($title === "Rekap") ? 'active-menu' : '' }}">
                        <a href="{{ route('rekap.index') }}" class="{{ ($title === "Rekap") ? 'active' : '' }}"> Rekap</a>
                    </li>
                </ul>
            </li>
            <li class="">
             <span class="fixed-bottom copyright">&copy; 2021 Telkom Indonesia</span>
            </li>
        </ul>
    </div>
</nav>
