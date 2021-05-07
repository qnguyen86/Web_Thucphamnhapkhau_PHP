                   <!-- sua -->
                    <?php 
                    //load file Layout.php
                    $this->fileLayout="Layout.php";
                     ?>
<!-- sua cop tu user sang day them load layout -->
                    <div class="col-md-12">
                        <div class="thanh ngang" style="display: flex;">
                        <div style="margin-bottom:5px;">
                            <!-- href="#" sua thanh nhu duoi -->
                  <a href="index.php?controller=users&action=create" class="btn btn-primary">Add user</a>
                        </div>
                            

                    </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">List User</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover" border="2px">
                                    <tr>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th style="width:100px;"></th>
                                    </tr>
                                    <?php 
                                    foreach ($data as $rows):
                                    ?>
                                    <tr>
                                        <td><?php echo $rows->name; ?></td>
                                        <td><?php echo $rows->email; ?></td>
                                        <td style="text-align:center; width: 200px;">
                                            <a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>" class="btn btn-success">Sửa</a>&nbsp;
                                            <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-warning">Xóa</a>
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
                       <li class="page-item"><a href="index.php?controller=users&page=<?php echo $i; ?>"
                        class="page-link"><?php echo $i; ?></a></li>
                      <?php endfor; ?>
                      </ul>
                                    
                            </div>
                        </div>
                    </div>