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
    <link rel="stylesheet" href="{{ asset('style/Tabel-Master/input-data-driver/input-data-driver.css') }}">

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

    <!-- Input Data Driver -->
    <div class="input-driver">
      <div class="container">
        <div class="heading-tabel">
          <div class="heading-input-driver">
            <h1 class="border-bottom border-dark mb-5">Input Data Driver</h1>
          </div>
          <!-- form -->
          <form action="{{ route('input-data-driver') }}" method="post">
                  @csrf
            <fieldset enabled>
                <div class="mb-3">
                    <label for="namaDriver" class="form-label">Nama Driver</label>
                    <input type="text"  name='nama_driver' class="form-control" id="namaDriver" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="npk" class="form-label">NPK</label>
                    <input type="npk" name="npk" class="form-control" id="npk" aria-describedby="emailHelp">
                </div>
                
              <button type="submit" class="btn btn-dark mt-5">Simpan</button>
            </fieldset>
          </form>
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