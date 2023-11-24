<?php 
function sp(){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM danhmuc");         
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);                                        
    $kq=$stmt->fetchAll();
    return $kq;
}
?>
