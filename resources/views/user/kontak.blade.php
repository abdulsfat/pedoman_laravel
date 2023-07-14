@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title', 'Kontak - Pengaduan Online Mahasiswa STT-NF')

@section('content')
            <!-- ======= mao Section ======= -->
            <section id="role" class="mt-4 role section-bg">
                <div class="container">
          
                  <div class="section-title">
                    <h2>Hubungi Kami</h2>
                    <p></p>
                  </div>
          
                  <div class="row mt-3">
                    <div class="col-md-6">
                      <div class="icon-box">
                        <i class="bi bi-pen"></i>
                        <div class="card-body text-left">
                            <p>Kampus A : JRPV+QH5, Jl. Setu Indah No.116, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2415692469544!2d106.83968909678951!3d-6.36277389999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sid!2sid!4v1689105187787!5m2!1sid!2sid" 
                            class="h-100 w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-lg-0">
                      <div class="icon-box">
                        <i class="bi bi-pen"></i>
                        <div class="card-body text-left">
                            <p>Kampus B: Jl. Lenteng Agung Raya, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan, Jawa Barat 12640.</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175207230856!2d106.82785999678953!3d-6.3529244999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1689108204907!5m2!1sid!2sid"
                            class="h-200 w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>

                  <section id="kontak" class="kontak mt-4">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-3 col-4">
                          <div class="count-box">
                            <i class="bi bi-pen"></i>
                            <span class="purecounter">Hotline</span>
                             <p>021-786-3191</p>
                          </div>
                        </div>
              
                        <div class="col-lg-3 col-4">
                          <div class="count-box">
                            <i class="bi bi-file-earmark-check"></i>
                            <span class="purecounter">Whatsapp</span>
                            <p>0857 1624 3174</p>
                          </div>
                        </div>
              
                        <div class="col-lg-3 col-4">
                          <div class="count-box">
                       <i class="bi bi-file-earmark-arrow-up"></i>
                            <span class="purecounter">Email</span>
                            <p>info@nurulfikri.ac.id</p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </section>
                </div>
              </section>
              <!-- End map Section -->
    <!-- ======= tatacara Section ======= -->
    
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-10">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="text-center mt-3">            <input type="submit" value="Send Message" class="btn btn-primary"></div>
          </form>
        </div>

      </div>



@endsection

@section('js')

@endsection
