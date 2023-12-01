<?php
require_once 'database.php';

function them_donhang($id, $nguoi_dung_id, $ho_ten, $email, $so_dien_thoai, $dia_chi, $ghi_chu, $ngay_dat_hang,  $tong_tien){
    $sql = "INSERT INTO donhang (id, nguoi_dung_id, ho_ten, email, so_dien_thoai, dia_chi, ghi_chu, ngay_dat_hang, tong_tien) VALUES (null, ?,?,?, ?,?,?, ?,?s)";
    pdo_execute($sql,$id, $nguoi_dung_id, $ho_ten, $email, $so_dien_thoai, $dia_chi, $ghi_chu, $ngay_dat_hang,  $tong_tien);
}
function them_dhchitiet($id, $don_hang_id, $san_pham_id, $so_luong, $tong_tien){
    $sql = "INSERT INTO chitietdonhang (id, don_hang_id, san_pham_id, so_luong, tong_tien) VALUES (null, ?,?,?, ?)";
    pdo_execute($sql,$id, $don_hang_id, $san_pham_id, $so_luong, $tong_tien);


}




function tt()
{
    $html_cart = '';
    $i = 1;
    //var_dump($_SESSION['giohang']);
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $sanpham_tt = intval($gia) * intval($soluong);
        $html_cart .= '
        <tr class="cart_item">
                                    <td class="cart-product-name"> ' . $ten_sp . '<strong class="product-quantity">
                                            × ' . $soluong . '</strong></td>
                                    <td class="cart-product-total"><span class="amount">' . $sanpham_tt . '</span></td>
                                </tr>    
        ';
        $i++;
    }
    return $html_cart;
}





