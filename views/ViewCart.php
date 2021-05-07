<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <!-- checkout page -->
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Giỏ hàng
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				 <form action="index.php?controller=cart&action=update" method="post">
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th class="image">Ảnh</th>
								<th class="name">Tên sản phẩm</th>
								<th class="price">Giá</th>
								<th class="quantity">Số lượng</th>

								<th class="price">Tổng tiền</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<?php foreach($_SESSION["cart"] as $product): ?>
						<tbody>
							<tr class="rem1">
								<td class="invert" style="width: 200px;">
									
										<img src="assets/upload/products/<?php echo $product["photo"]; ?>" class="img-responsive"  width="100px;" height="50px;"/>
									
								</td>
								
								<td class="invert" style="width: 200px;"><a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></td>
								<td class="invert" ><?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?></td>
								<td class="invert" >
									<div class="quantity"><input type="number" size="2" id="qty" min="1"  value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" ></div>
									
								</td>
									<style type="text/css">
										.quantity input[type="number"] {
											    border: 1px solid #5a88ca;
											    padding: 5px;
											    width: 50px;
											}
								</style>
								<td class="invert">
									<p><b><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?>₫</b></p>
								</td>
								<td class="invert">
									<a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
				
						</tbody>
						<?php endforeach; ?>
						<?php if($this->cartNumber() > 0): ?>
                <tfoot>
                  <tr>
                    <td colspan="6"><button type="button" class="btn btn-warning"><a href="index.php?controller=cart&action=destroy" class=" btn-warning  ">Xóa toàn bộ</a> </button>
                    	<a href="index.php" class="btn btn-success button pull-right">Tiếp tục mua hàng</a>
                    	&nbsp;&nbsp;
                      <input type="submit" class="btn btn-success button" value="Cập nhật" style="margin-left: 320px;"></td>
                  </tr>
                </tfoot>
            	<?php endif; ?>
					</table>
				</div>
				 </form>
          <?php if($this->cartNumber() > 0): ?>
          <div class="total-cart" style="font-weight: bold;"> Tổng tiền thanh toán:
            <?php echo number_format($this->cartTotal()); ?>₫ <br>
           <a href="index.php?controller=cart&action=checkout" class="btn btn-success">Thanh toán</a> </div>
           <?php endif; ?>
        </div>
			
			
	<!-- //checkout page -->
	