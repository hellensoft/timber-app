@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/trekks/meruNT.jpeg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Momela Trekk</h1>
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
                                4 days / 3 night
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
                                        <b>Mount Meru 4 Days Trekking:</b>
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
                                            The town of Arusha lies at the base of Mount Meru Trekking, loads of trekk
                                            companies do
                                            this trekk.
                                            Wild animals are frequently found on this mountain, therefore,
                                            an armed ranger usually accompanies the trekkers.
                                        </p>
                                        <p>Upon Arrival you will meet and greet with one of our office representatives at
                                            Kilimanjaro
                                            or Arusha Airport or from the shuttle bus shuttle terminal and
                                            he will drive to the Lodge/Hotel where your safari start and stays with bed &
                                            breakfast.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                                    <div class="itinerary-content">
                                        <h3>Program <span>( 4 days )</span></h3>
                                        <p>
                                            Our Trekking is a 4 day hiking program up Mt Meru.
                                        </p>
                                    </div>
                                    <div class="itinerary-timeline-wrap">
                                        <ul>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>1</span></div>
                                                    <h4>Momella Gate – Miriakamba Hut:</h4>
                                                    <p>You will be picked up from your Lodge/Hotel at 8:00 am.
                                                        After driving from Arusha we start from the Momela Gate (1,500m) in
                                                        the late
                                                        morning,
                                                        the tracks soon pass some open grassland, and have some game
                                                        viewing. You
                                                        can see Buffalo, warthog, and Elephants, etc.
                                                        and then continue as a steady climb through montage forest. You can
                                                        have
                                                        your lunch at the famous “Fig tree”.
                                                        After lunch, the trek continues through less dense forest, where
                                                        there are a
                                                        lot of birds and monkeys including the black and white colobus.
                                                        By mid afternoon, there are the first closer views of the towering
                                                        cliffs
                                                        and the Ash Cone.
                                                        Miriakamba Hut (2,514m) situated in the idyllic grassy glade, is
                                                        reached in
                                                        time to enjoy the last of the afternoon sun and beautiful views
                                                        over the surrounding plains towards Kilimanjaro. It takes about 4 to
                                                        6 hours
                                                        walking. Ascent is 1,014m.
                                                        Dinner and overnight at Miriakamba Hut.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>2</span></div>
                                                    <h4>Miriakamba Hut – Saddle Hut:</h4>
                                                    <p>The walk from Miriakamba Hut to the saddle below Little Meru is a
                                                        short day
                                                        but a steep sustained climb all the way.
                                                        Starting through attractive, open and lush montage forest,
                                                        the path continues beyond the halfway point of Elephant ridge and
                                                        carries on
                                                        uphill through the giant
                                                        heather and other moorland vegetation to reach Saddle Hut (3,570m)
                                                        and
                                                        lunch. The afternoon is free to rest and enjoy the views.
                                                        For energetic ones, can make the short climb to the nearby summit of
                                                        LITTLE
                                                        MERU (3,820m) for superb views just before sunset.
                                                        It takes about 3-5 hours of walking. The ascent is 1,056m.
                                                        Saddle Hut is similar to Miriakamba but water is collected from a
                                                        stream
                                                        about 10 minutes away;
                                                        dinner and overnight at Saddle Hut.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>3</span></div>
                                                    <h4>Saddle Hut – Summit – Miriakamba:</h4>
                                                    <p>An early start at around 0200 hrs to climb steeply to Rhino Point
                                                        (3,800m)
                                                        the path continues along an undulating ridge of ash and rock to
                                                        reach Cobra
                                                        Point (4,350m) at around sunrise.
                                                        The views are stunning: the cliffs of the crater rim, the Ash Cone
                                                        rising
                                                        from the crater floor,
                                                        Kilimanjaro floating on the morning clouds, and the Rift Valley if
                                                        the
                                                        weather is clear.
                                                        The summit of Socialist Park (4,566m) is an hour more on a superb
                                                        but often
                                                        steep path.
                                                        The route back to Rhino Point in the sharp morning light along a
                                                        narrow
                                                        ridge between
                                                        the sloping outer wall of the crater and the sheer cliffs of the
                                                        inner wall
                                                        is one of
                                                        the most dramatic and exhilarating walks in Africa.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>4</span></div>
                                                    <h4>Miriakamba Hut – Momella Gate – Arusha:</h4>
                                                    <p>A fast descent through open grassland and mixed forest, with good
                                                        chances of
                                                        seeing wildlife.
                                                        This trail has excellent views back towards the crater and over the
                                                        plains
                                                        of the National Park.
                                                        Momela Gate is reached by late morning. It takes about 2 to 3 hours
                                                        walking.
                                                        Descent 1,014m,
                                                        then you will meet your driver and we return back to Arusha and
                                                        dropped at
                                                        your Lodge/Hotel.
                                                        End of trekking.
                                                    </p>
                                                </div>
                                            </li>
                                            <h4>Note: The last night Hotel/Lodge accommodation can be arranged with an
                                                additional
                                                cost!</h4>
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
