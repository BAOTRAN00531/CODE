<?php 
    require'../db/conncet.php';
    $show_listname = "SELECT * FROM `danhmuc` ORDER BY `THUTU` DESC ";
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
  $i=0;
  while ($row = mysqli_fetch_array($query_listname)){
   $i++; 
 ?>
 <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['LOAISP'] ?></td>
    <td>
        <a href="/PHP/admin/handle.php?iddanhmuc=<?php echo $row['IDDM'] ?>"> Xóa </a> |
         <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['IDDM'] ?>">Sửa</a>
    </td>
</tr>
<?php
 }
 ?>
</table>