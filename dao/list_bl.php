<?php 
    require'../db/conncet.php';
    $show_listname = "SELECT * FROM `binhluan` ORDER BY `id` DESC ";
    $query_listname = mysqli_query($conn,$show_listname)
?> 
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%">
    <tr>
        <th>ID:</th>
        <th>Tên danh mục:</th>
        <th>Quản lý</th>
    </tr>
 <?php

  while ($row = mysqli_fetch_array($query_listname)){

 ?>
 <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td>
        <a href="/PHP/admin/handle.php?id=<?php echo $row['id'] ?>"> Xóa </a> |
        <a href="?action=binhluan&query=sua&id=<?php echo $row['id'] ?>">Sửa</a>
 
    </td>
</tr>
<?php
 }
 ?>
</table>