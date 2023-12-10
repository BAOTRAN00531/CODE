<?php

    
    function view_cart(){
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        $imgPath = "/";
    
        echo '<thead>
            <tr class="heading text-center">
                <th scope="col">CHI TIẾT SẢN PHẨM</th>
                <th scope="col">SỐ LƯỢNG</th>
                <th scope="col">THÀNH TIỀN</th>
            </tr>
        </thead>
        <tbody>';
       
        $tong = 0;
    
        foreach ($_SESSION['mycart'] as $cart) {
            $image = $imgPath . $cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
            $found = false;
            echo '<tr class="product-list">';
            echo '<td scope="col"><img src="' . $image . '"></td>';
            echo '<td scope="col">' . $cart[4] . '</td>';
            echo '<td scope="col">' . $ttien . '</td>';
            echo '</tr>';
        }
        
        echo'</tbody>  
        <tfoot>
            <tr class="heading text-left">
                <td scope="col">Tổng Thanh Toán: ' . $tong . '</td>
            </tr> 
        </tfoot>';
    }

?>

    <style>
    /* css chỉnh cho menu */
   

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
    


            <!-- Sản phẩm -->
           
            <!-- Chuyển trang -->
            <section class="content-section">
                <table class="chuyen-trang">
                    <tr>
                        <td><a href="../../index.php?action=addtocart">
                                <h6><b>1. KIỂM TRA GIỎ HÀNG CỦA BẠN</b></h6>
                            </a></td>
                        <td><a href="../../index.php?action=donhangtt&idsp=<?=$idsp?>"">
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
                        $idsp=$_GET['idsp'];
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
                                <input type="hidden" id="idsp" name="idsp" value="<?=$idsp?>">
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

