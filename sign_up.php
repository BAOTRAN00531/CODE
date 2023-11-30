<?php 
  include "dao/pdo.php";
  include "dao/account.php";
  if(isset($_POST['btn-reg'])&&($_POST['btn-reg'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['name'];
    $email= $_POST['email'];
    $gender=$_POST['gender'];
    $address= $_POST['address'];
    $phone=$_POST['phone'];
    account_insert($username, md5($password),$fullname,$email,$gender,$address,$address,$phone);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/view/css/sign2.css">
    <title>Sign-up</title>
</head>
<body>
<div class="container">
    <div class="header">
      <div class="header__icon">
        <i class="fa fa-users"></i>
      </div>
      <div class="header__title">
        <h2>Đăng Ký</h2>
      </div>
    </div>

    <form action="#" method="post"  onsubmit="return kiemtra()" onsubmit="matchpass()" class="form">
      <div class="form__name">
        <div class="form__name--input form__input">
          <input type="text"name="name" id="name" placeholder="Họ và Tên" name="Họ tên">
        </div>
      </div>

      <div class="form__username">
        <div class="form__username--input form__input">
          <input type="text" name="username" id="username" placeholder="Username" name="Username">
        </div>
      </div>

      <div class="form__pass">
        <div class="form__pass--input form__input">
          <input type="text" name="password" id="pass" placeholder="Password" name="Password">
        </div>
      </div>

      <div class="form__email">
        <div class="form__email--input form__input">
          <input type="text"name="email" id="email" placeholder="Email" name="email">
        </div>
      </div>

      <div class="form__sex">
        <div class="form__sex--input form__input">
          <input type="text"name="gender" id="sex" placeholder="Giới tính" name="sex">
        </div>
      </div>

      <div class="form__address">
        <div class="form__address--input form__input">
          <input type="text"name="address" id="address" placeholder="Địa chỉ" name="address">
        </div>
      </div>

      <div class="form__phone">
        <div class="form__phone--input form__input">
          <input type="text" name="phone" id="phone" placeholder="Số điện thoại" name="phone">
        </div>
      </div>
      <div class="form__submit">
        <input  type="submit" name="btn-reg" action="" class="signup" value="Đăng ký">
      </div>
    </form>
  </div>
        </form>
    </div>
    <script>
function kiemtra() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("pass").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var gender = document.getElementById("sex").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;

    if (!username || !password || !name || !email || !gender || !address || !phone) {
        document.getElementById("baoloi").innerHTML = "Không để trống!";
        return false;
    }
            alert("Đăng ký thành công!");
            window.location.href = "/login.php";
            return true;
    }
    </script>
</body>
</html>