<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>                    
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading"><b>Add edit product</b></div>
        <div class="panel-body">
        <!-- muốn upload file thì trong thẻ form phải có thuộc tính: enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên sản phẩm</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Vị trí</div>
                <div class="col-md-10">
                    <input type="number" min="0" max="100" value="<?php echo isset($record->position)?$record->position:""; ?>" name="position" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Nội dung</div>
                <div class="col-md-10">
                   <textarea name="description" id="description">
                        <?php echo isset($record->description)?$record->description:""; ?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("description");
                    </script>
                </div>
            </div>
           
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ảnh</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <?php if(isset($record->photo) && file_exists("../assets/upload/slides/".$record->photo)): ?>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <img src="../assets/upload/slides/<?php echo $record->photo; ?>" style="width: 100px;">
                </div>
            </div>
            <!-- end rows -->
        <?php endif; ?>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>