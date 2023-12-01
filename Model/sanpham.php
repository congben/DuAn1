<?php

function get_dssp_new($limi){
    $sql = "SELECT * FROM sanpham ORDER BY id ASC limit ".$limi;
    return pdo_query($sql);
}

// function get_dssp_best($limi){
//     $sql = "SELECT * FROM sanpham WHERE bestseller=1 ORDER BY sanpham_id DESC limit ".$limi;
//     return pdo_query($sql);
//}
// function get_dssp_view($limi){
//     $sql = "SELECT * FROM sanpham ORDER BY sanpham_view DESC limit ".$limi;
//     return pdo_query($sql);
// }
function get_dssp($kyw,$iddm,$limi){
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($iddm>0){
        $sql .=" AND id=".$iddm;
    }
    if($kyw!=""){
        $sql .=" AND ten_sp like '%".$kyw."%'";
    }

    $sql .= " ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}



function get_dssp_lienquan($iddm,$id,$limi){
    $sql = "SELECT * FROM sanpham WHERE danh_muc_id=? AND id<>? ORDER BY id DESC limit ".$limi;
    return pdo_query($sql,$iddm,$id);
}





function showsp($dssp){
    $html_dssp='';
    foreach ($dssp as $sp) {
        extract($sp);
        // if($bestseller==1){
        //     $best='<div class="best"></div>';
        // }else{
        //     $best='';
        // }
        $html_dssp.='<div class="col-lg-12">
        <!-- single-product-wrap start -->
        <div class="single-product-wrap">
            <div class="product-image">
                <a href="index.php?pg=chitietsanpham&id='.$id.'">
                    <img src="layout/images/sanpham/'.$hinh_anh.'" alt="Lis Product Image">
                </a>
                 <span class="sticker">%</span>
            </div>
            <div class="product_desc">
                <div class="product_desc_info">
                    <div class="product-review">
                        <h5 class="manufacturer">
                            <a href="shop-left-sidebar.html">'.$danh_muc_id.'</a>
                        </h5>
                        <div class="rating-box">
                            <ul class="rating">
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                    <h4><a class="product_name" href="index.php?pg=chitietsanpham&id='.$id.'"> '.$ten_sp.' </a></h4>
                    <div class="price-box">
                        <span class="new-price"> '.$gia.' VNĐ</span>
                        <span class="discount-percentage">%</span>
                    </div>
                </div>
                <div class="add-actions">
                    <ul class="add-actions-link">
                    <form action="index.php?pg=addcart" method="post">
                    <input type="hidden" name="id"value="'.$id.'">
                    <input type="hidden" name="ten_sp" class="name-sp" value="'.$ten_sp.'">
                    <input type="hidden" name="hinh_anh" value="'.$hinh_anh.'">
                    <input type="hidden" name="gia" value="'.$gia.'">
                    <input type="hidden" name="soluong" value="1">
                   
                    <li class="add-cart active" > <button type="submit" name="addcart" style="font-size: 13px;" >Thêm Giỏ Hàng</button></li>
                    </form>
                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- single-product-wrap end -->
    </div>';
    }
    return $html_dssp;
}
function get_sanphamchitiet($id){
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql,$id);
}

?>
