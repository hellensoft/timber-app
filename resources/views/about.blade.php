@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url(assets/images/imgs/Tembo.jpg)">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">About us</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <!-- about section html start -->
    <section class="about-section about-page-section">
       <div class="about-service-wrap">
          <div class="container">
             <div class="section-heading" style="padding-bottom: 20px;">
                <div class="row align-items-end">
                   <div class="col-lg-6">
                      <h5 class="dash-style">Timber Wolf Adventures</h5>
                      <h2>Most Experienced Travel Consultancy in Tanzania</h2>
                   </div>
                   <div class="col-lg-6">
                      <div class="section-disc">
                         <p style="text-align: justify">Timber Wolf Adventure is a Tanzanian based Tour Operator located in Arusha. We specialize in both Treks and Safari to all Tanzania destinations and we offer you the unique opportunity to climb Mt. Kilimanjaro and to explore the African plains with an experienced native team that offers top quality large tour operator service and safety at local tour operator prices</p>
                        
                      </div>
                   </div>
                </div>
             </div>
             <div class="about-service-container">
                <div class="row">
                   <div class="col-lg-4">
                      <div class="about-service">
                         <div class="about-service-icon">
                            <img src="assets/images/icon15.png" alt="">
                         </div>
                         <div class="about-service-content">
                            <h4>AFFORDABLE PRICE</h4>
                            <p>Providing our clients with affordable prices and special deals that help them get the most out of their travel experience.</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4">
                      <div class="about-service">
                         <div class="about-service-icon">
                            <img src="assets/images/img49.png" alt="">
                         </div>
                         <div class="about-service-content">
                            <h4>BEST DESTINATION</h4>
                            <p>No matter where you choose to go, remember to travel responsibly and respect the local culture and environment.</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4">
                      <div class="about-service">
                         <div class="about-service-icon">
                            <img src="assets/images/icon17.png" alt="">
                         </div>
                         <div class="about-service-content">
                            <h4>PERSONAL SERVICE</h4>
                            <p>We are all about providing customized and individualized care to clients to meet their specific needs and preferences. </p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="about-video-wrap" style="background-image: url(assets/images/imgs/Tembo.jpg);">
                <div class="video-button">
                   <a id="video-container" data-video-id="https://www.youtube.com/watch?v=ikV3JhON6PE">
                      <i class="fas fa-play"></i>
                   </a>
                </div>
             </div>
          </div>
       </div>
       
     
       <!-- callback section html start -->
       <div class="fullwidth-callback" style="background-image: url(assets/images/imgs/Tembo.jpg);">
          <div class="container">
             <div class="section-heading section-heading-white text-center">
                <div class="row">
                   <div class="col-lg-8 offset-lg-2">
                      <h5 class="dash-style">CALLBACK FOR MORE</h5>
                      <h2>GO TRAVEL.DISCOVER. REMEMBER US!!</h2>
                      <p>No matter what type of adventure or activity you choose, the most important thing is to have fun and stay safe!</p>
                   </div>
                </div>
             </div>
             <div class="callback-counter-wrap">
                <div class="counter-item">
                   <div class="counter-item-inner">
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
                </div>
                <div class="counter-item">
                   <div class="counter-item-inner">
                      <div class="counter-icon">
                        <img src="assets/images/icon2.png" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">10</span>K+
                         </span>
                         <span class="counter-text">
                            Awards Achieve
                         </span>
                      </div>
                   </div>
                </div>
                <div class="counter-item">
                   <div class="counter-item-inner">
                      <div class="counter-icon">
                        <img src="assets/images/icon3.png" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">15</span>K+
                         </span>
                         <span class="counter-text">
                            Active Members
                         </span>
                      </div>
                   </div>
                </div>
                <div class="counter-item">
                   <div class="counter-item-inner">
                      <div class="counter-icon">
                        <img src="assets/images/img49.png" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">10</span>K+
                         </span>
                         <span class="counter-text">
                            Tour Destnation
                         </span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- callback html end -->
    </section>
    <!-- about html end -->
 </main>

@endsection