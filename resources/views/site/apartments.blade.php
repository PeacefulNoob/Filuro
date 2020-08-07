@extends('layouts.main')
@section('index.css')
@endsection

@section('head_index')
<title>  Filuro All Apartments | Charming & Beautiful Apartments in Kotor </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Filuro Apartments are a delightful apartments away from home, a place to create incredible memories and to share quality time with your friends and family.">
<meta name="keywords" content="real estate,apartments,apartment,about,house,summer,crna gora,montenegro,enjoy,winter,top,luxury,afordable,reasonable,kotor,sea,house,lovely,cheap">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="PeacefulNoob">

<meta property="og:image" content="https://www.filuro.com/assets/images/logoBrow.png" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://filuro.com/apartments" />
<meta property="og:title" content="Apartments Filuro | Apartments " />
<meta property="og:description" content="Filuro Apartments are a delightful apartments away from home, a place to create incredible memories and to share quality time with your friends and family." />


<link rel="icon" type="image/png" href="/assets/images/logoBrow.png" />
<link rel="apple-touch-icon-precomposed" href="/assets/images/logoBrow.png" type="image/png" sizes="152x152" />
<link rel="apple-touch-icon-precomposed" href="/assets/images/logoBrow.png" type="image/png" sizes="120x120" />
<link rel="apple-touch-icon" href="/assets/images/logoBrow.png" sizes="180x180" />


<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />


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