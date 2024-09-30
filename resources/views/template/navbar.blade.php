<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="{{ asset('img/logo_idola.png') }}" alt="logo aplikasi" style="max-height: 50px;" title="Logo Aplikasi">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDropdown"
            aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if (Auth::user()->role == 'admin')
        <div class="navbar-collapse collapse d-flex-xl justify-content-xl-end" id="navDropdown">
            <ul class="navbar-nav mr-5">
                <li class="nav-item menu">
                    <a class="nav-link {{ Request::is('/') ? 'nav-active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('wfm*') ? 'nav-active' : '' }} dropdown-toggle" href=""
                        id="deploymentMenu" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Deployment
                    </a>
                    <div class="dropdown-menu dropmenu" aria-labelledby="deploymentMenu">
                        <a class="dropdown-item" href="{{ route('wfm.create') }}"><i class="las la-plus mr-3"></i>New
                            Order</a>
                        <a class="dropdown-item" href="{{ route('wfm.index') }}"><i class="las la-pen mr-3"></i>Update
                            Order</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('progress_lapangan*') ? 'nav-active' : '' }} dropdown-toggle"
                        href="#" id="progressMenu" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Progress Lapangan
                    </a>
                    <div class="dropdown-menu dropmenu" aria-labelledby="progressMenu">
                        <a class="dropdown-item" href="{{ route('progress.create') }}"><i
                                class="las la-plus mr-3"></i>New Progress</a>
                        <a class="dropdown-item" href="{{ route('progress.index') }}"><i
                                class="las la-pen mr-3"></i>Update Progress</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="evaluasiMenu" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Evaluasi
                    </a>
                    <div class="dropdown-menu dropmenu" aria-labelledby="evaluasiMenu">
                        <a class="dropdown-item" href="{{ route('wfm.index') }}">Deployment</a>
                        <a class="dropdown-item" href="{{ route('progress.index') }}">Progress Lapangan</a>
                        <a class="dropdown-item" href="{{ route('rekap.index') }}">Rekap</a>
                        <a class="dropdown-item" href="{{ route('xSumm.index') }}">EXE SUMM</a>
                    </div>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link {{ Request::is('disconnect*') ? 'nav-active' : '' }}"
                        href="{{ route('dis.index') }}">Disconnect</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link {{ Request::is('management*') ? 'nav-active' : '' }}"
                        href="{{ route('management.index') }}">User</a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav ml-2">
            <li class="nav-item dropdown">
                <img src="{{ asset('img/user.png') }}" role="button" alt="user profile"
                    class="user-pic rounded-circle dropdown-toggle" id="user-menu" data-toggle="dropdown"
                    title="Klik Untuk Selengkapnya" aria-haspopup="true" aria-expanded="false" style="width: 48px">
                <div class="dropdown-menu dropdown-menu-right w-25" aria-labelledby="user-menu">
                    <a class="dropdown-item text-center">{{ auth()->user()->name }}</a>
                    <div class="dropdown-divider"></div>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"
                            onclick="return confirm('Apakah Anda Ingin Logout?')"><i
                                class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>

        @else
        <div class="navbar-collapse collapse d-flex-xl justify-content-xl-end" id="navDropdown">
            <ul class="navbar-nav mr-5">
                <li class="nav-item menu">
                    <a class="nav-link {{ Request::is('/') ? 'nav-active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('wfm*') ? 'nav-active' : '' }} dropdown-toggle" href=""
                        id="deploymentMenu" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Deployment
                    </a>
                    @can('editor')
                    <div class="dropdown-menu dropmenu" aria-labelledby="deploymentMenu">
                        <a class="dropdown-item" href="{{ route('wfm.create') }}"><i class="las la-plus mr-3"></i>New
                            Order</a>
                        <a class="dropdown-item" href="{{ route('wfm.index') }}"><i class="las la-pen mr-3"></i>Update
                            Order</a>
                    </div>
                    @endcan
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('progress_lapangan*') ? 'nav-active' : '' }} dropdown-toggle"
                        href="#" id="progressMenu" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Progress Lapangan
                    </a>
                    @can('editor')
                    <div class="dropdown-menu dropmenu" aria-labelledby="progressMenu">
                        <a class="dropdown-item" href="{{ route('progress.create') }}"><i
                                class="las la-plus mr-3"></i>New Progress</a>
                        <a class="dropdown-item" href="{{ route('progress.index') }}"><i
                                class="las la-pen mr-3"></i>Update Progress</a>
                    </div>
                    @endcan
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="evaluasiMenu" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Evaluasi
                    </a>
                    <div class="dropdown-menu dropmenu" aria-labelledby="evaluasiMenu">
                        <a class="dropdown-item" href="{{ route('wfm.index') }}">Deployment</a>
                        <a class="dropdown-item" href="{{ route('progress.index') }}">Progress Lapangan</a>
                        <a class="dropdown-item" href="{{ route('rekap.index') }}">Rekap</a>
                        <a class="dropdown-item" href="{{ route('xSumm.index') }}">EXE SUMM</a>
                    </div>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link {{ Request::is('disconnect*') ? 'nav-active' : '' }}"
                        href="{{ route('dis.index') }}">Disconnect</a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav ml-2">
            <li class="nav-item dropdown">
                <img src="{{ asset('img/user.png') }}" role="button" alt="user profile"
                    class="user-pic rounded-circle dropdown-toggle" id="user-menu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="width: 48px">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user-menu">
                    <a class="dropdown-item text-center">{{ auth()->user()->name }}</a>
                    <div class="dropdown-divider"></div>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"
                            onclick="return confirm('Apakah Anda Ingin Logout?')"><i
                                class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        @endif
    </div>
</nav>
