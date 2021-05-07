<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <style type="text/css">
   .template-customer{
    color: black;
   }
   .form-group .input-control{width:400px;height:35px;padding:5px 10px;outline:none;border:solid 1px #d1d1d1}
 </style>
<div class="template-customer">
          <h1 style="font-size: 40px; font-weight: bold; margin-left: 30px;">Đăng nhập</h1>
          <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="index.php?controller=account&action=loginPost">
                  <p class="title"><span>Đăng nhập tài khoản</span></p>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="email" class="input-control" name="email" required="">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <input type="password" class="input-control" name="password" required="">
                  </div>
                  <input type="submit" class="btn btn-success button" value="Đăng nhập">
                </form>
              </div>
            </div>
          </div>
        </div>