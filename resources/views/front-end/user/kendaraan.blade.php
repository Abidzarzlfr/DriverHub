<!doctype html>
<html lang="en">
  <head>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('style/live-data/live-data.css') }}">

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/85206701c2.js" crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DRIVER HUB</title>
  </head>

  <body>
    <!-- Navbar -->
    @include('front-end.include.navbar')

    <!-- Table Kendaraan -->
    <div class="tabel-kendaraan">
    <div class="container">
      <div class="heading-tabel">
        <div class="heading-tabel-driver">
          <h1>Tabel Kendaraan</h1>
        </div>
        <div class="button-tambah-driver">
              <a class="btn btn-dark" href="{{ url('input-data-kendaraan') }}" role="button">Tambah Kendaraan</a>
            </div>
        <div class="body-tabel-kendaraan">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kendaraan</th>
                <th scope="col">Nomor Kendaraan</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kendaraan as $index => $item)
              <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $item->nama_kendaraan }}</td>
                <td>{{ $item->nomor_kendaraan}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <!-- Footer -->
    @include('front-end.include.footer')
    
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/85206701c2.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>