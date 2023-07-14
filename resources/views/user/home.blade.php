@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'Beranda - PEDOMAN')

@section('content')
<!-- Hero 2 - Bootstrap Brain Component -->
<section class="konten mt- container overflow-hidden ">
  <div class="container mt-5 overflow-hidden">
    <div class="row gy-5 gy-lg-0 align-items-lg-center justify-content-lg-between">
      <div class="col-12 col-lg-6 order-1 order-lg-0">
        <h1 class="h1-primary-text">Layanan <span class="span">Pengaduan</span>  Online Mahasiswa<br>STT Terpadu Nurul Fikri </h1>
        <p class="span-dec-text mt-4">Sampaikan Laporan Anda di manapun kapanpun secara online melalui layanan aplikasi pedoman yang dapat terhubung secara langsung dengan petugas.</p>
        <div class="d-grid d-sm-flex">

          <a href="{{ route('depan.pengaduan') }}" type="button" class="btn-hero shadow-sm">Buat Pengaduan</a>

        </div>
      </div>
      <div class="col-12 col-lg-5 text-center">
        <img class="mt-4 img-fluid mask-position-center-center mask-repeat-no-repeat mask-size-auto hero" loading="lazy" src="{{ asset('images/pose03_male 1.png') }}" alt="" style="-webkit-mask-image:">
      </div>
    </div>
  </div>
</section>
    <!-- ini tentang kita -->
    <section class="container mb-5">
    <div class="text-center">
    <p>"Selamat datang di Pedoman, aplikasi Layanan Pengaduan Online Mahasiswa STT Terpadu Nurul Fikri. Kami hadir untuk membantu mahasiswa dalam mengatasi masalah dan mengajukan pengaduan dengan mudah. Pedoman dirancang dengan antarmuka yang intuitif dan sederhana, sehingga mahasiswa dapat dengan cepat mengajukan pengaduan dan memantau perkembangannya. Kami menjaga kerahasiaan data pribadi mahasiswa dengan baik. Kami berkomitmen untuk menangani setiap pengaduan dengan cermat dan adil. Bergabunglah dengan Pedoman sekarang dan mari kita bersama-sama menciptakan lingkungan akademik yang lebih baik!"</p>
    </div>
  </section>
    <!-- ini tutup tentang kita -->
    @include('user.footer')
@endsection

@section('js')
    @if (Session::has('pesan'))
    <script>
        $('#loginModal').modal('show');

    </script>
    @endif
@endsection