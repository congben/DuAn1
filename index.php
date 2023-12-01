<?php

session_start();
ob_start();
if (!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"] = [];
}
include("./Model/database.php");
include("./Model/xl_sanpham.php");
include("./Model/giohang.php");
include("./Model/xl_danhmuc.php");
 include("./Model/user.php");
include("./Model/xl_thanhtoan.php");


$in_dm = danhmuc_all();
$dssp_new = get_dssp_new(2);
if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'product':
            include("View/header.php");
            include('view/sanpham.php');
            break;
        case 'adduser':
            include("View/header.php");

            if (isset($_POST["dangky"]) && ($_POST["dangky"])) {
                $ho_ten = $_POST["ho_ten"];
                $email = $_POST["email"];
                $mat_khau = $_POST["mat_khau"];
                $ngay_tao = $_POST["ngay_tao"];
                $so_dien_thoai = $_POST["so_dien_thoai"];
                $dia_chi = $_POST["dia_chi"];
                $vai_tro_id = 2;
                // xử lý
                user_insert($ho_ten, $email, $mat_khau, $ngay_tao, $so_dien_thoai, $dia_chi, $vai_tro_id);
            }
            include('View/dangnhap.php');
            break;
        case 'updateuser':
            include("View/header.php");

            // if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
            //     $ho_ten = $_POST["ho_ten"];
            //     $email = $_POST["email"];
            //     $ngay_tao = $_POST["ngay_tao"];
            //     $so_dien_thoai = $_POST["so_dien_thoai"];
            //     $dia_chi = $_POST["dia_chi"];
            //     $ngay_cap_nhat = $_POST["ngay_cap_nhat"];
            //     $id = $_POST["id"];;
            //     // xử lý
            //     user_update($ho_ten, $email, $ngay_tao, $so_dien_thoai, $dia_chi, $ngay_cap_nhat, $id);

            //     include "view/myaccount_confirm.php";
            // }
            break;
        case 'login':


            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $email = $_POST["email"];
                $mat_khau = $_POST["mat_khau"];
                $kq = checkuser($email, $mat_khau);
                if (is_array($kq) && count($kq)) {
                    $_SESSION['s_user'] = $kq;

                    // Kiểm tra và chuyển hướng dựa vào giá trị của $role
                    $vai_tro_id = isset($kq['vai_tro_id']) ? $kq['vai_tro_id'] : 0;

                    if ($vai_tro_id == 1) {
                      //  include("./admin/index.php");
                        exit; // Ngăn mã PHP tiếp tục thực thi sau khi chuyển hướng
                    } else {
                        include("View/header.php");
                        header('location: index.php');
                        exit; // Ngăn mã PHP tiếp tục thực thi sau khi chuyển hướng
                    }
                } else {
                    $tb = "Tài Khoản không tồn tại hoặc thông tin nhập sai!";
                    $_SESSION['tb_dangnhap'] = $tb;
                    include("View/header.php");

                    include("View/header.php");
                    header('location: index.php?pg=dangnhap');
                    exit; // Ngăn mã PHP tiếp tục thực thi sau khi chuyển hướng
                }
            }
            // //         if(is_array($kq)&&(count($kq))){
            //             $_SESSION['s_user']=$kq;
            //             if($bill==1){
            //             header('location: index.php?pg=bill');
            //         }else if($_SESSION['trang']=="sanphamchitiet"){
            //             header('location: index.php?pg=sanphamchitiet&id='.$_SESSION['idpro'].'#binhluan');

            //         }else{
            //             header('location: index.php');
            //         }

            //         //out

            //     }else{
            //         $tb="Tài khoản không tồn tại hoặc thông tin đăng nhập sai! ";
            //             $_SESSION['tb_dangnhap']=$tb;
            //             header('location: index.php?pg=dangnhap');
            //     }
            // }
            break;
        case 'dangnhap':
            include("View/header.php");

            include('View/dangnhap.php');
            break;
        case 'logout':
            include("View/header.php");

            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                unset($_SESSION['s_user']);
            }
            header('location: index.php');
            break;
        case 'dangky':
            include("View/header.php");


            include('View/dangky.php');
            break;
        case 'myaccount':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {

                include "view/myaccount.php";
            }
            break;
        case 'blog2':
            include("View/header.php");


            include('View/blog-2.php');
            break;
        case 'blog3':
            include("View/header.php");


            include('View/blog-3.php');
            break;
        case 'aboutus':
            include("View/header.php");


            include('View/about-us.php');
            break;
        case 'chitietsanpham':
            include("View/header.php");
            if (isset($_SESSION['s_user']) && ($_SESSION['s_user'])) {
                    extract($_SESSION['s_user']);
                    $nguoi_dung_id = ($_SESSION['s_user'])["id"];
                    $nguoi_dung_ten = ($_SESSION['s_user'])["ho_ten"];
                    $nguoi_dung_email = ($_SESSION['s_user'])["email"];
                }

            if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                $id = $_GET["id"];
                $spchitiet = get_sanphamchitiet($id);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            if (isset($_POST["binhluan"]))

            $nd_id=$_POST["nguoi_dung_id"];
            $noi_dung=$_POST["comment"];
            echo ($noi_dung);      
            echo ("hello");      //$ngay_bl=$_POST["binhluan"];
            $sp_id=$_POST["sanpham_id"];
            them_binh_luan($nd_id, $noi_dung, $sp_id);

                break;
               

        case 'addcart':
            include("View/header.php");


            include('View/cart.php');
            if (isset($_POST["addcart"])) {
                $id = $_POST["id"];
                $ten_sp = $_POST["ten_sp"];
                $hinh_anh = $_POST["hinh_anh"];
                $gia = $_POST["gia"];
                $soluong = $_POST["soluong"];
                $flag = 0;
                $sp = array("id" => $id, "ten_sp" => $ten_sp, "hinh_anh" => $hinh_anh, "gia" => $gia, "soluong" => $soluong);

                foreach ($_SESSION["giohang"] as $key => $item) {
                    if ($item["id"] == $id) {
                        $_SESSION["giohang"][$key]["soluong"] += $soluong;
                        $flag = 1;
                        break;
                    }
                }

                if ($flag == 0) {
                    array_push($_SESSION["giohang"], $sp);
                }

                header('location: index.php?pg=viewcart');
            }

            break;
        case 'viewcart':
       include("View/header.php");


            //  if (isset($_GET['del']) && ($_GET['del'])){
            //     $id = $_GET['del'];
            //     echo ($id);
            //     xoaSanPham($id);}



            // function xoaSanPham($id) {
            //     // Kiểm tra xem giỏ hàng đã được tạo chưa


            //     if (isset($_SESSION['giohang'])) {
            //         $gioHang = $_SESSION['giohang'];

            //         // Tìm kiếm vị trí của sản phẩm trong giỏ hàng bằng ID
            //         $index = -1;
            //         foreach ($gioHang as $key => $sanPham) {
            //             if ($sanPham['id'] === $id) {
            //                 $index = $key;
            //                 break;
            //             }
            //         }

            //         // Nếu sản phẩm được tìm thấy, xóa nó khỏi giỏ hàng
            //         if ($index !== -1) {
            //             unset($gioHang[$index]);
            //             $_SESSION['giohang'] = array_values($gioHang); // Reset lại chỉ số của mảng
            //             echo 'Đã xóa sản phẩm khỏi giỏ hàng.';
            //         } else {
            //             echo 'Không tìm thấy sản phẩm trong giỏ hàng.';
            //         }
            //     } else {
            //         echo 'Giỏ hàng không tồn tại.';
            //     }
            // }

            // if(isset($_REQUEST['del'])){
            //     $id_del = $_REQUEST['del'];
            //     $sp = [$id_del];
            //     $vitri = kiemtra($sp);
            //     array_splice($_SESSION['giohang'],$vitri,1);
            // }





            // if (isset($_GET['del'])) {
            //     $delId = $_GET['del'];

            //     // Tìm và xóa sản phẩm khỏi giỏ hàng
            //     foreach ($_SESSION['giohang'] as $key => $sp) {
            //         if ($sp['id'] == $delId) {
            //             unset($_SESSION['giohang'][$key]);
            //             array_splice($_SESSION['giohang'],$vitri,1);
            //             break;
            //         }
            //     }

            //     // Chuyển hướng người dùng đến trang giỏ hàng sau khi xóa sản phẩm
            //     header('Location: index.php?pg=giohang');
            //     exit();
            // }
            //include "view/viewcart.php";



            if (isset($_GET['del']) && ($_GET['del'] == 1)) {
                unset($_SESSION["giohang"]);
                // $_SESSION["giohang"]=[];
                header('location: index.php');
            } else {
                // if (isset($_SESSION["giohang"])) {
                //     $tongdonhang = get_tongdonhang();
            }
            // $giatrivoucher = 0;
            // if (isset($_GET['voucher']) && ($_GET['voucher'] == 1)) {
            //     $tongdonhang = $_POST['tongdonhang'];
            //     $mavoucher = $_POST['mavoucher'];
            //     // so sanh với db để lấy giá trị về
            //     $giatrivoucher = 10;
            // }
            //     $thanhtoan = $tongdonhang - $giatrivoucher;
                 include "view/viewcart.php";
            
            break;
        case '404':
            include("View/header.php");





            include('View/404.php');
            break;
        case 'trangchu2':
            include("View/header.php");

            include('View/trangchu2.php');
            break;
        case 'thanhtoan':
            include("View/header.php");
            if (isset($_SESSION['s_user']) && ($_SESSION['s_user'])) {
                extract($_SESSION['s_user']);
                $nguoi_dung_id = ($_SESSION['s_user'])["id"];
            }
            if (isset($_SESSION['giohang']) && ($_SESSION['giohang'])) {
                extract($_SESSION['giohang']);

                $tongtien = tt();
            }

            // $ghi_chu = ''; // Khai báo và gán giá trị mặc định cho biến $ghi_chu
            // $ngay_dat = ''; // Khai báo và gán giá trị mặc định cho biến $ngay_dat
            // $tong_tien = ''; // Khai báo và gán giá trị mặc định cho biến $tong_tien

            // if (isset($_POST["donhangsubmit"]) && ($_POST["donhangsubmit"])) {
            //     // Các lệnh xử lý khác
            //     $ghi_chu = $_POST["ghi_chu"];
            //     // Các lệnh xử lý khác
            //     $ngay_dat = getdate();
            //     // Các lệnh xử lý khác
            //     $tong_tien = $tong;


            // //them_donhang($id, $nguoi_dung_id, $ho_ten, $email, $so_dien_thoai, $dia_chi, $ghi_chu, $ngay_dat, $tong_tien);
            //  //   if (isset($_POST["donhangsubmit"])  && ($_POST["donhangsubmit"])) {


            // // $id = "" ;
            // //     $nguoi_dung_id =$_POST["nguoi_dung_id"];
            // //     $ho_ten =$_POST["ho_ten"];
            // //     $email =$_POST["email"];
            // //     $so_dien_thoai=$_POST["so_dien_thoai"];
            // //     $dia_chi=$_POST["dia_chi"];
            // //     $ghi_chu=$_POST["ghi_chu"]; 
            // //     //date_default_timezone_set('Asia/Ho_Chi_Minh');
            // //     $ngay_dat = getdate();; 

            // //     $tong_tien= $tong;

            // //     }
            // //       them_donhang(null,$nguoi_dung_id, $ho_ten, $email, $so_dien_thoai, $dia_chi,$ghi_chu,$ngay_dat,$tong_tien);


            include('View/thanhtoan.php');
            break;
        case 'contact':
            include("View/header.php");

            include('View/contact.php');
            break;

        case 'dmsanpham':
            include("View/header.php");

            // $dsdm = danhmuc_all();

            // $kyw = "";
            // $titlepage = "";

            // if (!isset($_GET['id'])) {
            //     $iddm = 0;
            // } else {
            //     $iddm = $_GET['id'];
            //     $titlepage = get_name_dm($iddm);
            // }

            // // kiểm tra có phải form search không?
            // if (isset($_POST["timkiem"]) && ($_POST["timkiem"])) {
            //     $kyw = $_POST["kyw"];
            //     $titlepage = " Kết quả tìm kiếm với từ khóa: <h2><span>" . $kyw . "</span></h2>";
            // }

            // $dssp = get_dssp($kyw, $iddm, 6);

            include "view/dmsanpham.php";





            break;


        default:
            include("View/header.php");

            include("View/home.php");
            break;
    }
} else {
    include("View/header.php");

    include("View/home.php");
}




include("View/footer.php");
