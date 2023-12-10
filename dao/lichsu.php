
<?php 
function lichsu_select($iduser)
{
    $sql = ("SELECT * FROM `donhang` WHERE iduser=$iduser AND TINHTRANG='0'");
    $list = pdo_query($sql);
    return $list;
}
function lichsu_commented( $iduser )
{
    $sql = ("SELECT  ");
    $list_commented = pdo_query($sql);
    return $list_commented; 
}
function lichsu_select_all()
{
    $sql = ("SELECT * FROM `donhang`");
    $list = pdo_query($sql);
    return $list;
}
function lichsu_delete( $iddh )
{
    $sql = ("DELETE FROM `donhang` WHERE IDDH = $iddh");
    pdo_execute($sql);
}
?>