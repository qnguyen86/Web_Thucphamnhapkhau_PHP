<!-- Header 
		=====================================================================================================================-->

	<div class="header-top">
		<p>QUYSHOP-Department store for family</p>
	</div>
	<!-- header-bot -->
	<div class="header-bot">
		<div class="header-main">
			<!-- header-bot-->
			<div class="col-md-4 logo">
				<h1>
					<a href="index.php">
						QuyShop
						<img src="assets/frontend/images/log.jpg" alt=" "  width="100px;" height="60px;">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
	        <div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
							<span class="fa fa-map-marker" aria-hidden="true"></span> Vị trí</a>
					</li>
					<li>
						<a href="https://www.facebook.com/Shop-Quy-108878014635144">
							<span class="fa fa-facebook-official" aria-hidden="true" ></span>Facebook</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 0386152222
					</li>
        <?php if(isset($_SESSION["customer_email"])): ?>
          <a href="index.php?controller=account&action=orders"><?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a>
        <?php else: ?>
        	<li>
        		<a href="index.php?controller=account&action=login"><span class="fa fa-unlock-alt" aria-hidden="true"></span>Đăng Nhập</a>
        	</li>

        <li>
        	<a href="index.php?controller=account&action=register"><span class="fa fa-pencil-square-o" aria-hidden="true"></span>Đăng ký</a>
        	</li> 
        <?php endif; ?>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="search_infor" style="position: relative;">
						<input name="search" type="text" placeholder="How can we help you today?" required="" id="key" size="60" height="80">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true" onclick="return search();"> </i>
						</button>
					<div class="smart-search">
          <ul>
            
          </ul>
        </div>
				</div>
				<style type="text/css">

          .smart-search{width: 480px; background: white; position: absolute; top: 87px; max-height: 400px; overflow: scroll; z-index: 10; display: none;}
                                .smart-search ul{padding:0px; margin:0px; list-style: none;}
                                .smart-search ul li{background: white; border-bottom: 1px solid #dddddd; width: 460px;overflow: hidden; text-overflow: ellipsis; white-space: nowrap; text-align: left;}
                                .smart-search img{ width: 70px; height: 50px;margin-right: 5px;}
        /*.smart-search{position: absolute; width: 100%; background:white; z-index: 1; display:none; height: 350px; overflow: scroll;}
        .smart-search ul{padding:0px; margin:0px; list-style: none;}
        .smart-search ul li{border-bottom: 1px solid #dddddd;}
        .smart-search img{width: 70px;  height:50px; margin-right: 5px;}*/
      </style>
      <script type="text/javascript">
        $(document).ready(function(){
          $(".search_infor").keyup(function(){
            var strKey = $("#key").val();
            //ham trim() cat khoang trang trai phai cua chuoi
            if(strKey.trim() == "")
              $(".smart-search").attr("style","display:none;");
            else{
              $(".smart-search").attr("style","display:block;");
              //---
              //su dung ajax de lay du lieu
              $.get( "index.php?controller=search&action=ajaxSearch&key="+strKey, function( data ) {
                  //clear data cua the ul
                  $(".smart-search ul").empty();
                  //them du lieu vua lay duoc bang ajax vao the ul
                  $(".smart-search ul").append(data);
              });
              //---
            }
          });
        });
      </script>
				<!-- //search -->
				<!-- cart details -->
				<?php 
                      $numberProduct = 0;
                      if(isset($_SESSION["cart"])){
                      foreach ($_SESSION["cart"] as $value) {
                       $numberProduct++;
                    }
                }
             ?>
				
</div> 
<button class="w3view-cart" type="" name="" value="" style="margin-left: -180px; margin-top: 45px;" >
<div  class="fa fa-cart-arrow-down btn-group" aria-hidden="true" style="float: left;">
  <a  class="badge badge-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo $numberProduct; ?> </span>
  </a>
  <div class="dropdown-menu" style="width: 200px;">
    <a class="dropdown-item" href="#">
    	<?php if(isset($_SESSION["cart"])): ?>
  <?php foreach($_SESSION["cart"] as $product): ?>
             <div class="con1" style="border: 1px solid rgba(0, 0, 0, 0.22); height: 100px; " >
             	 <div class="image1" style="float: left;"> <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"> <img alt="<?php echo $product["name"]; ?>" src="assets/upload/products/<?php echo $product["photo"]; ?>" title="<?php echo $product["name"]; ?>" class="img-responsive" width="60px" height="60px"> </a> </div>
                <div class="con21" style="margin-left: 50px; ">
                  <span><a href="/Product/Detail/11" style="font-size: 15px;"><?php echo $product["name"]; ?>
                  </span>

                  <span><p><?php echo $product["number"]; ?> x <?php echo number_format($product["price"]); ?>₫</p></span>
                </div>
                <div class="con31">
                	</a>
<a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"> 
                		<i class="fa fa-trash" style="float: right; width:15px; margin-right: 10px;"></i>
                	</a> 
                </div>
                <!-- <div style="float: right;"> 
                	
                </div> -->
             </div>
           
              <?php endforeach; ?>
              <?php endif; ?>
             <div class="con21" style="margin-left: 50px; margin-top: 30px;">
             	
             	<a href="index.php?controller=cart&action=checkout"  type="button" class="btn btn-primary">Thanh toán</a>
            
             </div>
         	
    </a>
    
  </div>
</div>		
</button>
        <!-- <div class="content-mini-cart">
          <div class="has-items">
            <ul class="list-unstyled">
              
            </ul>
            <a href="/Cart/Checkout" class="button">Thanh toán</a> </div>
        </div> -->
     
    
    <!-- /min cart -->
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- menu-top -->
	<!-- navigation -->
	<div class="ban-top">
		<!-- container -->
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						
						
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1" >
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="index.php" style="font-size: 18px; background: white;">Trang chủ
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">Danh mục
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column" style="max-height: 350px; ">
										<?php 
												      //load MVC băng tay
												    include "controllers/ControllerCategories.php";
												    $obj = new ControllerCategories();
												    $obj->index();
												     ?>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="index.php?controller=cart" style="font-size: 18px;">Giỏ hàng</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="index.php?controller=orders" style="font-size: 18px;"> Đơn hàng</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="index.php?controller=wishlist" style="font-size: 18px;">Sản phẩm yêu thích</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="index.php?controller=news" style="font-size: 18px;">Tin tức</a>
								</li>
								
								<li class="">
									<a class="nav-stylehead" href="index.php?controller=contact" style="font-size: 18px;">Liên hệ</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- //navigation -->

	<!-- //header-bot -->
	<!-- /Header