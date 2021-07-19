@extends('layouts.main')
@section('index.css')
@endsection

@section('head_index')
<title>  Filuro Contact Us | Charming & Beautiful Apartments in Kotor </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Our office. Muo, Kotor. Contact Us tel: +392 69 344 553 Email: filuro.apt@gmail.com .">
<meta name="keywords" content="real estate,apartments,apartment,about,house,summer,crna gora,montenegro,enjoy,winter,top,luxury,afordable,reasonable,kotor,sea,house,lovely,cheap">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="PeacefulNoob">

<meta property="og:image" content="https://www.filuro.com/assets/images/logoBrow.svg" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://filuro.com/contact" />
<meta property="og:title" content="Apartments Filuro | Contact Us " />
<meta property="og:description" content="Our office. Muo, Kotor. Contact Us tel: +392 69 344 553 Email: filuro.apt@gmail.com ." />


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
        <h1 class="text-white">Contact Us</h1>
        <p>Feel free to contact us !</p>
      </div>
    </div>
  </div>
</div>



<div class="site-section border-bottom  mt-5">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-7 mb-5">



        <form action="{{route('contact.store.main')}}" method="post">
          {{ csrf_field() }}

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Full Name</label>
              <input type="text" name="name" id="fullname" class="form-control" placeholder="Full Name">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Subject</label>
              <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject">
            </div>
          </div>


          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="message">Message</label>
              <textarea name="message" name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Send Message" class="btn btn-primary br-5 py-3 px-4">
            </div>
          </div>


        </form>
      </div>

      <div class="col-lg-4 ml-auto">
        <div class="p-4 mb-3 bg-white">
          <h3 class="h5 text-black mb-3">Contact Info</h3>
          <p class="mb-0 font-weight-bold text-black">Address</p>
          <p class="mb-4 text-black">Muo 1 Kotor, 85330, Montenegro</p>

          <p class="mb-0 font-weight-bold text-black">Phone</p>
          <p class="mb-4"><a href="#">+382 69 344 553</a></p>

          <p class="mb-0 font-weight-bold text-black">Email Address</p>
          <p class="mb-0"><a href="contact">filuro.apt@gmail.com</a></p>

        </div>

        <div class="p-4 mb-3 bg-white">
          <h3 class="h5 text-black mb-3 text-black">More Info</h3>
          <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic
            consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
          <p><a href="about" class="btn btn-primary br-5  py-2 px-4">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="assets/images/img_1.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-6">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Our Office</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
            officia, error reiciendis ab quod?</p>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection