@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
@endsection

@section('title', 'Prosedur - Pengaduan Online Mahasiswa STT-NF')

@section('content')

    <!-- ======= tatacara Section ======= -->
    <section id="cara" class="cara">
      <div class="container">

        <div class="section-title">
          <h2>Prosedur atau tata cara penggunaan</h2>
          <p>Masuk ke dalam website dengan login. Jika belum memiliki akun, maka registrasi terlebih dahulu</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span class="purecounter">Tulis Laporan</span>
               <p>Tulis laporan keluhan Anda dengan jelas</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span class="purecounter">Proses Verifikasi</span>
              <p>Tunggu sampai laporan Anda diverifikasi</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span class="purecounter">Tindak Lanjut</span>
              <p>Laporan Anda sedang dalam tindak lanjut</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span>Selesai</span>
              <p>Laporan pengaduan telah selesai ditindak</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End tatacara Section -->

        <!-- ======= Role Section ======= -->
        <section id="role" class="role section-bg">
          <div class="container">
    
            <div class="section-title">
              <p>Hal-hal yang diadukan hendaknya terkait dengan masalah akademik, antara lain (namun tidak terbatas pada):</p>
            </div>
    
            <div class="row">
              <div class="col-md-6">
                <div class="icon-box">
                  <i class="bi bi-briefcase"></i>
                  <p>Tidak tersedianya sarana prasarana pembelajaran yang memadai (kurang; rusak; tidak tersedia).</p>
                </div>
              </div>
              <div class="col-md-6 mt-4 mt-lg-0">
                <div class="icon-box">
                  <i class="bi bi-briefcase"></i>
                  <p>Dosen atau Dosen Pembimbing yang tidak obyektif dan transparan dalam melakukan penilaian.</p>
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <div class="icon-box">
                  <i class="bi bi-briefcase"></i>
                  <p>Dosen atau Dosen Pembimbing tidak memiliki kualifikasi akademik dan atau pengalaman yang sesuai dengan Mata Kuliah.</p>
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <div class="icon-box">
                  <i class="bi bi-briefcase"></i>
                  <p>Dosen atau Dosen Pembimbing yang tidak menyediakan waktu bimbingan atau konsultasi yang memadai.</p>
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <div class="icon-box">
                  <i class="bi bi-briefcase"></i>
                  <p>Proses pembelajaran tidak sesuai Rancangan Perkuliahan.</p>
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <div class="icon-box">
                  <i class="bi bi-briefcase"></i>
                  <p>Layanan akademik yang tidak memuaskan, dan sebagainya.</p>
                </div>
              </div>
              <div class="col-md-7 mt-5">
                <div class="icon-box">
                  <h4>Aduan yang disampaikan hendaknya disertai informasi yang terperinci, dengan menyebutkan:</h4>
                  <ul>
                    <li>NIM dan nama mahasiswa</li>
                    <li>Nama dosen atau dosen pembimbing atau pegawai terkait</li>
                    <li>Nama mata kuliah</li>
                    <li>Lokasi dan sebagainya</li>
                    <li>Jika ada disertai bukti pendukung (foto dan sebagainya) untuk memudahkan proses penanganan pengaduan</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Role Section -->

@include('user.footer')
@endsection

@section('js')

<!-- Scripts -->
<script src="{{ asset('js/main.js')}}"></script>

@endsection

