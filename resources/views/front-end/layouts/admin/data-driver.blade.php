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

    <!-- Table Keberangkatan -->
    <div class="tabel-keberangkatan">
      <div class="container">
        <div class="heading-tabel">
          <div class="heading-tabel-keberangkatan">
            <h1>Tabel Driver</h1>
            
            <div class="button-tambah-keberangkatan">
              <a class="btn btn-dark" href="{{ url('add-keberangkatan') }}" role="button">Tambah Driver</a>
            </div>
          </div>
          <div class="body-tabel-keberangkatan">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Driver</th>
                  <th scope="col">Keberangkatan</th>
                  <th scope="col">Tujuan</th>
                  <th scope="col">Jam</th>
                  <th scope="col">Tanggal (dari)</th>
                  <th scope="col">Tanggal (hingga)</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Plat Nomor</th>
                  <th scope="col">Kode</th>
                  <th scope="col">...</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($keberangkatan as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->driver->nama_driver}}</td>
                        <td>Bandung</td>
                        <td>Jakarta</td>
                        <td>08:00 AM</td>
                        <td>17-07-2023</td>
                        <td>20-07-2023</td>
                        <td>Genap</td>
                        <td>D 1234 ACB</td>
                        <td>DRV1</td>
                        <td>
                          <a class="btn btn-dark" href="{{ url('detail') }}" role="button">Detail</a>
                          <a class="btn btn-dark" href="{{ url('edit-keberangkatan') }}" role="button">Edit</a>
                        </td>
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