   <!-- Header Area End Here -->
   <?php
 require_once 'Model/database.php';
    if(isset($_SESSION['s_user'])&&($_SESSION['s_user'])){
      extract($_SESSION['s_user']);
    }

?>
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li class="active">Thông Tin Tài Khoản</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="index.php?pg=updateuser" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">THÔNG TIN TÀI KHOẢN CỦA BẠN</h4>
                                    <div class="row">
                                    <div class="col-md-12 col-12 mb-20">
                                            <label>Họ Và Tên</label>
                                            <input value="<?=$ho_ten ?>" id="ho_ten" name="ho_ten" class="mb-0" type="text" placeholder="Nhập tên ...">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email *</label>
                                            <input value="<?=$email?>" id="email" name="email" class="mb-0" type="email" placeholder="Nhập email...">
                                        </div>
                                        
                                        <div class="col-md-12 mb-20">
                                            <label>Số điện thọai</label>
                                            <input value="<?=$so_dien_thoai?>" id="so_dien_thoai" name="so_dien_thoai" class="mb-0" type="number" placeholder="Nhập số điện thoại...">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Địa chỉ </label>
                                            <input value="<?=$dia_chi?>" id="dia_chi" name="dia_chi" class="mb-0" type="text" placeholder="Nhập dịa chỉ...">
                                        </div>
                                        
                                        <div class="col-md-6 mb-20">
                                            <label>Ngày tạo</label>
                                            <input value="<?=$ngay_tao?>" id="ngay_tao" name="ngay_tao" class="mb-0" type="text" placeholder="Nhập mật khẩu...">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Ngày Cập Nhật</label>
                                            <input value="<?=$ngay_cap_nhat?>" id="ngay_cap_nhat" name="ngay_cap_nhat" type="date" class="mb-0" type="password" >
                                        </div>
                                        <div class="col-12 input-khang">
                                            <input type="hidden" name="id" value="<?=$id?>">
                                            <input class="register-button" type="submit" name="capnhat" value="Cập Nhật">
    
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->