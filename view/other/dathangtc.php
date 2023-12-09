<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Books</title>
    <link rel="shortcut icon" href="../IMG/7.png">
    <!-- css giao diện -->
    <link rel="stylesheet" href="/view/CSS/giaodien.css">
    <!-- css sản phẩm -->
    <link rel="stylesheet" href="/view/CSS/sanpham.css">
    <!-- css icon -->
    <link rel="stylesheet" href="/view/CSS/icon.css">
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

<?php

// Kết nối đến CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "futurebook";


$conn = new mysqli($servername, $username, $password, $dbname);
$show_listname = "SELECT * FROM `donhang` ORDER BY `IDDH` DESC LIMIT 1";
$query_listname = mysqli_query($conn,$show_listname);
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Giả sử có biến $iddh là giá trị của 'iddh'
// Thay đổi giá trị này theo định nghĩa của bạn

// Thực hiện truy vấn SQL, chẳng hạn chèn dữ liệu vào bảng 'donhang'
// $sql = "INSERT INTO donhang (IDDH, HOTEN, DIACHI, PHONE, EMAIL, TONG, PTTT, NGAYDATHANG, TINHTRANG) 
//         VALUES ('$iddh', '$name', '$address', '$tel', '$email', 100.00, 1, '2023-11-29', 0)";
// if ($conn->query($sql) === TRUE) {
//     echo "Record inserted successfully<br>";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// Đóng kết nối CSDL
$conn->close();
?>
< <?php

        while ($row = mysqli_fetch_array($query_listname)){
      $iddh = $row['IDDH'];
      $hoten = $row['HOTEN'];
      $diachi = $row['DIACHI'];
      $phone = $row['PHONE'];
      $email = $row['EMAIL'];
      $tong = $row['TONG'];
      $ngaydang = $row['NGAYDATHANG'];
?> <?php 
    
echo '  
<div class="main-area">
            <!-- hiện ra hai nút ẩn khi giao diện nhỏ (nút hiện giao diện bên trái và bên phải) -->
            <button class="btn-show-right-area">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"/></svg>
            </button>
            <button class="btn-show-left-area"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
            <!-- Tiêu đề chính, chứa nút tìm kiếm -->
            <div class="main-area-header">
                <!-- nút tìm kiếm -->
                <div class="container">
                  <div class="search-wrapper" id="searchLine">
                      <input class="search-input" type="text" placeholder="tìm kiếm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
                          <defs/>
                          <circle cx="11" cy="11" r="8"/>
                          <path d="M21 21l-4.35-4.35"/>
                      </svg>
                  </div>
                
              </div>
            </div>

<section class="content-section">
<table class="chuyen-trang">
          <tr>
          <td><a href="gio_hang.html"><h6><b>1. KIỂM TRA GIỎ HÀNG CỦA BẠN</b></h6></a></td>  
          <td><a href="gio_hang_tt.html"><h6><b>2. TÍNH TIỀN VÀ THANH TOÁN</b></h6></a></td>
          <td><a href="gio_hang_thanhcong.html"><h6><b>3. ĐẶT HÀNG THÀNH CÔNG</b></h6></a></td>
          </tr>
      </table>
</section>';
echo '
<div class="xacnhan">
    <h1>XÁC NHẬN ĐƠN HÀNG</h1><br>
    <p>Đơn hàng <span><b>'.$iddh.'</b></span> giá trị <span><b>'.$tong.'</b></span>sẽ được giao đến<br>
        Người nhận: <span><b>'.$hoten.'</b></span><br>
        Số điện thoại: <span><b>'.$phone.'</b></span><br>
        Địa chỉ: '.$diachi.' </p><br>
        <a href="../index.php" class="btn_dathang" role="button" aria-pressed="true">HOÀN THÀNH VÀ QUAY LẠI TRANG CHỦ</a>
</div>';
    ?> <?php 
  }
?> 