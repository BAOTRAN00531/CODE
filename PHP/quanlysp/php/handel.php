<?php
    include "function.php";
 if(isset($_POST['addproduct'])){
       $po_name = $_POST['pn'];
       $po_id = $_POST['pid'];
       $po_price = $_POST['pp'];
       $po_sl = $_POST['psl'];
       $po_tt=$_POST['tomtat'];
       $po_nd=$_POST['noidung'];
       $po_ttr=$_POST['tinhtrang'];
       $target_dir="../img/";
       $target_file=$target_dir .basename($_FILES["pi"]["name"]); 
       $po_img=$target_file;
       $uploadOk=1;
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       if ($imageFileType!="jpg" && $imageFileType!="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
              $uploadOk=0;
       }
       move_uploaded_file($_FILES["pi"]["tmp_name"],$target_file);
       //if($_FILES['pi']['name']!="") $po_img=$_FILES['pi']['name'];else $po_img="";
        insert($po_id,$po_name,$po_price,$po_sl,$po_tt,$po_img,$po_ttr); 
        header('Location:../../index.php?action=quanlysanpham');
 }      
 elseif(isset($_POST['suadanhmuc']))
 {
        $sql_edit = "UPDATE `danhmuc`set `LOAISP`='".$list_name."',`THUTU`='".$number."' where ID ='$_GET[iddanhmuc]'" ;
        mysqli_query($conn,$sql_edit); 
        header('Location:../../index.php?action=quanlysanpham');
 }else {
        $id=$_GET['iddanhmuc'];
        $sql_xoa= "DELETE FROM danhmuc where ID='".$id."' ";
        mysqli_query($conn,$sql_xoa);  
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
 }
?>