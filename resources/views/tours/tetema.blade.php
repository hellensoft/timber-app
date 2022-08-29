@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')


<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">Tetema Tour</h1>
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
                      <img src="assets/images/img27.jpg" alt="">
                      <div class="package-meta text-center">
                         <ul>
                            <li>
                               <i class="far fa-clock"></i>
                               8 days / 7 night
                            </li>
                            {{-- <li>
                               <i class="fas fa-user-friends"></i>
                               People: 4
                            </li> --}}
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
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" id="program-tab" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="false">PROGRAM</a>
                         </li>
                         {{-- <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">REVIEW</a>
                         </li> --}}
                         <li class="nav-item">
                            <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map1" aria-selected="false">Map1</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                         <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <div class="overview-content">
                              
                               <p>The tour has been designed to include:</p>
                                 <ul style='color:#1D293F'>
                                 <li><b>- The Serengeti:</b>                                   
                                 <p>It is one of the most famous parks in the world and the ultimate destination for game drives or witnessing the astounding, annual Great Migration. 
                                 </p><p>Boundless plains punctuated with spiky acacia trees, Serengeti kopjes, hippos, and crocodile-laden rivers, 
                                 a landscape home to the Big Five (lions, leopards, rhinos, buffalo, and elephants) 
                                 and more than 475 bird species–it’s no wonder the Serengeti precedes its reputation as a wildlife haven.
                               </p>
                               </li> 
                               <li><b>- The Ngorongoro crater: </b>
                              <p>Located 180KM from Arusha of Tanzania</p>
                              <p>The crater formed when a large volcano exploded and collapsed two to three million years ago, and now a home for more than 25,000 species of large animals.</p> 
                              </li>
                              <li><b>- Lake Manyara National Park: </b> 
                              <p>One of Tanzania’s most dramatically located wildlife areas, consisting of a massive but shallow soda lake (covering two-thirds of the park), 
                                 located at the foot of the Great Rift Valley’s western escarpment. 
                              </p><p>The Park’s varied habitat attracts a wide variety of animals, including one of Africa’s largest concentrations of Elephants; 
                                 Lake Manyara is unique for a Tree-climbing Lions, as well as large flocks of Flamingos attracted by the algae in the lake. 
                              </p>
                              </li>
                              <li><b>- Lake Eyasi: </b> 
                                 <p> A very scenic soda Lake found on the Southern border of the Ngorongoro Conservation Area. 
                                 This less visited lake lies at the base of the Eyasi escarpment on the Western Rift Valley Wall. 
                                 Some wildlife and a wide range of bird species can be viewed during walks around the lake, which can be arranged. 
                                 </p><p>you will be introduced to an indigenous tribe known as the ‘Hadzabee’ (hunter-gatherer Bushmen) and the Nilotic-speaking Datoga tribe.
                                 </p>
                                 </li>
                              </ul>
                              {{-- <ul style='color:#1D293F'>
                                 <li>- Travel cancellation insurance</li> 
                                 <li>- Breakfast and dinner included</li>
                                 <li>- Health care included</li>
                                 <li>- Transfer to the airport and return to the agency</li>
                                 <li>- Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                               </ul> --}}
                            </div>
                         </div>
                         <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                            <div class="itinerary-content">
                               <h3>Program <span>( 8 days )</span></h3>
                               <p>
                                 Our Safari includes Lake Manyara National Park, Lake Eyasi, Ngorongoro Crater, Serengeti National Park and visits Masai market and local village. 
                                 </p>
                               {{-- <p>Dolores maiores dicta dolore. Natoque placeat libero sunt sagittis debitis? Egestas non non qui quos, semper aperiam lacinia eum nam! Pede beatae. Soluta, convallis irure accusamus voluptatum ornare saepe cupidatat.</p> --}}
                            </div>
                            <div class="itinerary-timeline-wrap">
                               <ul>
                                  <li>
                                     <div class="timeline-content">
                                        <div class="day-count">Day <span>1</span></div>
                                        <h4>Arusha – Lake Manyara National Park</h4>
                                        <p>You will meet our professional driver tour guide at your hotel, who will deliver a short safari info briefing. 
                                          After breakfast, you will be transferred to the Park.
                                          We arrive in time for lunch at the lodge/Tented Camp/Campsite ,
                                          after lunch we head to the Lake Park for an afternoon game drive. 
                                          Dinner and overnight will be at the Hotel/Tented Camp/Lodge/Basic Campsite.
                                          </p>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="timeline-content">
                                        <div class="day-count">Day <span>2</span></div>
                                        <h4>Lake Eyasi – Bushmen/Hazeembe</h4>
                                        <p>After breakfast, we will drive to the shores of Lake Eyasi. 
                                          We arrive in time for lunch at the Lodge/Campsite. 
                                          In the afternoon you will visit the indigenous tribes of the Hadzabee and Datoga.
                                          it will include a visit to their homesteads, learn about their way of life, animal tracking, medicinal plants, and much more. 
                                          then Return for dinner and overnight at Tented Camp/ Lodge/Luxury/Basic Campsite.
                                          </p>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="timeline-content">
                                        <div class="day-count">Day <span>3</span></div>
                                        <h4>Vatican City Visit</h4>
                                        <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="timeline-content">
                                        <div class="day-count">Day <span>4</span></div>
                                        <h4>Italian Food Tour</h4>
                                        <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                     </div>
                                  </li>
                                  <li>
                                    <div class="timeline-content">
                                       <div class="day-count">Day <span>5</span></div>
                                       <h4>Italian Food Tour</h4>
                                       <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-content">
                                       <div class="day-count">Day <span>6</span></div>
                                       <h4>Italian Food Tour</h4>
                                       <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-content">
                                       <div class="day-count">Day <span>7</span></div>
                                       <h4>Italian Food Tour</h4>
                                       <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-content">
                                       <div class="day-count">Day <span>8</span></div>
                                       <h4>Italian Food Tour</h4>
                                       <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                    </div>
                                 </li>
                               </ul>
                            </div>
                         </div>
                         <div class="tab-pane" id="map1" role="tabpanel" aria-labelledby="map1-tab">
                           <div class="overview-content">
                             <p>Tincidunt iaculis pede mus lobortis hendrerit eveniet impedit aenean mauris qui, pharetra rem doloremque laboris euismod deserunt non, cupiditate, vestibulum.</p>
                             <ul style='color:#1D293F'>
                                <li> - Travel cancellation insurance</li> 
                                <li> - Breakfast and dinner included</li>
                                <li> - Health care included</li>
                                <li> - Transfer to the airport and return to the agency</li>
                                <li> - Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                              </ul>
                              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60998820.06503915!2d95.3386452160086!3d-21.069765827214972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2snp!4v1579777829477!5m2!1sen!2snp" height="450" allowfullscreen=""></iframe> --}}
                           </div>
                        </div>
                         <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
                            <div class="overview-content">
                              <p>Tincidunt iaculis pede mus lobortis hendrerit eveniet impedit aenean mauris qui, pharetra rem doloremque laboris euismod deserunt non, cupiditate, vestibulum.</p>
                              <ul style='color:#1D293F'>
                                 <li> - Travel cancellation insurance</li> 
                                 <li> - Breakfast and dinner included</li>
                                 <li> - Health care included</li>
                                 <li> - Transfer to the airport and return to the agency</li>
                                 <li> - Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                               </ul>
                               {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60998820.06503915!2d95.3386452160086!3d-21.069765827214972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2snp!4v1579777829477!5m2!1sen!2snp" height="450" allowfullscreen=""></iframe> --}}
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
                         <span>$2,080</span> / per person
                      </h5>
                      {{-- <div class="start-wrap">
                         <div class="rating-start" title="Rated 5 out of 5">
                            <span style="width: 60%"></span>
                         </div>
                      </div> --}}
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
                                  <input class="input-date-picker" type="text" name="s" autocomplete="off" readonly="readonly" placeholder="Date">
                               </div>
                            </div>
                            <div class="col-sm-12">
                               <h4 class="">Add Options</h4>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label class="checkbox-list" style='color:#1D293F'>
                                     <input type="checkbox" name="s" >
                                     <span class="custom-checkbox"></span>
                                     Tour guide
                                  </label>
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label class="checkbox-list" style='color:#1D293F'>
                                     <input type="checkbox" name="s">
                                     <span class="custom-checkbox"></span>
                                     Insurance 
                                  </label>
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label class="checkbox-list" style='color:#1D293F'>
                                     <input type="checkbox" name="s">
                                     <span class="custom-checkbox"></span>
                                     Dinner
                                  </label>
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label class="checkbox-list" style='color:#1D293F'>
                                     <input type="checkbox" name="s">
                                     <span class="custom-checkbox"></span>
                                     Bike rent
                                  </label>
                               </div>
                            </div>
                            <div class="col-sm-12">
                               <div class="form-group submit-btn">
                                  <input type="submit" name="submit" value="Boook Now">
                               </div>
                            </div>
                         </div>
                      </form>
                   </div>
                   <div class="widget-bg information-content text-center">
                      <h5>Guide Information</h5>
                      <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>
                      <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. </p>
                      <a href="#" class="button-primary">GET A QUOTE</a>
                   </div>
                   {{-- <div class="travel-package-content text-center" style="background-image: url(assets/images/img11.jpg);">
                      <h5>MORE PACKAGES</h5>
                      <h3>OTHER TRAVEL PACKAGES</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus.</p>
                      <ul>
                         <li>
                            <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Vacation packages</a>
                         </li>
                         <li>
                            <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Honeymoon packages</a>
                         </li>
                         <li>
                            <a href="#"><i class="far fa-arrow-alt-circle-right"></i>New year packages</a>
                         </li>
                         <li>
                            <a href="#"><i class="far fa-arrow-alt-circle-right"></i>Weekend packages</a>
                         </li>
                      </ul>
                   </div> --}}
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- subscribe section html start -->
    <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg);">
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
    </section>
    <!-- subscribe html end -->
 </main>




 
@endsection
