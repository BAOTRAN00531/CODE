<?php 
    include "../../db/conncet.php";
    $show_product = "SELECT * FROM `sanpham` ORDER BY `TONKHO` DESC ";
    $query_product = mysqli_query($conn,$show_product)
?> 
<table style="width:100%">
    <tr> 
        <th>STT</th> 
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th> 
        <th>Hình ảnh </th>  
        <th>Số lượng</th>  
        <th>Mô tả</th>
        <th></th> 
    </tr>
 <?php
   $i=0;
    while ($row = mysqli_fetch_array($query_product)){
    $i++; 
   echo'<tr>
        <td>'.$i.'</td>
        <td>'.$row['MASP'].'</td>
        <td>'.$row['TENSP'].'</td>
        <td> '.$row['GIASP'].'</td>
        <td>'.$row['hinhanh'].'</td>
        <td> '.$row['TONKHO'].'</td>
        <td>'.$row['tinhtrang'].'</td>
        </tr>';
 }
    echo'<img src="<?php echo $po_img; ?>" alt="Hình ảnh sản phẩm">'

 ?>
</table>