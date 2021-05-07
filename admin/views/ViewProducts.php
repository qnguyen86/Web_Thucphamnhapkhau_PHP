<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size: 20px; font-weight: bold;">Danh sách sản phẩm</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Photo</th>
                    <th>name</th>
                    <th style="width: 200px;">Danh mục</th>
                    <th style="width: 70px;">Discount</th>
                    <th style="width: 50px;">Hot</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php 
                    foreach($data as $rows):
                 ?>
                <tr>
                    <td>
                        <?php if($rows->photo!="" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                        <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 100px;" alt="" srcset="">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                        <?php 
                            $category = $this->modelGetCategory($rows->category_id);
                            echo isset($category->name)?$category->name:"";
                         ?>
                    </td>
                    <td style="text-align: center;">
                       <?php echo $rows->discount; ?>% 
                    </td>
                    <td style="text-align: center;">
                        <?php if(isset($rows->hot)&&$rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align:center; width: 200px;">
                        <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>" class="btn btn-success">Sửa</a>&nbsp;
                        <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-warning">Xóa</a>
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
                <li class="page-item"><a href="index.php?controller=products&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>