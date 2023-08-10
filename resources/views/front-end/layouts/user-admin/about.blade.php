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
    <link rel="stylesheet" href="{{ asset('style/about/about.css') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DRIVER HUB</title>

  </head>

  <body>
    <!-- Navbar -->
    @include('front-end.include.navbar')

    <!-- About Top -->
    <div class="about-top">
      <div class="container">
        <div class="about-top-content d-flex align-items-center">
          <div class="about-top-content-left flex-grow-1 ms-3">
            <p class="about-top-content-company">Driver Hub | Pindad Enjiiniring Indonesia</p>
            <h1 class="about-top-content-title">Driver Task Scheduller</h1>
            <p class="about-top-content-creator mt-5">made by abidzar & kamal</p>
          </div>
          <div class="about-top-content-right flex-shrink-0">
            <img src="{{ asset('frontend-asset/about/about-logo.png') }}" alt="...">
          </div>
        </div>
      </div>
    </div>

    <!-- About Mid -->
    <div class="about-mid">
      <div class="container">
        <div class="main-mid-content">
          <div class="content-icon">
            <img src="{{ asset('frontend-asset/about/mid-content-1.png') }}" alt="">
            <h4 class="content-icon-title">About</h4>
            <p class="content-icon-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo.</p>
          </div>

          <div class="content-icon">
            <img src="{{ asset('frontend-asset/about/mid-content-2.png') }}" alt="">
            <h4 class="content-icon-title">Live Data</h4>
            <p class="content-icon-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo.</p>
          </div>

          <div class="content-icon">
            <img src="{{ asset('frontend-asset/about/mid-content-3.png') }}" alt="">
            <h4 class="content-icon-title">Admin</h4>
            <p class="content-icon-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- About End -->
    <div class="about-end">
        <div class="main-end-content container">
            <h2 class="header-end">Our Location</h2>
            <div class="google-maps">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=700&amp;height=400&amp;hl=en&amp;q=pindad enjinirin&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections NYT</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:420px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('front-end.include.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>