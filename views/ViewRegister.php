<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <style type="text/css">
   .template-customer{
    color: black;
   }
   .title{color: black; font-size: 30px; font-weight: bold; margin-left: 30px;}
   .form-group .input-control{width:400px;height:35px;padding:5px 10px;outline:none;border:solid 1px #d1d1d1}
 </style>
<div class="template-customer">
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="index.php?controller=account&action=registerPost">
                  <p class="title"><span>Đăng ký tài khoản</span></p>
                  <div class="form-group">
                    <label>Họ và tên:</label>
                    <input type="text" name="name" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="text" name="email" class="input-control" required>
                  </div>
                  <div class="form-group">
                    <label>Địa chỉ:</label>
                    <input type="text" name="address" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Điện thoại:</label>
                    <input type="text" name="phone" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <input type="password" name="password" class="input-control" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success button" value="Đăng ký">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title"><span>Đăng nhập</span></p>
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=account&action=login" class="btn btn-success button">Đăng nhập</a> </div>
            </div>
          </div>
        </div>