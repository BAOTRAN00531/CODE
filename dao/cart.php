<?php

    function view_cart(){
        global $imgPath;
        $tong=0;
        foreach ($_SESSION['mycart'] as $cart) 
        {
                $image=$imgPath.$cart[2];
                $ttien=$cart[3]*$cart[4];
                $tong+=$ttien;
                $found = false;
                
            echo ' <tr class="product-list">
                <td scope="col"><img src="'.$cart[2].'"></td>
                <td scope="col">'.$cart[3].'</td>
                <td scope="col" ><input class="input-so" type="text" name="name" value="'.$cart[4].'";</td>
                <td scopr="col">'.$cart[5].'</td>
                </tr>'; } 
    }

    function tongdon(){
      
        $tong=0;
        foreach ($_SESSION['mycart'] as $cart) 
        {
             
                $ttien=$cart[3]*$cart[4];
                $tong+=$ttien;
               
        }return $tong;
    }
    function insert_giohang($iduser, $name, $email, $phone,$address,$pttt, $ngaydathang, $tong){
        $sql = "INSERT INTO donhang(iduser,HOTEN,DIACHI,PHONE,EMAIL,TONG,PTTT,NGAYDATHANG) VALUES ('$iduser','$name', '$address', '$phone','$email' ,'$tong','$pttt','$ngaydathang')";
       return pdo_execute_insertID($sql);
    }
    function insert_donhang($userid, $idpro, $name, $hinh, $gia, $soluong, $thanhtien, $iddh) {
        $sql = "INSERT INTO donhang(USERID, MASP, TENSP, hinhanh, GIA, SOLUONG, THANHTIEN, IDDH)
                VALUES ('$userid', '$idpro', '$name', '$hinh', '$gia', '$soluong', '$thanhtien', '$iddh')";
        return pdo_execute($sql);
    }
    function loadone_donhang($iddh) {
        
        $sql="select * from donhang where IDDH=".$iddh;
        $dh=pdo_query_one($sql);
        return $dh;
    }
    function loadone_CART($iddh) {
        $sql="select * from cart where IDDH=".$iddh;
        $dh=pdo_query_one($sql);
        return $dh;
    }
    function showdetail_hoadon($donhang){
        global $imgPath;
        $tong=0;
        foreach ($donhang as $cart) 
        {
                $image=$imgPath.$cart['hinhanh'];
                $tong+=$cart['THANHTIEN'];
                $found = false;
                
            echo ' <tr class="product-list">
                <td scope="col"><img src="'.$image.'"></td>
                <td scope="col">'.$cart['GIA'].'</td>
                <td scope="col" ><input class="input-so" type="text" name="name" value="'.$cart[4].'";</td>
                <td scopr="col">'.$cart['THANHTIEN'].'</td>
                </tr>'; } 
    }
?>
     