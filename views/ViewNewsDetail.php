<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <h1 style="background-color: #f0ad4e; text-align: center;">Tin tức</h1>
 <div class="wrapper-blog">
   <h3><b><?php echo $record->name; ?></b></h3>
   <p><img src="assets/upload/news/<?php echo $record->photo; ?>" class="img-thumbail"></p>
   <p><?php echo $record->description; ?></p>
   <p><?php echo $record->content; ?></p>

 </div>