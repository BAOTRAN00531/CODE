<!DOCTYPE html>
<html>
<head>
    <title>Trang Admin</title>
    <link rel="stylesheet" href="/CSS/admin (1).css">
</head>
<body>
     <form method="post" action="/PHP/quanlysp/php/handel.php" enctype="multipart/form-data" id="product-form">
        <label for="product-name">Tên sản phẩm:</label>
        <input type="text" name="pn" required>
        <br>
        <label for="product-id">mã sản phẩm:</label>
        <input type="text" name="pid" required>
        <br>
        <select name="iddanhmuc" id=""> 
             <option value="0">Chọn danh mục</option>
                <?php
                    if(isset($dsdm))
                    {
                        foreach($dsdm as $dm)
                        {
                            echo'<option value="'.$dm['IDDM'].'">'.$dm['LOAISP'].'</option>>';
                        }
                    }  
                ?>
            </select>
         <br>
        <label for="product-price">Giá tiền:</label>
        <input type="number" name="pp" required> 
        <br>
        <label for="product-sl">Tồn kho:</label>
        <input type="number" name="psl" required>
        <br>
        <label for="product-image">Hình ảnh sản phẩm:</label>
        <input type="file" name="pi" accept="image/*" required>
        <br>
        <img id="preview-image" src="" alt="Hình ảnh sản phẩm">
        <?php
        ?>
        <br> <label >Tóm tắt:</label>
        <textarea rows="10" cols="60" style="resize: none;" name="tomtat"></textarea>
        <br>
        <label >Nội dung:</label>
        <textarea rows="10" cols="60" style="resize: none;" name="noidung"></textarea>
        <br>
         <label >Tình trạng:</label>
         <select name="tinhtrang" >
             <option value="Kích hoạt">Kích hoạt</option>
             <option value="Ẩn">Ẩn</option>
            </select>
        <br>
         <input class="button" type="submit" name="addproduct" value="Thêm sản phẩm">
</form>
</body>
</html>
