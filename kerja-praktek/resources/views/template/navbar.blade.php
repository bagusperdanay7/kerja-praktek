<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <div class="row align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDropdown"
                aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col">
                <a class="navbar-brand">
                    <img src="{{ asset('img/telkom.svg') }}" alt="logo telkom" style="max-height: 50px;">
                </a>
            </div>
            <div class="col-8 justify-content-end">
                <div class="collapse navbar-collapse" id="navDropdown">
                    <ul class="navbar-nav mr-5">
                        <li class="nav-item menu">
                            <a class="nav-link {{ ($title === "Rekap") ? 'nav-active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="deploymentMenu" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Deployment
                            </a>
                            <div class="dropdown-menu dropmenu" aria-labelledby="deploymentMenu">
                                <a class="dropdown-item" href="{{ route('wfm.create') }}"><i class="las la-plus mr-3"></i>New Order</a>
                                <a class="dropdown-item" href="{{ route('wfm.index') }}"><i class="las la-pen mr-3"></i>Update Order</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="progressMenu" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Progress Lapangan
                            </a>
                            <div class="dropdown-menu dropmenu" aria-labelledby="progressMenu">
                                <a class="dropdown-item" href="{{ route('progress.create') }}"><i class="las la-plus mr-3"></i>New Progress</a>
                                <a class="dropdown-item" href="{{ route('progress.index') }}"><i class="las la-pen mr-3"></i>Update Progress</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="evaluasiMenu" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="nav-link {{ ($title === "Disconnect") ? 'nav-active' : '' }}" href="{{ route('dis.index') }}">Disconnect</a>
                        </li>
                        <li class="nav-item menu">
                            <a class="nav-link {{ ($title === "User") ? 'nav-active' : '' }}" href="{{ route('management.index') }}">User</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-2">
                        <li class="nav-item dropdown">
                            <img src="{{ asset('img/user.png') }}" role="button" alt="user profile"
                                class="user-pic rounded-circle dropdown-toggle" id="user-menu" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" style="width: 48px">
                            <div class="dropdown-menu w-25" aria-labelledby="user-menu">
                                <a class="dropdown-item"></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" onclick="return confirm('Apakah Anda ingin keluar?');" href="{{ route('login') }}"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
