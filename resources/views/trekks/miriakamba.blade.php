@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/trekks/meruNT.jpeg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Miriakamba Trekk</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <div class="single-page-section">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-8"> --}}
                        {{-- <figure class="single-feature-img">
                        <img src="assets/images/IMG/AdobeStock_290748484.jpeg" alt="">
                        </figure> --}}
                        <figure class="feature-image">
                            <img src="assets/images/IMG/AdobeStock_290748484.jpeg" alt="">
                            <div class="package-meta text-center">
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        3 days / 2 night
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marked-alt"></i>
                                        Tanzania
                                    </li>
                                </ul>
                            </div>
                        </figure>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tab-container">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                        role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="program-tab" data-toggle="tab" href="#program" role="tab"
                                        aria-controls="program" aria-selected="false">PROGRAM</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience"
                                        role="tab" aria-controls="experience" aria-selected="false">PRICE
                                        INCLUDES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="requirement-tab" data-toggle="tab" href="#requirement"
                                        role="tab" aria-controls="requirement" aria-selected="false">PRICE
                                        EXCLUDES</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab">
                                    <div class="overview-content">
                                        <b>Mount Meru 3 Days Trekking:</b>
                                        <p>The name Meru means "that which does not make a noise",
                                            but in fact rumblings have been reported as recently as the early 1960's.
                                        </p>
                                        <p> It is Mount Kilimanjaro’s little sister, standing at 4,566m compared to 5,895m,
                                            but it's still an impressive freestanding volcano, which makes a superb four day
                                            climb
                                            to the top.
                                            The last eruption was probably in 1877, and larva rock or pyroclasts were blown
                                            out
                                            during Oct and Dec 1910.
                                        </p>
                                        <p> The first Mount Meru ascent was made by Dr. Fritz Jaeger, 1904.
                                            The Mountain is the third highest peak in Africa and is the second highest
                                            mountain
                                            in
                                            Tanzania at 4,568m.
                                        </p>
                                        <p>The mountain is located within Arusha National Park, Tanzania’s gem.
                                            This prime location gives trekkers the chance to spot some of the wildlife that
                                            inhabits
                                            the area.
                                        </p>
                                        <p>Arrive at the Kilimanjaro International or similar Airport,
                                            pick up and transferred to the Springlands Hotel or similar hotel in Moshi
                                            or Arusha for overnight bed and breakfast.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                                    <div class="itinerary-content">
                                        <h3>Program <span>( 3 days )</span></h3>
                                        <p>
                                            Our Trekking is a 3 day hiking program up Mt Meru.
                                        </p>
                                    </div>
                                    <div class="itinerary-timeline-wrap">
                                        <ul>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>1</span></div>
                                                    <h4>Meriakamba Hut (Full board):</h4>
                                                    <p>We drive from Arusha to Momela Gate. After a short registration at
                                                        the
                                                        Gate,
                                                        our walk will begin with full armed ranger escorting us,
                                                        simply we can see along the way the wild animals including
                                                        elephants,
                                                        zebras, and giraffe, monkeys, antelope, and often elephants along
                                                        the
                                                        route.
                                                        Dinner and overnight night at Miriakamba Hut.
                                                    </p>
                                                    <p>Elevation (m): (1,387 m to (1,500 m)
                                                        <br>Elevation (ft): 4,921 ft) to 3,000 ft )
                                                        <br>Distance: 10 km
                                                        <br>Hiking Time: 4-6 hours
                                                        <br>Habitat: Montane Forest.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>2</span></div>
                                                    <h4>Saddle Hut (Full board):</h4>
                                                    <p>The walk from Miriakamba Hut to the saddle below Little Meru is a
                                                        short
                                                        day
                                                        but a steep climb.
                                                        The walk will take us slowly along the ridge for a spectacular view
                                                        of
                                                        the
                                                        Meru Crater and the impressive Ash Cone.
                                                        After hot lunch at Saddle Hut, we can make a short climb to the
                                                        summit
                                                        of
                                                        Little Meru (3,820m) for superb views just before sunset.
                                                    </p>
                                                    <p>Dinner and overnight at Saddle Hut
                                                        <br>Elevation (m): 2,514 m to 3,570m
                                                        <br>Elevation (ft): 8,250 ft to 11,712 ft
                                                        <br>Distance: 8 km
                                                        <br>Hiking Time:
                                                        3-5 hours<br>Habitat: Forest and Moorland.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>3</span></div>
                                                    <h4>Summit Day (Half Board):</h4>
                                                    <p>We start early at around 1:30 a.m. to climb steeply to Rhino Point
                                                        (3,800
                                                        m.)
                                                        and on to Cobra Point (4350m). We reach the summit (4,566 m) for
                                                        sunrise
                                                        there is a possibility to see Kilimanjaro Peak above the clouds.
                                                        The final part of the climb is along a spectacular narrow ridgeline
                                                        between the sheer inner cliffs
                                                        and the sloping outer wall of the crater. We take a short rest and
                                                        brunch at
                                                        Saddle Hut before continuing the descent to the Momella gate.
                                                        The returning transfer will be waiting at Momella Gate to pick you
                                                        to
                                                        your hotel in Arusha/Moshi.
                                                    </p>
                                                    <p>Elevation (m): 3,570 m to 4,565m to 2,514m
                                                        <br>Elevation (ft): 14,977ft to 11,712 ft to 8,250ft
                                                        <br>Distance: 5 km up 13 km down
                                                        <br>Hiking Time: 12 – 14 hours
                                                        <br>Habitat: Alpine Desert Moorland and Montane forest.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                    <div class="experience-content">
                                        <h3>PRICES INCLUDES:</h3>
                                        <ul style='color:#1D293F'>
                                            <li>- TWO NIGHTS ACCOMMODATION IN MOSHI/ARUSHA BED AND BREAKFAST.</li>
                                            <li>- Return transportation from Moshi to/from the starting/finishing point on
                                                the
                                                mountain</li>
                                            <li>- Qualified guides with mountain crew</li>
                                            <li>- National park fees</li>
                                            <li>- Tents and sleeping mattresses</li>
                                            <li>- Cutlery / Crockery / Eating utensils</li>
                                            <li>- Mess tent (for dining) / Mini camping chairs / Tables / Candles</li>
                                            <li>- Rescue Fees</li>
                                            <li>- Pulse oximeters</li>
                                            <li>- First aid kit</li>
                                            <li>- Guides, porters, cook, waiter salaries</li>
                                            <li>- Boiled water on the mountain</li>
                                            <li>- All meals on the mountain (breakfast, lunch &amp; dinner)</li>
                                            <li>- Guides, porters, waiter, cook accommodation and entry fees on the mountain
                                            </li>
                                            <li>- Armed Ranger Fee.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="requirement" role="tabpanel" aria-labelledby="requirement-tab">
                                    <div class="requirement-content">
                                        <h3>PRICES DOES NOT INCLUDE:</h3>
                                        <ul style='color:#1D293F'>
                                            <li><b>-</b> Airport transfers</li>
                                            <li><b>-</b> Guides, Porters, Cook &amp; Waiters <strong>tips</strong></li>
                                            <li><b>-</b> Meals and drinks not specified</li>
                                            <li><b>-</b> Gear for your climb</li>
                                            <li><b>-</b> Items of personal nature</li>
                                            <li><b>-</b> Additional nights beyond the two standard hotel nights included
                                            </li>
                                            <li><b>-</b> Visas</li>
                                            <li><b>-</b> Emergency oxygen</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar" style="margin-top: 15%;">
                            
                            <div class="widget-bg information-content text-center">
                                <h5>Trekk Rates</h5>
                                <h3>JANUARY TO DECEMBER</h3>
                                <ul style='color:#1D293F;' class='text-left'>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>USD 926 PER PERSON:</h6>
                                        <p style='font-size:12px;'>1 Person.</p>
                                    </li>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>USD 718 PER PERSON:</h6>
                                        <p style='font-size:12px;'>2 – 5 People.</p>
                                    </li>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>USD 664 PER PERSON:</h6>
                                        <p style='font-size:12px;'>6 People +.</p>
                                    </li>
                                </ul>
                                <h4>Note: THE EXTRA DAY ON MT. MERU IS US$ 220 PER PERSON PER DAY!</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg); margin-top:52px;">
            <div class="slide-container swiper">
                <div class="slide-content" style='border-radius: 0 0 0 0;'>
                    <div class="swiper-wrapper">
                        <div class="col-6  swiper-slide">
                            <div>
                                <div>
                                    <figure class="special-img">
                                        <img src="assets/images/IMG/AdobeStock_243452507.jpeg" alt="">
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <div class="col-6  swiper-slide">
                            <div>
                                <div>
                                    <figure class="special-img">
                                        <img src="assets/images/tarangire/AdobeStock_408507389.jpeg" alt=""
                                            style="width: width:364.67px;height:240px;">
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <div class="col-6  swiper-slide">
                            <div>
                                <div>
                                    <figure class="special-img">
                                        <img src="assets/images/IMG/AdobeStock_276557379.jpeg" alt=""
                                            style="width: width:364.67px;height:240px;">
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-4 swiper-slide">
                            <div>
                                <div>
                                    <figure class="special-img">
                                        <img src="assets/images/IMG/AdobeStock_182156903.jpeg" alt=""
                                            style="width: width:364.67px;height:240px;">
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-4 swiper-slide">
                            <div>
                                <div>
                                    <figure class="special-img">
                                        <img src="assets/images/IMG/AdobeStock_408602907.jpeg" alt=""
                                            style="width: width:364.67px;height:240px;">
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-4 swiper-slide">
                            <div>
                                <div>
                                    <figure class="special-img">
                                        <img src="assets/images/IMG/AdobeStock_479567191.jpeg" alt=""
                                            style="width: width:364.67px;height:240px;">
                                    </figure>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6 col-lg-4 swiper-slide">
                            <div>
                                <div>
                                    <figure class="special-img">
                                        <img src="assets/images/IMG/AdobeStock_112235577.jpeg" alt=""
                                            style="width: width:364.67px;height:240px;">
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
