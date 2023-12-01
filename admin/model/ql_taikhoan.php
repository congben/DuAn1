
<?php 

function get_danhsachtk(){
    $sql = "SELECT * FROM nguoidung ORDER BY id DESC ";
    return pdo_query($sql);
}
function showtk($dssp){
    $html_dssp='';
    $i = 1;
    foreach ($dssp as $sp) {
        extract($sp);
        
        $html_dssp.='<tr>
        <td>
            <div class="d-flex align-items-center">
                <div class="table-user-name ml-3">
                    <p class="mb-0 font-weight-medium" value="1">admin</p>
                    <small value="1">'.$ho_ten.'</small>
                </div>
            </div>
        </td>
        <td value="1">admin</td>
        <td>
            <div class="badge badge-inverse-success" value="1">admin</div>
        </td>
        <td>
            <a href="index.php?action=account_management&amp;id=1"><span class="mdi mdi-table-edit"></span></a> | 
            <a href="index.php?action=delete_account&amp;id=1"><span class="mdi mdi-delete-forever"></span></a>
        </td>
    </tr> ';
    $i++;
    }
    return $html_dssp;
}
?>