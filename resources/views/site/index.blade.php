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
</div>

<div class="site-blocks-cover overlay" style="background-image: url('assets/images/86.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="mb-4">Always Fresh <br>Forever Original</h1>
        <p class="mb-5">Muo bb , Kotor , Crna Gora</p>
        <p><a href="#section-1" class="scroll btn btn-primary px-5 py-3">Take a Tour</a></p>
      </div>
    </div>
  </div>
</div>

<div class="site-section" id="section-1">

  <div class="container">

    <div class="row">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
        <h2 class="mb-5">Featured Apartments</h2>
        <p>The modern living, the spacious living.Beauty, Passion, Breathtaking Apartments.Beautiful apartments, for beautiful personalities.

        </p>
      </div>
    </div>

    <div class="site-block-retro d-block d-md-flex">

      <a href="stylish" class="col1 unit-9 no-height" data-aos="fade-up" data-aos-delay="100">
        <div class="image" style="background-image: url('assets/images/apartment/Apart2/48duplo.jpg');"></div>
        <div class="unit-9-content">
          <h2>Apartment II</h2>
          <span>$600/night</span>
        </div>
      </a>

      <div class="col2 ml-auto">

        <a href="charming" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200">
          <div class="image" style="background-image: url('assets/images/apartment/Apart1/dnevni1.jpg');"></div>
          <div class="unit-9-content">
            <h2> Apartment I</h2>
            <span>$290/night</span>
          </div>
        </a>

        <a href="charming" class="col2-row2 unit-9 no-height" data-aos="fade-up" data-aos-delay="300">
          <div class="image" style="background-image: url('assets/images/img_1.jpg');"></div>
          <div class="unit-9-content">
            <h2>Apartment III</h2>
            <span>$1,290/night</span>
          </div>
        </a>

      </div>

    </div>

  </div>
</div>

<div class="site-section browse">
  <div class="container">
    <div class="row">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
        <h2 class="mb-5">Browse Apartments</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
          officia, error reiciendis ab quod?</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <a href="charming" class="unit-9">
          <div class="image" style="background-image: url('assets/images/apartment/Apart1/dnevni1.jpg');"></div>
          <div class="unit-9-content">
            <h2>Apartment I</h2>
            <span>$130/night</span>
            <!-- <span>with Wendy Matos</span> -->
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <a href="charming" class="unit-9">
          <div class="image" style="background-image: url('assets/images/apartment/Apart2/48duplo.jpg');"></div>
          <div class="unit-9-content">
            <h2>Apartment II</h2>
            <span>$230/night</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <a href="charming" class="unit-9">
          <div class="image" style="background-image: url('assets/images/img_3.jpg');"></div>
          <div class="unit-9-content">
            <h2>Apartment III</h2>
            <span>$130/night</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
        <a href="apartment-detail" class="unit-9">
          <div class="image" style="background-image: url('assets/images/img_4.jpg');"></div>
          <div class="unit-9-content">
            <h2>Apartment IV</h2>
            <span>$150/night</span>
          </div>
        </a>
      </div>

      <div class="col-md-12 text-center mt-5" data-aos="fade-up">
        <a href="apartments" class="btn btn-primary">Browse All Apartments</a>
      </div>
    </div>
  </div>
</div>





<div class="site-section block-13">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
        <h2 class="mb-5">Love By Our Customers</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
      </div>
    </div>
    <div class="nonloop-block-13 owl-carousel">

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">
          <img src="assets/images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Megan Smith</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">
          <img src="assets/images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Brooke Cagle</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">
          <img src="assets/images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Kim</h3>
          <p class="font-italic">&ldquo;Sveto’s place is lovely, clean & spacious! He was an amazing host - extremely helpful and always replied to us quickly! I definitely recommend staying here!&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">
          <img src="assets/images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Dale</h3>
          <p class="font-italic">&ldquo;Want a perfect place to relax near Kotor?? Do yourselves a favour and book Sveto's place! It's the perfect bolthole after a day of touring the sights of Kotor and the surrounding area. The apartment is located on the ground floor with private access. Parking is on the side of the road outside but is readily available with no problems finding a place. &rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">
          <img src="assets/images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Nathan Dumlao</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

      <div class="text-center p-3 p-md-5 bg-white">
        <div class="mb-4">
          <img src="assets/images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
        </div>
        <div class="text-black">
          <h3 class="font-weight-light h5">Brook Smith</h3>
          <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
        </div>
      </div>

    </div>
  </div>
</div>










</div>


@endsection