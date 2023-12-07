
<?php
require_once 'pdo.php';

function binhluan_insert($iduser, $idsp, $noidung, $ngay_bl){
    $sql = "INSERT INTO binhluan(iduser, mahh, noidung, ngaydang) VALUES (?,?,?,?)";
    pdo_execute($sql, $iduser, $idsp, $noidung, $ngay_bl);
}

function binhluan_update($noidung,$iduser ){
    $sql = "UPDATE binhluan SET noidung='.$noidung.' WHERE iduser=$iduser";
    pdo_execute($sql, $noidung,$iduser);
}

function binhluan_delete($ma_bl){
    $sql = "DELETE FROM binhluan WHERE iduser=?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_bl);
    }
}

function binhluan_select_all(){
    $sql = "SELECT * FROM binhluan ORDER BY iduser DESC";
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