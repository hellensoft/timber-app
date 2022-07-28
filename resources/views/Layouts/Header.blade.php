<header id="masthead" class="site-header header-primary">
    <!-- header html start -->
      @include('Layouts.top-menu')

    <div class="bottom-header">
       <div class="container d-flex justify-content-between align-items-center">
          <div class="site-identity">
             <h1 class="site-title">
                <a href="index.html">
                   <img src="{{asset('assets/images/twalogo.png')}}" alt="logo">
                </a>
             </h1>
          </div>
          <div class="main-navigation d-none d-lg-block">
             <nav id="navigation" class="navigation">
                <ul>
                   <li class="menu">
                      <a href="">Home</a>
                   </li>
                   <li class="menu">
                     <a href="about.html">About</a>
                  </li>
                   <li class="menu-item-has-children">
                      <a href="#">Tour</a>
                      <ul>
                         <li>
                            <a href="destination.html">Destination</a>
                         </li>
                         <li>
                            <a href="tour-packages.html">Tour Packages</a>
                         </li>
                         <li>
                            <a href="package-offer.html">Package Offer</a>
                         </li>
                         <li>
                            <a href="package-detail.html">Package Detail</a>
                         </li>
                         <li>
                            <a href="tour-cart.html">Tour Cart</a>
                         </li>
                         <li>
                            <a href="booking.html">Package Booking</a>
                         </li>
                         <li>
                            <a href="confirmation.html">Confirmation</a>
                         </li>
                      </ul>
                   </li>
                   <li class="menu-item-has-children">
                      <a href="#">Pages</a>
                      <ul>
                       
                         <li>
                            <a href="service.html">Service</a>
                         </li>
                         <li>
                            <a href="career.html">Career</a>
                         </li>
                         <li>
                            <a href="career-detail.html">Career Detail</a>
                         </li>
                         <li>
                            <a href="tour-guide.html">Tour Guide</a>
                         </li>
                         <li>
                            <a href="gallery.html">Gallery</a>
                         </li>
                         <li>
                            <a href="single-page.html">Single Page</a>
                         </li>
                       
                      </ul>
                   </li>
                   
                   <li>
                    <a href="contact.html">Contact</a>
                  </li>
                  
                </ul>
             </nav>
          </div>
          <div class="header-btn">
             <a href="#" class="button-primary">ENQUIRE NOW</a>
          </div>
       </div>
    </div>
    <div class="mobile-menu-container"></div>
   </header>