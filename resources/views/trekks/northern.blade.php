@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/trekks/meruNT.jpeg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Northen Circuit Trekk</h1>
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
                                8 days / 7 night
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
                                        <p>Kilimanjaro climbs Northern circuit route for 8 days climb. 
                                            This is a unique route that only visits the untouched northern slope. 
                                            Is the newest and longest trail on Mount Kilimanjaro. 

                                        </p>
                                        <p> It begins in the West of Mount Kilimanjaro at the Londorossi Gate with excellent views from all sides of the mountain, 
                                            including the quiet, rarely visited northern slopes. 
                                            The trail has less population compared to other Kilimanjaro trails.
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
                                        <h3>Program <span>( 8 days )</span></h3>
                                        <p>
                                            Our Trekking is a 8 day hiking program up Mt Kilimanjaro via Northen Circuit Route.
                                        </p>
                                    </div>
                                    <div class="itinerary-timeline-wrap">
                                        <ul>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>1</span></div>
                                                    <h4> Drive to Londorossi Park Gate (2,385m) and climbing to Mti Mkubwa Camp (2,700m):</h4>
                                                    <p> Hiking hours: 3-4 hours.
                                                        <br>Distance: 5.5km / 3.5 miles.
                                                        <br>Zone: rainforest.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>2</span></div>
                                                    <h4>Climbing from Mti Mkubwa Camp to Shira Camp 1 (3,500m):</h4>
                                                    <p>Hiking hours: 5-6 hours.
                                                        <br>Distance: 8km / 5 miles.
                                                        <br>Zone:  Low-alpine zone.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>3</span></div>
                                                    <h4>Climbing from Shira Camp 1 through Fisher camp (3,840m):</h4>
                                                    <p>Hiking hours: 3-4 hours.
                                                        <br>Distance: 8 Km or 5 miles.
                                                        <br>Zone:  Low alpine zone
                                                        <br>Then continue to North on Moir Camp (4,200 meters)
                                                        <br>Hiking hours: 4-5 hours.
                                                        <br>Distance: 14 Km or 8 miles.
                                                        <br>Zone: High alpine zone.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>4</span></div>
                                                    <h4>Climbing from Moir Camp (4,200m) to Buffalo Camp:</h4>
                                                    <p>Hiking hours: 5-7 hours.
                                                        <br>Distance: 12 Km or 7 miles.
                                                        <br>Zone: High alpine zone.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>5</span></div>
                                                    <h4>Buffalo Camp (4,020m) to Rongai Third Cave (3,800m):</h4>
                                                    <p>Hiking hours: 6 hours.
                                                        <br>Distance: 8 Km or 5 miles.
                                                        <br>Zone: High alpine zone and low alpine zone.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>6</span></div>
                                                    <h4>Climbing 3rd Cave (3,800m) to School Hut:</h4>
                                                    <p>Hiking hours: 5 hours.
                                                        <br>Distance: 15 Km or 8 miles.
                                                        <br>Zone: High alpine zone and low alpine zone.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>6</span></div>
                                                    <h4>School Hut (4,800m) to Uhuru Peak (5,895m) then to Millennium Camp (3,950m):</h4>
                                                    <p>Hiking hours: 7 hours.
                                                        <br>Distance: Ascent distance 6 Km or 3.5 miles – descent distance 10.5 Km or 6 miles.
                                                        <br>Zone: High alpine zone and low alpine zone.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>6</span></div>
                                                    <h4>Millennium Camp (3,950m) to Mweka Gate (1,640m):</h4>
                                                    <p>Transfer to at Park View Inn for certificate and summit party ceremony
                                                        <br>Hiking hours: 5 hours.
                                                        <br>Distance: 10 Km or 6.5 miles.
                                                        <br>Zone: Rainforest zone.
                                                    </p>
                                                </div>
                                            </li>
                                            <h4>Next Day: Transfer to airport</h4>
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
                                        <h6 style='font-size:14px; font-weight:bold;'>13+</h6>
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
