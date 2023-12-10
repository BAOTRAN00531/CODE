<?php 

foreach ($list as $k => $v)
{
    extract($v);

    $iduser = $v['iduser'];
    $idsp = $v['MASP'];

echo '
<br>
<div>
<div class="lmao">
<form action="../index.php?action=binhluan" method="post">
    '.$v['iduser'].' '.$v['MASP'].' '.$v['IDDH'].' '.$v['HOTEN'].' '.$v['DIACHI'].' '.$v['PHONE'].' '.$v['EMAIL'].' '.$v['TONG'].' '.$v['PTTT'].' '.$v['NGAYDATHANG'].' <br>
    <textarea name="noidung" cols="70" row="9" placeholder="FutureBooks xin đánh giá của quý khách..."></textarea>
    <input type="hidden" name="idsp" id="idsp" value="'.$idsp.'">
    <input type="hidden" name="iduser" id="iduser" value="'.$iduser.'">
        <input type="submit" name="guibinhluan" class="btn submit">
</form>
</div>
</div>
<br>
    ';
}

// foreach ( $list_commented as $commented => $values )
// {
//     extract( $values );
//     $iduser = $values['iduser'];
//     $idsp = $values['MASP'];

// echo '
// <br>
// <div>
// <div class="lmao">

//     '.$values['iduser'].' '.$values['MASP'].' '.$values['IDDH'].' '.$values['HOTEN'].' '.$values['DIACHI'].' '.$values['PHONE'].' '.$values['EMAIL'].' '.$values['TONG'].' '.$values['PTTT'].' '.$values['NGAYDATHANG'].' <br>
// </div>
// <div>
// <br>
//     ';
// }
// foreach ( $list_not_commented as $not_commented => $values_n_c )
// {
//     extract( $values_n_c );
//     $iduser = $values_n_c['iduser'];
//     $idsp = $values_n_c['MASP'];

// echo '
// <br>
// <div>
// <div class="lmao">
// <form action="../index.php?action=binhluan" method="post">
//     '.$values_n_c['iduser'].' '.$values_n_c['MASP'].' '.$values_n_c['IDDH'].' '.$values_n_c['HOTEN'].' '.$values_n_c['DIACHI'].' '.$values_n_c['PHONE'].' '.$values_n_c['EMAIL'].' '.$values_n_c['TONG'].' '.$values_n_c['PTTT'].' '.$values_n_c['NGAYDATHANG'].' <br>
//     <textarea name="noidung" cols="70" row="9" placeholder="FutureBooks xin đánh giá của quý khách..."></textarea>
//     <input type="hidden" name="idsp" id="idsp" value="'.$idsp.'">
//     <input type="hidden" name="iduser" id="iduser" value="'.$iduser.'">
//         <input type="submit" name="guibinhluan" class="btn submit">
// </form>
// </div>
// <div>
// <br>
//     ';
// }
?>

