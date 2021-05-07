<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=categories&action=create" class="btn btn-primary">Thêm danh mục</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading"><b>Danh sách danh mục</b></div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="font-size: 20px; background-color: #22cdf3; " colspan="2">Tên danh mục</th>
                   
                </tr>
                <?php 
                    foreach($data as $rows):
                 ?>
                <tr>
                    <td style="font-weight: bold;"><?php echo $rows->name; ?></td>
                    <td style="text-align:center; width: 200px;">
                        <a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>" class="btn btn-success" >Sửa</a>

                        <a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-warning">Xóa</a>
                    </td>
                </tr>
                    <?php 
                        $dataSub = $this->modelReadSub($rows->id);
                     ?>
                     <?php foreach($dataSub as $rowsSub): ?>
                        <tr>
                            <td style="padding-left: 30px;"><?php echo $rowsSub->name; ?></td>
                            <td style="text-align:center; width: 150px;">
                                <a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>" class="btn btn-success">Sửa</a>&nbsp;
                                <a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-warning">Xóa</a>
                            </td>
                        </tr>
                     <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=categories&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>