@extends('layouts.main')
@section('index.css')
@endsection

@section('head_index')
<title>Filuro About | Offers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Find out about our lovely apartments. Modern Style. Cozy Atmosphere. Beautiful apartments, for beautiful personalities.">
<meta name="keywords" content="real estate,apartments,apartment,about,house,summer,crna gora,montenegro,enjoy,winter,top,luxury,afordable,reasonable,kotor,sea,house,lovely,cheap">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="PeacefulNoob">

<meta property="og:image" content="https://www.filuro.com/assets/images/logoBrow.svg" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://filuro.com/offers" />
<meta property="og:title" content="Apartments Filuro | Offers " />
<meta property="og:description" content="Lovely apartments in Kotor historical centre - Book with us. Modern Style. Cozy Atmosphere. " />


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




<div class="site-wrap">

<!-- Modal -->
<div class="modal fade" id="boat-tour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">boat-tour</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="kayak-tour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">kayak-tour</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>
<div class="site-blocks-cover overlay" style="background-image: url('assets/images/86.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-8 col-11 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="mb-4">Offers</h1>
        <p class="mb-5">Take advantage of special savings and exclusive offers.
        </p>
        <p><a href="#section-1o" class="scroll btn btn-primary br-5 px-5 py-3 bold">Take a Tour</a></p>
      </div>
    </div>
  </div>
</div>
<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> 
<!-- .site-mobile-menu -->

<div class="site-section experience-land px-5 py-4 my-4 wrap-bg-dark" id="section-1o"  data-aos="fade-right">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-xl-5 col-lg-5 services-detail-why  image-margin-50 ">
            <img src="/assets/images/apartment/Apart2/60.jpg" alt="" class="img-fluid image-exp">

          </div>
          <div class="col-xs-12 col-sm-12 col-md-7 col-xl-7 col-lg-7 wrap-padding text-left ml-auto">
            <div class="width400">
                <div class="section-title with-p">
                    <div>
                        <h2 style="font-size: 30px !important;
                        line-height: 44px !important; ">Boat tour </h2>
                    </div>
                </div>
                <p>Boat tour is the best way to experience the real feel of Boka bay. We focus on providing our guests highly personalized tours and we adapt to your wishes.</p>
                <p>While cruising next to Perast and enjoying your drinks, you can learn interesting facts about the history of many famous landmarks in our bay from your captain</p>
                <ul class="themeioan_ul_icon">
                    <li> Sightseeing and swimming </li>
                    <li> Free drinks and homemade moonshine </li>
                    <li> We adapt to your wishes, and you command the route you want to see</li>
                </ul>
                <button type="button" class="btn btn-primary br-5 mt-5" data-toggle="modal" data-target="#boat-tour">
                  Boat ride
                </button>
            </div>
      </div>
  </div>
</div>
<div class="site-section experience-land px-5 py-4 my-4"  data-aos="fade-left">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-7 col-xl-7 col-lg-7 wrap-padding text-left mr-auto">
      <div class="width400">
          <div class="section-title with-p">
              <div>
                  <h2 style="font-size: 30px !important;
                  line-height: 44px !important; ">Kayaks</h2>
              </div>
          </div>
          <p>Kayaks are the best way to combine healthy exercise with pleasure. 
             They can give you a great adventure where you can visit well known Konoba's and Fish restaurants that are scattered across the coast. </p>
          <ul class="themeioan_ul_icon">
              <li> Seats for 2 people</li>
              <li> All the necessary equipment(life jackets, paddles and a waterproof bag) </li>
              <li> Easy to park</li>
              <li> Medical Connections Academy</li>
          </ul>
          <button type="button" class="btn btn-primary br-5 mt-5" data-toggle="modal" data-target="#kayak-tour">
            Kayaks ride
          </button>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-5 col-lg-5 services-detail-why  image-margin-50 ">
      <img src="/assets/images/apartment/Apart2/60.jpg" alt=""  class="img-fluid image-exp">
    </div>
</div>
</div>

@endsection