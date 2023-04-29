@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')


    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/imgs/Tembo.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Sharma Tour</h1>
                    </div>
                </div>
            </div>
            <div class="inner-shape"></div>
        </section>
        <!-- Inner Banner html end-->
        <div class="single-tour-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-tour-inner">
                            <h2>Experience Adventure</h2>
                            <figure class="feature-image">
                                <img src="assets/images/IMG/AdobeStock_408988775.jpeg" alt="">
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
                            <div class="tab-container">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                            role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="program-tab" data-toggle="tab" href="#program"
                                            role="tab" aria-controls="program" aria-selected="false">PROGRAM</a>
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

                                            <p>The tour has been designed to include:</p>
                                            <ul style='color:#1D293F'>
                                                <li><b>- Tarangire National Park: </b>
                                                    <p> The Tarangire National Park is reputed to contain some of the
                                                        largest elephant herds in Africa.
                                                        This African National Park is also home to three rare species of
                                                        animals the Greater Kudu, the Fringed-eared Oryx,
                                                        as well as a few Ashy Starlings. </p>
                                                    <p> A very scenic soda Lake found on the Southern border of the
                                                        Ngorongoro Conservation Area.
                                                        This less visited lake lies at the base of the Eyasi escarpment on
                                                        the Western Rift Valley Wall.
                                                        Some wildlife and a wide range of bird species can be viewed during
                                                        walks around the lake, which can be arranged.
                                                    </p>
                                                    <p>you will be introduced to an indigenous tribe known as the ‘Hadzabee’
                                                        (hunter-gatherer Bushmen) and the Nilotic-speaking Datoga tribe.
                                                    </p>
                                                </li>
                                                <li><b>- The Ngorongoro crater: </b>
                                                    <p>Located 180KM from Arusha of Tanzania</p>
                                                    <p>The crater formed when a large volcano exploded and collapsed two to
                                                        three million years ago, and now a home for more than 25,000 species
                                                        of large animals.</p>
                                                    <p>Ngorongoro Crater supports a vast variety of animals, which includes
                                                        herds of Wildebeests, Zebras, Buffalos
                                                        , Elands, Warthogs, Hippos, and giant African Elephants.
                                                    </p>
                                                    <p>The Crater also consists of a dense population of predators, which
                                                        include lions, hyenas, jackals, cheetahs
                                                        and the ever-elusive leopard.
                                                    </p>
                                                </li>
                                                <li><b>- Lake Manyara National Park: </b>
                                                    <p>One of Tanzania’s most dramatically located wildlife areas,
                                                        consisting of a massive but shallow soda lake (covering two-thirds
                                                        of the park),
                                                        located at the foot of the Great Rift Valley’s western escarpment.
                                                    </p>
                                                    <p>The Park’s varied habitat attracts a wide variety of animals,
                                                        including one of Africa’s largest concentrations of Elephants;
                                                        Lake Manyara is unique for a Tree-climbing Lions, as well as large
                                                        flocks of Flamingos attracted by the algae in the lake.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                                        <div class="itinerary-content">
                                            <h3>Program <span>( 3 days )</span></h3>
                                            <p>
                                                Our Safari includes Tarangire, Ngorongoro Crater, Lake Manyara.
                                            </p>
                                        </div>
                                        <div class="itinerary-timeline-wrap">
                                            <ul>
                                                <li>
                                                    <div class="timeline-content">
                                                        <div class="day-count">Day <span>1</span></div>
                                                        <h4>Arusha – Tarangire National Park</h4>
                                                        <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                                            time: 2 ½ hours; Distance (152.7km).</h5>
                                                        <p>You will meet our professional driver tour guide at your hotel,
                                                            who will deliver a short safari info briefing.
                                                            After your breakfast and then we drive to Tarangire National
                                                            Park for game viewing.
                                                            The Park runs along the line of the Tarangire River and is
                                                            mainly made up of low-lying hills on the Great Rift Valley
                                                            floor.
                                                            containing three rare species of animals the Greater Kudu,
                                                            the Fringed-eared Oryx, as well as a few Ashy Starlings.
                                                            Dinner and overnight at the Lodge/Tented Camp/Hotel/Basic
                                                            Camp/Luxury.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-content">
                                                        <div class="day-count">Day <span>2</span></div>
                                                        <h4>Ngorongoro Crater – Lake Manyara</h4>
                                                        <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                                            time: 2 hours; Distance (60km & 155 km).</h5>
                                                        <p>Our day we start very early in the morning equipped with a picnic
                                                            lunch we descend 2000 ft.
                                                            down to the Crater floor by our 4×4 wheel drive vehicle for game
                                                            viewing. Let’s explore this Garden of Eden.
                                                            Ngorongoro is a huge and deep volcanic Crater. There’s rich
                                                            pasture, swamps, forest and permanent water on the Crater floor
                                                            that’s why wildlife here is so diverse and numerous. There are
                                                            up to 25.000 larger animals living here.
                                                            It’d the best opportunity to see black Rhino and many other rare
                                                            species like the black-manned lion.
                                                            We will have a fantastic day and you will see wildlife at its
                                                            best.
                                                            Late afternoon we drive back to the Lodge/Tented
                                                            Camp/Hotel/Basic Camp/Luxury stays for dinner and overnight.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-content">
                                                        <div class="day-count">Day <span>3</span></div>
                                                        <h4>Lake Manyara Tour – Arusha</h4>
                                                        <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                                            time: 2 hours; Distance (130.7 km).</h5>
                                                        <p>After your breakfast, and then we drive to Lake Manyara National
                                                            Park.
                                                            This impressive National Park is one of Tanzania’s most
                                                            dramatically located wildlife areas,
                                                            consisting of a massive but shallow soda lake (covering
                                                            two-thirds of the park)
                                                            at the foot of the Great Rift Valley’s Western escarpment.
                                                            The Park’s varied habitat attracts a wide variety of animals,
                                                            including one of Africa’s largest concentrations of Elephants;
                                                            Manyara is famous for Tree-climbing lions, as well as large
                                                            flocks of flamingos attracted by the algae in the lake.
                                                            Late afternoon we return back to Arusha town and you will be
                                                            dropped at your Lodge/Hotel. End of tour.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                        <div class="experience-content">
                                            <h5>TOUR PRICES INCLUDE:</h5>
                                            <ul style='color:#1D293F'>
                                                <li>- All Park entry fees – All Park Camping fees. </li>
                                                <li>- Pick up from the Airport. </li>
                                                <li>- Transport 4×4 Toyota Land Cruiser with pop up roof with driver cum
                                                    guide. </li>
                                                <li>- Overnight at the Hotels/Lodge/Tented Camps/Campsites according to the
                                                    program. </li>
                                                <li>- Chef/Meals as per the above itinerary. </li>
                                                <li>- Complimentary bottled of drinking water 1.5 litter per person per day
                                                    during on safari. </li>
                                                <li>- 1-night free Hotel accommodation on your arrival in Arusha with bed &
                                                    breakfast. </li>
                                                <li>- Tents/Sleeping mats/Sleeping bags/Chairs/Table/Pillow. </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="requirement" role="tabpanel"
                                        aria-labelledby="requirement-tab">
                                        <div class="requirement-content">
                                            <h5 style='font-weight: 900'>TOUR PRICES DOES NOT INCLUDE:</h5>
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
                            <div class="single-tour-gallery">
                                <h3>GALLERY / PHOTOS</h3>
                                <div class="single-tour-slider">
                                    <div class="single-tour-item">
                                        <figure class="feature-image">
                                            <img src="assets/images/img28.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="single-tour-item">
                                        <figure class="feature-image">
                                            <img src="assets/images/img29.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="single-tour-item">
                                        <figure class="feature-image">
                                            <img src="assets/images/img32.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="single-tour-item">
                                        <figure class="feature-image">
                                            <img src="assets/images/img33.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="package-price">
                                <h5 class="price">
                                    <span>$750</span> / per person
                                </h5>
                            </div>
                            <div class="widget-bg booking-form-wrap">
                                <h4 class="bg-title">Booking</h4>
                                <form class="booking-form">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input name="name_booking" type="text" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input name="email_booking" type="text" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input name="phone_booking" type="text" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input class="input-date-picker" type="text" name="s"
                                                    autocomplete="off" readonly="readonly" placeholder="Date">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group submit-btn">
                                                <input type="submit" name="submit" value="Book Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="widget-bg information-content text-center">
                                <h5>Guide Information</h5>
                                <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>
                                <ul style='color:#1D293F;' class='text-left'>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>Budget Accommodation:</h6>
                                        <p style='font-size:12px;'>Accommodation usually located outside the National Park,
                                            using affordable a 1-2 star Hotel, Lodges or Camps.</p>
                                    </li>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>Mid-range Accommodation:</h6>
                                        <p style='font-size:12px;'>Safari using the medium to large – scale Lodges, tented
                                            camps or Cottage Camps, comparable to a 3-star Hotel.</p>
                                    </li>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>Luxury – Accommodation:</h6>
                                        <p style='font-size:12px;'>Safari using deluxe tented camps or Lodge usually
                                            located inside the National Park and comparable to a 4-star hotel.
                                            Accommodation is usually located inside the Park.</p>
                                    </li>
                                    <li>
                                        <h6 style='font-size:14px; font-weight:bold;'>Luxury+ – Accommodation:</h6>
                                        <p style='font-size:12px;'>Safari using extremely luxurious tented camps or Lodge,
                                            usually located in a private wildlife – Viewing area and comparable to a 5-star
                                            Hotel. Expect great food, excellent service, top – quality guiding and gorgeous
                                            tents or rooms. Most luxury + properties charge around USD$ 850 to 1850 per
                                            person per day!.</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg);">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ URL::to('tetema') }}">
                                        <img src="assets/images/IMG/AdobeStock_408988775.jpeg" alt=""
                                            style='border-radius: 25px 25px 0 0;'>
                                    </a>
                                </figure>
                                <div class="package-price">
                                    <h6 style="font-size: 12px;">
                                        <span style="font-size: 14px;">$1,820 </span> / per person
                                    </h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                8 Days/7 Nights
                                            </li>

                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Tanzania
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content">
                                        <h3>
                                            <a href="{{ URL::to('tetema') }}">Tetema Tour</a>
                                        </h3>
                                        <p>Manyara | Lake Eyasi | Ngorongoro | Serengeti | Visit Village.</p>
                                        <div class="btn-wrap">
                                            <a href="{{ URL::to('tetema') }}" class="button-text width-6">Read More<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ URL::to('pamoja') }}">
                                        <img src="assets/images/IMG/AdobeStock_378623266.jpeg" alt=""
                                            style='border-radius: 25px 25px 0 0;'>
                                    </a>
                                </figure>
                                <div class="package-price">
                                    <h6 style="font-size: 12px;">
                                        <span style="font-size: 14px;">$1,820 </span> / per person
                                    </h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                7 Days/6 Nights
                                            </li>

                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Tanzania
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content">
                                        <h3>
                                            <a href="{{ URL::to('pamoja') }}">Pamoja Tour</a>
                                        </h3>
                                        <p>Manyara | Lake Eyasi | Ngorongoro | Serengeti.</p>
                                        <div class="btn-wrap">
                                            <a href="{{ URL::to('pamoja') }}" class="button-text width-6">Read More<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- kadi tamu balaa --}}
                        <div class="card swiper-slide">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ URL::to('rose') }}">
                                        <img src="assets/images/IMG/AdobeStock_199768813.jpeg" alt=""
                                            style='border-radius: 25px 25px 0 0;'>
                                    </a>
                                </figure>
                                <div class="package-price">
                                    <h6 style="font-size: 12px;">
                                        <span style="font-size: 14px;">$1,560 </span> / per person
                                    </h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                6 Days/5 Nights
                                            </li>

                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Tanzania
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content">
                                        <h3>
                                            <a href="{{ URL::to('rose') }}">Rose Tour</a>
                                        </h3>
                                        <p>Tarangire | Lake Manyara | Serengeti | Ngorongoro Crater.</p>
                                        <div class="btn-wrap">
                                            <a href="{{ URL::to('rose') }}" class="button-text width-6">Read More<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- kadi tamu balaa inaishia --}}
                        <div class="card swiper-slide">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ URL::to('ansi') }}">
                                        <img src="assets/images/IMG/AdobeStock_464915831.jpeg" alt=""
                                            style='border-radius: 25px 25px 0 0;'>
                                    </a>
                                </figure>
                                <div class="package-price">
                                    <h6 style="font-size: 12px;">
                                        <span style="font-size: 14px;">$1,300 </span> / per person
                                    </h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                5 Days/4 Nights
                                            </li>

                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Tanzania
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content">
                                        <h3>
                                            <a href="{{ URL::to('ansi') }}">Ansi Tour</a>
                                        </h3>
                                        <p>Lake Manyara | Serengeti | Ngorongoro Crater.</p>
                                        <div class="btn-wrap">
                                            <a href="{{ URL::to('ansi') }}" class="button-text width-6">Read More<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ URL::to('lina') }}">
                                        <img src="assets/images/IMG/africa-g89468b3c2_1920.jpg" alt=""
                                            style='border-radius: 25px 25px 0 0;'>
                                    </a>
                                </figure>
                                <div class="package-price">
                                    <h6 style="font-size: 12px;">
                                        <span style="font-size: 14px;">$1,040 </span> / per person
                                    </h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                4 Days/3 Nights
                                            </li>

                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Tanzania
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content">
                                        <h3>
                                            <a href="{{ URL::to('lina') }}">Lina Tour</a>
                                        </h3>
                                        <p>Lake Manyara | Serengeti | Ngorongoro Crater.</p>
                                        <div class="btn-wrap">
                                            <a href="{{ URL::to('lina') }}" class="button-text width-6">Read More<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
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
        <!-- subscribe html end -->
    </main>





@endsection
