@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/trekks/meruNT.jpeg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Rongai Trekk</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <div class="single-page-section">
            <div class="container">
                {{-- <figure class="single-feature-img">
                    <img src="assets/images/IMG/AdobeStock_290748484.jpeg" alt="">
                </figure> --}}
                <figure class="feature-image">
                    <img src="assets/images/IMG/AdobeStock_290748484.jpeg" alt="">
                    <div class="package-meta text-center">
                        <ul>
                            <li>
                                <i class="far fa-clock"></i>
                                6 days / 5 night
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
                                        <b>Mount Kilimanjaro Rongai Route Trekking:</b>
                                        <p>Rongai Route begins on the Northern side of Mount Kilimanjaro. 
                                            It is a long drive to the starting point from Moshi town, 
                                            but you are rewarded by fantastic views and sometimes you will be the only climbers around; 
                                        </p>
                                        <p> Rongai route reviews. If you take this route up the mountain, you are obliged by park rules to 
                                            descend via the Marangu Route on the South side of the mountain, therefore climbers see the mountain from many views point, 
                                            which is the most popular and well-used route.
                                        </p>
                                        <br>
                                        <br>
                                        <p>Arrive in Tanzania via Kilimanjaro International airport (JRO) Our staff will pick you up and transfer to Moshi town 
                                            where you will spend the first night at a hotel. 
                                            For those who will arrive through Jomo Kenyatta International Airport (JKA) in Kenya, 
                                            we will get them picked up and transferred by Riverside Shuttle Bus to Moshi.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                                    <div class="itinerary-content">
                                        <h3>Program <span>( 6 days )</span></h3>
                                        <p>
                                            Our Trekking is a 6 day hiking program up Mt Kilimanjaro via Rongai Route.
                                        </p>
                                    </div>
                                    <div class="itinerary-timeline-wrap">
                                        <ul>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>1</span></div>
                                                    <h4>Drive to Rongai Gate (2000m) and climbing to Simba Camp (2600m):</h4>
                                                    <p>After breakfast at the hotel, you will drive to the Rongai (Nalemoru) gate near the Kenya border. 
                                                        We begin our climb on this unspoiled wilderness route. 
                                                        The walk then starts to climb consistently, but gently through attractive forest that shelters a variety of wildlife. 
                                                        The forest begins to thin out and the first camp is at the edge of the moorland zone (2600 m.) 
                                                        with extensive views over the Kenyan plains.
                                                        <br>
                                                        <br>
                                                        The first day is only a half-day walk.
                                                        <br>Walking Time: 3-4 hours forest.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>2</span></div>
                                                    <h4>Climbing from Simba Camp to Second Cave (3600m):</h4>
                                                    <p>In the morning the journey towards Kibo will resume. 
                                                        At the second ancient cave, an appetizing hot lunch will be served. 
                                                        After lunch, we will trek through a brief section of the barren dunes of the moorland and 
                                                        continue amid the heather vegetation zone which is studded with ethereal, enormous lobelias. 
                                                        There is a high possibility of viewing the breath-taking display of the Kibo peak. 
                                                        There is also a chance that we may spot jackals and the odd buffalo – there is no need to panic as your guide accompanies you at all times.
                                                        <br>
                                                        <br>
                                                        Walking Time: 6-8 hours of walking.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>3</span></div>
                                                    <h4>Second cave to third cave (4,330m):</h4>
                                                    <p>A short but steep climb is rewarded by superb all-around views and a tangible sense of wilderness. 
                                                        We leave vegetation behind shortly before reaching the next camp at Mawenzi Tarn (4330m.), 
                                                        spectacularly situated in a cirque directly beneath the towering spires of Mawenzi. 
                                                        The afternoon will be free to rest or explore the surrounding area as an aid to acclimatization.
                                                        <br>
                                                        <br>
                                                        Zone: Low Alpine Zone
                                                        <br>
                                                        Walking Time: 3-5 hours walking
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>4</span></div>
                                                    <h4>Third Cave to Kibo hut (4730m):</h4>
                                                    <p>Hike to Kibo hut at the bottom of the Kibo crater wall. 
                                                        The remainder of the day is spent resting in preparation for the final ascent before a very early night!
                                                        <br>
                                                        <br>
                                                        Zone: High alpine zone
                                                        <br>
                                                        Walking Time: 6 hours
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>5</span></div>
                                                    <h4>Climbing to Uhuru Peak (5895m) and descend to Horombo Hut (3700m):</h4>
                                                    <p>Begin the final, and by far the steepest and most demanding, 
                                                        part of the climb by torchlight around 11:30 
                                                        Proceed very slowly in the darkness on a switchback trail through loose volcanic scree 
                                                        to reach the crater rim at Gillman’s Point (5685m,18,650ft) 
                                                        Rest there for a short time to enjoy the spectacular sunrise over Mawenzi. 
                                                        Those who are still feeling strong can make the three hour round trip to Uhuru Peak, 
                                                        passing close to the spectacular glaciers and ice cliffs that still occupy most of the summit area. 
                                                        The descent to Kibo is surprisingly fast and, after some refreshment, 
                                                        continue the descent to reach the final campsite at Horombo.
                                                        <br>
                                                        <br>
                                                        Zone: Glacial zone and the all preceding zones Summit day.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>6</span></div>
                                                    <h4>Descend from Horombo Hut to Marangu Gate (1900m):</h4>
                                                    <p>8 hours and transfer to overnight at Park View www.pvim.com Hotel
                                                        <br>
                                                        <br>
                                                        Zone: Rainforest
                                                    </p>
                                                </div>
                                            </li>
                                            <h4>Next Day: Transfer to airport or continue with safari </h4>
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
                                        <h6 style='font-size:14px; font-weight:bold;'>$ <s>2500</s> 2200</h6>
                                        <p style='font-size:12px;'>Price per Person</p>
                                    </li>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>12+</h6>
                                        <p style='font-size:12px;'>Minimum Age.</p>
                                    </li>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>9</h6>
                                        <p style='font-size:12px;'>Maximum People.</p>
                                    </li>
                                </ul>
                                {{-- <h4>Note: THE EXTRA DAY ON MT. MERU IS US$ 220 PER PERSON PER DAY!</h4> --}}
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
