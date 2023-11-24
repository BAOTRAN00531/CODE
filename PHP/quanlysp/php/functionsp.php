<?php 
function dm(){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM sanpham");
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>
