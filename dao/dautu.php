<?php 
require_once "dao/pdo.php";

function insert_dautu($ten,$congty,$hopdong,$id)
{
    $sql = "INSERT INTO dautu(HOTEN,CONGTY,HOPDONG,id) VALUES (?,?,?,?)";
    pdo_execute($sql , $ten , $congty , $hopdong , $id);
}
?>