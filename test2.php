<?php 

foreach ($list as $k => $v)
{
    extract($v);
}

if ( $iduser != $v['iduser'] ) {
foreach($list as $k => $v ) {
    extract($v);
    $iduser = $v['iduser'];
    $idsp = $v['MASP'];

echo '
<br>
<div>
<form action="../index.php?action=binhluan" method="post">
    '.$v['iduser'].' '.$v['MASP'].' '.$v['IDDH'].' '.$v['HOTEN'].' '.$v['DIACHI'].' '.$v['PHONE'].' '.$v['EMAIL'].' '.$v['TONG'].' '.$v['PTTT'].' '.$v['NGAYDATHANG'].' <br>
    <textarea name="noidung" cols="70" row="9" placeholder="FutureBooks xin đánh giá của quý khách..."></textarea>
    <input type="hidden" name="idsp" id="idsp" value="'.$idsp.'">
    <input type="hidden" name="iduser" id="iduser" value="'.$iduser.'">
        <input type="submit" name="guibinhluan" class="btn submit">
</form>
</div>
<br>
    ';
}
}
else
{
    foreach($list as $k => $v ) {
        extract($v);
        $iduser = $v['iduser'];
        $idsp = $v['MASP'];
    
    echo ''.$v['iduser'].' '.$v['MASP'].' '.$v['IDDH'].' '.$v['HOTEN'].' '.$v['DIACHI'].' '.$v['PHONE'].' '.$v['EMAIL'].' '.$v['TONG'].' '.$v['PTTT'].' '.$v['NGAYDATHANG'].' <br>';
}
}

?>

