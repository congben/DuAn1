<?php
// session_start();
// ob_start();
// include("./../Model/database.php");


include("view/header.php");
include("model/xl_sanpham.php");
include("model/ql_taikhoan.php");
include("model/xl_danhmuc.php");

$in_tk = get_danhsachtk();
$in_sp = get_danhsachsp();
$in_dm = get_danhsachdm();

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'ql_sp':

            include("view/ql_sanpham.php");
            break;

        case 'ql_dm':

            include("view/ql_danhmuc.php");
            break;
        case 'ql_tk':

            include("view/ql_taikhoan.php");
            break;
        // case 'add_product':

        //     if (isset($_POST["add_product"]) && ($_POST["add_product"])) {
        //         $user_name = $_POST["user_name"];
        //         $user_pass = $_POST["user_pass"];
        //         $user_email = $_POST["user_email"];
        //         // xử lý
        //        //      user_insert($user_name, $user_pass, $user_email);
        //     }
           // include('View/dangnhap.php');
          //  break;

        default:
            include("View/trangchu.php");
            break;
    }
} else {
    include("View/trangchu.php");
}

?>