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
<table>
 <?php

  while ($row = mysqli_fetch_array($query_listname)){
$iddh = $row['IDDH'];
$hoten = $row['HOTEN'];
$diachi = $row['DIACHI'];
$phone = $row['PHONE'];
$email = $row['EMAIL'];
$tong = $row['TONG'];
$ngaydang = $row['NGAYDATHANG'];
?>

    <?php 
echo "

<div>cam on bruh $hoten da dat hang</div>
<div>thong tin don hang</div>
<div>Ma don hang: $iddh</div>
<div>Mail su dung: $email</div>
<div>Giao den dia chi: $diachi</div>
<div>Tong hoa don: $tong</div>
<div>Ngay dat hang: $ngaydang</div>

";
    ?>


<?php 
  }
?>
</table>

