<?php 

function get_danhsachsp(){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC ";
    return pdo_query($sql);
}
function showspql($dssp){
    $html_dssp='';
    $i = 1;
    foreach ($dssp as $sp) {
        extract($sp);
        
        $html_dssp.='<tr style="height:100px;">
        <td class="py-1">
        '.$i.'
        </td>
        <td> '.$ten_sp.'  </td>

        <td style="word-wrap: break-word;">
        '.$gia.'
        </td>
        <td> '.$danh_muc_id.'  </td>
        <td>
            <img src="./../layout/images/product/large-size/'.$hinh_anh.'" alt="" style="width:100%;height:100%;">
        </td>
       
        <td> '.$ngay_tao.'% </td>
        <td>
            <a href="index.php?action=product_management&amp;id=58" class="mdi text-light">
                <button class="btn btn-warning btn-rounded btn-sm"> Sửa </button>
            </a>
            <a href="index.php?action=delete_product&amp;id=58" class="mdi text-light">
                <button class="btn btn-danger btn-rounded btn-sm"> Xóa </button>
            </a>
        </td>
    </tr>     ';
    $i++;
    }
    return $html_dssp;
}
?>