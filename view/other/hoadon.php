<?php
    session_start();
    
    function view_cart(){
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        $imgPath = "/";

        echo '<thead>
        <tr class="heading text-center">
            <th scope="col">CHI TIẾT SẢN PHẨM</th>
        </tr>
    </thead>
    <tbody>';
   
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
            $image = $imgPath . $cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
            $found = false;
            echo ' <tr class="product-list">';
            echo ' <td scope="col"><img src="' . $image . '"></td>';
            echo '<td scope="col">' . $cart[3] . '</td>';
            echo '  <td scope="col">' . $cart[4] . '</td>';
            echo ' <td scope="col">' . $cart[5] . '</td>';
            echo '  </tr>';
    }
    
        echo'</tbody>  <tfoot>
                    <tr class="heading text-left">
                        <td scope="col">Tổng Thanh Toán:' . $tong . '</td>
                    </tr> 
                </tfoot>';
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Books</title>
    <link rel="shortcut icon" href="/view/images/7.png">
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

    .item1
    {
        grid-area: btn;
    }
    .item2
    {
        grid-area: name;
    }
    .item3
    {
        grid-area: span
    }
    .grid-container2
    {
        margin-top: 20px;
        display: grid;
        grid-template-areas: 'span span span';
    }
    .grid-container
    {
        
        display:grid;
        grid-template-areas: 'btn name name' ;
    }

     .payment-method-container {
        text-align: center;
    }


    .payment-method input[type="radio"] {
        transform: scale(0.4);
        margin-top: -4px;
        /* Adjust the scale factor as needed */

    }

    .payment-dropdown {
        margin-top: 10px;
        /* Adjust as needed for spacing between radio buttons and dropdowns */
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
        <!-- Giao diện bên trái -->
        <div class="left-area">
            <!-- Giao diện bên trái -->
            <a href="/index.php">
                <img src="/view/images/7.png" width="70" height="70" href="/index.php">
                <div class="app-name">FutureBooks</div>
            </a>
            <!-- menu -->
            <div class="sidenav">
                <!-- Giao diện bên trái -->

                <a href="/index.php"><i class="fa fa-home"></i> Trang chủ</a>
                <a href="#services"><i class="fa fa-fire"></i> Sale sốc</a>
                <a href="#clients"><i class="fa fa-fire"></i> Hot</a>
                <a href="#contact"><i class="fa fa-phone"></i> Liên hệ</a>

                <div class="dropdown-btn"><i class="fa fa-book"></i> Sách
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="dropdown-container">
                    <div class="dropdown-btn">Link 1
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="dropdown-container">
                        <a href="#">Link 4</a>
                        <a href="#">Link 5</a>
                    </div>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <a href="#contact"><i class="fa fa-search"></i> Search</a>
                <hr>
                <a href="../HTML/gio_hang.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng<span> (0)</span></a>
                <!-- ====== -->
            </div>
            <button class="btn-logout">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out"
                    viewBox="0 0 24 24">
                    <defs />
                    <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9" />
                </svg>
            </button>
        </div>

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
            <h2><i class="fa fa-shopping-cart"></i> TÍNH TIỀN VÀ THANH TOÁN</h2>
            <!-- Chuyển trang -->
            <section class="content-section">
                <table class="chuyen-trang">
                    <tr>
                        <td><a href="../../index.php?action=addtocart">
                                <h6><b>1. KIỂM TRA GIỎ HÀNG CỦA BẠN</b></h6>
                            </a></td>
                        <td><a href="#">
                                <h6><b>2. TÍNH TIỀN VÀ THANH TOÁN</b></h6>
                            </a></td>
                        <td><a href="gio_hang_thanhcong.html">
                                <h6><b>3. ĐẶT HÀNG THÀNH CÔNG</b></h6>
                            </a></td>
                    </tr>
                </table>
            </section>


            <div class="tinh-tien">

                <div class="thanh-toan-left">
                    <table>

                        <?php
                           
                            view_cart()?>
                    </table>
                </div>




                <div class="thanh-toan-right">
                    <table>
                        <?php
                        if(isset($_SESSION['ROLE'])){
                            $name=$_SESSION['ROLE']['HOTEN'];
                            $address=$_SESSION['ROLE']['DIACHI'];
                            $email=$_SESSION['ROLE']['EMAIL'];
                            $tel=$_SESSION['ROLE']['SDT'];
                            $id=$_SESSION['ROLE']['USERID'];
                        }else {
                            $name="nhập đê";
                            $address="";
                            $email="";
                            $tel="";
                        }
                  ?>
                        <h3>Địa chỉ thanh toán</h3>
                        <form action="../../index.php?action=donhangtt" method="post">
                            <label for="name">Họ và Tên: </label><br>
                            <input type="text" id="name" name="name" value="<?=$name?>"
                                placeholder="Nhập họ và tên.."><br>
                            <label for="email">Email: </label><br>
                            <input type="email" id="email" name="email" value="<?=$email?>"
                                placeholder="Nhập email.." ><br>
                            <label for="phone">Số điện thoại: </label><br>
                            <input type="tel" id="tel" name="tel" value="<?=$tel?>" placeholder="Nhập số điện thoại" >
                            <br>
                            <label for="address">Địa chỉ nhận hàng: </label> <br>
                            <input type="text" id="address" name="address" value="<?=$address?>"
                                placeholder="Nhập địa chỉ.." > <br>
                                <input type="hidden" id="iduser" name="iduser" value="<?=$id?>">    
                            <div class="grid-container2">
                                <div class="grid-container payment-method">
                                    <input class="item1" type="radio" id="cod" name="pttt" value="<?=1?>"
                                        onclick="showDropdown('codDropdown')">
                                    <label class="item2" for="cod">COD</label>
                                </div>



                                <div class="grid-container payment-method">
                                    <input type="radio" id="e-wallet" name="payment" value="e-wallet"
                                        onclick="showDropdown('eWalletDropdown')">
                                    <label for="e-wallet">Thanh toán online</label>
                                </div>
                            </div>
                                <!-- COD Dropdown -->
                                
                                <!-- E-Wallet Dropdown -->
                                <div id="eWalletDropdown" class="payment-dropdown" style="display: none;">
                                    <label for="e-wallet-option">Lựa chọn phương thức:</label>
                                    <select id="e-wallet-option" name="e-wallet-option">
                                        <option name="pttt" value="<?=2?>">Ví MoMo</option>
                                        <option  name="pttt"value="<?=3?>">VNPay</option>
                                    </select>
                                </div>
                                <!-- Credit Card Dropdown -->
                               
                            <table class="chuyen-trang"><br>
                                <td><a href="">
                                        <input name="dathang" type="submit" value="ĐẶT HÀNG ">
                                    </a></td>
                            </table>                           
                        </form>
                        <section class="content-section">
 
                        </section>
                </div>
            </div>
        </div>
    </div>
    <script>
    function showDropdown(dropdownId) {
        // Hide all dropdowns
        var dropdowns = document.getElementsByClassName('payment-dropdown');
        for (var i = 0; i < dropdowns.length; i++) {
            dropdowns[i].style.display = 'none';
        }

        // Show the selected dropdown
        document.getElementById(dropdownId).style.display = 'block';
    }
    </script>

</html>