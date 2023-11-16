<!DOCTYPE html>
<html>
<head>
    <title>Trang Admin</title>
</head>
<body>
    <!-- Form thêm sản phẩm -->
    <form action="../admin/handle.php" id="product-form" method="post" >
        <label >Tên danh mục:</label>
        <input type="text" name="listname" id="list-name" >
        <br>
        <label>Thứ tự:</label>
        <input type="number" name="number" id="number" >
        <br>
        <input type="submit" id="add-list" name="add-list" value="Thêm danh mục sản phẩm">
    </form>


</body>
</html>
