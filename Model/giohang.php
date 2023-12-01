<?php
require_once 'database.php';
function viewcart()
{
    $html_cart = '';
    $i = 1;
    //var_dump($_SESSION['giohang']);
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $sanpham_tt = intval($gia) * intval($soluong);
        $html_cart .= '
        <tbody>
        <tr>
            <td class="li-product-remove"><a href="index.php?pg=giohang&del='.$id.'"><i class="fa-solid fa-trash" style="color: #000000;"></i></a></td>
            <td class="li-product-thumbnail"><a href="#"><img style="width:150px;" src="layout/images/sanpham/' . $hinh_anh . '" alt="Lis Product Image"></a></td>
            <td class="li-product-name"><a href="#">' . $ten_sp . '</a></td>
            <td class="li-product-price"><span class="amount">' . number_format($gia,0,',','.') . '</span></td>
            
                <form action="index.php?pg=giohang" method="post" enctype="multipart/form-data">
                    <td align="center">
                        <input type="number" name="soluong"  value="' . $soluong . '" min = 1 max = 200>
                         <input hidden type="type" name="id" value="' . $id . '"> </td>
                    <td align="center">=</td>
                    <td class="product-subtotal"><span class="amount">' .number_format($sanpham_tt,0,',','.'). '</span></td>
                     <td><input type="submit" value="Edit"></td>
                </form>
        </tr>
    </tbody>
        ';
        $i++;
    }
    return $html_cart;
}
function get_tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $sanpham_tt = intval($gia) * intval($soluong);
        $tong += $sanpham_tt;
    }
    return number_format($tong,0,',','.');
}
function cart_small()
{
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);

        $html_cart .= '
        <li>
            <a href="index.php?pg=chitietsanpham&id=' . $id . '" class="minicart-product-image">
                <img src="layout/images/sanpham/' . $hinh_anh . '" alt="cart products">
            </a>
            <div class="minicart-product-details">
                <h6><a href="index.php?pg=chitietsanpham&id=' . $id . '"> ' . $ten_sp . '</a></h6>
                <span>' . $gia . ' x ' . $soluong . '</span>
            </div>
            <button class="close" title="Remove">
                <i class="fa fa-close"></i>
            </button>
        </li>';
    }

    return $html_cart;
}
function xoaspgiohang($id) {
    // Kiểm tra xem giỏ hàng có tồn tại không
    if (isset($_SESSION['giohang'])) {
        // Tìm và xóa sản phẩm khỏi giỏ hàng
        foreach ($_SESSION['giohang'] as $key => $sp) {
            if ($sp['id'] == $id) {
                unset($_SESSION['giohang'][$key]);
                break;
            }
        }
    }
}

function sosanpham() {
    $count = 0;

    if (isset($_SESSION['giohang'])) {
        $count = count($_SESSION['giohang']);
    }

    return $count;
}

function xoaSanPham($id) {
    // Kiểm tra xem giỏ hàng đã được tạo chưa
    if (isset($_SESSION['giohang'])) {
        $gioHang = $_SESSION['giohang'];

        // Tìm kiếm vị trí của sản phẩm trong giỏ hàng bằng ID
        $index = -1;
        foreach ($gioHang as $key => $sanPham) {
            if ($sanPham['id'] === $id) {
                $index = $key;
                break;
            }
        }

        // Nếu sản phẩm được tìm thấy, xóa nó khỏi giỏ hàng
        if ($index !== -1) {
            unset($gioHang[$index]);
            $_SESSION['giohang'] = array_values($gioHang); // Reset lại chỉ số của mảng
            echo 'Đã xóa sản phẩm khỏi giỏ hàng.';
        } else {
            echo 'Không tìm thấy sản phẩm trong giỏ hàng.';
        }
    } else {
        echo 'Giỏ hàng không tồn tại.';
    }
}



?>
