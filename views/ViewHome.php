<?php 
// load file LayoutTrangChu.php
$this->fileLayout="LayoutTrangChu.php";
 ?>
 <style>

.mySlides {display: none;}
/* Slideshow container */
.slideshow-container {
  
   max-height: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

 <!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			
			<!-- product left -->
			<div class="chia">
			<div class="side-bar col-md-3">
				
	
				<div class="deal-leftmk left-side">
					
					<div class="special-sec1">
						<?php $products = $this->modelNewProducts(); ?>
						<div class="slideshow-container">
<?php foreach($products as $rows): ?>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" width="265px" height="300px" ></a>
</div>
<?php endforeach; ?>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex1 = 0;
showSlides1();

function showSlides1() {
  var i;
  var slides1 = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides1.length; i++) {
    slides1[i].style.display = "none";  
  }
  slideIndex1++;
  if (slideIndex1 > slides1.length) {slideIndex1 = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides1[slideIndex1-1].style.display = "block";  
  dots[slideIndex1-1].className += " active";
  setTimeout(showSlides1, 2000); // Change image every 2 seconds
}
</script>
	
					</div>
					
				
					
				</div>
				<!-- //deals -->
			</div>
			<!-- //product left -->
			<!-- product right -->

			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Sản phẩm nổi bật</h3>
						<div class="clearfix">
					<?php 
	              		$hotProduct = $this->modelHotProduct();
	              	 ?>
	              	 <?php foreach($hotProduct as $rows): ?>
						
						<div class="col-md-4 product-men">
							
							<div class="men-pro-item simpleCart_shelfItem">
								
								<div class="men-thumb-item" style="height: 150px;">
									<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" width="150px" height="150px" ></a>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="link-product-add-cart">Quick View</a>
										</div>

									</div>
									<span class="product-new-top">Hot</span>
								</div>
								<div class="item-info-product ">
									<div class="fix_name" style="height: 80px;">
									<h4 >
										<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" style="color: #337ab7; font-weight: bold;"><?php echo $rows->name; ?></a>
									</h4>
								</div>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?></span>
										<del><?php echo number_format($rows->price); ?></del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<div class="a-button" style="display: inline-block;
											color: #fff;background: #1accfd; text-decoration: none;border: none; border-radius: 0;width: 150px;text-transform: uppercase;padding: 13px;letter-spacing: 1px;font-weight: 400;"
                                         onmouseover="this.style.background='black';" 
                                     onmouseout="this.style.background='#1accfd';"
											    >
																					
								      <form action="#" method="post">
                                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button" style="color: #fff; display: block; ">Đặt hàng</a>
                                        </form>
										</div>	
										
									</div>

								</div>

							</div>
							
						</div>
						
						 <?php endforeach; ?>
						</div>
						
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Pure Energy</h3>
							<h6>Enjoy our all healthy Products</h6>
							<p>Get Extra 10% Off</p>
						</div>
						<h3 class="w3l-nut-middle">Nuts &amp; Dry Fruits</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="assets/frontend/images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
		<!--  -->
		
		<!-- category product   ======================================== -->
		<h2 class="title" style="text-align: center; "> <span></span></h2>

         <?php 
        	$categories = $this->modelCategories();
         ?>
         <?php foreach($categories as $rowsCategory): ?>

         	<div class="produ" >
         		<!-- category product -->
        <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-11" style="text-align: center; border-top: 1px solid #F7F7F5;">
               <h3  style=" border-bottom: 2px solid rgba(0, 0, 0, 0.22);background-color: #f0ad4e; text-align: center; width: 1150px; font-weight: bold;" ><?php echo $rowsCategory->name; ?></h3>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
         
       <div class="item-info-product ">
          	<div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex" > 
            	 
             <?php 
              		$products = $this->modelProducts($rowsCategory->id);
              	 ?>
              	 <?php foreach($products as $rows): ?>
                <!-- box product -->
                
                <div class=" col-xs-6 col-md-2 col-sm-6 " style="display: block; width: 195px;">
                  <div class="men-pro-item simpleCart_shelfItem" style=" overflow: hidden; border: 2px solid #F7F7F5;">
                  	<div class="li-pro" style="height: 380px;">
                    <div class="men-thumb-item" style="height:150px;"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive zoom-img" width="150px" height="150px"><div class="overlay"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" ><i class="fa fa-heart-o" aria-hidden="true" style="color: white; "></i></a></div></a> 
                          <a style="background: #7DB122 none repeat scroll 0 0; color: #fff !important; display: block; font-size: 11px; line-height: 27px; left: 5px; padding: 0 10px; position: absolute; text-transform: uppercase; top: 5px; z-index: 10; border-radius: 30px;">- <?php echo $rows->discount; ?>%</a>
                          <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                    	<div class="fix_name" style="height: 80px;">
                    		<h3 class="name" style="font-size: 15px;"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                    	</div>
                      <div class="fix-star" style="height: 150px;">
                      	<p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?> </span>₫ </span> </p>
                      <div class="sao" >
                      	<p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      </div>
                      </div>
                      
                      	 </div>
                      	 </div>
                      </div>
                      	<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" style="margin-left:5px;">
										<div class="a-button" style="display: inline-block;
											color: #fff;background: #1accfd; text-decoration: none;border: none; border-radius: 0;width: 150px;text-transform: uppercase;padding: 12px;letter-spacing: 1px;font-weight: 400; "
                                         onmouseover="this.style.background='black';" 
                                         onmouseout="this.style.background='#1accfd';"
											    >
																					
								      <form action="#" method="post">
                                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button" style="color: #fff; display: block; margin-right: 5px; ">Đặt hàng</a>
                                        </form>
										</div>	
										
									</div>
                    
                   
                  </div>
              
              <!-- goi pugin -->
                  
              <!--  -->
                <!-- end box product --> 
                <?php endforeach; ?> 
              
          </div>
            </div>
          </div>
        
          
        
        <!-- /category product --> 
         	</div>
        
       <?php endforeach; ?>
	<!-- //top products -->
	<!-- sale -->
	 <!-- category product -->
	 <div class="banner-sale" style="margin-top: 20px;">
	 	<img src="assets/frontend/images/banner-bai-viet-khuyen-mai-tang-bosch-va-giam-gia.jpg" height="250px" width="1150px">
	 </div>
        <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-11" style="text-align: center; border-top: 1px solid #F7F7F5;">
               <h3 class="tittle" style="background-color: #f0ad4e; text-align: center; border-bottom: 2px solid rgba(0, 0, 0, 0.22);width: 1150px; font-weight: bold;">Sản phẩm ưu đãi đặc biệt</h3>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- sale -->
       <div class="item-info-product ">

          	<div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
            
             <?php $products = $this->modelSales(); ?>
              	 <?php foreach($products as $rows): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6 " style="display: block; width: 195px;">
                  <div class="men-pro-item simpleCart_shelfItem" style=" overflow: hidden; border: 1px solid #F7F7F5;">
                  	<div class="li-pro" style="height: 380px;">
                    <div class="men-thumb-item" style="height:150px;"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive zoom-img" width="150px" height="150px"><div class="overlay"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" ><i class="fa fa-heart-o" aria-hidden="true" style="color: white; ;"></i></a></div></a> 
                   <a style="background: #7DB122 none repeat scroll 0 0; color: #fff !important; display: block; font-size: 11px; line-height: 27px; left: 5px; padding: 0 10px; position: absolute; text-transform: uppercase; top: 5px; z-index: 10; border-radius: 30px;">- <?php echo $rows->discount; ?>%</a>
                    </div>
                    <div class="item-info-product ">
                    	<div class="fix_name" style="height: 80px;">
                    		<h3 class="name" style="font-size: 15px;"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                    	</div>
                      <div class="fix-star" style="height: 150px;">
                      	<p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                      <p class="price-box" style="color: red;"> <b><span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?> </span>₫ </span> </b></p>
                      <div class="sao" >
                      	<p class="price-box"> <a href="index.php?controller=products&action=rating1&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating1&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating1&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating1&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating1&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      </div>
                      </div>
                      
                      	 </div>
                      </div>
                      	<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" style="margin-left:5px;">
										<div class="a-button" style="display: inline-block;
											color: #fff;background: #1accfd; text-decoration: none;border: none; border-radius: 0;width: 150px;text-transform: uppercase;padding: 12px;letter-spacing: 1px;font-weight: 400; "
                                         onmouseover="this.style.background='black';" 
                                         onmouseout="this.style.background='#1accfd';"
											    >
																					
								      <form action="#" method="post">
                                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button" style="color: #fff; display: block; margin-right: 5px; ">Đặt hàng</a>
                                        </form>
										</div>	
										
									</div>
                    
                   
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?> 
              </div>
            </div>
          </div>
          </div>
          
        </div>
        <!-- /category product --> 
	<!-- /sale -->
	<!-- hot news -->
<div class="featured-section" id="projects" style="margin-top: 20px;">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Tin tức Hot
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
	<div class="content-bottom-in">
		<ul id="flexiselDemo1">
			<?php
      $news = $this->modelHotNews();
      ?>
      <?php foreach ($news as $rows) : ?>
			<li style="border-right: 1px solid rgba(0, 0, 0, 0.22); margin-left: 5px; ">
						<div class="w3l-specilamk" style="border: none !important;">
							<div class="speioffer-agile">
								<a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image" > <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>"  height="180px" width="210px" >  </a>
							</div>
							<div class="product-name-w3l">
								<div class="info">
               <h4><b><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-size: 17px;"><?php echo $rows->name; ?></a></b></h4>
              <p class="desc" style="font-size: 17px;"><?php echo $rows->description; ?></p>
            </div>
							</div>
						</div>
					</li>
					 <?php endforeach; ?>
					</ul>
			</div>
		</div>
	</div>
			---
  
	</div>
</div>
<!-- /hotnews -->
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
	
 <!-- <style type="text/css">
 	.content-taba4{
 		width:1150px;
 		height: 500px;
 	}
 </style> -->
 <style type="text/css">
 	.overlay {
  position: absolute; 
  bottom: 0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;

  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  vertical-align: middle;
}
.men-thumb-item:hover .overlay {
  opacity: 1;
}
.men-thumb-item {
  position: relative;
   width: 100%;
  max-width: 300px;
}
 </style>