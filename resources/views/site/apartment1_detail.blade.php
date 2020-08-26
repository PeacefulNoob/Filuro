@extends('layouts.main')
@section('index.css')
@endsection

@section('head_index')
<title>  Filuro Charming Apartment I | Charming & Beautiful Apartments in Kotor </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Take a look at our beautiful and fresh apartments. Modern Style. Cozy Atmosphere. Beautiful apartments, for beautiful personalities.">
<meta name="keywords" content="real estate,apartments,apartment,about,house,summer,crna gora,montenegro,enjoy,winter,top,luxury,afordable,reasonable,kotor,sea,house,lovely,cheap">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="PeacefulNoob">

<meta property="og:image" content="https://www.filuro.com/assets/images/logoBrow.png" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://filuro.com/charming" />
<meta property="og:title" content="Apartments Filuro | Charming Apartment I " />
<meta property="og:description" content="Lovely apartments in Kotor historical centre - Book with us. Modern Style. Memorable Experience. Cozy Atmosphere. " />


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


<aside >
  <div class="inner">
    <ul>
      <li><a href="#top"><div class="text">Top</div><span></span></a></li>

      <li><a href="#room-dimention"><div class="text">Rooms</div><span></span></a></li>
      <li><a href="#contact"><div class="text">Contact</div><span></span></a></li>
      <li><a href="#gallery"><div class="text">Gallery</div><span></span></a></li>
      <li><a href="#map"><div class="text">Map</div><span></span></a></li>
    </ul>
  </div>
</aside>
<section id = "top">
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('assets/images/apartment/Apart1/dnevni1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white">Charming Filuro II Apt</h1>
        <p>Welcome</p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="property_detail d-flex">
    <div class="image" style="background-image: url('assets/images/apartment/Apart1/4.jpg')"></div>
    <div class="text">
      <h2>Property Information</h2>
      <p class="mb-5">
        The stylish apartment is approximately 65m2 and can comfortably accommodate up to 4 guests.
        It is found on the first floor of an elegant building.
      </p>
      <ul class="property-list-details mb-5">
        <li class="text-black">Property Name: <strong class="text-black">Charming Filuro II Apt</strong></li>
        <li>Room: <strong>1</strong></li>
        <li>Total Area: <strong>65 Square Feets</strong></li>
        <li>Category: <strong>Modern Apartment</strong></li>
      </ul>
      <p><a href="#contact" class="btn btn-primary px-4 py-3">Contact Us</a></p>
    </div>
  </div>
</div>



</section>

<section id="room-dimention">
  <div class="container">
    <!-- .section-title -->
    <div class="section-title text-center">
      <span>Apartment Features</span>
      <h2><span>Room Dimensions</span></h2>
      <p>
        Elegance and simplicity are expressed in this 55/65 sqm apartment.
        Bright and welcoming, it consists of a living room with a sofa bed, a fully equipped kitchenette, a pretty bedroom with an bathroom.
        Suitable for families or for four people who want to enjoy a comfortable stay.
      </p>
    </div><!-- /.section-title -->
    <!-- .gallery-filter -->
    <ul class="gallery-filter text-center">

      <li data-filter=".lawn" class="room-filter">
        <span>Garden</span>
      </li>
      <li data-filter=".kitchen" class="room-filter">
        <span>Kitchen</span>
      </li>
      <li data-filter=".bedroom" class="room-filter">
        <span>Bedroom</span>
      </li>
      <li data-filter=".toilet" class="room-filter active">
        <span>Bathroom</span>
      </li>
      <li data-filter=".terrace" class="room-filter">
        <span>Terrace</span>
      </li>
      <li data-filter=".masterroom" class="room-filter">
        <span>Living room</span>
      </li>
    </ul><!-- /.gallery-filter -->
    <div class="row image-gallery" data-filter-class="room-filter" data-show-on-load="lawn" id="MixItUpC68AAC">

      <!-- .single-room-dimention -->
      <div class="single-room-dimention kitchen mix" data-bound="">
        <div class="col-lg-7 col-md-12 img-wrap fl">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/kuhinja1.jpg" alt="Kitchen Room">
            <div class="room-size">
              14.5 x 12
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 content fl">
          <h2>Kitchen Room</h2>
          <p>Beautiful and minimalistic kitchen where you can prepare your favourite meals !</p>
          <ul>
            <li><i class="fa fa-long-arrow-right"></i> Sparkling Modern</li>
            <li><i class="fa fa-long-arrow-right"></i> Airy/Spacious</li>
            <li><i class="fa fa-long-arrow-right"></i> Neat and Clean atmosphere</li>
          </ul>
        </div>
      </div><!-- /.single-room-dimention -->
      <!-- .single-room-dimention -->
      <div class="single-room-dimention bedroom mix" data-bound="">
        <div class="col-lg-7 col-md-12 img-wrap fl">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/24soba.jpg" alt="Bed Room">
            <div class="room-size">
              14.5 x 12
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 content fl">
          <h2>Bed Room</h2>
          <p>Comfy bedroom with a lot of color and brightness where you can sleep like a rock!</p>
          <ul>
            <li><i class="fa fa-long-arrow-right"></i> Fragrant and Cozy</li>
            <li><i class="fa fa-long-arrow-right"></i> Comfortable and Bright</li>
            <li><i class="fa fa-long-arrow-right"></i> Pleasant and Modern</li>
          </ul>
        </div>
      </div><!-- /.single-room-dimention -->
      <!-- .single-room-dimention -->
      <div class="single-room-dimention toilet mix" data-bound="" style="display: inline-block;">
        <div class="col-lg-7 col-md-12 img-wrap fl">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/kupatilo.jpg" alt="Toilet">
            <div class="room-size">
              14.5 x 12
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 content fl">
          <h2>Bathroom</h2>
          <p>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. voluptatem. Ut enim ad minima veniam quis.</p>
          <ul>
            <li><i class="fa fa-long-arrow-right"></i> New and Modern</li>
            <li><i class="fa fa-long-arrow-right"></i> Fresh and White</li>
            <li><i class="fa fa-long-arrow-right"></i> Neat and Clean atmosphere</li>
          </ul>
        </div>
      </div><!-- /.single-room-dimention -->
      <!-- .single-room-dimention -->
      <div class="single-room-dimention lawn mix" data-bound="">
        <div class="col-lg-7 col-md-12 img-wrap fl">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/68.jpg" alt="Balcony bay">
            <div class="room-size">
              14.5 x 12
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 content fl">
          <h2>Garden</h2>
          <p>Perfect place to enjoy with your loved ones. </p>
          <ul>
            <li><i class="fa fa-long-arrow-right"></i> Best Relaxing Spot</li>
            <li><i class="fa fa-long-arrow-right"></i> Source of fresh air</li>
            <li><i class="fa fa-long-arrow-right"></i> Good for health</li>
          </ul>
        </div>
      </div><!-- /.single-room-dimention -->
      <!-- .single-room-dimention -->
      <div class="single-room-dimention terrace mix " data-bound="">
        <div class="col-lg-7 col-md-12 img-wrap fl">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/40.jpg" alt="Terrace">
            <div class="room-size">
              14.5 x 12
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 content fl">
          <h2>Terrace</h2>
          <p>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. voluptatem. Ut enim ad minima veniam quis.</p>
          <ul>
            <li><i class="fa fa-long-arrow-right"></i> Open and Quiet</li>
            <li><i class="fa fa-long-arrow-right"></i> Private and Spacious</li>
            <li><i class="fa fa-long-arrow-right"></i> Neat and Clean atmosphere</li>
          </ul>
        </div>
      </div><!-- /.single-room-dimention -->
      <!-- .single-room-dimention -->
      <div class="single-room-dimention masterroom mix" data-bound="">
        <div class="col-lg-7 col-md-12 img-wrap fl">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/dnevni_samo.jpg" alt="Marter Room">
            <div class="room-size">
              14.5 x 12
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 content fl">
          <h2>Living Room</h2>
          <p>There is nothing like crafting a luxury living room that is suitable for enjoying family time and entertaining loved ones.</p>
          <ul>
            <li><i class="fa fa-long-arrow-right"></i> Bright and Clean</li>
            <li><i class="fa fa-long-arrow-right"></i> Comfortable and Tidy</li>
            <li><i class="fa fa-long-arrow-right"></i> Elegant and Cozy</li>
          </ul>
        </div>
      </div><!-- /.single-room-dimention -->
      <!-- .single-room-dimention -->

    </div>
  </div>
</section>

<section id="contact">
  <div class="section-title text-center">
    <span>Looking for your next home sweet home?</span>
    <h2><span>Contact</span></h2>
  </div>
  <div class="site-section border-bottom conntactSection">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-sm-12 col-lg-5 mt-5 ml-auto">



          <form action="{{route('contact.store')}}" method="post">
            {{ csrf_field() }}
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0 d-none">
                <input type="text" name="aptName" placeholder="Apartment I" class="form-control" disabled>
              </div>
            </div>
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
                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
              </div>
            </div>


          </form>
        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 ml-auto">
          <div class="p-4 mb-3 ">
            <iframe style = "width:100%" src="https://calendar.google.com/calendar/b/3/embed?height=600&amp;wkst=1&amp;bgcolor=%23ead7be&amp;ctz=Europe%2FBelgrade&amp;src=NnY5YjRucHFiNWMxYjczODhlYmpwMzVxODZpMmg2YW5AaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23F4511E&amp;showTitle=0&amp;showNav=1&amp;showPrint=0&amp;showTz=0&amp;showTabs=0&amp;mode=MONTH&amp;showCalendars=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

        </div>
      </div>
    </div>
  </div>
</section>
<section id="gallery">
  <div class="container">
    <!-- .section-title -->
    <div class="section-title text-center">
      <span>Tour Of Our Apartment</span>
      <h2><span>Checkout Apartment photos</span></h2>
    </div><!-- /.section-title -->
    <!-- .gallery-filter -->
    <ul class="gallery-filter text-center anim-5-all">
      <li data-filter="all" class="gallery-sorter active">
        <span>All assets/images</span>
      </li>
      <li data-filter=".master" class="gallery-sorter">
        <span>Living Room</span>
      </li>
      <li data-filter=".kitchen" class="gallery-sorter">
        <span>Kitchen</span>
      </li>
      <li data-filter=".bedroom" class="gallery-sorter">
        <span>Bedroom</span>
      </li>
      <li data-filter=".bathroom" class="gallery-sorter">
        <span>Bathroom</span>
      </li>
      <li data-filter=".yard" class="gallery-sorter">
        <span>Garden</span>
      </li>
    </ul><!-- /.gallery-filter -->
    <div class="row galerySkrol">
      <!-- .image-gallery -->
      <div class="image-gallery" data-filter-class="gallery-sorter" id="MixItUp5BB1F3">
        <!-- .single-gallery -->
        <div class="single-gallery anim-5-all bathroom all masonryImage mix span-8" style="display: inline-block;" data-bound="">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/kupatilo.jpg" alt="bathroom">
            <div class="content">
              <div class="image-view">
                <a class="fancybox" href="/assets/images/apartment/Apart1/kupatilo.jpg">
                  <i class="fa fa-camera"></i>
                </a>
              </div>
              <div class="title-holder">
                <h4>Bathroom</h4>
              </div>
              <div class="link-view">
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <div class="item-name">Bathroom</div>
            <img src="/assets/images/apartment/Apart1/kupatilo.jpg" alt="bathroom" class="item-image">
            <div class="item-text">
              <p>sed quia non numquam eius modi tempora incidunt <br> ut labore et dolore magnam aliquam quaerat volup- ptatem. voluptatem. </p>
              <ul>
                <li><i class="fa fa-long-arrow-right"></i> Good Furniture in room</li>
                <li><i class="fa fa-long-arrow-right"></i> Granite Stone on floor</li>
                <li><i class="fa fa-long-arrow-right"></i> toilet is attached</li>
              </ul>
            </div>

          </div>
        </div><!-- /.single-gallery -->
        <!-- .single-gallery -->
        <div class="single-gallery anim-5-all all yard masonryImage mix span-4" style="display: inline-block;" data-bound="">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/dvoriste.jpg" alt="Yard">
            <div class="content">
              <div class="image-view">
                <a class="fancybox" href="/assets/images/apartment/Apart1/dvoriste.jpg">
                  <i class="fa fa-camera"></i>
                </a>
              </div>
              <div class="title-holder">
                <h4>Yard</h4>
              </div>
              <div class="link-view">
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <div class="item-name">Yard</div>
            <img src="/assets/images/apartment/Apart1/dvoriste.jpg" alt="Yard" class="item-image">
            <div class="item-text">
              <p>sed quia non numquam eius modi tempora incidunt <br> ut labore et dolore magnam aliquam quaerat volup- ptatem. voluptatem. </p>
              <ul>
                <li><i class="fa fa-long-arrow-right"></i> Good Furniture in room</li>
                <li><i class="fa fa-long-arrow-right"></i> Granite Stone on floor</li>
                <li><i class="fa fa-long-arrow-right"></i> toilet is attached</li>
              </ul>
            </div>

          </div>
        </div><!-- /.single-gallery -->
        <!-- .single-gallery -->
        <div class="single-gallery anim-5-all all master masonryImage mix span-4" style="display: inline-block;" data-bound="">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/dnevni2.jpg" alt="Master room">
            <div class="content">
              <div class="image-view">
                <a class="fancybox" href="/assets/images/apartment/Apart1/dnevni2.jpg">
                  <i class="fa fa-camera"></i>
                </a>
              </div>
              <div class="title-holder">
                <h4>Master room</h4>
              </div>
              <div class="link-view">
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <div class="item-name">Master room</div>
            <img src="/assets/images/apartment/Apart1/dnevni2.jpg" alt="Master room" class="item-image">
            <div class="item-text">
              <p>sed quia non numquam eius modi tempora incidunt <br> ut labore et dolore magnam aliquam quaerat volup- ptatem. voluptatem. </p>
              <ul>
                <li><i class="fa fa-long-arrow-right"></i> Good Furniture in room</li>
                <li><i class="fa fa-long-arrow-right"></i> Granite Stone on floor</li>
                <li><i class="fa fa-long-arrow-right"></i> toilet is attached</li>
              </ul>
            </div>

          </div>
        </div><!-- /.single-gallery -->
        <!-- .single-gallery -->
        <div class="single-gallery anim-5-all kitchen all masonryImage mix span-4" style="display: inline-block;" data-bound="">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/kuhinjasamo.jpg" alt="kitchen">
            <div class="content">
              <div class="image-view">
                <a class="fancybox" href="/assets/images/apartment/Apart1/kuhinjasamo.jpg">
                  <i class="fa fa-camera"></i>
                </a>
              </div>
              <div class="title-holder">
                <h4>Kitchen Room</h4>
              </div>
              <div class="link-view">
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <div class="item-name">Kitchen Room</div>
            <img src="/assets/images/apartment/Apart1/kuhinjasamo.jpg" alt="Kitchen Room" class="item-image">
            <div class="item-text">
              <p>sed quia non numquam eius modi tempora incidunt <br> ut labore et dolore magnam aliquam quaerat volup- ptatem. voluptatem. </p>
              <ul>
                <li><i class="fa fa-long-arrow-right"></i> Good Furniture in room</li>
                <li><i class="fa fa-long-arrow-right"></i> Granite Stone on floor</li>
                <li><i class="fa fa-long-arrow-right"></i> toilet is attached</li>
              </ul>
            </div>

          </div>
        </div><!-- /.single-gallery -->
        <!-- .single-gallery -->
        <div class="single-gallery anim-5-all  bedroom all mix span-4" style="display: inline-block;" data-bound="">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/30krevet.stosoba.jpg" alt="bedroom">
            <div class="content">
              <div class="image-view">
                <a class="fancybox" href="/assets/images/apartment/Apart1/30krevet.stosoba.jpg">
                  <i class="fa fa-camera"></i>
                </a>
              </div>
              <div class="title-holder">
                <h4>Bed Room</h4>
              </div>
              <div class="link-view">
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <div class="item-name">Bed Room</div>
            <img src="/assets/images/apartment/Apart1/30krevet.stosoba.jpg" alt="Bed Room" class="item-image">
            <div class="item-text">
              <p>sed quia non numquam eius modi tempora incidunt <br> ut labore et dolore magnam aliquam quaerat volup- ptatem. voluptatem. </p>
              <ul>
                <li><i class="fa fa-long-arrow-right"></i> Good Furniture in room</li>
                <li><i class="fa fa-long-arrow-right"></i> Granite Stone on floor</li>
                <li><i class="fa fa-long-arrow-right"></i> toilet is attached</li>
              </ul>
            </div>

          </div>
        </div><!-- /.single-gallery -->
        <!-- .single-gallery -->
        <div class="single-gallery anim-5-all  kitchen masonryImage mix span-8 float-right" style="display: inline-block;" data-bound="">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/kuhinja1.jpg" alt="kitchen">
            <div class="content">
              <div class="image-view">
                <a class="fancybox" href="/assets/images/apartment/Apart1/kuhinja1.jpg">
                  <i class="fa fa-camera"></i>
                </a>
              </div>
              <div class="title-holder">
                <h4>Kitchen</h4>
              </div>
              <div class="link-view">
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <div class="item-name">Kitchen</div>
            <img src="/assets/images/apartment/Apart1/kuhinja1.jpg" alt="kitchen" class="item-image">
            <div class="item-text">
              <p>sed quia non numquam eius modi tempora incidunt <br> ut labore et dolore magnam aliquam quaerat volup- ptatem. voluptatem. </p>
              <ul>
                <li><i class="fa fa-long-arrow-right"></i> Good Furniture in room</li>
                <li><i class="fa fa-long-arrow-right"></i> Granite Stone on floor</li>
                <li><i class="fa fa-long-arrow-right"></i> toilet is attached</li>
              </ul>
            </div>

          </div>
        </div><!-- /.single-gallery -->
        <!-- .single-gallery -->
        <div class="single-gallery anim-5-all  bedroom masonryImage mix span-4" style="display: inline-block;" data-bound="">
          <div class="img-holder">
            <img src="/assets/images/apartment/Apart1/27soba.hodnik.jpg" alt="bedroom">
            <div class="content">
              <div class="image-view">
                <a class="fancybox" href="/assets/images/apartment/Apart1/27soba.hodnik.jpg">
                  <i class="fa fa-camera"></i>
                </a>
              </div>
              <div class="title-holder">
                <h4>Bedroom</h4>
              </div>
              <div class="link-view">
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <div class="item-name">Bedroom</div>
            <img src="/assets/images/apartment/Apart1/27soba.hodnik.jpg" alt="bedroom" class="item-image">
            <div class="item-text">
              <p>sed quia non numquam eius modi tempora incidunt <br> ut labore et dolore magnam aliquam quaerat volup- ptatem. voluptatem. </p>
              <ul>
                <li><i class="fa fa-long-arrow-right"></i> Good Furniture in room</li>
                <li><i class="fa fa-long-arrow-right"></i> Granite Stone on floor</li>
                <li><i class="fa fa-long-arrow-right"></i> toilet is attached</li>
              </ul>
            </div>

          </div>
        </div><!-- /.single-gallery -->
      </div><!-- /.image-gallery -->
    </div>
  </div>
</section>

@endsection