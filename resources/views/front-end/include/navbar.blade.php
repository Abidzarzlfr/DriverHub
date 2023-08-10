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
                <a class="nav-link active" aria-current="page" href="../about/about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../live-data/live-data.html">Live Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Applications/XAMPP/xamppfiles/htdocs/DUMMY DRIVER HUB/admin/admin-edit-tb-keberangkatan/edit-keberangkatan.html">Edit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Applications/XAMPP/xamppfiles/htdocs/DUMMY DRIVER HUB/admin/admin-delete/delete.html">Delete</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Master
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/Applications/XAMPP/xamppfiles/htdocs/DUMMY DRIVER HUB/admin/Tabel-Master/input-data-driver/input-data-driver.html">Input Data Driver</a></li>
                  <li><a class="dropdown-item" href="/Applications/XAMPP/xamppfiles/htdocs/DUMMY DRIVER HUB/admin/Tabel-Master/input-data-kendaraan/input-data-kendaraan.html">Input Data Kendaraan</a></li>
                  <li><a class="dropdown-item" href="/Applications/XAMPP/xamppfiles/htdocs/DUMMY DRIVER HUB/admin/Tabel-Master/input-data-penumpang/input-data-penumpang.html">Input Data Penumpang</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a class="btn btn-dark" href="{{ url('/Applications/XAMPP/xamppfiles/htdocs/DRIVER HUB/resources/views/front-end/layouts/user-admin/login.blade.php') }}" role="button">Login</a>
            </form>
          </div>
        </div>
    </nav>