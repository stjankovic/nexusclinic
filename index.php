
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Massage Therapy at Yonge & Eglinton | Chiropractor & Physio Services</title>

  <!-- SEO -->
  <meta name="Description" content="Reach your health goals with professional help. Get registered massage therapy (RMT) & more at Nexus Massage & Rehab at Yonge & Eglinton. Book today!">
  <meta name="keywords" content="toronto massage, direct billing, open on weekends, Yonge and Eglinton, yonge eg, online booking, Open 7 Days, open late, Massage Near Me, Registered Massage Therapist, RMT, near me, therapy, chiropractic, chiro, chiropractor, massage, physio, physiotherapy, acupuncture, acu, rehab, nexus, massage places, best massage, hot stone, health, clinic, sports, relax, pain, spine, back, dr, karen ngo, dr ngo, cass, cassandra kong, felix chu, dr chu, lydia, mai hoang, daniel thrush, phil kim, eric miraflor, katelyn morgan, kevin hong">

  <meta property="og:image" content="https://nexusmassageclinic.s3.ca-central-1.amazonaws.com/images/unique-feature/med/Nexus-Square.jpg"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://www.nexushealthclinic.com"/>
  <meta property="og:title" content="Nexus Massage & Rehab - Online Booking - Open 7 Days - CHIRO | MASSAGE | PHYSIO"/>
  <meta property="og:description" content="Best Midtown RMT Massage, Chiro, Physio and Acupuncture services - Located at Yonge & Eglinton - Open 7 Days - Online Booking and Direct Billing."/>

  <!-- Common Header -->
  <?php include('includes/common-header.php') ?>
  <!-- End Common Header -->
  
  <style>
    @media (max-width: 768px) {
      .full-text { display: none; }
    }
    li.dropdown-item {
      padding: 0rem 0rem;
    }
    li.dropdown-item a.nav-link {
      padding-left: 1.375rem;
    }

    h3.LessMoreCollapse.collapsed:before
    {
        content:'More ' ;
    }
    h3.LessMoreCollapse:before
    {
        content:'Less ' ;
    }
    div.expand-card
    {
      padding:0rem;
    }
    div.scrolltag
    {
      display: block;
      position: relative;
      top: -75px;
      visibility: hidden;
    }
  </style>

</head>

<body>

  <!-- ========== HEADER ========== -->
  <?php include('includes/nav.php') ?>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">

    <!-- Images Carousel Section -->
      <div class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="5000"
           data-pagi-classes="text-center u-slick__pagination u-slick__pagination--white position-absolute-bottom-15">
        <div class="js-slide divimage u-space-3-top height-is-based-on-content" style="background-image: url(https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/hero/lrg/home-massage.jpg);">

          <div class="animated bounceIn">
          <!-- Content -->
          <div class="container position-relative u-space-3-top u-space-3-bottom z-index-2">
            <div class="w-lg-80 text-center mx-auto">
              <h1 >
                <span class="display-4 font-size-48--md-down text-white font-weight-bold">CHIRO</span>
                <span class="display-4 font-size-48--md-down text-white full-text">&#10072;</span>
                <span class="display-4 font-size-48--md-down text-white font-weight-bold">MASSAGE</span>
                <span class="display-4 font-size-48--md-down text-white full-text">&#10072;</span>
                <span class="display-4 font-size-48--md-down text-white font-weight-bold">PHYSIO</span>
              </h1>
              <p class="lead text-white">Located at <span class="font-weight-bold">Yonge & Eglinton</span></p>
              <div class="u-space-2-top">
                <a class="btn btn-white u-btn-white u-btn-wide transition-3d-hover" href="https://nexusclinic.clinicsense.com/book" target="blank" onclick="handleClick('bannerBtn');">Book Online Today<span class="fa fa-angle-right font-size-13 ml-2"></span></a>
              </div>
            </div>
          </div>
          <!-- End Content -->
          </div>

        </div>
        <div class="js-slide divimage u-space-3-top height-is-based-on-content" style="background-image: url(https://nexusmassageclinic.s3.ca-central-1.amazonaws.com/images/hero/lrg/home-chiro.jpg)">

          <div class="animated bounceIn">
          <!-- Content -->
          <div class="container position-relative u-space-3-top u-space-3-bottom z-index-2">
            <div class="w-lg-80 text-center mx-auto">
              <h1 class="display-4 font-size-48--md-down text-white font-weight-bold">CHIROPRACTIC</h1>
              <p class="lead text-white"><span class="font-weight-bold">Adjust and Realign</span> your lifestyle with our <span class="font-weight-bold">spinal experts</span> to become your <span class="font-weight-bold">Optimal Self</span>! Enhance your spinal <span class="font-weight-bold">structural and functional integrity</span> to <span class="font-weight-bold">excel and perform better</span>.</p>

              <div class="u-space-1-top">
                <a class="btn btn-white u-btn-white u-btn-wide transition-3d-hover" href="service/chiropractic">Learn More about Chiropractic<span class="fa fa-angle-right font-size-13 ml-2"></span></a>
              </div>

            </div>
          </div>
          <!-- End Content -->
          </div>

        </div>
        <div class="js-slide divimage u-space-3-top height-is-based-on-content" style="background-image: url(https://nexusmassageclinic.s3.ca-central-1.amazonaws.com/images/hero/lrg/home-physio.jpg);">
          
          <div class="animated bounceIn">
          <!-- Content -->
          <div class="container position-relative u-space-3-top u-space-3-bottom z-index-2">
            <div class="w-lg-80 text-center mx-auto">
              <h1 class="display-4 font-size-48--md-down text-white font-weight-bold">PHYSIOTHERAPY</h1>
              <p class="lead text-white">Physiotherapists are your <span class="font-weight-bold">body mechanics' experts</span> that can help a <span class="font-weight-bold">wide range of physical ailments</span>, from neurological, cardiorespiratory, to musculoskeletal issues!</p>

              <div class="u-space-1-top">
                <a class="btn btn-white u-btn-white u-btn-wide transition-3d-hover" href="service/physiotherapy">Learn More about Physiotherapy<span class="fa fa-angle-right font-size-13 ml-2"></span></a>
              </div>

            </div>
          </div>
          <!-- End Content -->
          </div>

        </div>

        <div class="js-slide divimage u-space-3-top height-is-based-on-content" style="background-image: url(https://nexusmassageclinic.s3.ca-central-1.amazonaws.com/images/hero/lrg/home-acupuncture.jpg);">
          
          <div class="animated bounceIn">
          <!-- Content -->
          <div class="container position-relative u-space-3-top u-space-3-bottom z-index-2">
            <div class="w-lg-80 text-center mx-auto">
              <h1 class="display-4 font-size-48--md-down text-white font-weight-bold">ACUPUNCTURE</h1>
              <p class="lead text-white">Are you <span class="font-weight-bold">Stressed, Anxious, or Depressed</span>? Can't <span class="font-weight-bold">Sleep</span>? Come talk to our <span class="font-weight-bold">licensed acupuncturists</span> and <span class="font-weight-bold">get your life back</span> to the way it should be!</p>

              <div class="u-space-1-top">
                <a class="btn btn-white u-btn-white u-btn-wide transition-3d-hover" href="services">Learn More about Acupuncture<span class="fa fa-angle-right font-size-13 ml-2"></span></a>
              </div>

            </div>
          </div>
          <!-- End Content -->
          </div>

        </div>

        <div class="js-slide divimage u-space-3-top height-is-based-on-content" style="background-image: url(https://nexusmassageclinic.s3.ca-central-1.amazonaws.com/images/hero/lrg/home-orthotics.jpg);">
          
          <div class="animated bounceIn">
          <!-- Content -->
          <div class="container position-relative u-space-3-top u-space-3-bottom z-index-2">
            <div class="w-lg-80 text-center mx-auto">
              <h1>
                <span class="display-4 font-size-48--md-down text-white font-weight-bold">CUSTOM</span>
                <span class="display-4 font-size-48--md-down text-white font-weight-bold">ORTHOTICS</span>
              </h1>
              <p class="lead text-white">Walk through life with <span class="font-weight-bold">confidence & strength</span>!</p>

              <div class="u-space-2-top">
                <a class="btn btn-white u-btn-white u-btn-wide transition-3d-hover" href="service/orthotics">Learn More about Orthotics<span class="fa fa-angle-right font-size-13 ml-2"></span></a>
              </div>

            </div>
          </div>
          <!-- End Content -->
          </div>

        </div>

      </div>
    <!-- End Images Carousel Section -->

    <div class="text-white text-center" style="background-color:#FC4237">
      <div class="container p-3 post">
        <span class="h4 d-block d-lg-inline-block font-weight-light mb-lg-0 font-weight-bold">
           NEW! FREE 15 Min Physiotherapy Consultation! <a class="text-white" href="https://nexusclinic.clinicsense.com/book/" target="blank"><u>Click Here</u> to book your appointment today.
        </span>
      </div>
    </div>

    <!-- Steps Section -->
    <div class="container u-space-1-top">
      <!-- Conditions Section -->
      <div class="d-flex justify-content-center card-deck d-block d-md-flex u-space-1">
        <!-- Friends List -->
        <div class="card u-info-v2 mb-3" style="background-color:#00A6CE;">
          <div class="card-body p-3">
            <div class="text-center">
              <div class="media-body p-3">
                <h2 class="text-primary p-1">
                  <strong class="font-weight-bold text-white">SERVICES</strong>
                </h2>
                <img src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/logos/x_line_white.png" alt="Nexus Massage & Rehab - Registered Massage Therapy, Chiropractic, Physiotherapy, Acupuncture, Rehab, Clinic" title="Nexus Massage & Rehab - Registered Massage Therapy, Chiropractic, Physiotherapy, Acupuncture, Rehab, Clinic" style="width: 200px;">
                <div class="u-space-1-top font-weight-bold">
                  <a href="service/massage"><p class="mb-md-0 text-white">Registered Massage Therapy</p></a>
                  <a href="service/chiropractic"><p class="mb-md-0 text-white">Chiropractic</p></a>
                  <a href="service/physiotherapy"><p class="mb-md-0 text-white">Physiotherapy</p></a>
                  <p class="mb-md-0 text-white">Acupuncture</p>
                  <p class="mb-md-0 text-white">Osteopathy</p>
                  <a href="service/orthotics"><p class="mb-md-0 text-white">Custom Orthotics</p></a>
                </div>  
              </div>
            </div>
          </div>

          <div class="media-body text-center u-space-1-bottom">
            <a class="btn btn-sm btn-outline-light transition-3d-hover" href="services">
              <span class="fa fa-eye font-size-13 mr-2"></span>
              View all Services
            </a>
          </div>

        </div>
        <!-- End Friends List -->

        <!-- Friends List -->
        <div class="card u-info-v2 mb-3" style="background-color:#00C1DE;">
          <div class="card-body p-3">
            <div class="text-center">
              <div class="media-body p-3">
                <h2 class="text-primary p-1">
                  <strong class="font-weight-bold text-white">HOURS</strong>
                </h2>
                <img src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/logos/x_line_white.png" alt="Nexus Message & Rehab - Mon to Fri - 10am* - 8pm, Sat & Sun - 10am* - 5pm, massage near me, chiro, physio, acupuncture, rehab, clinic" title="Nexus Message & Rehab - Mon to Fri - 10am* - 8pm, Sat & Sun - 10am* - 5pm - massage near me, chiro, physio, acupuncture, rehab, clinic"  style="width: 200px;">
                <div class="u-space-1-top">
                  <p class="mb-md-0 font-weight-bold text-white">Mon to Fri - 10am* - 9pm</p>
                  <p class="mb-md-0 font-weight-bold text-white">Sat & Sun - 10am* - 7pm</p><br>
                  <p class="small mb-md-0 text-white font-weight-bold"><span class="small fa fa-asterisk mr-1"></span><em>By Appointment only - 8am to 10am.</em></p>
                  <p class="small mb-md-0 text-white font-weight-bold"><em>Hours may vary by individual practitioner.</em></p>
                </div>  
              </div>
            </div>
          </div>

          <div class="media-body text-center u-space-1-bottom">
            <a class="btn btn-sm btn-outline-light transition-3d-hover" href="team">
              <span class="fa fa-users font-size-13 mr-2"></span>
              See our Team
            </a>
          </div>

        </div>
        <!-- End Friends List -->

        <!-- Friends List -->
        <div class="card u-info-v2 mb-3" style="background-color:#00A6CE;">
          <div class="card-body p-3">
            <div class="text-center">
              <div class="media-body p-3">
                <h2 class="text-primary p-1">
                  <strong class="font-weight-bold text-white">CONTACT</strong>
                </h2>
                <img src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/logos/x_line_white.png"  alt="Nexus Message & Rehab - Contact us - massage near me, chiro, physio, acupuncture, rehab, clinic" title="Nexus Massage & Rehab - Contact us -massage near me, chiro, physio, acupuncture, rehab, clinic"   style="width: 200px;">
                <div class="u-space-1-top">
                  <p class="mb-md-0 text-white font-weight-bold">Located at 40 Eglinton Ave E, <br>Suite 603, Toronto, ON M4P 3A2</p>
                </div>  
              </div>
            </div>
          </div>

          <div class="media-body text-center u-space-1-bottom">
            <a class="btn btn-sm btn-outline-light transition-3d-hover" href="mailto:contact@nexushealthclinic.com">
            <span class="fa fa-envelope font-size-13 mr-2"></span>
            contact@nexushealthclinic.com
            </a><br><br>

            <a class="btn btn-sm btn-outline-light transition-3d-hover" href="tel:647-557-6267">
              <span class="fa fa-phone font-size-13 mr-2"></span>(647) 557-6267
            </a>
          </div>

        </div>
        <!-- End Friends List -->
      </div>

    </div>
    <!-- End Steps Section -->


    <!-- Start Partners Section -->
    <div class="row text-white text-center" style="background-color:#002A3A;">
      <div class="container u-space-0-top">

        <div class="row justify-content-center" style="margin-top:20px">
          <font size="4">
            <strong>Trusted in our community</strong>
          </font>
        </div>

        <div class="d-flex justify-content-center card-deck d-block d-md-flex u-space-0">
          <div class="card mb-3" style="background-color:#002A3A; border:0px">
            <div class="card-body p-3">
              <div class="text-center">
                  <figure class="figure" style="margin-top:20px">
                    <a href="https://www.instagram.com/p/Bxc65WjBZTn/" target="blank"><img width="150" height="92" src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/partnerships/goodlife_white.png" class="figure-img img-fluid rounded" alt="Goodlife Outreach"></a>
                  </figure>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-center card-deck d-block d-md-flex u-space-0">
            <div class="card mb-3" style="background-color:#002A3A; border:0px">
              <div class="card-body p-3">
                <div class="text-center">
                    <figure class="figure" style="margin-top:0px">
                      <a href="https://www.instagram.com/p/B0q4Q19BuQj/" target="blank"><img width="150" height="110" src="https://nexusmassageclinic.s3.ca-central-1.amazonaws.com/images/partnerships/vrtu_muay_thai_white.png" class="figure-img img-fluid rounded" alt="VRTU Mauy Thai Outreach"></a>
                    </figure>

                    <div class="row justify-content-center" style="margin-top:15px">
                      <a class="btn btn-sm btn-outline-light" href="./partnerships">
                        <span class="fa fa-handshake font-size-13 mr-2"></span>
                        Partner with us
                      </a>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3" style="background-color:#002A3A; border:0px">
            <div class="card-body p-3">
              <div class="text-center">
                  <figure class="figure" style="margin-top:5px">
                    <a href="https://www.instagram.com/p/Bv17zsNBVKK/" target="blank"><img width="150" height="118" src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/partnerships/yoga_logo_white.png" class="figure-img img-fluid rounded" alt="Yoga Tree Outreach"></a>
                  </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Partners Section -->

    <div style="background-color:#E7E8E8; border-bottom: 1px solid #898A8D">
    <!-- Services Section -->
      <div class="container u-space-1" style="background:url(	https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/logos/x-logo-white.svg) no-repeat; background-size:auto 100%;">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
          <h2 class="text-dark font-weight-normal"><span class="font-weight-bold">What makes us Unique?</span></h2>
        </div>
        <!-- End Title -->

          <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mb-7 mb-lg-0">
              <div class="pr-md-4">
                <div class="mb-7">

                  <div class="media u-indicator-ver-dashed mb-3">
                    <div class="d-flex mt-1 mr-3">
                      <span class="u-icon u-icon-dark u-icon--xs rounded-circle">
                        <span class="fa fa-check u-icon__inner"></span>
                      </span>
                    </div>
                    <div class="media-body">
                      <h3 class="h5 text-dark"><strong>Convenient Location</strong></h3>
                      <p class="text-dark">We are a 2 minute walk from Yonge & Eglinton!</p>
                    </div>
                  </div>

                  <div class="media u-indicator-ver-dashed mb-3">
                    <div class="d-flex mt-1 mr-3">
                      <span class="u-icon u-icon-dark u-icon--xs rounded-circle">
                        <span class="fa fa-check u-icon__inner"></span>
                      </span>
                    </div>
                    <div class="media-body">
                      <h3 class="h5 text-dark"><strong>Experienced & Professional Staff</strong></h3>
                      <p class="text-dark">Highly trained & motivated practitioners who care about your health and well-being.</p>
                    </div>
                  </div>

                  <div class="media">
                    <div class="d-flex mt-1 mr-3">
                      <span class="u-icon u-icon-dark u-icon--xs rounded-circle">
                        <span class="fa fa-check u-icon__inner"></span>
                      </span>
                    </div>
                    <div class="media-body">
                      <h3 class="h5 text-dark"><strong>Online Booking & Direct Billing</strong></h3>
                      <p class="text-dark">Online booking makes it convenient for you. We work with multiple direct billing providers.</p>
                    </div>
                  </div>

                </div>

              </div>
            </div>

            <div class="col-lg-6 position-relative">
              <div class="row mx-gutters-5 p-5">
                <div class="col-5 align-self-end px-2 mb-3">
                  <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Foot_Massage-Square.jpg"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Foot Massage"
                   data-speed="700">
                  
                    <img class="img-fluid rounded" src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/sml/Foot_Massage-Square.jpg" srcset="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/sml/Foot_Massage-Square.jpg 500w, https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Foot_Massage-Square.jpg 1000w" sizes="(min-width: 993px) 1500px,(min-width: 768px) and (max-width: 992px) 1000px, (max-width: 767px) 500px" alt="two finger pressing deep for quality foot Massage" title="Yonge & Eglinton - Nexus Massage & Rehab - Deep Foot Massage - Square" style="border: 1px solid #898A8D">

                    <span class="u-media-viewer__container">
                      <span class="u-media-viewer__icon">
                        <span class="fa fa-plus u-media-viewer__icon-inner"></span>
                      </span>
                    </span>
                  </a>
                </div>

                <div class="col-6 px-2 mb-3">
                  <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Karen-Chiro-Square.jpg"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Chiropractic Treatment"
                   data-speed="700">
                  
                    <img class="img-fluid rounded" src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/sml/Karen-Chiro-Square.jpg" srcset="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/sml/Karen-Chiro-Square.jpg 500w, https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Karen-Chiro-Square.jpg 1000w" sizes="(min-width: 993px) 1500px,(min-width: 768px) and (max-width: 992px) 1000px, (max-width: 767px) 500px" alt="Karen Ngo chiropractic lower back treatment on patient" title="Karen Ngo chiropractic lower back treatment on patient" style="border: 1px solid #898A8D">

                    <span class="u-media-viewer__container">
                      <span class="u-media-viewer__icon">
                        <span class="fa fa-plus u-media-viewer__icon-inner"></span>
                      </span>
                    </span>
                  </a>
                </div>

                <div class="col-6 offset-1 px-2 mb-3">
                  <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="https://nexusmassageclinic.s3.ca-central-1.amazonaws.com/images/unique-feature/med/Nexus-Square.jpg"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Modern Facilities"
                   data-speed="700">
                  
                    <img class="img-fluid rounded" src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/sml/Nexus-Square.jpg" srcset="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/sml/Nexus-Square.jpg 500w, https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Nexus-Square.jpg 1000w" sizes="(min-width: 993px) 1500px,(min-width: 768px) and (max-width: 992px) 1000px, (max-width: 767px) 500px" alt="Modern facilities, newly renovated" title="Modern Facilities"  style="border: 1px solid #898A8D">

                    <span class="u-media-viewer__container">
                      <span class="u-media-viewer__icon">
                        <span class="fa fa-plus u-media-viewer__icon-inner"></span>
                      </span>
                    </span>
                  </a>
                </div>

                <div class="col-5 px-2 mb-3">
                  <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Acupuncture-Square.jpg"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Acupuncture Treatment"
                   data-speed="700">
                  
                    <img class="img-fluid rounded" src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/sml/Acupuncture-Square.jpg" srcset="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/sml/Acupuncture-Square.jpg 500w, https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Acupuncture-Square.jpg 1000w" sizes="(min-width: 993px) 1500px,(min-width: 768px) and (max-width: 992px) 1000px, (max-width: 767px) 500px" alt="best dry needling acupuncture" title="Best dry needling acupuncture" style="border: 1px solid #898A8D">

                    <span class="u-media-viewer__container">
                      <span class="u-media-viewer__icon">
                        <span class="fa fa-plus u-media-viewer__icon-inner"></span>
                      </span>
                    </span>
                  </a>
                </div>
              </div>

            </div>
          </div>
      </div>
    <!-- End Services Section -->
    </div>

    <div style="border-bottom: 1px solid #898A8D">
    <!-- Social Media Embed -->
    <div class="container u-space-1">

      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-2">
        <h3 class="text-primary font-weight-normal"><span class="font-weight-bold">See what our customers are saying about Nexus Massage & Rehab!</span></h3>
      </div>
      <!-- End Title -->

      <!-- Conditions Section -->
      <div class="d-flex justify-content-center card-deck d-block d-md-flex u-space-1">

        <!-- Friends List -->
        <div class="card u-info-v2 mb-3">
          <a href="https://www.google.ca/maps/place/Nexus+Massage+%26+Rehab/@43.707402,-79.3993357,17z/data=!3m1!4b1!4m7!3m6!1s0x0:0xfe369432193e0cf0!8m2!3d43.707402!4d-79.397147!9m1!1b1?hl=en-CA" target="blank">
            <div class="card-body p-3">
              <div class="text-center">
                  <img src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/logos/social/google_logo.svg" alt="Nexus Massage & Rehab 5 star review Google" title="Nexus Massage & Rehab 5 star review Google" style="width: 200px;">
                  <span class="ml-4"><iframe id="google-social" src="" scrolling="no" style="width: 200px; height: 55px; border: 0px; overflow: hidden;" /></iframe></span>
              </div>
            </div>
          </a>
        </div>
        <!-- End Friends List -->

        <!-- Friends List -->
        <div class="card u-info-v2 mb-3">
          <a href="https://www.yelp.ca/biz/nexus-massage-and-rehab-toronto" target="blank"> 
            <div class="card-body p-3">
              <div class="text-center">
                <img src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/logos/social/yelp_logo.svg" alt="Nexus Massage & Rehab 5 star review Yelp" title="Nexus Massage & Rehab 5 star review Yelp" style="width: 200px;">
                <span class="ml-4"><iframe id="yelp-social" src="" scrolling="no" style="width: 200px; height: 55px; border: 0px; overflow: hidden;" /></iframe></span>
              </div>
            </div>
          </a>
        </div>
        <!-- End Friends List -->

        <!-- Friends List -->
        <div class="card u-info-v2 mb-3">
          <a href="https://www.facebook.com/pg/nexushealthclinic/reviews" target="blank">
            <div class="card-body p-3">
              <div class="text-center">
                <img src="https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/logos/social/facebook_logo.svg" alt="Nexus Massage & Rehab 5 star review facebook" title="Nexus Massage & Rehab 5 star review facebook" style="width: 200px;">
                <span class="ml-4"><iframe id="facebook-social" src="" scrolling="no" style="width: 200px; height: 55px; border: 0px; overflow: hidden;" /></iframe></span>
              </div>
            </div>
          </a>
        </div>
        <!-- End Friends List -->
      </div>

    </div>
    </div>

    <!-- Google Maps Section -->
    <div class="container u-space-1">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-2 u-space-1-bottom">
        <h2 class="text-primary font-weight-normal"><span class="font-weight-bold">Visit us at Yonge & Eglinton</span></h2>
      </div>
      <!-- End Title -->

      <!-- Icon Blocks Section -->
      <div class="container">
        <div class="row justify-content-md-between">
          <div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 mb-9 mb-lg-0">
            <!-- Icon Block -->
            <div class="text-center px-lg-5">
              <span class="u-icon u-icon-primary--air u-icon--lg rounded-circle mb-3">
                <span class="fa fa-map-marker-alt u-icon__inner"></span>
              </span>
              <h3 class="h5">Location</h3>
              <p>40 Eglinton Ave East, Suite 603, Toronto, ON M4P 3A2</p>
              <a class="btn btn-sm u-btn-primary--air transition-3d-hover" href="https://maps.google.com/maps?ll=43.707402,-79.397147&z=15&t=m&hl=en-US&gl=US&mapclient=embed&daddr=40%20Eglinton%20Ave%20E%20Toronto%2C%20ON%20M4P%203A2%20Canada@43.7074022,-79.3971467" target="blank">
              <span class="fa fa-compass font-size-13 mr-2"></span>
              Get Directions
              </a>

            </div>
            <!-- End Icon Block -->
          </div>

          <div class="col-sm-6 col-lg-4 mb-9 mb-lg-0">
            <!-- Icon Block -->
            <div class="text-center px-lg-5">
              <span class="u-icon u-icon-primary--air u-icon--lg rounded-circle mb-3">
                <span class="fa fa-subway u-icon__inner"></span>
              </span>
              <h3 class="h5">Transit</h3>
              <p>2 Min walk from Yonge & Eglinton station</p>
            </div>
            <!-- End Icon Block -->
          </div>

          <div class="col-sm-6 col-lg-4">
            <!-- Icon Block -->
            <div class="text-center px-lg-5">
              <span class="u-icon u-icon-primary--air u-icon--lg rounded-circle mb-3">
                <span class="fa fa-car u-icon__inner"></span>
              </span>
              <h3 class="h5">Parking</h3>
              <p>Parking Lot Access<br>
              Metered Street Parking</p>

              <a class="btn btn-sm u-btn-primary--air transition-3d-hover" href="./parking">
              <span class="fa fa-eye font-size-13 mr-2"></span>
              Find Parking
              </a>
            </div>
            <!-- End Icon Block -->
          </div>
        </div>
      </div>
      <!-- End Icon Blocks Section -->
    </div>

    <div class="u-space-1-top">
      <iframe width="100%" height="500" id="maps-nexus" src=""></iframe>
    </div>

    <!-- Pricing FAQ Section -->
    <div class="container u-space-1">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-5">
        <h2 class="text-primary"><span class="font-weight-bold">Learn more about Nexus Massage & Rehab and our Services</span></h2>
      </div>
      <!-- End Title -->

      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <div id="FAQCollapse">

          <!-- Card -->
          <div class="card mb-3 u-card-collapse">
            <div class="card-header px-4" id="FAQHeadingZero">
              <div class="collapsed" data-toggle="collapse" data-target="#FAQZero" aria-expanded="false" aria-controls="FAQZero" role="button">
                <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                  Certified Healthcare Practitioners
                  <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                </h3>
              </div>
            </div>
            <div id="FAQZero" class="collapse" aria-labelledby="FAQHeadingZero" data-parent="#FAQCollapse">
              <div class="card-body px-4">
                Nexus Massage & Rehab Clinic is staffed with a team of <a href="./team">healthcare practitioners</a> who are experienced and educated in a variety of fields. On our team, we have registered massage therapists, chiropractors, acupuncturists, physiotherapists and osteopaths ready to help you.<br><br>

                Before you get started with us, you will meet with one of our certified health experts who will perform an assessment to identify your body’s unique needs.<br><br>

                Our fully licensed staff will work one on one with you to create a treatment plan that is personalized and customized to suit your body’s unique needs.<br><br>

                Together we will identify your health goals and put the steps in motion to help you restore your body. Learn more about our certified team today.
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 u-card-collapse">
            <div class="card-header px-4" id="FAQHeadingOne">
              <div class="collapsed" data-toggle="collapse" data-target="#FAQOne" aria-expanded="false" aria-controls="FAQOne" role="button">
                <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                  About Our Professional Services
                  <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                </h3>
              </div>
            </div>
            <div id="FAQOne" class="collapse" aria-labelledby="FAQHeadingOne" data-parent="#FAQCollapse">
              <div class="card-body px-4">
                Pain and discomfort can come from an injury, condition, disease, tension from stress and more. We provide treatments that can help you achieve comfort and relief.<br><br>

                No one experiences pain the same way, which is why we work personally with our patients to connect them to the right service to help them achieve their health goals.<br><br>

                Our Yonge & Eglinton clinic offers a variety of <a href="./services">treatments and services</a> to help our patients become their optimal selves so that they can live a life of comfort and wellness.
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 u-card-collapse">
            <div class="card-header px-4" id="FAQHeadingTwo">
              <div class="collapsed" data-toggle="collapse" data-target="#FAQTwo" aria-expanded="false" aria-controls="FAQTwo" role="button">
                <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                  Registered Massage Therapy (RMT)
                  <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                </h3>
              </div>
            </div>
            <div id="FAQTwo" class="collapse" aria-labelledby="FAQHeadingTwo" data-parent="#FAQCollapse">
              <div class="card-body px-4">
                Massage therapy treats the muscles and soft tissue in your body to release tension. This manual manipulation helps to improve your body's circulation, decrease tension in muscles, and heal strained muscles.<br><br>

                As everybody’s body is different, we offer a variety of therapeutic massage styles to suit the unique needs of our patients. Our registered massage therapists are well versed in various massage techniques.<br><br>

                Massage therapy options at our Yonge & Eglinton Clinic include deep tissue, hot stone and Swedish massages. We will provide an assessment to help you identify which of our <a href="./service/massage">massage techniques</a> is best suited to your body’s unique needs.<br><br>

                Give your loved one the gift of massage therapy from an RMT! We offer <a href="./gift-cards">gift cards</a> that can be used for treatments at our Yonge & Eglinton clinic.
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 u-card-collapse">
            <div class="card-header px-4" id="FAQHeadingThree">
              <div class="collapsed" data-toggle="collapse" data-target="#FAQThree" aria-expanded="false" aria-controls="FAQThree" role="button">
                <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                  Chiropractic Care
                  <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                </h3>
              </div>
            </div>
            <div id="FAQThree" class="collapse" aria-labelledby="FAQHeadingThree" data-parent="#FAQCollapse">
              <div class="card-body px-4">
                Chiropractors at our Yonge and Eglinton clinic are proficient in spinal adjustments and spinal manipulations, but their expertise in <a href="./service/chiropractic">Chiropractic care</a> precedes these abilities. Our professionals are experienced in exercise prescriptions, muscle release therapy and more.<br><br>

                Our chiropractors perform manual adjustments, muscle and joint manipulation, and hands-off techniques to help restore the functional and structural integrity of nerves, muscles, joints and the spine. Whether you are suffering from <a href="https://nexushealthclinic.com/community/5-common-reasons-you-are-experiencing-neck-pain/">neck pain</a> or chronic pain, you can make an appointment with a chiropractor on staff who will work with you one on one to help you create a personalized treatment plan to meet your specific needs.<br><br>

                We offer myofascial release, contemporary and medical acupuncture, exercise therapy and spinal manipulation therapy.  We are with you every step of the way and will listen to your concerns to ensure you are on the right track towards your health goals.
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>

        <!-- Card -->
          <div class="card mb-3 u-card-collapse">
            <div class="card-header px-4" id="FAQHeadingOne-alt">
              <div class="collapsed" data-toggle="collapse" data-target="#FAQOne-alt" aria-expanded="false" aria-controls="FAQOne-alt" role="button">
                <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                  Physiotherapy
                  <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                </h3>
              </div>
            </div>
            <div id="FAQOne-alt" class="collapse" aria-labelledby="FAQHeadingOne-alt" data-parent="#FAQCollapse">
              <div class="card-body px-4">
                We are proud to offer a variety of <a href="./service/physiotherapy">professional physiotherapy treatments</a> at our Yonge and Eglinton clinic. Physiotherapy is an effective means to assess, treat, manage and diagnose both chronic and acute conditions.<br><br>

                By promoting physical activity and mobility, physiotherapy treatments can help to prevent injury and disability. This style of treatment is known to help various ailments and conditions not limited to back pain, sports injuries, sprains and strains, arthritis, and cardiovascular diseases.<br><br>

                Our physiotherapists are equipped with the experience and resources necessary to effectively assess and treat various injuries, diseases and conditions. We offer a variety of physiotherapy treatments to suit the varying needs of our patients. These include exercise prescription, joint mobilization and more. Learn more today!
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- More Expandable Card -->
          <div class="card mb-3 u-card-collapse" style="border:none;">
            <div id="FAQAcupunctureExpand" class="collapse" aria-labelledby="FAQHeadingAcupunctureExpand" data-parent="#FAQHeadingAcupunctureExpand">
              <div class="card-body expand-card">

                <!-- Card -->
                <div class="card mb-3 u-card-collapse">
                  <div class="card-header px-4" id="FAQHeadingTwo-alt">
                    <div class="collapsed" data-toggle="collapse" data-target="#FAQTwo-alt" aria-expanded="false" aria-controls="FAQTwo-alt" role="button">
                      <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                        Acupuncture
                        <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                      </h3>
                    </div>
                  </div>
                  <div id="FAQTwo-alt" class="collapse" aria-labelledby="FAQHeadingTwo-alt" data-parent="#FAQCollapse">
                    <div class="card-body px-4">
                      Acupuncture is an alternative medical technique used to treat a variety of health conditions. A common strategy used in Chinese medicine, acupuncture involves the insertion of fine needles (acupuncture needles) into targeted anatomic sites to balance an individual's energy and stimulate the nervous system. This process helps to restore blood circulation and promote natural self-healing.<br><br>

                      We are proud to offer professional acupuncture treatments at our Yonge and Eglington clinic. We use acupuncture to help treat a variety of conditions including nausea, headaches and pain.<br><br>

                      In the same vein, acupressure is a massage therapy technique that targets the same areas as acupuncture, just with a different means of targeting pressure points; specifically, manual pressure and devices as opposed to needles.<br><br>

                      Book an appointment with an acupuncturist at our Yonge and Eglinton clinic today.
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 u-card-collapse">
                  <div class="card-header px-4" id="FAQHeadingThree-alt">
                    <div class="collapsed" data-toggle="collapse" data-target="#FAQThree-alt" aria-expanded="false" aria-controls="FAQThree-alt" role="button">
                      <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                        Osteopathy
                        <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                      </h3>
                    </div>
                  </div>
                  <div id="FAQThree-alt" class="collapse" aria-labelledby="FAQHeadingThree-alt" data-parent="#FAQCollapse">
                    <div class="card-body px-4">
                      Osteopathy addresses your body as a whole to identify the root of a problem like pain or discomfort. The manual therapy treats the joints, spine, muscles, central nervous system, circulatory system and lymphatic system to maximize all of your body’s systems. This treatment is typically used to treat muscle, spin and joint conditions like <a href="https://nexushealthclinic.com/community/knee-pain/">osteoarthritis</a>.
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 u-card-collapse">
                  <div class="card-header px-4" id="FAQHeadingFour">
                    <div class="collapsed" data-toggle="collapse" data-target="#FAQFour" aria-expanded="false" aria-controls="FAQFour" role="button">
                      <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                        Custom Orthotics
                        <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                      </h3>
                    </div>
                  </div>
                  <div id="FAQFour" class="collapse" aria-labelledby="FAQHeadingFour" data-parent="#FAQCollapse">
                    <div class="card-body px-4">
                      <a href="./service/orthotics">Custom orthotics</a> are medical footwear devices designed to equally distribute pressure across your feet for improved gait (manner of walking). Specifically tailored to the unique needs of an individual, our orthotics align your foot and ankle in an optimal anatomical efficient position to reduce strain and prevent injury caused by poor walking habits.<br><br>

                      At Nexus Massage & Rehab Clinic, we design our custom orthotics with a 3D infrared structured light scanner that allows us to accurately capture an individual’s precise foot structure. This allows us to create footwear that will support your feet in all the right areas through your entire gait cycle.<br><br>

                      Our orthotics are made with Ethylene-Vinyl Acetate (EVA), a choc attenuating material that is made with air-filled encapsulated foam sells commonly found in high-performance running shoes.<br><br>

                      Orthotic footwear is typically designed for people suffering from conditions not limited to bunions, flat feet, high arches, leg or knee pain, foot arthritis and plantar fasciitis to help them improve comfort while walking.  With the right footwear, you can finally walk with comfort and confidence.
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 u-card-collapse">
                  <div class="card-header px-4" id="FAQHeadingFive">
                    <div class="collapsed" data-toggle="collapse" data-target="#FAQFive" aria-expanded="false" aria-controls="FAQFive" role="button">
                      <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                        Our Yonge & Eglinton Facilities
                        <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                      </h3>
                    </div>
                  </div>
                  <div id="FAQFive" class="collapse" aria-labelledby="FAQHeadingFive" data-parent="#FAQCollapse">
                    <div class="card-body px-4">
                      Our newly renovated state-of-the-art facility is centrally located at Yonge & Eglinton. Our modern facility includes 11 treatment rooms and a multi-use rehabilitation studio.<br><br>

                      Getting to and from our clinic is quick and easy. We are a two minute walk from the Subway station and are located nearby shopping and restaurants. With the addition of the LRT, getting to our clinic will be a breeze.
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 u-card-collapse">
                  <div class="card-header px-4" id="FAQHeadingSix">
                    <div class="collapsed" data-toggle="collapse" data-target="#FAQSix" aria-expanded="false" aria-controls="FAQSix" role="button">
                      <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                        About Nexus Health Clinic
                        <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                      </h3>
                    </div>
                  </div>
                  <div id="FAQSix" class="collapse" aria-labelledby="FAQHeadingSix" data-parent="#FAQCollapse">
                    <div class="card-body px-4">
                      At Nexus Massage & Rehab Clinic, we are committed to helping you improve and strengthen your body to become your optimal self.<br><br>


                      We offer various treatment options to help relieve our patients of pain and discomfort. Our modern and professional facilities at Yonge and Eglinton boasts modern equipment to support the varying needs of our patients.<br><br>

                      We offer a results-driven treatment approach, which is why we work with patients to identify their health goals in order to create treatment plans that are customized and personalized to their needs.<br><br>

                      Learn more about our different services and <a href="./pricing">pricing options</a> today! <a href="https://nexusclinic.clinicsense.com/book/" target="blank">Book your appointment</a> now to get started on your road to wellness.
                    </div>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 u-card-collapse">
                  <div class="card-header px-4" id="FAQHeadingSeven">
                    <div class="collapsed" data-toggle="collapse" data-target="#FAQSeven" aria-expanded="false" aria-controls="FAQSeven" role="button">
                      <h3 class="h5 d-flex justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0">
                        Booking Your Appointment
                        <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                      </h3>
                    </div>
                  </div>
                  <div id="FAQSeven" class="collapse" aria-labelledby="FAQHeadingSeven" data-parent="#FAQCollapse">
                    <div class="card-body px-4">
                      At Nexus Health Massage & Rehab we offer a wide variety of treatments to suit the varying needs of our patients. When you choose to book an appointment at our clinic, you first book an initial appointment for assessment.<br><br>

                      For a massage appointment an initial appointment is not needed, but our pricing will be based on the length of your session. We offer direct billing for some of our services for certain insurance providers. Book your appointment today.
                    </div>
                  </div>
                </div>
                <!-- End Card -->
                </div>
              </div>
              <div class="card-header px-4" id="FAQHeadingAcupunctureExpand" style="border-bottom:none;">
                <h3 class="h5 LessMoreCollapse collapsed text-center justify-content-between align-items-center font-weight-normal u-card-collapse__heading mb-0" data-toggle="collapse" data-target="#FAQAcupunctureExpand" aria-expanded="false" aria-controls="FAQAcupunctureExpand" role="button">
                  <span class="fa fa-angle-up u-card-collapse__heading-icon"></span>
                </h3>
              </div>
            </div>
            <!-- End More Expandable Card -->

      </div>

      <div class="col-sm-1"></div>
      
    </div>
    <!-- End Pricing FAQ Section -->

  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <?php include('includes/footer.php') ?>
  <!-- ========== END FOOTER ========== -->

  <!-- Common Footer -->
  <?php include('includes/common-footer.php') ?>
  <!-- End Common Footer -->

  <script defer>
    $(document).ready(function(){
        $('iframe#google-social').attr('src', 'https://embedsocial.com/api/reviews_source_badges/badge-6/en/google/4705');
        $('iframe#yelp-social').attr('src', 'https://embedsocial.com/api/reviews_source_badges/badge-6/en/custom/13034');
        $('iframe#facebook-social').attr('src', 'https://embedsocial.com/api/reviews_source_badges/badge-6/en/facebook/24868');
        $('iframe#maps-nexus').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8682.701534121301!2d-79.40139737083489!3d43.70751239672543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b33bb783e569b%3A0xfe369432193e0cf0!2sNexus+Massage+%26+Rehab!5e0!3m2!1sen!2sca!4v1536630500759');
        $('iframe#maps-parking').attr('src', 'https://www.google.com/maps/d/embed?mid=1PjWGMmbmn5xl1MAHthYeM_M7-bFl3q7Z');
      });
  </script>

  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback">
  </script>

  <script async type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "LocalBusiness",
      "priceRange":"$60 - $500",
      "name" : "Nexus Massage & Rehab",
      "image" : ["https://nexusmassageclinic.s3.ca-central-1.amazonaws.com/logos/logo.svg", "https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Karen-Chiro-Square.jpg","https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Acupuncture-Square.jpg", "https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Massage-Square.jpg","https://s3.ca-central-1.amazonaws.com/nexusmassageclinic/images/unique-feature/med/Foot_Massage-Square.jpg"],
      "telephone" : "(647) 557-6267",
      "email" : "contact@nexushealthclinic.com",
      "address" : {
        "@type" : "PostalAddress",
        "streetAddress" : "40 Eglinton Ave E, Suite 603",
        "addressLocality" : "Toronto",
        "addressRegion" : "ON",
        "addressCountry" : "Canada",
        "postalCode" : "M4P 3A2"
      },
      "openingHoursSpecification" : [ {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "10:00",
        "closes": "20:00"
      }, {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Sunday",
          "Saturday"
        ],
        "opens": "10:00",
        "closes": "17:00"
      }
      ],
      "@id": "https://nexushealthclinic.com",
      "url" : "https://nexushealthclinic.com/",
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 43.707311,
        "longitude": -79.397152
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Health services",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "CHIROPRACTIC",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Initial Appointment"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "20 Min Follow Up"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "40 Min Follow Up"
                }
              }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "RMT MASSAGE",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "30 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "45 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "60 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "75 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "90 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "120 Min Session"
                }
              }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "HOT STONE MASSAGE",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "30 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "45 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "60 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "75 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "90 Min Session"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "120 Min Session"
                }
              }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "PHYSIOTHERAPY",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Initial Appointment"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "20 Min Follow Up"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "40 Min Follow Up"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "60 Min Follow Up"
                }
              }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "ACUPUNCTURE",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Initial Appointment"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "60 Mi  n Follow Up"
                }
              }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "CUSTOM ORTHOTICS",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Custom Orthotics Assessment"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Orthotics Fitting & Pickup"
                }
              }
            ]
          }
        ]
      },
      "potentialAction": {
        "@type": "ReserveAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://nexusclinic.clinicsense.com/book/",
          "inLanguage":"en-US",
          "actionPlatform": [
            "http://schema.org/DesktopWebPlatform",
            "http://schema.org/IOSPlatform",
            "http://schema.org/AndroidPlatform"
          ]
        },
        "result": {
          "@type": "Reservation",
          "name": "Book Now"
        }
      }
    }
  </script>
  
</body>
</html>