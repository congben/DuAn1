<?php

?>
<form action="index.php?pg=donhangsubmit" method="post">

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">
                    <!--Accordion Start-->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                sit amet ipsum luctus.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email <span>*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row-last">
                                    <label>Password <span>*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row">
                                    <input value="Login" type="submit">
                                    <label>
                                        <input type="checkbox">
                                        Remember me
                                    </label>
                                </p>
                                <p class="lost-password"><a href="#">Lost your password?</a></p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                    <!--Accordion Start-->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input placeholder="Coupon code" type="text">
                                    <input value="Apply Coupon" type="submit">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                
                    <div class="checkbox-form">
                        <h3>Chi Tiết Hóa Đơn</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Họ Tên <span>*</span></label>
                                    
                                    <input type="text" name="nguoi_dung_id" id="" value="<?= $nguoi_dung_id ?>">
                                    <input type="text" name="ho_ten" id="ho_ten" value="<?= $ho_ten ?>" placeholder="Nhập Họ Tên...">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email Address <span>*</span></label>
                                    <input placeholder="Nhập Địa chỉ Email..." name="user_email" id="user_email" value="<?= $email ?>" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Số Điện Thoại <span>*</span></label>
                                    <input type="text" name="user_sdt" id="user_sdt" value="<?= $so_dien_thoai ?>" placeholder="Nhập Số Điện Thoại...">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa Chỉ <span>*</span></label>
                                    <input placeholder="Địa chỉ..." name="user_diachi" id="user_diachi" type="text" value="<?= $dia_chi ?>">
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Ghi Chú Đặt Hàng</label>
                                    <textarea name="ghi_chu" id="checkout-mess" cols="30" rows="10" placeholder="Ghi chú về đơn đặt hàng của bạn..."></textarea>
                                </div>
                            </div>
                            <input name="tong_tien" id="user_diachi" type="text" value="<?= $tong ?>">


                            
                            
                        </div>
                        <!-- <div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                    <label>Giao Hàng Ở Địa Chỉ Khác?</label>
                                    <input id="ship-box" type="checkbox">
                                </h3>
                            </div>
                            <div id="ship-box-info" class="row">
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Họ Tên <span>*</span></label>
                                        <input type="text" name="nguoinhan_ten" id="nguoinhan_ten" placeholder="Nhập Họ Tên...">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa Chỉ <span>*</span></label>
                                        <input placeholder="Địa chỉ..." name="nguoinhan_diachi" id="nguoinhan_diachi" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span>*</span></label>
                                        <input placeholder="Nhập Địa chỉ Email..." name="nguoinhan_email" id="nguoinhan_email" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Số Điện Thoại <span>*</span></label>
                                        <input type="text" name="nguoinhan_tel" id="nguoinhan_tel" placeholder="Nhập Số Điện Thoại...">
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Ghi Chú Đặt Hàng</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Ghi chú về đơn đặt hàng của bạn..."></textarea>
                                </div>
                            </div>
                        </div> -->
                    </div>
                   
                
            </div>

            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Đơn Hàng Của Bạn</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">sản phẩm </th>
                                    <th class="cart-product-total">giá tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?= $tongtien ?>
                            </tbody>
                            <tfoot>
                               
                                <tr class="order-total">
                                    <th>Tổng tiền </th>
                                    <td><strong><span class="amount"><?= $tong ?></span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div id="accordion">
                                <!-- <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Direct Bank Transfer.
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
</div>
                                          </div> -->
                                <div class="card">
                                    <div class="card-header" id="#payment-2">
                                        <h5 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Phương Thức Thanh Toán 
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">

                                            
                                                <p><img src="./layout/images/payment/1.png" alt=""></p>

                                                <section style="display:flex; align-items:center;">
                                                    <input style="width:20px;" type="radio" id="momo" name="pttt" value="1"> Ví Điện Tử


                                                </section>
                                                <section style="display:flex;align-items:center;">
                                                    <input style="width:20px;" type="radio" id="momo" name="pttt" value="2"> Thẻ Ngân Hàng


                                                </section>
                                                <section style="display:flex; align-items:center;">
                                                    <input style="width:20px;" type="radio" id="momo" name="pttt" value="1"> Thanh Toán Bằng tiền mặt


                                                </section>
                                                
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card">
                                    <div class="card-header" id="#payment-3">
                                        <h5 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Thanh Toán Ví MOMO hoặc Thanh Toán Online
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <form style="display:flex; width:200px; justify-content: space-between;" action="index.php?pg=donhang" method="post">
                                                <section style="display:block;">
                                                    <input style="width:20px;" type="radio" id="momo" name="pttt" value="3">
                                                    <img style="width:50px; height:50px; border-radius: 5px;" src="./layout/images/payment/momo.jpg" alt="">

                                                </section>
                                                <section>
                                                    <input style="width:20px;" type="radio" id="tientk" name="pttt" value="3">

                                                    <img style="width:50px; height:50px; border-radius: 5px;" src="./layout/images/payment/cash.jpg" alt="">


                                                </section>



                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <!-- <div class="order-button-payment">
                                <button type="submit" name="donhangsubmit">Thanh Toán</button>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="order-button-payment">
                        <button type="submit" name="donhangsubmit">Thanh Toán</button>
                    </div>
</form>

<!--Checkout Area End-->