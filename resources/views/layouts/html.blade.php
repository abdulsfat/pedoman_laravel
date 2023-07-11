<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="" alt="">
    <!-- <a class="navbar-brand" href="#">Navbar scroll</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Prosedur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>
      <a class="btn btn-primary" href="#" role="button">Login</a>
      <a class="btn btn-primary ms-2" href="#" role="button">Register</a>
    </div>
  </div>
</nav>
    @yield('content')
    <!-- ini footer -->
    <div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-4">
        <h5>Tentang Kita</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Website ini dibuat untuk membantu mahasiswa mengatasi berbagai permasalahan terkait kegiatan/layanan akademik selama menempuh studi, Kemahasiswaan membuka Layanan Pengaduan bagi Mahasiswa.</a></li>
        </ul>
      </div>

      <div class="col-4">
        <h5>Link Penting</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Beranda</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pengaduan</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Prosedur</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Laporan</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kontak</a></li>
        </ul>
      </div>

      <div class="col-4">
        <h5>Kontak</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kampus A : Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat.</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kampus B: Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan,</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hotline: 021-786.3191</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Whatsapp: 0857.1624.3174</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">info@nurulfikri.ac.id</a></li>
        </ul>
      </div>
<!-- 
      <div class="col-4 offset-1">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div> -->
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>&copy; 2021 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>