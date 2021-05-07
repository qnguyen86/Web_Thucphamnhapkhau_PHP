<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
<h1 style="background-color: #f0ad4e; text-align: center;">Tin tức</h1>
        <div class="wrapper-blog"> 
          <!-- list news -->
          <div class="row">
            <?php foreach($data as $rows): ?>
            <div class="col-md-6 article" style="width: 300px; height: 600px; margin-top: 15px; border: 1px solid gray; margin-left: 20px; margin-bottom: 15px;"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
              <h3><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
              
              <p class="desc"><?php echo $rows->description; ?></p>
            </div>
            <?php endforeach; ?>
          </div>
          <!-- end list news --> 
          <!-- list news -->
          
          <!-- end list news --> 
          <!-- list news -->
          
          <!-- end list news -->
         <!-- end list news -->
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a href="#">Trang</a></li>
            <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li><a href="index.php?controller=news&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endfor; ?>
          </ul>
        </div>