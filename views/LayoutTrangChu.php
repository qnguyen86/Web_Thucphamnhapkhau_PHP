<!DOCTYPE html>
<html>
<head>

	<title>trang chu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" />
<!-- 	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->
	<script type="text/javascript" src="assets/frontend/js/jquery-3.6.0.js"></script>
	<!-- link -->
	<link href="assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/frontend/css/font-awesome.css" rel="stylesheet">
	<link href="assets/frontend/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/jquery-ui1.css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
<script type="text/javascript" src="assets/frontend/js/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	
</style>
</head>
</head>
<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="assets/frontend/images/move-up.png"></button>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/606a630df7ce1827093708c0/1f2fp5rr0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="LKXcHsmT"></script>
	<?php 
       include "views/ViewHeader.php";
	 ?>
<div class="wrapper">

	<!-- banner -->

<div class="slideshow-container">
	
	<div class="slider-wrap">
		<?php $slides1 = $this->modelGetSlide1($position=1); ?>
		<div class="baner1">
			<div class="mySlides1">
				<div class="image_banner">
					<?php foreach($slides1 as $rows): ?>
      		 <img src="assets/upload/slides/<?php echo $rows->photo; ?>" alt="main slider" title="<?php echo $rows->id; ?>" style="width:1302px; height: 601px;">
      		  <?php endforeach; ?>
      	        </div>	
               
			<?php foreach($slides1 as $rows): ?>
  	            <div class="centered">
                 <?php if($rows->name && $rows->description != ""): ?>
	        <div class="infor-banner">
		         <?php echo $rows->description; ?>
	        </div>
	        <?php endif; ?>
             </div>
             <?php endforeach; ?>
      </div>
  </div>
   

<?php $slides2 = $this->modelGetSlide1($position=2); ?>
		<div class="baner1">
			<div class="mySlides1">
				<div class="image_banner">
					<?php foreach($slides2 as $rows): ?>
      		 <img src="assets/upload/slides/<?php echo $rows->photo; ?>" alt="main slider" title="<?php echo $rows->id; ?>" style="width:1302px; height: 601px;">
      		  <?php endforeach; ?>
      	        </div>	
               
			<?php foreach($slides2 as $rows): ?>
  	            <div class="centered">
                 <?php if($rows->name && $rows->description != ""): ?>
	        <div class="infor-banner">
		         <?php echo $rows->description; ?>
	        </div>
	        <?php endif; ?>
             </div>
             <?php endforeach; ?>
      </div>
  </div>

 <?php $slides3 = $this->modelGetSlide1($position=3); ?>
		<div class="baner1">
			<div class="mySlides1">
				<div class="image_banner">
					<?php foreach($slides3 as $rows): ?>
      		 <img src="assets/upload/slides/<?php echo $rows->photo; ?>" alt="main slider" title="<?php echo $rows->id; ?>" style="width:1302px; height: 601px;">
      		  <?php endforeach; ?>
      	        </div>	
               
			<?php foreach($slides3 as $rows): ?>
  	            <div class="centered">
                 <?php if($rows->name && $rows->description != ""): ?>
	        <div class="infor-banner">
		         <?php echo $rows->description; ?>
	        </div>
	        <?php endif; ?>
             </div>
             <?php endforeach; ?>
      </div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
	</div>
  
</div>

<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>


	
	<!-- //banner -->
<!-- Main 
===========================================================================================================================-->
<?php echo $this->view; ?>
	<!-- /main -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			<p class="footer-main">
				<span>"QUYSHOP"</span></p>
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Track Your Order</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Free &amp; Easy Returns</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Online cancellation </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			
			
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>?? 2017 Grocery Shoppy. All rights reserved | Design by
				<a href="#"> QuItalia</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->
	<!-- js-files -->
	<!-- jquery -->
	<script src="assets/frontend/js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="assets/frontend/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<!-- <script src="assets/frontend/js/minicart.js"></script> -->
	<!-- <script>
		paypalm.minicartk.render(); 

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script> -->
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="assets/frontend/js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="assets/frontend/js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo2").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->
<script src="assets/frontend/js/imagezoom.js"></script>
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="assets/frontend/js/SmoothScroll.min.js"></script>

	<!-- //smoothscroll -->
	<!-- //////////////////////////////////////////////// -->
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<!-- /////////////////////////////////////////// -->
	<!-- start-smooth-scrolling -->
	<!-- <script src="assets/frontend/js/move-top.js"></script> -->
	<script src="assets/frontend/js/easing.js"></script>
	<!-- <script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	 //end-smooth-scrolling --> -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="assets/frontend/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</div>
</body>
</html>