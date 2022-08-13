@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')
 
   <body class="home">
      {{-- <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="{{asset('assets/images/loader1.gif')}}" alt="">
         </div>
      </div> --}}
      <div id="page" class="full-page">
        
         <main id="content" class="site-main">
            <!-- Home slider html start -->
            <section class="home-slider-section">
               <div class="home-slider">
                 
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" style="background-image: url(assets/images/zebr.jpeg);"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">Timberwolf Adventure Tours</h2>
                                 <p>Meet experienced travel consultants in Tanzania with assured best travelling options at affordable prices.</p>
                                 <a href="#" class="button-primary">GET STARTED</a>
                              </div>
                           </div>
                        </div>
                     <div class="overlay"></div>
                  </div>
                  
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" style="background-image: url(assets/images/camping.jpeg);"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">EXPERIENCE THE NATURE'S BEAUTY</h2>
                                 <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p>
                                 <a href="#" class="button-primary">CONTINUE READING</a>
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
                  <div class="trip-search-inner white-bg d-flex">
                     <div class="input-group">
                        <label> Search Destination* </label>
                        <input type="text" name="s" placeholder="Enter Destination">
                     </div>
                     <div class="input-group">
                        <label> Pax Number* </label>
                        <input type="text" name="s" placeholder="No.of People">
                     </div>
                     <div class="input-group width-col-3">
                        <label> Checkin Date* </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                     </div>
                     <div class="input-group width-col-3">
                        <label> Checkout Date* </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                     </div>
                     <div class="input-group width-col-3">
                        <label class="screen-reader-text"> Search </label>
                        <input type="submit" name="travel-search" value="INQUIRE NOW">
                     </div>
                  </div>
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
                  {{-- <div class="destination-inner destination-three-column">
                     <div class="row">
                        <div class="col-lg-7">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="assets/images/img1.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">THAILAND</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Disney Land</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 53%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="assets/images/img2.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">NORWAY</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Besseggen Ridge</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="row">
                              <div class="col-md-6 col-xl-12">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="assets/images/img3.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">NEW ZEALAND</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Oxolotan City</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-xl-12">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="assets/images/img4.jpg" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">SINGAPORE</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">Marina Bay Sand City</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="btn-wrap text-center">
                        <a href="#" class="button-primary">MORE DESTINATION</a>
                     </div>
                  </div> --}}
               </div>
            </section>
            <!-- Home packages section html start -->
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
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img5.jpg" alt="">
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
                                       <a href="#">Tetema Tour</a>
                                    </h3>
                                    {{-- <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div> --}}
                                    <p>Manyara | Lake Eyasi | Ngorongoro | Serengeti | Visit Village.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                       {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img6.jpg" alt="">
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
                                       <a href="#">Pamoja Tour</a>
                                    </h3>
                                    {{-- <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div> --}}
                                    <p>Manyara | Lake Eyasi | Ngorongoro | Serengeti.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                       {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img7.jpg" alt="">
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
                                       <a href="#">Rose Tour</a>
                                    </h3>
                                    {{-- <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div> --}}
                                    <p>Tarangire | Lake Manyara | Serengeti | Ngorongoro Crater.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                       {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img5.jpg" alt="">
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
                                       <a href="#">Ansi Tour</a>
                                    </h3>
                                    {{-- <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div> --}}
                                    <p>Lake Manyara | Serengeti | Ngorongoro Crater.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                       {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img6.jpg" alt="">
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
                                       <a href="#">Lina Tour</a>
                                    </h3>
                                    {{-- <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div> --}}
                                    <p>Lake Manyara | Serengeti | Ngorongoro Crater.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                       {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img7.jpg" alt="">
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
                                       <a href="#">Sharma Tour</a>
                                    </h3>
                                    {{-- <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div> --}}
                                    <p>Lake Manyara | Serengeti | Ngorongoro Crater.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                       {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
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
            <!-- packages html end -->
              <!-- Home packages section html start -->
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
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img9.jpg" alt="">
                                 </a>
                              
                              </figure>
                              <div class="package-content">
                                 <h3>
                                    <a href="#">Tarangire National Park</a>
                                 </h3>
                                 <br>
                                 <p>It is the sixth largest national park in Tanzania, located in Manyara Region. Covering an area of approximately 2,850 sq. km (1,100 sq. miles).</p>
                                 <div class="btn-wrap">
                                    <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                    {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="package-wrap package-wrap-list">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img9.jpg" alt="">
                                 </a>
                              
                              </figure>
                              <div class="package-content">
                                 <h3>
                                    <a href="#">Manyara National Park</a>
                                 </h3>
                                 <br>
                                 <p>Located in both Arusha Region and Manyara Region, Tanzania. The park consists of 330 sq. km (127 sq. miles) of arid land, forest, and a soda-lake land.</p>
                                 <div class="btn-wrap">
                                    <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                    {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="package-wrap package-wrap-list">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img9.jpg" alt="">
                                 </a>
                              
                              </figure>
                              <div class="package-content">
                                 <h3>
                                    <a href="#">Arusha National Park</a>
                                 </h3>
                                 <br>
                                 <p>The only place on the northern safari circuit where the acrobatic black-and-white colobus monkeys are easily seen, Arusha national park is a multi faceted jewel.</p>
                                 <div class="btn-wrap">
                                    <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                    {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="package-wrap package-wrap-list">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="assets/images/img9.jpg" alt="">
                                 </a>
                              
                              </figure>
                              <div class="package-content">
                                 <h3>
                                    <a href="#">Ngorongoro National Park</a>
                                 </h3>
                                 <br>
                                 <p>The area is named after Ngorongoro Crater, a large volcanic caldera within the area. It is located 180 km (110 mi) west of Arusha in the Crater Highlands area of Tanzania.</p>
                                 <div class="btn-wrap">
                                    <a href="#" class="button-text width-6">Read More<i class="fas fa-arrow-right"></i></a>
                                    {{-- <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a> --}}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>  
                  </div>
               </div>
            </section>
            <!-- packages html end -->

            <!-- Home callback section html start -->
            {{-- <section class="callback-section">
               <div class="container">
                  <div class="row no-gutters align-items-center">
                     <div class="col-lg-5">
                        <div class="callback-img" style="background-image: url(assets/images/img8.jpg);">
                           <div class="video-button">
                              <a id="video-container" data-video-id="IUN664s7N-c">
                                 <i class="fas fa-play"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-7">
                        <div class="callback-inner">
                           <div class="section-heading section-heading-white">
                              <h5 class="dash-style">CALLBACK FOR MORE</h5>
                              <h2>GO TRAVEL. DISCOVER. REMEMBER US!!</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend.</p>
                           </div>
                           <div class="callback-counter-wrap">
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon1.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">500</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon2.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">250</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon3.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">15</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="assets/images/icon4.png" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">10</span>K+
                                    </span>
                                    <span class="counter-text">
                                       Satisfied Clients
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="support-area">
                              <div class="support-icon">
                                 <img src="assets/images/icon5.png" alt="">
                              </div>
                              <div class="support-content">
                                 <h4>Our 24/7 Emergency Phone Services</h4>
                                 <h3>
                                    <a href="#">Call: 123-456-7890</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section> --}}

            <section class="home-about-section" style='padding-bottom: 150px;'>
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="about-img-wrap">
                           <div class="about-img-left">
                              <div class="about-content secondary-bg d-flex flex-wrap">
                                 <h3>Timber Wolf Adventures</h3>
                                 <a class="button-primary" style='color: #E95B34'>LEARN MORE</a>
                              </div>
                              <div class="about-img">
                                 <img src="assets/images/img9.jpg" alt="">
                              </div>
                           </div>
                           <div class="about-img-right">
                              <div class="about-img">
                                 <img src="assets/images/img12.jpg" alt="">
                              </div>
                              <div class="about-img">
                                 <img src="assets/images/img34.jpg" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="banner-content section-heading">
                           <h5>INTRODUCTION ABOUT US</h5>
                           <h2 class="banner-title">MAKE THE BEST OF YOUR HOLIDAY</h2>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                           <p>Timber Wolf Adventure is a Tanzanian based Tour Operator located in Arusha. Specializing in both Treks and Safari to all Tanzania destinations.</p>
                        </div>
                        <div class="about-service-container">
                           <div class="about-service">
                              <div class="about-service-icon">
                                 <img src="assets/images/icon15.png" alt="">
                              </div>
                              <div class="about-service-content">
                                 <h4>EXPERTS ON TOURS</h4>
                                 <p>Experienced Guides and Drivers with expert knowledge about Africa, nature, and wildlife.</p>
                              </div>
                           </div>
                           <div class="about-service">
                              <div class="about-service-icon">
                                 <img src="assets/images/icon16.png" alt="">
                              </div>
                              <div class="about-service-content">
                                 <h4>QUALITY ACCOMODATIONS</h4>
                                 <p>Luxury Hotels/Camps/Lodges will be arranged for you.You will be provided with quality services.</p>
                              </div>
                           </div>
                           <div class="about-service">
                              <div class="about-service-icon">
                                 <img src="assets/images/icon17.png" alt="">
                              </div>
                              <div class="about-service-content">
                                 <h4>COMFORTABLE TRANSPORT</h4>
                                 <p>Good condition Luxury Landcruiser 4x4 will be provided for your safari and Game drive.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <!-- callback html end -->
            <!-- Home activity section html start -->
            <section class="activity-section activity-bg-image" style="background-image: url(assets/images/img23.jpg);padding-bottom: 150px;">
               <div class="container">
                  <div class="section-heading section-heading-white text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">YOUR ADVENTURES AWAITS</h5>
                           <h2>ADVENTURES & ACTIVITIES</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                           <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-2 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img44.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Adventures</a>
                              </h4>
                              {{-- <p style="color: #ffffff">15 Destination</p> --}}
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img45.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Trekking</a>
                              </h4>
                              {{-- <p style="color: #ffffff">12 Destination</p> --}}
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img46.png" alt="">
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
                                 <img src="assets/images/img47.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Off Road</a>
                              </h4>
                              {{-- <p style="color: #ffffff">15 Destination</p> --}}
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img48.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camping</a>
                              </h4>
                              {{-- <p style="color: #ffffff">13 Destination</p> --}}
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/img49.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Exploring</a>
                              </h4>
                              {{-- <p style="color: #ffffff">25 Destination</p> --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            {{-- <section class="activity-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                           <h2>ADVENTURE & ACTIVITY</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon6.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Adventure</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon10.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Trekking</a>
                              </h4>
                              <p>12 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon9.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camp Fire</a>
                              </h4>
                              <p>7 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon8.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Off Road</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon7.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camping</a>
                              </h4>
                              <p>13 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon11.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Exploring</a>
                              </h4>
                              <p>25 Destination</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section> --}}

            <!-- activity html end -->
            <!-- Home special section html start -->
            {{-- <section class="special-section" style="background-image: url(assets/images/img23.jpg);">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL OFFER & DISCOUNT</h5>
                           <h2>SPECIAL TRAVEL OFFER</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="special-inner">
                     <div class="row">
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="assets/images/img9.jpg" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>20%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">CANADA</a>
                                 </div>
                                 <h3>
                                    <a href="#">Experience the natural beauty of glacier</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>$1500</del>
                                    <ins>$1200</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="assets/images/img10.jpg" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>15%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">NEW ZEALAND</a>
                                 </div>
                                 <h3>
                                    <a href="#">Trekking to the mountain camp site</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>$1300</del>
                                    <ins>$1105</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img src="assets/images/img11.jpg" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>15%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">MALAYSIA</a>
                                 </div>
                                 <h3>
                                    <a href="#">Sunset view of beautiful lakeside city</a>
                                 </h3>
                                 <div class="package-price">
                                    Price:
                                    <del>$1800</del>
                                    <ins>$1476</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section> --}}
            <!-- special html end -->
            <!-- Home special section html start -->
            {{-- <section class="best-section" style="background-image: url(assets/images/img23.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-5">
                        <div class="section-heading">
                           <h5 class="dash-style">OUR TOUR GALLERY</h5>
                           <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                           <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.</p>
                        </div>
                        <figure class="gallery-img">
                           <img src="assets/images/img12.jpg" alt="">
                        </figure>
                     </div>
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="assets/images/img13.jpg" alt="">
                              </figure>
                           </div>
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="assets/images/img14.jpg" alt="">
                              </figure>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <figure class="gallery-img">
                                 <img src="assets/images/img15.jpg" alt="">
                              </figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section> --}}
            <!-- best html end -->

            <!-- client html begin -->
            <div class="client-section" style='padding-bottom: 200px; padding-top: 65px;'>
               <div class="container">
                  <div class="client-wrap client-slider">
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo7.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo8.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo9.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo10.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo11.png" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="assets/images/logo8.png" alt="">
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
            <!-- client html end -->
            <!-- Home subscribe section html start -->
            {{-- <section class="subscribe-section" style="background-image: url(assets/images/img23.jpg);">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                           <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                           <h4>Sign up now to recieve hot special offers and information about the best tour packages, updates and discounts !!</h4>
                           <div class="newsletter-form">
                              <form>
                                 <input type="email" name="s" placeholder="Your Email Address">
                                 <input type="submit" name="signup" value="SIGN UP NOW!">
                              </form>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend temporibus occaecat luctus eleifend tempo ribus.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section> --}}
            <!-- subscribe html end -->
            <!-- Home blog section html start -->
            {{-- <section class="blog-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">FROM OUR BLOG</h5>
                           <h2>OUR RECENT POSTS</h2>
                           <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img17.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Life is a beautiful journey not a destination</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img18.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Take only memories, leave only footprints</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/img19.jpg" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Journeys are best measured in new friends</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Demoteam</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">August 17, 2021</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </section> --}}
            
            <!-- Home contact details section html start -->
            <section class="contact-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="contact-img" style="background-image: url(assets/images/get.jpeg); border-radius: 5px;">
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="contact-details-wrap">
                           <div class="row">
                              <div class="col-sm-5">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon12.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#">info@timberwolfadventure.co.tz</a>
                                       </li>
                                       <li>
                                          <a href="#">info@timberwolfadventure.com</a>
                                       </li>
                                       <li>
                                          <a href="#" style="color: #1D293F">/</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon13.png" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#">+255 787 104 848</a>
                                       </li>
                                       <li>
                                          <a href="#">+255 713 697 189</a>
                                       </li>
                                       <li>
                                          <a href="#">+255 764 493 234</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="assets/images/icon14.png" alt="">
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
