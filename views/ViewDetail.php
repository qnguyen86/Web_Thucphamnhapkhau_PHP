<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="main-detail">
 	<div class="main-de" style="display: flex;">
	<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2" style="margin-top: 20px;">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="assets/upload/products/<?php echo $record->photo; ?> " style="list-style: none;">
								<div class="zoom1 thumb-image">
									<img src="assets/upload/products/<?php echo $record->photo; ?>" data-imagezoom="true" class="img-responsive" alt="" style="width: 80%;"> </div>
							</li>
					
						</ul>
						<div class="clearfix"></div>
					</div>

				</div>
			</div>
<div class="col-md-7 single-right-left simpleCart_shelfItem" >
				<h3><?php echo $record->name; ?></h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5" <?php echo $this->modelGetStar($record->id,1); ?>>
						
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4" <?php echo $this->modelGetStar($record->id,2); ?>>
						
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="" <?php echo $this->modelGetStar($record->id,3); ?>>
						
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2" <?php echo $this->modelGetStar($record->id,4); ?> >
						
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1" <?php echo $this->modelGetStar($record->id,5); ?>>
						<?php echo $this->modelGetStar($record->id,5); ?>
						<label for="rating1">1</label>
					</span>
				</div>
				<div class="single-product-condition">
										<p>Danh mục: <span><?php echo $this->getCategory($record->category_id); ?></span></p>
										<!-- <p>Còn hàng: 16&nbsp;<span>sản phẩm</span></p> -->
									</div>
				<p>
					<span class="item_price"><?php echo number_format($record->price - ($record->price*$record->discount/100)); ?></span>
					<del><?php echo number_format($record->price); ?></del>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile" style="color: black;">
					<p><b>Giới thiệu</b></p>
					<?php echo $record->description; ?>
				</div>
				<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" style="margin-top: 20px;">
										<div class="a-button" style="display: inline-block;
											color: #fff;background: #1accfd; text-decoration: none;border: none; border-radius: 0;width: 170px;text-transform: uppercase;padding: 13px;letter-spacing: 1px;font-weight: 400; height: 50px;"
                                         onmouseover="this.style.background='black';" 
                                     onmouseout="this.style.background='#1accfd';"
											    >										
								      <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>"  style="display: block; color: #fff;">Đặt hàng</a>
										</div>	
										
									</div>

			</div>
</div>
 	

<div class="product-single1-w3l" style="border-top:1px solid rgba(0, 0, 0, 0.22); margin-top: 20px;">
	<button type="button2" class="collapsible"><b>Mô tả sản phẩm</b></button>
<div class="content2">
					<?php echo $record->content; ?>
</div>
				</div>
 </div>
 

<div class="fb-comments" data-href="https://www.facebook.com/Shop-Quy-108878014635144" data-width="800" data-numposts="5"></div>
 <!-- special offers -->
	
	<!-- //special offers -->
          
        
			
<!-- <style type="text/css">
.collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}
.active, .collapsible:hover {
  background-color: #22cdf3;
}

.content2 {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
.zoom1 {
  padding: 50px;
  transition: transform .2s;
  width: 420px;
  height: 420px;
  margin: 0 auto;
}

.zoom1:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style> -->
		<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>	
