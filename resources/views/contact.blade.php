@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url(assets/images/imgs/Tembo.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">Contact us</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <!-- contact form html start -->
    <div class="contact-page-section">
       <div class="contact-form-inner">
          <div class="container">
             <div class="row">
                <div class="col-md-6">
                   <div class="contact-from-wrap">
                      <div class="section-heading">
                         <h5 class="dash-style">GET IN TOUCH</h5>
                         <h2>CONTACT US FOR MORE INFO</h2>
                         {{-- <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.</p> --}}
                      </div>
                      <form class="contact-from">
                         <p>
                            <input type="text" name="name" placeholder="Your Name*">
                         </p>
                         <p>
                            <input type="email" name="email" placeholder="Your Email*">
                         </p>
                         <p>
                            <textarea rows="8" placeholder="Your Message*"></textarea>
                         </p>
                         <p>
                            <input type="submit" name="submit" value="SUBMIT MESSAGE">
                         </p>
                      </form>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="contact-detail-wrap">
                      <h3>Need help ?? Feel free to contact us !</h3>
                      <p>Request any wildlife safari or beach safari after finish climbing Kilimanjaro.</p>
                      <p> We will tailor just the right one for you.</p>
                      <div class="details-list">
                         <ul>
                            <li>
                               <span class="icon">
                                  <i class="fas fa-map-signs"></i>
                               </span>
                               <div class="details-content">
                                  <h4>Location Address</h4>
                                  <span style='color:#1D293F;'>Sekei, Arusha Tanzania</span>
                               </div>
                            </li>
                            <li>
                               <span class="icon">
                                  <i class="fas fa-envelope-open-text"></i>
                               </span>
                               <div class="details-content">
                                  <h4>Email Address</h4>
                                  <span style='color:#1D293F;'>info@timberwolfadventure.co.tz / info@timberwolfadventure.com</span>
                               </div>
                            </li>
                            <li>
                               <span class="icon">
                                  <i class="fas fa-phone-volume"></i>
                               </span>
                               <div class="details-content">
                                  <h4>Phone Number</h4>
                                  <span style='color:#1D293F;'>
                                    {{-- Telephone: 619-270-8578 /  --}}
                                    +255 787 104 848 / +255 713 697 189 <br> +255 764 493 234 </span>
                               </div>
                            </li>
                         </ul>
                      </div>
                      <div class="contct-social social-links">
                         <h3>Follow us on social media..</h3>
                         <ul>
                            <li><a href="https://www.facebook.com/timberwolfadventure?_rdc=1&_rdr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/BEATUSPATRICK"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/timberwolfadventures/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            {{-- <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li> --}}
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="map-section">
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.9903628613474!2d36.713622114019536!3d-3.3524972423135235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371b366e55e5bb%3A0xf4830cc5f9de1f90!2sTimber%20wolf%20adventures!5e0!3m2!1sen!2stz!4v1664299929321!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.9903628613474!2d36.713622114019536!3d-3.3524972423135235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371b366e55e5bb%3A0xf4830cc5f9de1f90!2sTimber%20wolf%20adventures!5e0!3m2!1sen!2stz!4v1664299929321!5m2!1sen!2stz" height="400" allowfullscreen="" loading="lazy"></iframe>
       </div>
    </div>
    <!-- contact form html end -->
 </main>

@endsection