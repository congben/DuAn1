<?php
function danhmuc_all(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    return pdo_query($sql);


}
function showdm($dsdm){
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?pg=dmsanpham&iddm='.$id;
        $html_dm.='<li class="has-sub"><a href="'.$link.'">'.$ten.'</a></li>';
    }
    return $html_dm;
}

function get_name_dm($iddm){
    $sql = "SELECT ten FROM loai WHERE id=".$iddm;
    $kq=pdo_query_one($sql);
    return $kq["ten"];
}
?>