<?php 
    require'../db/conncet.php';
    $show_edit_listbl = "SELECT * FROM `binhluan` WHERE id=$_GET[id] LIMIT 1";
    $query_edit_listbl = mysqli_query($conn,$show_edit_listbl)
?> 
<!DOCTYPE html>
<html>
<head>
    <title>EDIT</title>
</head>
<body>
    <!-- Form thêm sản phẩm -->
    <form method="post" action="../admin/handle.php?id=<?php echo $_GET['id'] ?>"  >
        <?php 
            while($a =mysqli_fetch_array($query_edit_listbl) ){
        ?>
            <label >noi dung sua:</label>
            <input type="text" name="listbl" value="<?php $a['noidung'] ?>" >
            <br>
            <input type="submit" name="suabl" value="sửa danh mục sản phẩm">
    </form>
        <?php
            }
        ?>

</body>
</html>
