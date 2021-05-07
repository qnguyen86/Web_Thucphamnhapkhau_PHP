<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>   
 <div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=slides&action=create" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size: 20px; font-weight: bold;">Slides</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Hình ảnh</th>
                    <th>Tên</th>
                    <th style="width: 200px;">Nội dung</th>
                    <th style="width: 100px;">Vị trí</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php 
                    foreach($data as $rows):
                 ?>
                <tr>
                    <td>
                        <?php if($rows->photo!="" && file_exists("../assets/upload/slides/".$rows->photo)): ?>
                        <img src="../assets/upload/slides/<?php echo $rows->photo; ?>" style="width: 100px;" alt="" srcset="">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                       <?php echo $rows->description; ?>
                    </td>
                    <td style="text-align: center;">
                       <?php echo number_format($rows->position); ?>
                    </td>
                    
                    <td style="text-align:center; width: 200px;">
                        <a href="index.php?controller=slides&action=update&id=<?php echo $rows->id; ?>" class="btn btn-success">Sửa</a>&nbsp;
                        
                    </td>
                </tr>                    
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=slides&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>