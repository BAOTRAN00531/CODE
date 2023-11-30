<?php 
require_once "dao/pdo.php";

function insert_dautu($ten,$congty,$hopdong,$id)
{
    $sql = "INSERT INTO dautu(HOTEN,CONGTY,HOPDONG,id) VALUES('$ten','$congty','$hopdong',$id)";
    pdo_execute($sql);
}
?>