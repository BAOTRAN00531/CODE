

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
 <?php

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