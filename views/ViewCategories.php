
				<?php 
	                $categories =$this->modelListCategories();
	             ?>
	             <?php foreach($categories as $rows): ?>
	            <li id="fathe" style="font-size: 18px;"><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
	            <?php 
	                $categoriesSub =$this->modelListCategoriesSub($rows->id);
	             ?>
	             <?php foreach($categoriesSub as $rowsSub): ?>
	            <li id="son"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>">&nbsp; &nbsp; &nbsp;<?php echo $rowsSub->name; ?></a></li>
	        <?php endforeach; ?>
	    <?php endforeach; ?>
	    <style type="text/css">
	    	#fathe a:hover { 
    background-color: #1accfd;
}
            #son a:hover { 
    background-color: #ff5722;
}
	    </style>
			
			