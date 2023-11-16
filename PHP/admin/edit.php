<?php 
    require'../db/conncet.php';
    $show_edit_listname = "SELECT * FROM `danhmuc` WHERE ID='$_GET[iddanhmuc]' LIMIT 1";
    $query_edit_listname = mysqli_query($conn,$show_edit_listname)
?> 
<!DOCTYPE html>
<html>
<head>
    <title>EDIT</title>
</head>
<body>
    <!-- Form thêm sản phẩm -->
    <form method="post" action="../admin/handle.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>"  >
        <?php 
            while($dong =mysqli_fetch_array($query_edit_listname) ){
        ?>
            <label >Tên danh mục:</label>
            <input type="text" name="listname" value="<?php $dong['LOAISP'] ?>" >
            <br>
            <label>Thứ tự:</label>
            <input type="number" name="number" value="<?php $dong['THUTU'] ?>" >
            <br>
            <input type="submit" id="add-list" name="suadanhmuc" value="sửa danh mục sản phẩm">
    </form>
        <?php
            }
        ?>

</body>
</html>
