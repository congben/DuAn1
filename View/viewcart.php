    <?php
    
    ?>
    
    
    
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li class="active">Giỏ Hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">Xóa</th>
                                                <th class="li-product-thumbnail">Ảnh</th>
                                                <th class="cart-product-name">Tên Sản Phẩm</th>
                                                <th class="li-product-price">Giá</th>
                                                <th class="li-product-quantity"   colspan="2">Số Lượng </th>
                                                <th class="li-product-subtotal">Tổng</th>
                                            </tr>
                                        </thead>
                                        <?=$html_cart;?>
                                      
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                               <form action="index.php?viewcart&voucher=1" method="post">
                                                <input  type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">
                                               <input id="coupon_code" class="input-text" name="mavoucher" value="" placeholder="Nhập Mã..." type="text">
                                                <input class="button" name="apply_coupon" value="Áp dụng phiếu giảm giá" type="submit">
                                               </form>
                                            </div>
                                            <div class="coupon2" >
                                                <a  href="index.php?pg=viewcart&del=1">Xóa Rỗng Đơn Hàng</a>
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Tổng số giỏ hàng</h2>
                                            <ul>
                                                <li>Tổng <span><?=$tong?></span></li>
                                                <li>Tổng Thanh Toán <span><?=$tong?></span></li>
                                            </ul>
                                            <a href="#">Thanh Toán</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->