<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container">
          <img src="{{ asset('frontend-asset/nav-footer/nav-logo.png') }}" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('about') }}">About</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="{{ url('live-data') }}">Live Data</a>
              </li>
              @if (auth()->check())
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('keberangkatan') }}">Keberangkatan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Master
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('driver') }}">Data Driver</a></li>
                  <li><a class="dropdown-item" href="{{ url('kendaraan') }}">Data Kendaraan</a></li>
                  <li><a class="dropdown-item" href="{{ url('karyawan') }}">Data Karyawan</a></li>
                </ul>
              </li>
              @endif
            </ul>
            <form class="d-flex" role="search">
                @if (auth()->check())
                    <!-- Tambahkan tautan logout di sini jika pengguna sudah login -->
                    <a class="btn btn-dark" href="{{ url('logout') }}" role="button">Logout</a>
                @else
                    <a class="btn btn-dark" href="{{ url('login') }}" role="button">Login</a>
                @endif
            </form>
          </div>
        </div>
    </nav>