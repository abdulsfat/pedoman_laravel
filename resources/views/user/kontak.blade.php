@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'Kontak - Pengaduan Online Mahasiswa STT-NF')

@section('content')
<section class="text-center">
  <h3 class="mt-5">Kontak</h3>
<br>

<body class="hm-gradient">
    <main>
            <section>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-left">
                                <p class="font-up font-bold deep-purple-text mb-3">Kampus A : JRPV+QH5, Jl. Setu Indah No.116, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451</p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2415692469544!2d106.83968909678951!3d-6.36277389999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sid!2sid!4v1689105187787!5m2!1sid!2sid" 
                                class="h-100 w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                <div id="map-container" class="z-depth-1" style="height: 50px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-left">
                                <p class="font-up font-bold deep-purple-text mb-3">Kampus B: Jl. Lenteng Agung Raya, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan, Jawa Barat 12640.</p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175207230856!2d106.82785999678953!3d-6.3529244999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1689108204907!5m2!1sid!2sid"
                                class="h-200 w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <div id="map-container-2" class="z-depth-1" style="height: 50px"></div>
                            </div>
                        </div>
                    </div>
                </div>    
        </div>
    </main>

  <script src="https://maps.google.com/maps/api/js"></script>

<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10 col-md-12">
<div class="wrapper">
<div class="row justify-content-center">
<div class="col-lg-8 mb-5">
<div class="row">
<div class="col-md-4">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text">
<p><span>Hotline:</span> <br><a href="tel://021-786-3191">021-786-3191</a></p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text">
<p><span>Whatsapp:</span> <a href="tel://0857.1624.3174">0857.1624.3174</a></p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div class="text">
<p><span>Email:</span> <a href="/cdn-cgi/l/email-protection#95fcfbf3fad5ecfae0e7e6fce1f0bbf6faf8"><span class="__cf_email__" data-cfemail="cda4a3aba28db4a2b8bfbea4b9a8e3aea2a0">info@nurulfikri.ac.id</span></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="contact-wrap">
<h3 class="mb-4 text-center">Hubungi Kami!</h3>
<div id="form-message-warning" class="mb-4 w-100 text-center"></div>
<form method="POST" id="contactForm" name="contactForm" class="contactForm">
<div class="row">
<div class="col-md-12 ">
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Nama">
</div>
</div>
<div class="col-md-12 mt-2">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-12 mt-2">
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Keterangan">
</div>
</div>
<div class="col-md-12 mt-2">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Pesan"></textarea>
</div>
</div>
<div class="col-md-12 mt-2">
<div class="form-group">
<input type="submit" value="Kirim Pesan" class="btn btn-primary">
<div class="submitting"></div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

  </body>
</section>
@endsection

@section('js')

@endsection
