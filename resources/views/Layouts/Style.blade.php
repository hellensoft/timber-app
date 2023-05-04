<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/cardslider/css/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/cardslider/css/styles.css">
    <style>
        .client-img {
   width: 500px;
   height: 100px;}
   .animate img {
    transition: transform 0.5s; /* add a transition effect for smooth animation */
  }

  .animate img:hover {
    transform: scale(0.9); /* decrease the size by 10% on hover */
  }
   /* Or whatever dimensions you want */
 .slide{
  animation-name: slide-up;
  animation-duration: 1s;
  animation-timing-function: ease-in;
 }
 @keyframes slide-up {
  from {
    opacity: 0;
    transform: translateY(100%);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
  .fade {
  animation-name: fade;
  animation-duration: 1s;
  animation-fill-mode: forwards;

}

@keyframes fade-out {
  from {
    opacity: 1;
    /* transform: translateY(50px); */
  }
  to {
    opacity: 0;
    /* transform: translateY(0px); */
  }
}

    </style>
    <script>$(document).ready(function() {
      $('.section-anime').click(function() {
        $(this).toggleClass('slide fade');
      });
    });</script>

<script>
    var itemsPerPage = 3;
    var currentPage = 1;

    showPage(currentPage);

    $('.pagination').on('click', 'li', function(event) {
      event.preventDefault();
      currentPage = parseInt($(this).text());
      showPage(currentPage);
    });

    function showPage(page) {
      var startIndex = (page - 1) * itemsPerPage;
      var endIndex = startIndex + itemsPerPage;

      $('.single-gallery').hide()
        .slice(startIndex, endIndex)
        .fadeIn(500);
    }</script>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>


    <title>@yield('title')</title>

 </head>
