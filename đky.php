<!-- Check trống -->
<?php
   $hoten=null;
   $user=null;
   $address=null;
   $phone=null;
   $mail = null;	
   $pass = null; 
   $hoten_error=null;
   $user_error=null;
   $address_error=null;
   $phone_error=null;	
   $mail_error = null;  
   $gt_error=null;
   $pass_error = null; 
   $success = null;
 
   if(isset($_POST['sign-up'])){
    $hoten=$_POST['hoten'];
    $user=$_POST['user'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $mail = $_POST['mail'];
    $pass= $_POST['pass'];
 
      if(empty(trim($hoten))){
         $hoten_error = "Vui lòng không để trống !";
      }
      elseif(empty(trim($user))){
        $user_error = "Vui lòng không để trống!";
      }
         elseif(empty(trim($pass))){
            $pass_error = "Vui lòng không để trống !";
      }
      elseif(empty(trim($mail))){
        $mail_error = "Vui lòng không để trống!";
      }
      elseif(empty(trim($address))){
        $address_error = "Vui lòng không để trống!";
      }
      elseif(empty(trim($phone))){
        $phone_error = "vui lòng không để trống!";
      }
      else{
        $hoten=null;
        $user=null;
        $address=null;
        $phone=null;
        $mail = null;	
        $pass = null; 
        $hoten_error=null;
        $user_error=null;
        $address_error=null;
        $phone_error=null;	
        $mail_error = null;  
        $pass_error = null; 
        $success = null;
        }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="sign2.css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
    var loader = function() {
        setTimeout(function() {
            $('#loader').css({
                'opacity': 0,
                'visibility': 'hidden'
            });
        }, 1000);
    };
    $(function() {
        loader();
    });
    </script>
</head>
<style>
.error {
    color: red;
    padding: 10px;
    display: none;
    transform: translateY(-14px);
    font-size: 14px;
    width: 150px;
    margin-bottom: -35px;
    margin-left: 70px;
    align-items: center;
}
</style>
<?php
    if($hoten_error != null){
        ?> <style>
.hoten-error {
    display: block
}
</style> <?php
     }
     if($user_error != null){
        ?> <style>
.user-error {
    display: block
}
</style> <?php
     }
     if($pass_error != null){
        ?> <style>
.pass-error {
    display: block
}
</style> <?php
     }
     if($mail_error != null){
        ?> <style>
.mail-error {
    display: block
}
</style> <?php
     }
     if($address_error != null){
        ?> <style>
.address-error {
    display: block
}
</style> <?php
     }
     if($phone_error != null){
        ?> <style>
.phone-error {
    display: block
}
</style> <?php
     }
?>

<body>
    <form action="" method="post" autocomplete="off">
        <div id="loader">
            <div class="circle">
                <div class="circle1"></div>
                <div class="circle2"></div>
            </div>
        </div>
        <h2>Đăng Ký</h2>
        <label>Họ Tên</label><br>
        <input type="text" name="hoten" value="<?php echo $hoten; ?>"><br>
        <p class="error hoten-error">
            <?php echo $hoten_error; ?>
        </p><br>

        <label>Tên đăng nhập</label><br>
        <input type="text" name="user" value="<?php echo $user; ?>"><br>
        <p class="error user-error">
            <?php echo $user_error; ?>
        </p><br>

        <label>Mật khẩu</label><br>
        <input type="password" name="pass" value="<?php echo $pass; ?>"><br>
        <p class="error pass-error">
            <?php echo $pass_error; ?>
        </p><br>

        <label>Email</label><br>
        <input type="email" name="mail" value="<?php echo $mail; ?>"><br>
        <p class="error mail-error">
            <?php echo $mail_error; ?>
        </p><br>

        <label>Địa chỉ</label><br>
        <input type="text" name="address" value="<?php echo $address; ?>"><br>
        <p class="error addres-error">
            <?php echo $address_error; ?>
        </p><br>

        <label>Điện thoại</label><br>
        <input type="tel" name="phone" value="<?php echo $phone; ?>"><br>
        <p class="error phone-error">
            <?php echo $phone_error; ?>
        </p><br>

        <input type="submit" name="sign-up" value="Đăng Ký">
        <p class="success">
            <?php echo $success; ?>
        </p>
    </form>
</body>

</html>