<!-- Check trống -->
<?php
ob_start();
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

</style>


<body><div class="mau">
    <form action="../index.php?action=dangnhap" method="post" autocomplete="off">
        <div id="loader">
            <div class="circle">
                <div class="circle1"></div>
                <div class="circle2"></div>
            </div>
        </div>

        <h2>Đăng Nhập</h2>

        <label>Email</label><br>
        <input type="email" name="email" ><br>
     

        <label>Mật khẩu</label><br>
        <input type="password" name="pass" ><br>
        <br>

         <input  type="submit" name="dangnhap" value="Đăng Nhập">
        
        <a  href="../index.php?action=dangki">Dangki</a>
    </form>
    </div>
</body>

</html>