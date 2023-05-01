@extends('Layouts.MasterPage')
@section('title', 'Timberwolf Adveture')
@section('contents')

<main id="content" class="site-main">
   <!-- Inner Banner html start-->
   <section class="inner-banner-wrap">
      <div class="inner-baner-container" style="background-image: url(assets/images/imgs/Tembo.jpg);">
         <div class="container">
            <div class="inner-banner-content">
               <h1 class="inner-title">Tanzanian Culture</h1>
            </div>
         </div>
      </div>
      <div class="inner-shape"></div>
   </section>
   <!-- Inner Banner html end-->
   <!-- gallery section html start -->
   <div class="gallery-section">
      <div class="container">
         <div class="gallery-outer-wrap">
            <div class="gallery-inner-wrap gallery-container grid">
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/busket.jpg" class="lazy"  alt="">

                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/busket.jpg" class="lazy"  data-lightbox="lightbox-set">
                             Local Basket Sellers
                           </a>
                        </h3>
                     </div>

                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/culture.jpg" class="lazy"  alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/culture.jpg"  class="lazy" data-lightbox="lightbox-set">
                              Culture  Making
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/indignous.jpg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/indignous.jpg" data-lightbox="lightbox-set">
                              Indigenous People
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/mtkili.jpg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/mtkili.jpg" data-lightbox="lightbox-set">
                              Mountain Kilimanjaro Camping
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/ngoro.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/ngoro.jpeg" data-lightbox="lightbox-set">
                              Ngorongoro Crater
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/torus.jpg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/torus.jpg" data-lightbox="lightbox-set">
                             Road trips
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/tarangire3.jpg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/tarangire3.jpg" data-lightbox="lightbox-set">
Touring
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>


               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/mountain.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/mountain.jpeg" data-lightbox="lightbox-set">
                              Moutain Trekking
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/mountainn.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/mountainn.jpeg" data-lightbox="lightbox-set">
                              Top Mountain View
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>



            </div>
         </div>
      </div>
   </div>
   <!-- gallery section html end -->
   <!-- pagination html start-->
   <div class="post-navigation-wrap">
      <nav>
        <ul class="pagination">
          <li>
            <a href="#">
              <i class="fas fa-arrow-left"></i>
            </a>
          </li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li id="endIndex"><a href="#">3</a></li>
          <li>
            <a href="#">
              <i class="fas fa-arrow-right"></i>
            </a>
          </li>
        </ul>
      </nav>
   </div>
   <!-- pagination html start-->

</main>


@endsection
