<table style="border:1px solid white;">
<tr>
<th>
Ma nguoi dung
</th>
<th>
Ma don hang
</th>
<th>
Ten nguoi dat
</th>
<th>
Ma don hang
</th>
<th>
Dia chi nhan hang
</th>
<th>
So dien thoai nguoi nhan
</th>
<th>
Tong don hang
</th>
<th>
ngay dat hang
</th>
<th>
</th>
</tr>
<?php 

foreach ($list as $k => $v)
{
    extract($v);

    $iduser = $v['iduser'];
    $idsp = $v['MASP'];
?>

<?php 
echo '



<tr>
<td>
'.$v['iduser'].'
</td>
<td>
'.$v['IDDH'].'
</td>
<td>
'.$v['HOTEN'].'
</td>
<td>
'.$v['DIACHI'].'
</td>
<td>
'.$v['PHONE'].'
</td>
<td>
'.$v['EMAIL'].'
</td>
<td>
'.$v['TONG'].'
</td>
<td>
'.$v['NGAYDATHANG'].'
</td>
<td>
<div class="dropdown-btn">
feedback
</div>
<div class="dropdown-container">
<form action="../index.php?action=binhluan" method="post">
    <textarea name="noidung" cols="70" row="9" placeholder="FutureBooks xin đánh giá của quý khách..."></textarea>
    <input type="hidden" name="idsp" id="idsp" value="'.$idsp.'">
    <input type="hidden" name="iduser" id="iduser" value="'.$iduser.'">
        <input type="submit" name="guibinhluan" class="btn submit">
</form>
</div>
</td>

    ';
    ?>

<?php 
}
?>
</table>
<?php 
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

