<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>danh sach san pham</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" />
	<!-- <script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script> -->
	<!-- link -->
	<link href="assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/frontend/css/font-awesome.css" rel="stylesheet">
	<link href="assets/frontend/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/jquery-ui1.css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="assets/frontend/css/owl.theme.default.css">
	<script type="text/javascript" src="assets/frontend/js/owl.carousel.js"></script>
	 <script type="text/javascript" src="assets/frontend/js/jquery-3.6.0.js"></script>
	 <style type="text/css">
	#myBtn {
  
  position: fixed;
  bottom: 80px;
  right: 15px;
  z-index: 99;
  border: none;
  outline: none;
  color: white;
  cursor: pointer;
  padding: 15px;

}

#myBtn:hover {
  background-color: white;
}
</style>
</head>
<body class="index">
	<!--Start of Tawk.to Script-->
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="assets/frontend/images/move-up.png"></button>
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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="1DRaJAjs"></script>
	<!-- Header 
		=====================================================================================================================-->
<?php include "views/ViewHeader.php"; ?>
	<!-- //header-bot -->
	
	<!-- banner-2 -->
	<div class="slideshow-container">
			<div class="slider-wrap">
<?php $slides4 = $this->modelGetSlide1($position=4); ?>
		<div class="baner1">
				<div class="image_banner">
					<?php foreach($slides4 as $rows): ?>
      		 <img src="assets/upload/slides/<?php echo $rows->photo; ?>" alt="main slider" title="<?php echo $rows->id; ?>" style="width:1302px; height: 300px;">
      		  <?php endforeach; ?>
      	        </div>	
               
			<?php foreach($slides4 as $rows): ?>
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
</div>
	

	
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- product left -->
			<!-- top Products -->
	
			

	<!-- //top products -->
			<div class="side-bar col-md-3">
                 <div class="timkiem1">
                 	<!-- product left -->
				<div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> Tìm theo mức giá </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
			<!-- //product right -->
                 </div>
				<div class="new">Tin tức
                      <div class="deal-leftmk left-side">
		<ul id="flexiselDemo11" style="width: 270px; margin-left: -5px;">
			<?php
      $news = $this->modelHotNews();
      ?>
      <?php foreach ($news as $rows) : ?>
			<li style="border: 1px solid rgba(0, 0, 0, 0.22) ">
						<div class="w3l-specilamk" style="border: none !important;">
							<div class="speioffer-agile">
								<a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image" > <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>"  height="150px" width="200px" >  </a>
							</div>
							<div class="product-name-w3l">
								<div class="info">
               <h4><b><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-size: 17px;"><?php echo $rows->name; ?></a></b></h4>
              
            </div>
							</div>
						</div>
					</li>
					 <?php endforeach; ?>
					</ul>
			</div>
				</div>
				
			</div>
			
			<!-- //product left -->
			<!-- product right -->

			<div class="agileinfo-ads-display col-md-9 w3l-rightpro">
				
				<div class="wrapper">
					<?php echo $this->view; ?>
					<!-- first section -->
					<!-- //first section -->
					<!-- 2nd section) -->
					
					<!-- //4th section  -->

				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	
	<!-- //special offers -->
	<!-- newsletter -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Get your Groceries delivered from local stores</h2>
				<p>Free Delivery on your first order!</p>
				<form action="#" method="post">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="assets/frontend/images/tab3.png" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			<p class="footer-main">
				<span>"Grocery Shoppy"</span> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
				magni dolores eos qui ratione voluptatem sequi nesciunt.Sed ut perspiciatis unde omnis iste natus error sit voluptatem
				accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
				beatae vitae dicta sunt explicabo.</p>
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
						<h3>Free & Easy Returns</h3>
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
			<p>© 2017 Grocery Shoppy. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->
</body>
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
	<script src="assets/frontend/js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); 

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
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
	<!-- //flexisel (for special offers) -->

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
			
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<!-- <script src="assets/frontend/js/SmoothScroll.min.js"></script> -->
	<!-- //smoothscroll

	<!-- start-smooth-scrolling -->
<!-- 	<script src="assets/frontend/js/move-top.js"></script> --> -->
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
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<!-- <script>
		$(document).ready(function () {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script> --> -->
	<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
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
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="assets/frontend/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>