@extends('template/master')
@section('css')
@endsection
@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>SponsoLink</h1>
          <h2>Cari Data Sponsor? Di SponsoLink Aja!</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="{{ route('user.index') }}" class="btn-get-started scrollto">Get Started</a>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href="">Event Olimpiade / Akademik</a></h4>
            <p class="description">Sponsorship untuk event olimpiade / akademik dan sejenisnya</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-palette-line"></i></div>
            <h4 class="title"><a href="">Event Olahraga</a></h4>
            <p class="description">Sponsorship untuk event olahraga dan sejenisnya</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">Event Keagamaan</a></h4>
            <p class="description">Sponsorship untuk event keagamaan dan sejenisnya</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">Event Lainnya</a></h4>
            <p class="description">Sponsorship untuk event lainnya</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
  @endsection
