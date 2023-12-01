   <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Trang Chủ</a></li>
                            <li class="active">Đăng Nhập</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-6 mx-auto">
                            <!-- Login Form s-->
                            <form action="index.php?pg=login" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">Đăng Nhập</h4>

                                    <h3 style="color: red; font-size:20px;">
                                                <?php if (isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")) {
                                                    echo $_SESSION['tb_dangnhap'];
                                                      unset($_SESSION['tb_dangnhap']);
                                                }
                                                
                                              
                                                
                                                ?>
                                            </h3>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Email đăng nhập </label>
                                            <input name="email" class="mb-0" type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Mật Khẩu</label>
                                            <input name="mat_khau"  class="mb-0" type="password" placeholder="Password">
                                        </div>
                                        <!-- <div class="col-md-8">
                                           
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div> -->
                                        <div class="col-12 input-khang">
                                            <input class="register-button" type="submit" name="dangnhap" value="Đăng Nhập">
    
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->