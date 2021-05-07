<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<h1 style="background-color: #f0ad4e; text-align: center;">Sản phẩm yêu thích</h1>
 	<div class="template-cart" style="margin-top: 30px;">
            <div class="table-responsive">
              <table class="timetable_sub"  style="border: 2px solid #ddd;">
                <thead>
                  <tr>
                    <th class="imagee" style="color:white;"><b>Ảnh sản phẩm<b></th>
                    <th class="namee" style="width: 300px; color:white; "><b>Tên sản phẩm</b></th>
                    <th style="width: 50px; color:white;"><b>Xóa</b></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($_SESSION["Wishlist"] as $product): ?>
                  <tr>
                    <td><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" width="100px" height="100px"/></td>
                    <td><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>" style="font-weight: bold;"><?php echo $product['name']; ?></a></td>
                    <td><a href="index.php?controller=wishlist&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
              	<?php endforeach; ?>
                </tbody>
              </table>
            </div>          
        </div>
        