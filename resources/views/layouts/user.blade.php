<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,400;&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    @yield('css')


</head>

<body>

<!-- navbar  -->
<div class="">
<nav class="navbar navbar-custom navbar-expand-lg shadow-sm p-3 fixed-top "fixed-top aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex " id="navbarsExample11">
        <a class="navbar-brand col-lg-3 me-0" href="#">
      <img src="{{ asset('images/Logo.svg') }}" alt="Logo"  height="30" class="d-inline-block align-text-top">
        </a>

          <ul class=" navbar-nav col-lg-6 justify-content-lg-center">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('depan.home') }}">Beranda</a>
              </li>
              <li class="ms-5 nav-item">
                <a class="nav-link {{ request()->is('pengaduan') ? 'active' : '' }} " aria-current="page" href="{{ route('depan.pengaduan') }}">Pengaduan</a>
              </li>
              <li class="ms-5 nav-item">
                <a class="nav-link {{ request()->is('prosedur') ? 'active' : '' }} " aria-current="page" href="{{ route('depan.prosedur') }}">Prosedur</a>
              </li>

              <li class="ms-5 nav-item">
                <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }} " aria-current="page" href="{{ route('depan.kontak') }}">Kontak</a>
              </li>
              @auth
              @if(Auth::user()->role == 'mahasiswa')
                  <li class="ms-5 nav-item">
                      <a class="nav-link {{ request()->is('user/laporan') ? 'active' : '' }}" aria-current="page" href="{{ route('depan.laporan') }}">Laporan</a>
                  </li>
              @endif
          @endauth
          </ul>
      
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">

              {{-- login button --}}
              <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle medium" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
      </div>
    </nav>
    </div>
    @yield('content')

    @if (Session::has('pesan'))
    <div class="alert alert-danger mt-2">
        {{ Session::get('pesan') }}
    </div>
    @endif

    <script
      src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
      integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" 
      crossorigin="anonymous">
    </script>
        <!-- script -->
        @vite(['resources/js/app.js'])

<!--
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->

    @yield('js')
    {{-- Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mt-3">Masuk terlebih dahulu</h3>
                <p>Silahkan masuk menggunakan akun yang sudah didaftarkan.</p>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">MASUK</button>
                </form>
                @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>



</body>

</html>
