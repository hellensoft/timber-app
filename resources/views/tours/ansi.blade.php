@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')


    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap" >
            <div class="inner-baner-container" style="background-image: url(assets/images/imgs/Tembo.jpg);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">Ansi Tour</h1>
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
                                <img src="assets/images/IMG/AdobeStock_464915831.jpeg" alt="">
                                <div class="package-meta text-center">
                                    <ul>
                                        <li>
                                            <i class="far fa-clock"></i>
                                            5 days / 4 night
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
                                                <li><b>- The Serengeti:</b>
                                                    <p>the meaning of the word “Serengeti,” which derives from the Masai
                                                        “Siringet” and has been artistically translated as “the land that
                                                        flows on forever”.
                                                    </p>
                                                    <p>It is one of the most famous parks in the world covering 6,000 square
                                                        miles of pristine land and the ultimate destination for game drives
                                                        or witnessing the astounding, annual Great Migration.
                                                    </p>
                                                    <p>Boundless plains punctuated with spiky acacia trees, Serengeti
                                                        kopjes, hippos, and crocodile-laden rivers,
                                                        a landscape home to the Big Five (lions, leopards, rhinos, buffalo,
                                                        and elephants)
                                                        and more than 475 bird species–it’s no wonder the Serengeti precedes
                                                        its reputation as a wildlife haven.
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
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                                        <div class="itinerary-content">
                                            <h3>Program <span>( 5 days )</span></h3>
                                            <p>
                                                Our Safari includes Lake Manyara, Serengeti, Ngorongoro Crater.
                                            </p>
                                            {{-- <p>Dolores maiores dicta dolore. Natoque placeat libero sunt sagittis debitis? Egestas non non qui quos, semper aperiam lacinia eum nam! Pede beatae. Soluta, convallis irure accusamus voluptatum ornare saepe cupidatat.</p> --}}
                                        </div>
                                        <div class="itinerary-timeline-wrap">
                                            <ul>
                                                <li>
                                                    <div class="timeline-content">
                                                        <div class="day-count">Day <span>1</span></div>
                                                        <h4>Arusha – Lake Manyara National Park</h4>
                                                        <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                                            time: 2 ½ hours; Distance (130km).</h5>
                                                        <p>You will meet our professional driver tour guide at your hotel,
                                                            who will deliver a short safari info briefing. After your
                                                            breakfast,
                                                            and then we drive to Lake Manyara National Park.
                                                            This impressive National Park is one of Tanzania’s most
                                                            dramatically located wildlife areas,
                                                            consisting of a massive but shallow soda lake (covering
                                                            two-thirds of the park) at
                                                            the foot of the Great Rift Valley’s western escarpment.
                                                            Dinner and overnight at the Lodge/Tented Camp/Hotel/Luxury/Basic
                                                            Campsite.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-content">
                                                        <div class="day-count">Day <span>2</span></div>
                                                        <h4>Lake Manyara – Serengeti National Park</h4>
                                                        <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                                            time: 6 hours; Distance (205km).</h5>
                                                        <p>After the breakfast, we depart from the Camp and driver to
                                                            Serengeti via Ngorongoro Conservation Area
                                                            and later arrive on the great Serengeti plains for a different
                                                            but just as spectacular wildlife viewing experience.
                                                            You will pass one of the world’s greatest prehistoric
                                                            archaeological sites, called Olduvai Gorge, and then continue
                                                            your way over the scrublands.
                                                            The wooded knolls around Naabi Hill Gate mark the Serengeti’s
                                                            official entrance, which then drops into the Park’s signature
                                                            wide-open plains.
                                                            Like no other, this stretch embodies the meaning of the word
                                                            “Serengeti,” which derives from the Masai “Siringet”
                                                            and has been artistically translated as “the land that flows on
                                                            forever”.
                                                            Dinner and overnight at the Lodge/Luxury/Tented Camp/Basic
                                                            Campsite.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-content">
                                                        <div class="day-count">Day <span>3</span></div>
                                                        <h4>Full day – Serengeti National Park</h4>
                                                        <p>After breakfast, you will have a full day game viewing at
                                                            Serengeti National Park.
                                                            For viewing of grassland plains, Savannah, kopjes, hills,
                                                            woodlands, and River line forests.
                                                            the heralded migration of wildebeest and zebra,
                                                            the big predators, including cheetah and Leopard,
                                                            as well as large feelings of pride of Lions and clans of
                                                            Hyenas,gazelle, Buffalo, giraffe, Topi, Hartebeest, Ostrich, and
                                                            Jackal,
                                                            but it is the full diversity of wildlife and habitats that you
                                                            will truly find amazing.
                                                            Dinner and overnight at the Lodge/Luxury/Tented Camp/Basic
                                                            Campsite.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-content">
                                                        <div class="day-count">Day <span>4</span></div>
                                                        <h4>Serengeti – Ngorongoro Crater</h4>
                                                        <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                                            time: 4 hours; Distance (145km).
                                                        </h5>
                                                        <p>Our day starts with a morning game drive central of the
                                                            Serengeti.
                                                            For animals, that’s an active time of the day – not hot yet, so
                                                            there is a lot to see out there until by 11:30am
                                                            then we return back to the Lodge/Camp for Brunch. On our way
                                                            back we will stop at Olduvai Gorge.
                                                            It’s a fascinating archaeological site we will visit if you are
                                                            interested in history and the Masai tribes.
                                                            Dinner and overnight at the Lodge/Tented Camp/Hotel/Campsite set
                                                            on the Crater rim, the Lodge/Luxury/Tented Camp/Basic Campsite
                                                            offers stunning views of Ngorongoro and the surrounding
                                                            highlands..
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-content">
                                                        <div class="day-count">Day <span>5</span></div>
                                                        <h4>Ngorongoro Crater – Arusha</h4>
                                                        <h5 style="font-size:16px; font-weight:555;">Non-game-viewing travel
                                                            time: 4 hours; Distance (190km).</h5>
                                                        <p>Our last day we start very early in the morning equipped with a
                                                            picnic lunch we descend 2000 ft.
                                                            down to the Crater floor by our 4×4 wheel drive vehicle for game
                                                            viewing. Let’s explore this Garden of Eden.
                                                            Ngorongoro is a huge and deep volcanic Crater. There’s rich
                                                            pasture, swamps, forest and permanent water on
                                                            the Crater floor that’s why wildlife here is so diverse and
                                                            numerous. There are up to 25.000 larger animals living here.
                                                            It’d the best opportunity to see black Rhino and many other rare
                                                            species like the black-maned lion.
                                                            We will have a fantastic day and you will see wildlife at its
                                                            best.
                                                            Late afternoon we drive back to Arusha and you will be dropped
                                                            at your Lodge/Hotel at your own cost.
                                                            End of tour.
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
                                    <span>$1,300</span> / per person
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
                                        <span style="font-size: 14px;">$2,080 </span> / per person
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
                        <div class="card swiper-slide">
                            <div class="package-wrap">
                                <figure class="feature-image">
                                    <a href="{{ URL::to('sharma') }}">
                                        <img src="assets/images/IMG/AdobeStock_308185098.jpeg" alt=""
                                            style='border-radius: 25px 25px 0 0;'>
                                    </a>
                                </figure>
                                <div class="package-price">
                                    <h6 style="font-size: 12px;">
                                        <span style="font-size: 14px;">$750 </span> / per person
                                    </h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                3 Days/2 Nights
                                            </li>

                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Tanzania
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content">
                                        <h3>
                                            <a href="{{ URL::to('sharma') }}">Sharma Tour</a>
                                        </h3>
                                        <p>Lake Manyara | Serengeti | Ngorongoro Crater.</p>
                                        <div class="btn-wrap">
                                            <a href="{{ URL::to('sharma') }}" class="button-text width-6">Read More<i
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
