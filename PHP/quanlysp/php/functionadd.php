<?php
    function insert($po_id,$po_name,$po_price,$po_sl,$po_tt,$po_img,$po_ttr){
     $conn=connectdb();
     $sql = "INSERT INTO sanpham(MASP,TENSP,GIASP,TONKHO,MOTA,hinhanh,tinhtrang) 
     VALUES ('$po_id','$po_name','$po_price','$po_sl','$po_tt','$po_img','$po_ttr')";
     $conn->exec($sql);
    }
?><
