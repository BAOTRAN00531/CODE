<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Books</title>
    <link rel="shortcut icon" href="view/images/7.png">
    <!-- css giao diện -->
    <link rel="stylesheet" href="/view/css/giaodien.css">
    <!-- css sản phẩm -->
    <link rel="stylesheet" href="/view/css/sanpham.css">
    <!-- css icon -->
    <link rel="stylesheet" href="/view/css/icon.css">
    <!-- menu -->
    <link rel="stylesheet" href="/view/css/menu.css">
    <!-- shopping cart-->
    <link rel="stylesheet" href="/view/css/gio_hang.css">

    <style>
    /* css chỉnh cho menu */
    .content-section {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .table.table-striped {
        width: 100%;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
    <!-- js animation icon -->
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>

</head>

<body>
    <!-- Phần này là giao diện của ứng dụng Future Books -->
    <div class="app-container">


        <!-- Giao diện giữa -->
        <div class="main-area">
            <!-- hiện ra hai nút ẩn khi giao diện nhỏ (nút hiện giao diện bên trái và bên phải) -->
            <button class="btn-show-right-area">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>
            <button class="btn-show-left-area">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
            </button>
            <!-- Tiêu đề chính, chứa nút tìm kiếm -->
            <div class="main-area-header">
                <!-- nút tìm kiếm -->
                <div class="container">
                    <div class="search-wrapper" id="searchLine">
                        <input class="search-input" type="text" placeholder="tìm kiếm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="feather feather-search" viewBox="0 0 24 24">
                            <defs />
                            <circle cx="11" cy="11" r="8" />
                            <path d="M21 21l-4.35-4.35" />
                        </svg>
                    </div>

                </div>
            </div>


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


            <section class="content-section">
                <table class="table table-striped">
                    <thead>
                        <tr class="heading text-center">
                            <td scope="col">Sản phẩm</td>
                            <td scope="col">Đơn giá</td>
                            <td scope="col">Số lượng</td>
                            <td scope="col">Giá tiền</td>
                            <td scope="col">Thao tác</td>
                        </tr>
                    </thead>
                    <?php
                        // Start the session
          

                        // Initialize $tong
                        $tong = 0;

                        // Check if the 'mycart' session variable is set and is an array
                        if (isset($_SESSION['mycart']) && is_array($_SESSION['mycart'])) {
                            // Loop through the cart items
                            foreach ($_SESSION['mycart'] as $cart) {
                                // Display or process each cart item as needed
                                // ...

                                // Calculate total price for each item
                                $ttien = $cart[3] * $cart[4];

                                // Increment the total amount
                                $tong += $ttien;

                                echo '<tr class="product-list">';
                                echo '<td scope="col"><img src="' . $cart[2] . '"></td>';
                                echo '<td scope="col">' . $cart[3] . '</td>';
                                echo '<td scope="col">' . $cart[4] . '</td>';
                                echo '<td scope="col">' . $cart[5] . '</td>';
                                echo '<td><form action="index.php?action=removefromcart" method="post">
                                <input type="hidden" name="id" value="'.$cart[0].'">
                                <input type="submit" name="removefromcart" value="Xóa">
                            </form></td>';
                                echo '</tr>';
                            }
                        } else {
                            // Handle the case where 'mycart' is not set or not an array
                            
                        }
                    ?>
                </table>
            </section>
            <section class="content-section">
                <table class="chuyen-trang">
                    <?php
                    echo'
                        <tr>
                        <td> 
                            <form action="index.php?action=emptycart" method="post">
                                <input type="submit" name="removefromcart" value="Xóa Tất Cả">
                            </form> 
                     </td>  
                        <td>Tổng Thanh Toán: '.$tong.' </td>
                        <div class="mua-hang">
                        <td><a href="/view/other/hoadon.php"><h4><b>MUA HÀNG</b></h4></a></td>
                        </div>
                        </tr>'
                    ?>
                </table>
            </section>

            <!--Chuyển trang  //<td scope="col">'.$ttien.'</td> -->


            <!--Chuyển trang  //-->

        </div>


        <script src="/js(new)/add.js"></script>
        <script src="/js(new)/icon.js"></script>
        <script src="/js(new)/menu.js"></script>
        <!--Chuyển trang <script src="/js(new)/sa"></script> -->


</body>

</html>