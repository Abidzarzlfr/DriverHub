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
                <a class="nav-link" href="{{ url('live-data') }}">Live Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('keberangkatan') }}">Keberangkatan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Master
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('input-data-driver') }}">Data Driver</a></li>
                  <li><a class="dropdown-item" href="{{ url('input-data-kendaraan') }}">Data Kendaraan</a></li>
                  <li><a class="dropdown-item" href="{{ url('input-data-karyawan') }}">Data Karyawan</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a class="btn btn-dark" href="{{ url('login') }}" role="button">Login</a>
            </form>
          </div>
        </div>
    </nav>