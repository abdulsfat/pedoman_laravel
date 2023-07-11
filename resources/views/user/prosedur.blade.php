@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'Prosedur - Pengaduan Online Mahasiswa STT-NF')

@section('content')
<section class="header" style=""> 
    <div class="container justify-content-center">
        <div class="row card-group">
            <div class="col-sm-2">
                    <div class="card" style="width: ;">
                    <img class="card-img-top mt-4" src="{{ asset('images/1login.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">1. Login</h5>
                    <p class="card-text">Login kedalam website, jika belum mempunyai akun maka regist lebih dulu</p>
                    </div>
                </div>
            </div>
                 <div class="col-sm-2">
                    <div class="card" style="width: ;">
                    <img class="card-img-top mt-4" src="{{ asset('images/2tulislaporan.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">2. Tulis Laporan</h5>
                    <p class="card-text">Tulis laporan keluhan Anda dengan jelas</p>
                    </div>
                </div>
            </div>
                 <div class="col-sm-2">
                    <div class="card" style="width: ;">
                    <img class="card-img-top mt-4" src="{{ asset('images/3verifikasi.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">3. Proses Verifikasi</h5>
                    <p class="card-text">Tunggu sampai laporan Anda diverifikasi</p>
                    </div>
                </div>
            </div>
                 <div class="col-sm-2">
                    <div class="card" style="width: ;">
                    <img class="card-img-top mt-4" src="{{ asset('images/4tindaklanjut.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">4. Tindak Lanjut</h5>
                    <p class="card-text">Laporan Anda sedang dalam tindak lanjut</p>
                    </div>
                </div>
            </div>
                 <div class="col-sm-2">
                    <div class="card" style="width: ;">
                    <img class="card-img-top mt-4" src="{{ asset('images/5selesai.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">5. Selesai</h5>
                    <p class="card-text">Laporan pengaduan telah selesai ditindak</p>
                    </div>
                </div>
            </div>
          </div>
    </div>
</section>
<br>

<!-- ini bagian pemberitahuan -->
<div class="bg-dark text-secondary px-4 py-5">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Layanan Pengaduan Mahasiswa</h1>
      <div class="col-lg-12 mt-4">
        <p class="fs-5 mb-2">Hal-hal yang diadukan hendaknya terkait dengan masalah akademik, antara lain (namun tidak terbatas pada):</p>
        <li>Proses pembelajaran tidak sesuai Rancangan Perkuliahan.</li>
        <li>Dosen tidak obyektif dan transparan dalam melakukan penilaian.</li>
        <li>Dosen tidak memiliki kualifikasi akademik dan atau pengalaman yang sesuai dengan Mata Kuliah.</li>
        <li>Dosen tidak menyediakan waktu bimbingan/ konsultasi yang memadai.</li>
        <li>Tidak tersedianya sarana prasarana pembelajaran (buku, laboratorium, dan sebagainya) yang memadai (kurang; rusak; tidak tersedia).</li>
        <li>Layanan akademik yang tidak memuaskan, dan sebagainya.</li>

      </div>
    </div>
  </div>
  <div class="row align-items-md-stretch mt-5">
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Aduan yang disampaikan hendaknya disertai informasi yang terperinci, dengan menyebutkan:</h2>
          <ul>
            <li>NIM dan nama mahasiswa</li>
            <li>Nama dosen/pegawai terkait</li>
            <li>Nama mata kuliah</li>
            <li>Lokasi dan sebagainya</li>
            <li>Jika ada disertai bukti pendukung (foto dan sebagainya) untuk memudahkan proses penanganan pengaduan</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Tata cara layanan pengaduan mahasiswa didalam website ini</h2>
          <ul>
            <li>Login jika sudah memiliki akun</li>
            <li>Register jika belum mempunyai akun</li>
            <li>Login kedalam website</li>
            <li>Pelapor menyampaikan pengaduan melalui website</li>
            <li>Petugas akan memproses laporan anda</li>
            <li>Sukses, Laporan sudah ditanggapi</li>
          </ul>
        </div>
      </div>
    </div>
<!-- pemberitahuan selesai -->
@include('user.footer')
@endsection

@section('js')

@endsection
