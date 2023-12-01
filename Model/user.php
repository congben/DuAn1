<?php
require_once 'database.php';

function user_insert($ho_ten, $email, $mat_khau,$ngay_tao, $so_dien_thoai, $dia_chi,$vai_tro_id){
    $sql = "INSERT INTO nguoidung(ho_ten, email, mat_khau,ngay_tao ,so_dien_thoai ,dia_chi,vai_tro_id) VALUES (?, ?,?,?, ?,?, ?)";
    pdo_execute($sql,$ho_ten, $email, $mat_khau,$ngay_tao, $so_dien_thoai ,$dia_chi,$vai_tro_id);
}
function checkuser($email,$mat_khau){
    $sql="Select * from nguoidung where email=? and mat_khau=?";
    return pdo_query_one($sql, $email,$mat_khau);
}
function get_user($id){
    $sql="Select * from nguoidung where id=? ";
    return pdo_query_one($sql, $id);
}
function user_update($ho_ten,$email,$ngay_tao,$so_dien_thoai,$dia_chi,$ngay_cap_nhat,$id){
$sql= " UPDATE nguoidung SET (ho_ten=?,email=?,ngay_tao=?,so_dien_thoai=?,dia_chi=?,ngay_cap_nhat=? WHERE id=? ";
    pdo_execute($sql,$ho_ten,$email,$ngay_tao,$so_dien_thoai,$dia_chi,$ngay_cap_nhat,$id);   
}
?>    