@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Arusha National Park</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <div class="single-page-section">
            <div class="container">
                <figure class="single-feature-img">
                    <img src="assets/images/IMG/AdobeStock_290748484.jpeg" alt="">
                </figure>
                <div class="tab-container">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab"
                                aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="program-tab" data-toggle="tab" href="#program" role="tab"
                                aria-controls="program" aria-selected="false">PROGRAM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab"
                                aria-controls="experience" aria-selected="false">PRICE
                                INCLUDES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="requirement-tab" data-toggle="tab" href="#requirement" role="tab"
                                aria-controls="requirement" aria-selected="false">PRICE
                                EXCLUDES</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                            aria-labelledby="overview-tab">
                            <div class="overview-content">
                                <h3>Day Trip – Arusha National Park:</h3>
                                <p>The closest national park to Arusha town – northern Tanzania’s 
                                    safari capital – Arusha National Park is a multi-faceted jewel, 
                                    often overlooked by safari goes, 
                                    despite offering the opportunity to explore a 
                                    beguiling diversity of habitats within a few hours.
                                </p>
                                <p>The entrance gate leads into a shadowy montane forest inhabited by 
                                    inquisitive blue monkeys and colorful turacos and trogons – 
                                    the only place on the northern safari circuit where the acrobatic 
                                    black-and-white colobus monkey is easily seen. In the midst of the forest stands the spectacular Ngurdoto Crater, 
                                    whose steep, rocky cliffs enclose a wide marshy floor dotted with herds of buffalo and warthog.
                                </p>
                                <p>Further north, rolling grassy hills enclose the tranquil beauty of the Momela Lakes, 
                                    each one a different hue of green or blue. 
                                    Their shallows sometimes tinged pink with thousands of flamingos, 
                                    the lakes support a rich selection of resident and migrant waterfowl, 
                                    and shaggy water bucks display their large lyre-shaped horns on the watery fringes. 
                                    Giraffes glide across the grassy hills, between grazing zebra herds, 
                                    while pairs of wide-eyed dik-dik dart into scrubby bush like overgrown hares on spindly legs.
                                </p>
                                <p>The hilly landscape is dotted with vast numbers of
                                    Baobab trees, dense bush and high grasses.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                            <div class="itinerary-content">
                                <h3>Arusha National Park – Momella Lakes: (552 sq. km)</h3>
                                <p>
                                    We will pick you from your Hotel/Lodge at 8:00 am 
                                    drive to Arusha National Park which takes about 45 minutes to 1 hour.
                                </p>
                                <p>You will enjoy a half-day guided walking safari through the forest to the waterfall and the natural beauty of the hills, 
                                    mountains and river beds begging to be explored. Also, your guide will take through the rain forest to the waterfalls; 
                                    also you will see black and white Colobus monkeys, zebras, buffalos and a lot of antelopes. 
                                    You will also have a chance to observe more than 400 bird species 
                                    including Crowned Eagle, Lanner Falcon, and Levaillant Cuckoo.
                                </p>
                                <p><strong>After the picnic lunch in the bush:</strong>
                                </p>
                                <p>you will be taken on a game drive through the National park, were you will enjoy the flora and fauna. 
                                    We will drive you to seven Momella lakes full of Pink flamingos and other water birds. On the way back, 
                                    giraffes, unaware of your presence, will pose undisturbed for the family album. 
                                    
                                </p>
                                <p>Late afternoon around 6-7pm we return back to Arusha and we will drop you at your Hotel/Lodge.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                            <div class="experience-content">
                                <h5>PRICES INCLUDE:</h5>
                                <ul style='color:#1D293F'>
                                    <li>- Park entry fees. </li>
                                    <li>- Walking fees. </li>
                                    <li>- Armed ranger guide. </li>
                                    <li>- Transport 4×4 Toyota Land Cruiser with pop up roof with driver cum guide. </li>
                                    <li>- Complimentary bottled of drinking water 1.5 litter per person per day during on safari. </li>
                                    <li>- Picnic lunch boxes. </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="requirement" role="tabpanel" aria-labelledby="requirement-tab">
                            <div class="requirement-content">
                                <h5 style='font-weight: 900'>PRICES DOES NOT INCLUDE:</h5>
                                <ul style='color:#1D293F'>
                                    <li>- International flights & Domestic flight. </li>
                                    <li>- Fees for passport, visas, immunizations, and insurance. </li>
                                    <li>- Tips for staff such as driver cum guides/chef/porter. </li>
                                    <li>- Expenses of personal nature (like souvenirs). </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg); margin-top:52px;">
            <div class="slide-container swiper">
                <div class="slide-content" style='border-radius: 0 0 0 0;'>
                    <div class="swiper-wrapper" >
                        <div class="col-6  swiper-slide">
                                <div>
                                   <div >
                                      <figure class="special-img">
                                         <img src="assets/images/IMG/AdobeStock_243452507.jpeg" alt="">
                                      </figure>
                                   </div>
                                </div>
                             
                        </div>
                        <div class="col-6  swiper-slide">
                            <div>
                               <div >
                                  <figure class="special-img">
                                     <img src="assets/images/tarangire/AdobeStock_408507389.jpeg" alt="" style="width: width:364.67px;height:240px;">
                                  </figure>
                               </div>
                            </div>
                         
                    </div>
                    <div class="col-6  swiper-slide">
                        <div>
                           <div >
                              <figure class="special-img">
                                 <img src="assets/images/IMG/AdobeStock_276557379.jpeg" alt="" style="width: width:364.67px;height:240px;">
                              </figure>
                           </div>
                        </div>
                     
                    </div>
                    <div class="col-sm-6 col-lg-4 swiper-slide">
                        <div>
                           <div >
                              <figure class="special-img">
                                 <img src="assets/images/IMG/AdobeStock_182156903.jpeg" alt="" style="width: width:364.67px;height:240px;">
                              </figure>
                           </div>
                        </div>
                     
                    </div>
                    <div class="col-sm-6 col-lg-4 swiper-slide">
                        <div>
                           <div >
                              <figure class="special-img">
                                 <img src="assets/images/IMG/AdobeStock_408602907.jpeg" alt="" style="width: width:364.67px;height:240px;">
                              </figure>
                           </div>
                        </div>
                     
                    </div>
                    <div class="col-sm-6 col-lg-4 swiper-slide">
                        <div>
                           <div >
                              <figure class="special-img">
                                 <img src="assets/images/IMG/AdobeStock_479567191.jpeg" alt="" style="width: width:364.67px;height:240px;">
                              </figure>
                           </div>
                        </div>
                     
                    </div>
                    
                    <div class="col-sm-6 col-lg-4 swiper-slide">
                        <div>
                           <div >
                              <figure class="special-img">
                                 <img src="assets/images/IMG/AdobeStock_112235577.jpeg" alt="" style="width: width:364.67px;height:240px;">
                              </figure>
                           </div>
                        </div>
                     
                    </div>
                    
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main> 

@endsection
