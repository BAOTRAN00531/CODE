
<?php
require_once 'pdo.php';

function binhluan_insert($iduser, $onesp, $noidung, $ngay_bl){
    $sql = "INSERT INTO binhluan(iduser, onesp, noidung, ngay_bl) VALUES (?,?,?,?)";
    pdo_execute($sql, $iduser, $onesp, $noidung, $ngay_bl);
}

function binhluan_update($noidung,$id ){
    $sql = "UPDATE binhluan SET noidung='.$noidung.' WHERE id=$id";
    pdo_execute($sql, $noidung, $id);
}

function binhluan_delete($id){
    $sql = "DELETE FROM binhluan WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function binhluan_select_all(){
    $sql = "SELECT * FROM binhluan ORDER BY id DESC";
    return pdo_query($sql);
}

// function binhluan_select_by_id($ma_bl){
//     $sql = "SELECT * FROM binhluan WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function binhluan_exist($ma_bl){
//     $sql = "SELECT count(*) FROM binhluan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
//-------------------------------//
// function binhluan_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM binhluan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }