@extends('layouts.main')
@section('index.css')
@endsection
@section('content')
@yield('index.css')





<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('assets/images/hero_bg_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white">Apartments</h1>
        <p>Beauty, Passion, Breathtaking Apartments.</p>
      </div>
    </div>
  </div>
</div>



<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
        <h2 class="mb-5">Browse Apartments</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
          officia, error reiciendis ab quod?</p>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
        <a href="apartment-detail.html" class="unit-9">
          <div class="image" style="background-image: url('assets/images/img_1.jpg');"></div>
          <div class="unit-9-content">
            <h2>Nashville</h2>
            <span>$130/night</span>
            <!-- <span>with Wendy Matos</span> -->
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="200">
        <a href="apartment-detail.html" class="unit-9">
          <div class="image" style="background-image: url('assets/images/img_2.jpg');"></div>
          <div class="unit-9-content">
            <h2>Baltimore</h2>
            <span>$230/night</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="300">
        <a href="apartment-detail.html" class="unit-9">
          <div class="image" style="background-image: url('assets/images/img_3.jpg');"></div>
          <div class="unit-9-content">
            <h2>Austin</h2>
            <span>$130/night</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="400">
        <a href="apartment-detail.html" class="unit-9">
          <div class="image" style="background-image: url('assets/images/img_4.jpg');"></div>
          <div class="unit-9-content">
            <h2>Atlanta</h2>
            <span>$150/night</span>
          </div>
        </a>
      </div>







    </div>
  </div>
</div>










@endsection