<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <!-- tittle heading -->
			<h3 class="tittle-w3l">Detail
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
 <div class="agileinfo-ads-display col-md-12 w3l-rightpro">
				<div class="wrapper">
 <div class="header-detail" style="border: 1px solid rgba(0, 0, 0, 0.22); width: 800px; height: 50px;">
 	<div class="col-lg-3 pull-right text-right" style="margin-top: 5px;">
                <select class="form-control" onchange="location.href ='index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
                  <option value="0">Sắp xếp</option>
                  <option value="priceAsc">Giá tăng dần</option>
                  <option value="priceDesc">Giá giảm dần</option>
                  <option value="nameAsc">Sắp xếp A-Z</option>
                  <option value="nameDesc">Sắp xếp Z-A</option>
                </select>
              </div>
 </div>
 <div class="product-sec1">
 	<div class="clearfix">
 		<?php foreach($data as $rows): ?>
						
						<div class="col-md-4 product-men" style="display: block; width: 220px; height: 400px;">
							
							<div class="men-pro-item simpleCart_shelfItem" style="height: 400px; overflow: hidden; border: 1px solid #F7F7F5;">
								<div class="li-pro" style="height: 340px;">
								<div class="men-thumb-item" style="height:150px;">
									<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" style="height: 100px;"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive" ></a>
									 <a style="background: #fc636b none repeat scroll 0 0; color: #fff !important; display: block; font-size: 11px; line-height: 27px; left: 5px; padding: 0 10px; position: absolute; text-transform: uppercase; top: 5px; z-index: 10; border-radius: 30px;">- <?php echo $rows->discount; ?>%</a>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product " style="height: 150px;">
									<div class="fix-name2" style="height:80px;">
										<h4>
										<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
									</h4>
									</div>
									
									<div class="info-product-price" style="height: 30px;">
										<span class="item_price"><?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?></span>
										<del><?php echo number_format($rows->price); ?>
										</del>
									</div>
									

								</div>
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
						
						 <?php endforeach; ?>
						 <!-- paging -->
						   <div style="clear: both;"></div>
             <div style="margin-top: -25px;" class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                  <ul class="pagination">
                     <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                   <li class="page-item">
                   <a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $category_id; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                   </li>
                   <?php endfor; ?>
                 </ul>
                </div>
                <!-- end paging --> 
						  </div>

						</div>
						 
             </div>
         </div>
					
						