@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

    <body class="home">
        
        <div id="page" class="full-page">

            <main id="content" class="site-main">
                <!-- Home slider html start -->
                <section class="home-slider-section">
                    <div class="home-slider">

                        <div class="home-banner-items ">
                            <div class="banner-inner-wrap lazy" style="background-image: url(assets/images/slider/mc.jpeg);"></div>
                            <div class="banner-content-wrap">
                                <div class="container">
                                    <div class="banner-content text-center">
                                        <h2 class="banner-title">Timberwolf Adventure Tours</h2>
                                        <p>Meet experienced travel consultants in Tanzania with assured best travelling options at affordable prices.</p>
                                        <a href="#" class="button-primary">GET STARTED <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <div class="home-banner-items ">
                            <div class="banner-inner-wrap" style="background-image: url(assets/images/slider/potching.jpeg);"></div>
                            <div class="banner-content-wrap">
                                <div class="container">
                                    <div class="banner-content text-center">
                                        <h2 class="banner-title">Experience the Nature's of Beauty</h2>
                                        <p>Our company offers a wide range of nature-focused experiences that allow you to experience the beauty of the great outdoors like never before. </p>
                                        <a href="{{URL::to('about')}}" class="button-primary">LEARN MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <div class="home-banner-items ">
                            <div class="banner-inner-wrap" style="background-image: url(assets/images/slider/tourguid.jpg);"></div>
                            <div class="banner-content-wrap">
                                <div class="container">
                                    <div class="banner-content text-center">
                                        <h2 class="banner-title">Experienced Tour Guiders</h2>
                                        <p>Our company offers a wide range of nature-focused experiences that allow you to experience the beauty of the great outdoors like never before. </p>
                                        <a href="{{URL::to('about')}}" class="button-primary">LEARN MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay"></div>
                        </div>

                    </div>
                </section>
                <!-- slider html start -->
                <!-- Home search field html start -->
                <div class="trip-search-section shape-search-section">
                    <div class="slider-shape"></div>
                    <div class="container">
                       
                    </div>
                </div>
                <!-- search search field html end -->
                <section class="destination-section" style="padding-bottom: 51px">
                    <div class="container">
                        <div class="section-heading">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <h5 class="dash-style">Adventures Calling You</h5>
                                    <h2 style="font-size: 35px ">Kilimanjaro safari & adventures</h2>
                                    <div class="section-disc" style="color: black;">
                                        <br>
                                        <p>Timber Wolf Adventure is a Tanzanian based Tour Operator located in Arusha.
                                            We specialize in both Treks and Safari to all Tanzania destinations
                                            and we offer you the unique opportunity to climb Mt. Kilimanjaro and
                                            to explore the African plains with an experienced native team that
                                            offers top quality large tour operator service and safety at local
                                            tour operator prices
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </section>
                <!-- tour packages section html start -->
                <section class="package-section" style='padding-bottom: 50px;'>
                    <div class="container">
                        <div class="section-heading text-center">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                                    <h2>OUR POPULAR TOURS</h2>
                                    <p>Here are our Tanzania safari tours presented by popularity and demand.
                                        Whether you’re still snooping around for information or your heart’s set out for the
                                        Great Migration Safari; or feel like conquering Mount Kilimanjaro,
                                        we’ve narrowed them into categories to help you choose!

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="package-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image ">
                                            <a href="{{ URL::to('tetema') }}">
                                                <img src="assets/images/IMG/AdobeStock_408988775.jpeg" class="lazy" alt="">
                                            </a>
                                        </figure>
                                        <div class="package-price">
                                            <h6>
                                                <span>$2,080 </span> / per person
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
                                                    <a href="{{ URL::to('tetema') }}" class="button-text width-6">Read
                                                        More<i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image ">
                                            <a href="{{ URL::to('pamoja') }}">
                                                <img src="assets/images/popular_tour/chuichui.jpg" class="lazy" alt="">
                                            </a>
                                        </figure>
                                        <div class="package-price">
                                            <h6>
                                                <span>$1,820 </span> / per person
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
                                                    <a href="{{ URL::to('pamoja') }}" class="button-text width-6">Read
                                                        More<i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image ">
                                            <a href="{{ URL::to('rose') }}">
                                                <img src="assets/images/popular_tour/Nyati.jpg" class="lazy" alt="">
                                            </a>
                                        </figure>
                                        <div class="package-price">
                                            <h6>
                                                <span>$1,560 </span> / per person
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
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image ">
                                            <a href="{{ URL::to('ansi') }}">
                                                <img src="assets/images/IMG/AdobeStock_464915831.jpeg" class="lazy" alt="">
                                            </a>
                                        </figure>
                                        <div class="package-price">
                                            <h6>
                                                <span>$1,300 </span> / per person
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
                                                    <a href="{{ URL::to('ansi') }}" class="button-text width-6">Read
                                                        More<i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image ">
                                            <a href="{{ URL::to('lina') }}">
                                                <img src="assets/images/popular_tour/boko.jpg" class="lazy" alt="">
                                            </a>
                                        </figure>
                                        <div class="package-price">
                                            <h6>
                                                <span>$1,040 </span> / per person
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
                                                    <a href="{{ URL::to('lina') }}" class="button-text width-6">Read
                                                        More<i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-wrap">
                                        <figure class="feature-image ">
                                            <a href="{{ URL::to('sharma') }}">
                                                <img src="assets/images/IMG/AdobeStock_308185098.jpeg" class="lazy" alt="">
                                            </a>
                                        </figure>
                                        <div class="package-price">
                                            <h6>
                                                <span>$750 </span> / per person
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
                                                    <a href="{{ URL::to('sharma') }}" class="button-text width-6">Read
                                                        More<i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="btn-wrap text-center">
                        <a href="#" class="button-primary">VIEW ALL PACKAGES</a>
                     </div> --}}
                        </div>
                    </div>
                </section>
                <!-- tour packages html end -->

                <!-- trips packages section html start -->
                <section class="package-section bg-light-grey" style='padding-bottom: 150px;'>
                    <div class="container">
                        <div class="section-heading text-center">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <h5 class="dash-style">EXPLORE GREAT ADVENTURES</h5>
                                    <h2>POPULAR DESTINATIONs</h2>
                                    <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="package-inner package-inner-list">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="package-wrap package-wrap-list">
                                        <figure class="feature-image ">
                                            <a href="{{ URL::to('tarangire') }}">
                                                <img src="assets/images/IMG/AdobeStock_472172349.jpeg" class="lazy" alt="">
                                            </a>

                                        </figure>
                                        <div class="package-content">
                                            <h3>
                                                <a href="{{ URL::to('tarangire') }}">Tarangire National Park</a>
                                            </h3>
                                            <br>
                                            <p>It is the sixth largest national park in Tanzania, located in Manyara Region.
                                                Covering an area of approximately 2,850 sq. km (1,100 sq. miles).</p>
                                            <div class="btn-wrap">
                                                <a href="{{ URL::to('tarangire') }}" class="button-text width-6">Read More<i
                                                        class="fas fa-arrow-right"></i></a>
                                                {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="package-wrap package-wrap-list">
                                        <figure class="feature-image">
                                            <a href="{{ URL::to('manyara') }}">
                                                <img src="assets/images/IMG/AdobeStock_169944206.jpeg" class="lazy" alt="">
                                            </a>

                                        </figure>
                                        <div class="package-content">
                                            <h3>
                                                <a href="{{ URL::to('manyara') }}">Manyara National Park</a>
                                            </h3>
                                            <br>
                                            <p>Located in both Arusha Region and Manyara Region, Tanzania. The park consists
                                                of 330 sq. km (127 sq. miles) of arid land, forest, and a soda-lake land.
                                            </p>
                                            <div class="btn-wrap">
                                                <a href="{{ URL::to('manyara') }}" class="button-text width-6">Read More<i
                                                        class="fas fa-arrow-right"></i></a>
                                                {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="package-wrap package-wrap-list">
                                        <figure class="feature-image">
                                            <a href="{{ URL::to('arusha') }}">
                                                <img src="assets/images/IMG/AdobeStock_383011165.jpeg" class="lazy" alt="">
                                            </a>

                                        </figure>
                                        <div class="package-content">
                                            <h3>
                                                <a href="{{ URL::to('arusha') }}">Arusha National Park</a>
                                            </h3>
                                            <br>
                                            <p>The only place on the northern safari circuit where the acrobatic
                                                black-and-white colobus monkeys are easily seen, Arusha national park is a
                                                multi faceted jewel.</p>
                                            <div class="btn-wrap">
                                                <a href="{{ URL::to('arusha') }}" class="button-text width-6">Read More<i
                                                        class="fas fa-arrow-right"></i></a>
                                                {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="package-wrap package-wrap-list">
                                        <figure class="feature-image">
                                            <a href="{{ URL::to('ngorongoro') }}">
                                                <img src="assets/images/IMG/AdobeStock_413497289.jpeg" class="lazy" alt=""
                                                    style='height:416px;'>
                                            </a>

                                        </figure>
                                        <div class="package-content">
                                            <h3>
                                                <a href="{{ URL::to('ngorongoro') }}">Ngorongoro National Park</a>
                                            </h3>
                                            <br>
                                            <p>The area is named after Ngorongoro Crater, a large volcanic caldera within
                                                the area. It is located 180 km (110 mi) west of Arusha in the Crater
                                                Highlands area of Tanzania.</p>
                                            <div class="btn-wrap">
                                                <a href="{{ URL::to('ngorongoro') }}" class="button-text width-6">Read More<i
                                                        class="fas fa-arrow-right"></i></a>
                                                {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- trips packages html end -->

              

                <!-- about us section html start -->
                <section class="home-about-section" style='padding-bottom: 150px; padding-top: 50px;'>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="about-img-wrap">
                                    <div class="about-img-left">
                                        <div class="about-content secondary-bg d-flex flex-wrap">
                                            <h3>Timber Wolf Adventures</h3>
                                            <a class="button-primary" style='color: #fffff'>LEARN MORE</a>
                                        </div>
                                        <div class="about-img">
                                            <img src="assets/images/IMG/AdobeStock_335475536.jpeg" class="lazy" alt=""
                                                style='height:343px; width:274px;'>
                                        </div>
                                    </div>
                                    <div class="about-img-right">
                                        <div class="about-img">
                                            <img src="assets/images/get.jpeg" class="lazy" alt=""
                                                style='height:260px; width:358px;'>
                                        </div>
                                        <div class="about-img">
                                            <img src="assets/images/IMG/AdobeStock_181402245_new.gif" class="lazy"
                                                style='height:300px; width:358px;' alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="banner-content section-heading">
                                    <h5>Adventures Calling You</h5>
                                    <h2 class="banner-title">MAKE THE BEST OF YOUR HOLIDAY</h2>
                                    <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                                    <p>Timber Wolf Adventure is a Tanzanian based Tour Operator located in Arusha. Specializing in both Treks and Safari to all Tanzania destinations.</p>
                                </div>
                                <div class="about-service-container">
                                    <div class="about-service">
                                        <div class="about-service-icon">
                                            <img src="assets/images/icon15.png" class="lazy" alt="">
                                        </div>
                                        <div class="about-service-content">
                                            <h4>EXPERTS ON TOURS</h4>
                                            <p>Experienced Guides and Drivers with expert knowledge about Africa, nature,
                                                and wildlife.</p>
                                        </div>
                                    </div>
                                    <div class="about-service">
                                        <div class="about-service-icon">
                                            <img src="assets/images/icon16.png" class="lazy" alt="">
                                        </div>
                                        <div class="about-service-content">
                                            <h4>QUALITY ACCOMODATIONS</h4>
                                            <p>Luxury Hotels/Camps/Lodges will be arranged for you.You will be provided with
                                                quality services.</p>
                                        </div>
                                    </div>
                                    <div class="about-service">
                                        <div class="about-service-icon">
                                            <img src="assets/images/icon17.png" class="lazy" alt="">
                                        </div>
                                        <div class="about-service-content">
                                            <h4>COMFORTABLE TRANSPORT</h4>
                                            <p>Good condition Luxury Landcruiser 4x4 will be provided for your safari and
                                                Game drive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- callback html end -->
                <!-- Home activity section html start -->
                <section class="activity-section activity-bg-image"
                    style="background-image: url(assets/images/imgs/Tembo.jpg);padding-bottom: 150px;"  class="lazy">
                    <div class="container">
                        <div class="section-heading section-heading-white text-center">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <h5 class="dash-style">YOUR ADVENTURES AWAITS</h5>
                                    <h2>ADVENTURES & ACTIVITIES</h2>
                                    <p>No matter what type of adventure or activity you choose, the most important thing is to have fun and stay safe!</p>
                                    <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="activity-inner row">
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <a href="#">
                                            <img src="assets/images/img44.png"  class="lazy" alt="">
                                        </a>
                                    </div>
                                    <div class="activity-content">
                                        <h4>
                                            <a href="#">Mountain Trekking</a>
                                        </h4>
                                        {{-- <p style="color: #ffffff">15 Destination</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <a href="#">
                                            <img src="assets/images/img45.png" class="lazy" alt="">
                                        </a>
                                    </div>
                                    <div class="activity-content">
                                        <h4>
                                            <a href="#">Adventures</a>
                                        </h4>
                                        {{-- <p style="color: #ffffff">12 Destination</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <a href="#">
                                            <img src="assets/images/img46.png" class="lazy" alt="">
                                        </a>
                                    </div>
                                    <div class="activity-content">
                                        <h4>
                                            <a href="#">Camp Fire</a>
                                        </h4>
                                        {{-- <p style="color: #ffffff">7 Destination</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <a href="#">
                                            <img src="assets/images/img47.png" class="lazy" alt="">
                                        </a>
                                    </div>
                                    <div class="activity-content">
                                        <h4>
                                            <a href="#">Team Sports</a>
                                        </h4>
                                        {{-- <p style="color: #ffffff">15 Destination</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <a href="#">
                                            <img src="assets/images/img48.png" class="lazy" alt="">
                                        </a>
                                    </div>
                                    <div class="activity-content">
                                        <h4>
                                            <a href="#">Culture Activities</a>
                                        </h4>
                                        {{-- <p style="color: #ffffff">13 Destination</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <a href="#">
                                            <img src="assets/images/img49.png" class="lazy" alt="">
                                        </a>
                                    </div>
                                    <div class="activity-content">
                                        <h4>
                                            <a href="#">Creative Pursuit</a>
                                        </h4>
                                        {{-- <p style="color: #ffffff">25 Destination</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- client html begin -->
                <div class="client-section" style='padding-bottom: 200px; padding-top: 65px;'>
                    <div class="container">
                        <div class="client-wrap client-slider">
                            <div class="client-item">
                                <figure>
                                    <img src="assets/images/platform/safari_booking_logo.png" class="lazy client-img" alt="">
                                </figure>
                            </div>
                            <div class="client-item">
                                <figure>
                                    <img src="assets/images/platform/safarigo_logo.png" class="lazy" alt="">
                                </figure>
                            </div>
                            <div class="client-item">
                                <figure>
                                    <img src="assets/images/platform/Tripadvisor-Logo.jpeg" class="lazy" alt="">
                                </figure>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- client html end -->



                <!-- Home contact details section html start -->
                <section class="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="contact-img"
                                    style="background-image: url(assets/images/get.jpeg); border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="contact-details-wrap">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="contact-details">
                                                <div class="contact-icon">
                                                    <img src="assets/images/icon12.png" class="lazy" alt="">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="{{ URL::to('contact') }}">info@timberwolfadventure.co.tz</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ URL::to('contact') }}">info@timberwolfadventure.com</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ URL::to('contact') }}" style="color: #1D293F">/</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="contact-details">
                                                <div class="contact-icon">
                                                    <img src="assets/images/icon13.png" class="lazy" alt="">
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="{{ URL::to('contact') }}">+255 787 104 848</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ URL::to('contact') }}">+255 713 697 189</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ URL::to('contact') }}">+255 764 493 234</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="contact-details">
                                                <div class="contact-icon">
                                                    <img src="assets/images/icon14.png" class="lazy" alt="">
                                                </div>
                                                <ul>
                                                    <li>
                                                        Timberwolf Adventure
                                                    </li>
                                                    <li>
                                                        P.O.BOX 16056,
                                                    </li>
                                                    <li>
                                                        Sekei, Arusha Tanzania.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-btn-wrap">
                                    <h3>ADVENTURE IS CALLING</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  contact details html end -->
            </main>

        </div>

    @endsection
