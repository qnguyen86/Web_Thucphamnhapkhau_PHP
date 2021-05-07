<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>

 <div class="agileinfo-ads-display col-md-12 w3l-rightpro">
				<div class="wrapper">

 <h3>Tìm kiếm - Giá từ <?php echo number_format($fromPrice) ?> ₫ đến <?php echo number_format($toPrice); ?> ₫</</h3>
 <div class="product-sec1">
 	<div class="clearfix">
 		<?php foreach($data as $rows): ?>
						
						<div class="col-md-4 product-men" style="display: block; width: 220px; height: 400px;">
							
							<div class="men-pro-item simpleCart_shelfItem" style="height: 400px; overflow: hidden; border: 1px solid #F7F7F5;">
								<div class="li-pro" style="height: 340px;">
								<div class="men-thumb-item">
									<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro" >
											<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
									</h4>
									<div class="info-product-price">
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
                                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button" style="color: #fff; display: block; width: 200px; height: 20px; font-size: 17px;">Đặt hàng</a>
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
                    <li class="page-item"><span>Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                   <li class="page-item">
                   <a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a>
                   </li>
                   <?php endfor; ?>
                 </ul>
                </div>
                <!-- end paging --> 
						  </div>

						</div>
						 
             </div>
         </div>
					
						