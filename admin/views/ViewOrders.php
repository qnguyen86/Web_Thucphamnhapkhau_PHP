<!-- load file layout chung -->
<?php $this->fileLayout = "Layout.php"; ?>
<div class="col-md-12">    
    <div class="panel panel-primary">
        <div class="panel-heading">List Orders</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Price</th>                    
                    <th style="width:150px; text-align: center;">Status</th>
                    <th style="width:150px;">Delivery</th>
                    <th></th>
                </tr>
                <?php foreach($listRecord as $rows): ?>
                <?php   
                    //lay ban ghi customer
                    $customer = $this->modelGetCustomers($rows->customer_id);
                 ?>
                 <tr>
                     <td><?php echo $customer->name; ?></td>
                     <td><?php echo $customer->phone; ?></td>
                     <td>
                        <?php 
                        $date = Date_create($rows->date);
                        echo Date_format($date, "d/m/Y");
                        ?>                            
                        </td>
                     <td><?php echo number_format($rows->price); ?></td>
                     <td style="text-align: center;">
                         <?php if($rows->status == 1): ?>
                            <span class="label label-primary">Đã giao hàng</span>
                         <?php else: ?>
                            <span class="label label-danger">Chưa giao hàng</span>
                         <?php endif; ?>
                     </td>
                     <td style="text-align: center;">
                        <a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>" class="label label-success">Chi tiết</a>
                        <?php if($rows->status == 0): ?>
                            <a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="label label-info">Giao hàng</a>
                         <?php endif; ?>
                     </td>
                     <td>
                         <a href="index.php?controller=orders&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-warning">Xóa</a>
                     </td>
                 </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <a href="index.php?controller=users&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<style type="text/css">
    .label-danger{
    background-color: #dd4b39 !important;
}
.label-primary{
    background-color: #3c8dbc !important;
}
.label-success {
    background-color: #5cb85c;
}
.label-info {
    background-color: #00c0ef !important;
}
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
</style>
