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
    <link rel="stylesheet" href="{{ asset('style/admin-add-keberangkatan/add-keberangkatan.css') }}">

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

    <!-- Edit Tabel Keberangkatan -->
    <div class="tabel-keberangkatan">
      <div class="container">
        <div class="heading-tabel">
          <div class="heading-tabel-keberangkatan">
            <h1 class="border-bottom border-dark mb-5">Add Tabel Keberangkatan</h1>
          </div>
          <!-- form -->
          <form>
            <fieldset enabled>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Nama Driver</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Keberangkatan</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tujuan Keberangkatan</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Jam</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tanggal</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Plat Nomor</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Kode</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Nama Penumpang</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Jumlah Penumpang</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Divisi</label>
                <select id="disabledSelect" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <button type="submit" class="btn btn-dark">Simpan</button>
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