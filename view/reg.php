<?php
 if(isset($_POST['btn-reg'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $fullname = $_POST['name'];
    $age = $_POST['age'];
    $email= $_POST['email'];
    $gender=$_POST['gender'];
    $address= $_POST['address'];
    $phone=$_POST['phone'];
    if (!empty($username)&&!empty($password)&&!empty($fullname)&&!empty($age)&&!empty($email)&&!empty($gender)&&!empty($address)&&!empty($phone))
     {
         echo"<pre>";
          print_r($_POST);
         $sql = "INSERT INTO `tt_kh`(`HOTEN_KH`,`username`,`password`,`TUOI`,`EMAIL`,`GIOITINH`,`DIACHI`,`SDT`) 
         VALUES ('$fullname','$username',md5('$password'),'$age','$email','$gender','$address','$phone') ";
         if ($conn ->query($sql)===true) {
              echo"lưu dữ liệu thành công";       
            header("Location:../../susi/sign_in.php");
         } else {
              echo"lỗi{$sql}".$conn ->error;
              echo("location:../../susi/sign_up.php");
         }
     }else{
         echo"cần nhập đầy đủ thông tin trc khi đăng kí ";
     }
 }
?>