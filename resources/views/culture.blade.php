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
                     <img src="assets/images/culture/image2.jpeg" class="lazy"  alt="">

                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image2.jpeg" class="lazy"  data-lightbox="lightbox-set">
                              Masai Island
                           </a>
                        </h3>
                     </div>

                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/culture_masai.jpeg" class="lazy"  alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/culture_masai.jpeg"  class="lazy" data-lightbox="lightbox-set">
                              Manyara
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/image9.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image9.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/image6.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image6.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/image5.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image5.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/culture.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/culture.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/image10.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image10.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/image3.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image3.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>

               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/image1.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image1.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/IMG/AdobeStock_101655125.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/IMG/AdobeStock_101655125.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/AdobeStock_295046359.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/AdobeStock_295046359.jpeg" class="lazy" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/image9.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image9.jpeg" class="lazy"  data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div>
               {{-- <div class="single-gallery grid-item">
                  <figure class="gallery-img">
                     <img src="assets/images/culture/image9.jpeg" alt="">
                     <div class="gallery-title">
                        <h3>
                           <a href="assets/images/culture/image9.jpeg" data-lightbox="lightbox-set">
                              Tibet Mountain
                           </a>
                        </h3>
                     </div>
                  </figure>
               </div> --}}
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
