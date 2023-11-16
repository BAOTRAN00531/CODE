<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="/Code/CSS/thanh_toan.css">
</head>
<body>
    
<div class="container">
    <div class="checkoutLayout">
        <div class="returnCart">
            <a href="index.php">Tiếp tục mua sắm</a>
            <h1>Sản phẩm</h1>
            <div class="list">

                <div class="item">
                    <img src="/Code/IMG/7.png">
                    <div class="info">
                        <div class="name">Sách 5cm/s</div>
                        <div class="price">150k / 1sp</div>
                    </div>
                    <div class="quantity">1</div>
                    <div class="returnPrice">150000</div>
                </div>

            </div>
        </div>


        <div class="right">
            <h1>Thanh toán</h1>

            <div class="form">
                <div class="group">
                    <label for="name">Họ Tên</label>
                    <input type="text" name="name" id="name">
                </div>
    
                <div class="group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone" id="phone">
                </div>
    
                <div class="group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" id="address">
                </div>
    
                <div class="group">
                    <label for="country">Thành Phố</label>
                    <select name="country" id="country">
                        <option value="">Choose..</option>
                        <option value="">TP.HCM</option>
                        <option value="">Hà Nội</option>
                        <option value="">Cần Thơ</option>
                        <option value="">Quảng Nam</option>

                    </select>
                </div>
    
                <div class="group">
                    <label for="city">Đất Nước</label>
                    <select name="city" id="city">
                        <option value="">Choose..</option>
                        <option value="">Việt Nam</option>
                    </select>
                </div>

                <div class="group">
                    <label for="thanh_toan">Phương Thức Thanh Toán</label>
                    <select name="thanh_toan" id="thanh_toan">
                        <option value="">Choose..</option>
                        <option value="">Tiền Mặt</option>
                        <option value="">Chuyển khoản</option>
                        <option value="">Zalo</option>
                        <option value="">Momo</option>
                        <option value="">ShopeePay</option>

                    </select>
                </div>
                <div class="group">
                    <label for="voucher">Mã voucher</label>
                    <input type="text" name="voucher" id="voucher">
                    </select>
                </div>

                

            </div>
            <div class="return">
                <div class="row">
                    <div>Total Quantity</div>
                    <div class="totalQuantity"></div>
                </div>
                <div class="row">
                    <div>Total Price</div>
                    <div class="totalPrice"></div>
                </div>
            </div>
            <button class="buttonCheckout">Thanh toán</button>
            </div>
    </div>
</div>




</body>
</html>