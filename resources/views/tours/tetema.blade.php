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
                               <p>Occaecat pariatur! Quaerat ligula, ab, consequuntur orci mus ultricies praesent aute blandit beatae nisl aut, totam mauris rhoncus? Tellus netus fringilla class auctor dui. Dolores excepteur, doloribus, blanditiis aliquip nisl. Occaecat iusto? Provident sociis rerum. Amet, asperiores molestie varius eos! Libero, fermentum fermentum totam! Sunt praesentium, totam. Excepteur platea nisl. Convallis aliquam? Iaculis erat ipsa molestie, quod, vestibulum reiciendis, maxime nostra, integer unde officiis quo integer unde officiis quo.</p>
                               <p>Occaecat pariatur! Quaerat ligula, ab, consequuntur orci mus ultricies praesent aute blandit beatae nisl aut, totam mauris rhoncus? Tellus netus fringilla class auctor dui. Dolores excepteur, doloribus, blanditiis aliquip nisl..</p>
                               <ul style='color:#1D293F'>
                                 <li>- Travel cancellation insurance</li> 
                                 <li>- Breakfast and dinner included</li>
                                 <li>- Health care included</li>
                                 <li>- Transfer to the airport and return to the agency</li>
                                 <li>- Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                               </ul>
                            </div>
                         </div>
                         <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                            <div class="itinerary-content">
                               <h3>Program <span>( 4 days )</span></h3>
                               <p>Dolores maiores dicta dolore. Natoque placeat libero sunt sagittis debitis? Egestas non non qui quos, semper aperiam lacinia eum nam! Pede beatae. Soluta, convallis irure accusamus voluptatum ornare saepe cupidatat.</p>
                            </div>
                            <div class="itinerary-timeline-wrap">
                               <ul>
                                  <li>
                                     <div class="timeline-content">
                                        <div class="day-count">Day <span>1</span></div>
                                        <h4>Ancient Rome Visit</h4>
                                        <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="timeline-content">
                                        <div class="day-count">Day <span>2</span></div>
                                        <h4>Classic Rome Sightseeing</h4>
                                        <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
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
