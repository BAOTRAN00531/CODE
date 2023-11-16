<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "futurebook";
$conn = new mysqli($host,$username,$password,$dbname);
if ($conn ->connect_error) {
    die("kết nối ko thành công".$conn ->connect_error);
}
echo"kết nối oke";
?>