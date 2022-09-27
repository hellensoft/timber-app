@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Manyara National Park</h1>
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
                                <h3>Lake Manyara National Park:</h3>
                                <p>Lake Manyara National Park is a 
                                    Tanzanian National Park located both in Arusha Region and Manyara Region, Tanzania.                                     
                                </p>
                                <p>The two administrative regions have no jurisdiction over the parks. 
                                    The Park is governed by the Tanzania National Parks Authority.
                                </p>
                                <p>The majority of the land area of the park is a narrow strip running between the Gregory Rift wall to the west and Lake Manyara, 
                                    an alkaline or soda-lake, to the east. 
                                </p>
                                <p> The park consists of 330 km2 (127 sq miles) of arid land, forest, and a soda-lake 
                                    which covers as much as 200 km2 (77 sq mi) of land during 
                                    the wet season but is nearly nonexistent during the dry season. 
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                            <div class="itinerary-content">
                                <h3>Arusha – Lake Manyara National Park: (330 sq. km 127 sq. miles)</h3>
                                <p>
                                    We will pick you from Arusha city from your Hotel at 7:30 am 
                                </p>
                                <p>and then we drive to Lake Manyara National Park with pack lunch boxes.
                                    It takes about 2hrs driving to get there and then we will have a game viewing.
                                </p>
                                <p>This impressive National Park is one of Tanzania’s most dramatically located wildlife areas, 
                                    consisting of a massive but shallow soda lake (covering two-thirds of the park) 
                                    at the foot of the Great Rift Valley’s western escarpment.
                                </p>
                                <p>The Park’s varied habitat attracts a wide variety of animals, 
                                    including one of Africa’s largest concentrations of Elephants; 
                                    Manyara is famous for Tree-climbing lions, 
                                    as well as large flocks of flamingos attracted by the algae in the lake.
                                </p>
                                <p>Late afternoon around 4-5pm we return back to Arusha and we will drop you at your Hotel/Lodge.
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
