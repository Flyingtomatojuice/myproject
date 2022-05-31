
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Visvis Logistics Services</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/>

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
   </a>
   <a href="index.html" button class="btn"><i class="fa fa-home"  style="color:#ffbb00;"></i> Home</button></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="suboffers.html">Vehicles</a></li>
        <li class="nav-item"> <a class="nav-link" href="#News" data-scroll-nav="0">Top</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Offers</a> </li>
        <li class="nav-item"> <a class="nav-link" href="index.html">Back</a></li>
    
        
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Banner Image -->

<div class="banner text-center" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <h1 class="text-capitalize">Offers and Reviews</h1>
      
      </div>
  </div>
</div>

<!-- End Banner Image --> 

<!-- Interns -->
<div class="portfolio section-padding" data-scroll-index='4'>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 section-title text-center">
        <h3><b>WE LOVE TO HANDLE IT!</b></h3>
        <p><b>Offers premier cargo delivery services that cater to Door to Door delivery to any point in the Philippines. They have a selection of fleets/vehicles available for hire, capable of fitting cargos of various sizes, weights, or volumes at a very affordable price.</b></p>
        <span class="section-title-line"></span> </div>
      <div class="filtering text-center mb-30">
        <button type="button" data-filter='*' class="active">All</button>
        <button type="button" data-filter='.img1'>COMPANY TOURS</button>
        <button type="button" data-filter='.img2'>WEDDING AND OTHER OCASIONS</button>
        <button type="button" data-filter='.img3'>SEMINARS</button>
        <button type="button" data-filter='.img4'>TEAM BUILDING</button>
        <button type="button" data-filter='.img5'>CATERING SERVICES</button>
        <button type="button" data-filter='.img6'>FAMILY GATHERING</button>
        <button type="button" data-filter='.img7'>LIPAT BAHAY</button>
        <button type="button" data-filter='.img8'>DELIVERY & PICKUP</button>
        <button type="button" data-filter='.img9'>COMPANY OUTING</button>

      </div>
      <div class="gallery no-padding col-lg-12 col-sm-12">
        <div class="col-lg-4 col-sm-6 img1 padding">
          <div class="item-img"> <a class="single-image" href="images/1.jpg"></a>
            <div class="part-img"> <img src="assets/images/1.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>COMPANY TOURS<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
          
          <div>
              <?php
            include "include.php";
            
             $sql= "SELECT * FROM images WHERE imgType='Company Tours' ";
					$result= mysqli_query($con,$sql);
				   
                    while($row = mysqli_fetch_array($result))
                    {

                           echo '<img src="data:image;base64,'.base64_encode($row['imgData']).'" alt="Image" style="width:425px; height:400px;">';
                    }
                    ?>
          </div>
        </div>
        
        <div class="col-lg-4 col-sm-6 img2 padding">
          <div class="item-img"> <a class="single-image" href="images/2.jpg"></a>
            <div class="part-img"> <img src="assets/images/2.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>WEDDING AND OTHERS<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 img3 padding">
          <div class="item-img"> <a class="single-image" href="images/3.jpg"></a>
            <div class="part-img"> <img src="assets/images/3.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>SEMINARS<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
          <div>
              <?php
            include "include.php";
            
             $sql= "SELECT * FROM images WHERE imgType='Seminars' ";
					$result= mysqli_query($con,$sql);
				   
                    while($row = mysqli_fetch_array($result))
                    {

                           echo '<img src="data:image;base64,'.base64_encode($row['imgData']).'" alt="Image" style="width:425px; height:400px;">';
                    }
                    ?>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 img4 padding">
          <div class="item-img"> <a class="single-image" href="images/4.jpg"></a>
            <div class="part-img"> <img src="assets/images/4.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>TEAM BUILDING<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 img5 padding">
          <div class="item-img"> <a class="single-image" href="images/5.jpg"></a>
            <div class="part-img"> <img src="assets/images/5.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>CATERING SERVICES<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 img6 padding">
          <div class="item-img"> <a class="single-image" href="assets/images/6.jpg"></a>
            <div class="part-img"> <img src="assets/images/6.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>FAMILY GATHERING<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 img7 padding">
          <div class="item-img"> <a class="single-image" href="images/7.jpg"></a>
            <div class="part-img"> <img src="assets/images/7.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>LIPAT BAHAY<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 img8 padding">
          <div class="item-img"> <a class="single-image" href="images/8.jpg"></a>
            <div class="part-img"> <img src="assets/images/8.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>DELIVERY & PICKUP<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 img9 padding">
          <div class="item-img"> <a class="single-image" href="images/9.jpg"></a>
            <div class="part-img"> <img src="assets/images/9.jpg" alt="image">
              <div class="overlay-img">
                <h4>Price here</h4>
                <h6>COMPANY OUTING<br><br><br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details<br>
                    <br>This is the details</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Interns -->



<footer class="footer-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p>2022 &copy; Visvis Logistics Services Designed by <a href="http://w3Template.com" target="_blank" rel="dofollow">mcc|proj-it-7</a></p>
      </div>
    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<!-- owl carousel js --> 
<script src="js/owl.carousel.min.js"></script> 
<!-- magnific-popup --> 
<script src="js/jquery.fancybox.min.js"></script> 

<!-- scrollIt js --> 
<script src="js/scrollIt.min.js"></script> 

<!-- isotope.pkgd.min js --> 
<script src="js/isotope.pkgd.min.js"></script> 
<script>
  $(window).on("scroll",function () {

      var bodyScroll = $(window).scrollTop(),
          navbar = $(".navbar");

      if(bodyScroll > 130){

          navbar.addClass("nav-scroll");
          $('.navbar-logo img').attr('src','images/logo-black.png');


      }else{

          navbar.removeClass("nav-scroll");
          $('.navbar-logo img').attr('src','images/logo-white.png');

      }

  });

  $(window).on("load",function (){



var bodyScroll = $(window).scrollTop(),
navbar = $(".navbar");

if(bodyScroll > 130){

navbar.addClass("nav-scroll");
$('.navbar-logo img').attr('src','images/logo-black.png');


}else{

navbar.removeClass("nav-scroll");
$('.navbar-logo img').attr('src','images/logo-white.png');

}

/* smooth scroll
  -------------------------------------------------------*/
  $.scrollIt({

easing: 'swing',      // the easing function for animation
scrollTime: 900,       // how long (in ms) the animation takes
activeClass: 'active', // class given to the active nav element
onPageChange: null,    // function(pageIndex) that is called when page is changed
topOffset: -63
});

/* isotope
-------------------------------------------------------*/
var $gallery = $('.gallery').isotope({});
$('.gallery').isotope({

    // options
    itemSelector: '.item-img',
    transitionDuration: '0.5s',

});


$(".gallery .single-image").fancybox({
  'transitionIn'  : 'elastic',
  'transitionOut' : 'elastic',
  'speedIn'   : 600,
  'speedOut'    : 200,
  'overlayShow' : false
});


/* filter items on button click
-------------------------------------------------------*/
$('.filtering').on( 'click', 'button', function() {

    var filterValue = $(this).attr('data-filter');

    $gallery.isotope({ filter: filterValue });

    });

$('.filtering').on( 'click', 'button', function() {

    $(this).addClass('active').siblings().removeClass('active');

});

})

$(function () {
$( ".cover-bg" ).each(function() {
    var attr = $(this).attr('data-image-src');

    if (typeof attr !== typeof undefined && attr !== false) {
      $(this).css('background-image', 'url('+attr+')');
    }

  });

  /* sections background color from data background
  -------------------------------------------------------*/
  $("[data-background-color]").each(function() {
      $(this).css("background-color", $(this).attr("data-background-color")  );
  });


/* Owl Caroursel testimonial
  -------------------------------------------------------*/
  
  $('.testimonials .owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    items:1,
    margin:30,
    dots: true,
    nav: false,
    
  });

});

</script>
</body>
</html>
