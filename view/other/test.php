

<body>
    <!-- Phần này là giao diện của ứng dụng Future Books -->
 


        <!-- Giao diện giữa -->
       


            <!-- Sản phẩm -->
            <h2><i class="fa fa-shopping-cart"></i> Giỏ Hàng</h2>
            <!-- Chuyển trang -->
            <section class="content-section">
                <table class="chuyen-trang">
                    <tr>
                        <td><a href="#">
                                <h6><b>1. KIỂM TRA GIỎ HÀNG CỦA BẠN</b></h6>
                            </a></td>
                        <td><a href="/view/other/hoadon.php">
                                <h6><b>2. TÍNH TIỀN VÀ THANH TOÁN</b></h6>
                            </a></td>
                        <td><a href="gio_hang_thanhcong.html">
                                <h6><b>3. ĐẶT HÀNG THÀNH CÔNG</b></h6>
                            </a></td>
                    </tr>
                </table>
            </section>
            <!-- Sản phẩm đã mua-->


           
            <?php
// Start the session


// Initialize $tong
$tong = 0;

// Check if the 'mycart' session variable is set and is an array
if (isset($_SESSION['mycart']) && is_array($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
    echo '<section class="content-section">';
    echo '<table class="table table-striped">';
    echo '<thead>
            <tr class="heading text-center">
                <td scope="col">Sản phẩm</td>
                <td scope="col">Đơn giá</td>
                <td scope="col">Số lượng</td>
                <td scope="col">Giá tiền</td>
                <td scope="col">Thao tác</td>
            </tr>
        </thead>';

    // Loop through the cart items
    foreach ($_SESSION['mycart'] as $cart) {
        // Display or process each cart item as needed
        // ...

        // Check if key 'MASP' exists in the current cart item
        if (isset($cart[0])) {
            // Calculate total price for each item
            $ttien = $cart[3] * $cart[4];

            // Increment the total amount
            $tong += $ttien;
            echo '<tr class="product-list">';
            echo '<td scope="col"><img src="' . $cart[2] . '"></td>';
            echo '<td scope="col">' . $cart[3] ." ₫ ". '</td>';
            echo '<td scope="col">' . $cart[4] . '</td>';
            echo '<td scope="col">' . $cart[5] . " ₫ ".'</td>';
            echo '<td><form action="index.php?action=removefromcart" method="post">
                    <input type="hidden" name="idsp" value="' . $cart[0] . '">
                    <input type="submit" name="removefromcart" value="Xóa">
                </form></td>';
            echo '</tr>';
        } else {
            // Handle the case where 'MASP' key is not set in the current cart item
            // You can add an error message or perform other actions as needed
            echo '<tr>';
            echo '<td colspan="5">Lỗi: Mã sản phẩm không tồn tại trong một số phần tử của giỏ hàng.</td>';
            echo '</tr>';
        }
    }

    echo '</table>';
    echo '</section>';
    // Output the summary section
    echo '<section class="content-section">';
    echo '<table class="chuyen-trang">';
    echo '<tr>';
    echo '<td> 
            <form action="index.php?action=emptycart" method="post">
                <input type="submit" style="background-color: rgb(140, 200, 240);border:none;font-weight: bold;"  name="removefromcart" value="Xóa Tất Cả">
            </form> 
          </td>  
          <td>Tổng Thanh Toán: ' . $tong ." ₫ ". ' </td>
          <td class="mua-hang"><a href="/view/other/hoadon.php?idsp=' . $cart[0] . '"><h4><b>MUA HÀNG</b></h4></a></td>
          </tr>';
    echo '</table>';
    echo '</section>';

} else {
    // Handle the case where 'mycart' is not set, not an array, or is empty
    echo '<p>Không có sản phẩm trong giỏ hàng.</p>';
}
?>

            <!--Chuyển trang  //<td scope="col">'.$ttien.'</td> -->


            <!--Chuyển trang  //-->



        <script src="/js(new)/add.js"></script>
        <script src="/js(new)/icon.js"></script>
        <script src="/js(new)/menu.js"></script>
        <script src="/js(new)/menu_pu.js"></script>
        <!--Chuyển trang <script src="/js(new)/sa"></script> -->


</body>

</html>