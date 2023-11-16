<?php
 require'../db/conncet.php';
 $list_name = $_POST['listname'];
    $number = $_POST['number'];
 if(isset($_POST['add-list'])){
        $sql_them = "INSERT INTO `danhmuc`(`LOAISP`,`THUTU`) VALUES ('$list_name','$number')";
        mysqli_query($conn,$sql_them); 
 }
 elseif(isset($_POST['suadanhmuc']))
 {
        $sql_edit = "UPDATE `danhmuc`set `LOAISP`='".$list_name."',`THUTU`='".$number."' where ID ='$_GET[iddanhmuc]'" ;
        mysqli_query($conn,$sql_edit); 
        header('Location:../../index.php?action=quanlydanhmucsanpham');
 }else {
        $id=$_GET['iddanhmuc'];
        $sql_xoa= "DELETE FROM danhmuc where ID='".$id."' ";
        mysqli_query($conn,$sql_xoa);  
        header('Location:../../index.php?action=quanlydanhmucsanpham');
 }
?>