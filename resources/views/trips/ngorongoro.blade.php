@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Ngorongoro National Park</h1>
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
                                <h3>Day Trip – Ngorongoro Conservation Area Authority:</h3>
                                <p>The Ngorongoro Conservation Area (NCA) is a conservation area and a UNESCO World Heritage Site located 180 km (110 mi) west of Arusha 
                                    in the Crater Highlands area of Tanzania. 
                                    
                                </p>
                                <p>The area is named after Ngorongoro Crater, a large volcanic caldera within the area. 
                                    The conservation area is administered by the Ngorongoro Conservation Area Authority, an arm of the Tanzanian government, 
                                    and its boundaries follow the boundary of the Ngorongoro division of the Arusha region.
                                </p>
                                <p>It has been reported in 2009 that the government authority has proposed a reduction of the population of the conservation area 
                                    from 65,000 to 25,000. 
                                </p>
                                <p>There are plans being considered for 14 more luxury tourist hotels, 
                                    so people can access 
                                    “the unparalleled beauty of one of the world’s most unchanged wildlife sanctuaries”.
                                </p>
                                <p>None of the senior level positions in the Ngorongoro Conservation Area is yet 
                                   held by a member of the local Maasai Pastoralists.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                            <div class="itinerary-content">
                                <h3>Ngorongoro Crater Tour – Arusha: (19.2 km in diameter, 610 deep, 304 sq. km)</h3>
                                <p>
                                    You will be picked up from your Lodge/Hotel at 5:30 am.
                                </p>
                                <p>Our day we start very early in the morning equipped with A picnic lunch boxes 
                                    and we drive from Arusha town to Ngorongoro Conservation Area. We descend 2000 ft. 
                                    down to the Crater floor by our 4×4 wheel drive vehicle for game viewing.
                                </p>
                                <p>Let’s Explore this Garden of Eden. Ngorongoro is a huge and deep volcanic Crater. 
                                    There’s rich pasture, swamps, forest And permanent water on the Crater floor that’s 
                                    why wildlife here is so diverse and numerous.
                                </p>
                                <p>There are up to 25.000 larger animals living here. 
                                    It’d the best opportunity to see black Rhino and many other rare species like the Black-manned lion. 
                                    We will have a fantastic day and you will see wildlife at its best.
                                </p>
                                <p>Late afternoon we drive back to Arusha and you will be dropped at your Lodge/Hotel. 
                                </p>
                                <p> End of tour.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                            <div class="experience-content">
                                <h5>PRICES INCLUDE:</h5>
                                <ul style='color:#1D293F'>
                                    <li>- Park entry fees. </li>
                                    <li>- Ngorongoro Crater Service fees. </li>
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
