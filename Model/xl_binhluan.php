<?php

function them_binh_luan($nd_id, $noi_dung, $sp_id){
    $sql = "INSERT INTO binhluan(nguoidung_id, noidung, sanpham_id) VALUES (?,?,?)";
    pdo_execute($sql,$nd_id, $noi_dung, $sp_id);
}


?>