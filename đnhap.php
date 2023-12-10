<!-- Check trống -->
<?php
   $mail = null;	
   $pass = null; 	
   $mail_error = null;  
   $pass_error = null; 
   $success = null;
 
   if(isset($_POST['sign-in'])){
      $mail = $_POST['mail'];
      $pass= $_POST['pass'];
 
      if(empty(trim($mail))){
         $mail_error = "Vui lòng không để trống !";
      }else{
         if(empty(trim($pass))){
            $pass_error = "Vui lòng không để trống !";
         }else{
            $mail = null;	
            $pass = null; 	
            $mail_error = null;  
            $pass_error = null; 
            $success = null;
            }
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
    <link rel="stylesheet" href="sign.css">
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
    margin-bottom: -10px;
    margin-left: 70px;
    align-items: center;
}
</style>
<?php
   if($mail_error != null){
      ?> <style>
.mail-error {
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
   if($success != null){
      ?> <style>
.success {
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

        <h2>Đăng Nhập</h2>

        <label>Email</label><br>
        <input type="email" name="mail" value="<?php echo $mail; ?>"><br>
        <p class="error mail-error">
            <?php echo $mail_error; ?>
        </p><br>

        <label>Mật khẩu</label><br>
        <input type="password" name="pass" value="<?php echo $pass; ?>"><br>
        <p class="error pass-error">
            <?php echo $pass_error; ?>
        </p><br>

        <input type="submit" name="sign-in" value="Đăng Nhập">
        <p class="success">
            <?php echo $success; ?>
        </p>

    </form>
</body>

</html>