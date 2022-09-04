<header id="masthead" class="site-header header-primary">
    <!-- header html start -->
      @include('Layouts.top-menu')

    <div class="bottom-header">
       <div class="container d-flex justify-content-between align-items-center">
          <div class="site-identity">
             <h1 class="site-title">
                <a href="index.html">
                   <img src="{{asset('assets/images/twalog.png')}}" alt="logo">
                </a>
             </h1>
          </div>
          <div class="main-navigation d-none d-lg-block">
             <nav id="navigation" class="navigation">
                <ul>
                   <li class="menu">
                      <a href="{{URL::to('index')}}">Home</a>
                   </li>
                   <li class="menu">
                     <a href="about.html">About</a>
                  </li>
                   <li class="menu-item-has-children">
                      <a href="">Tour</a>
                      <ul>
                         <li>
                            <a href="{{ URL::to('tetema') }}">Tetema Tour</a>
                         </li>
                         <li>
                            <a href="{{ URL::to('pamoja') }}">Pamoja Tour</a>
                         </li>
                         <li>
                            <a href="{{ URL::to('rose') }}">Rose Tour</a>
                         </li>
                         <li>
                            <a href="{{ URL::to('ansi') }}">Ansi Tour</a>
                         </li>
                         <li>
                            <a href="{{ URL::to('lina') }}">Lina Tour</a>
                         </li>
                         <li>
                            <a href="{{ URL::to('sharma') }}">Sharma Tour</a>
                         </li>
                      </ul>
                   </li>
                   <li class="menu-item-has-children">
                     <a href="#">Destination</a>
                     <ul>
                        <li>
                           <a href="destination.html">Tarangire National Park</a>
                        </li>
                        <li>
                           <a href="tour-packages.html">Manyara National Park</a>
                        </li>
                        <li>
                           <a href="package-offer.html">Arusha National Park</a>
                        </li>
                        <li>
                           <a href="package-detail.html">Ngorongoro National Park</a>
                        </li>
                     </ul>
                  </li>
                   <li class="menu-item-has-children">
                      <a href="#">Adventures</a>
                      <ul>
                       
                         <li>
                            <a href="service.html">Trekking</a>
                         </li>
                         <li>
                            <a href="career.html">Camping</a>
                         </li>
                         <li>
                            <a href="career-detail.html">Cultural Activities</a>
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