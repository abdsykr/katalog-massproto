<nav class="navbar navbar-expand-lg fixed-top navbaritem">
    <div class="container">
        <img
            src="{{ asset('asset/img/Logo Landscape.png') }}"
            alt="Logo"
            height="55"
            class="d-inline-block align-text-top me-3"
        >

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            style="color: white;"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}"
                    >
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('profil') ? 'active' : '' }}"
                        href="{{ route('profil') }}"
                    >
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('kurikulum') ? 'active' : '' }}"
                        href="{{ route('kurikulum') }}"
                    >
                        Kurikulum
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('ekskul') ? 'active' : '' }}"
                        href="{{ route('ekskul') }}"
                    >
                        Ekstrakurikuler
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('ppdb*') ? 'active' : '' }}"
                        href="{{ route('ppdb') }}"
                    >
                        PPDB 25/26
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
