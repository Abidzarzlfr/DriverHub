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

    <!-- Live Data Section -->
    <div class="jadwal-hari-ini">
        <div class="container">
          <div class="heading-jadwal">
            <h1>Jadwal Hari Ini</h1>
          </div>
          <div class="widget1 d-flex justify-content-between mt-4 mb-5">
                <div class="widget-plat tilebox-one mt-4">
                  <div class="widget-plat-content card-body">
                    <i class="fa-solid fa-car float-end"></i>
                    <h2 class="widget-plat-content-nomor">D 1234 ACB</h2>
                    <h5 class="widget-plat-content-mobil">Toyota Innova Reborn</h5>
                    <p class="widget-plat-content-desc">Plat Nomor</p>
                  </div>
                </div>
                <div class="widget-tujuan tilebox-one mt-4">
                  <div class="widget-tujuan-content card-body">
                    <i class="fa-solid fa-route float-end"></i>
                    <h2 class="widget-tujuan-content-kota">BANDUNG</h2>
                    <p class="widget-tujuan-content-desc">Keberangkatan</p>
                  </div>
                </div>
                <div class="widget-tujuan tilebox-one mt-4">
                  <div class="widget-tujuan-content card-body">
                    <i class="fa-solid fa-route float-end"></i>
                    <h2 class="widget-tujuan-content-kota">JAKARTA</h2>
                    <p class="widget-tujuan-content-desc">Tujuan</p>
                  </div>
              </div>
          </div>
            <div class="widget2 d-flex justify-content-between mb-5">
              <div class="widget-kode tilebox-one mt-1">
                <div class="widget-kode-content card-body">
                  <i class="fa-solid fa-id-card float-end"></i>
                  <h2 class="widget-kode-content-kode">DRV1</h2>
                  <h5 class="widget-kode-content-driver">Andi Rahman</h5>
                  <p class="widget-kode-content-desc">Keberangkatan</p>
                </div>
              </div>
              <div class="widget-penumpang tilebox-one mt-1">
                <div class="widget-penumpang-content card-body">
                  <i class="fa-solid fa-user-group float-end"></i>
                  <h2 class="widget-penumpang-content-kota">09</h2>
                  <p class="widget-penumpang-content-desc">Jumlah Penumpang</p>
                </div>
              </div>
              <div class="widget-jam tilebox-one m  t-1">
                <div class="widget-jam-content card-body">
                  <i class="fa-solid fa-calendar float-end"></i>
                  <h2 class="widget-jam-content-kota">08:00 AM</h2>
                  <h5 class="widget-penumpang-content-kota">18-10-2023</h5>
                  <p class="widget-jam-content-desc">Jam Keberangkatan</p>
                </div>
              </div>
          </div>
          <div class="button-tambah-keberangkatan">
            <a class="btn btn-dark" href="{{ url('add-keberangkatan') }}" role="button">Tambah Keberangkatan</a>
          </div>
        </div>
    </div>

    <!-- Table Keberangkatan -->
    <div class="tabel-keberangkatan">
      <div class="container">
        <div class="heading-tabel">
          <div class="heading-tabel-keberangkatan">
            <h1>Tabel Keberangkatan</h1>
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
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
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
                <tr>
                  <th scope="row">2</th>
                  <td>Mark</td>
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
                    <a class="btn btn-dark" href="{{ url('detail') }}" role="button">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Mark</td>
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
                    <a class="btn btn-dark" href="{{ url('detail') }}" role="button">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Mark</td>
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
                    <a class="btn btn-dark" href="{{ url('detail') }}" role="button">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Mark</td>
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
                    <a class="btn btn-dark" href="{{ url('detail') }}" role="button">Edit</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Mark</td>
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
                    <a class="btn btn-dark" href="{{ url('detail') }}" role="button">Edit</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Table Driver -->
    <div class="tabel-driver">
      <div class="container">
        <div class="heading-tabel">
          <div class="heading-tabel-driver">
            <h1>Tabel driver</h1>
          </div>
          <div class="body-tabel-driver">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Driver</th>
                  <th scope="col">Status</th>
                  <th scope="col">Kode</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Available</td>
                  <td>DRV1</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Tuti</td>
                  <td>Unvailable</td>
                  <td>DRV3</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Dani</td>
                  <td>Available</td>
                  <td>DRV4</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Mark</td>
                  <td>Available</td>
                  <td>DRV2</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Mark</td>
                  <td>Available</td>
                  <td>DRV6</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Mark</td>
                  <td>Available</td>
                  <td>DRV5</td>
                </tr>
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