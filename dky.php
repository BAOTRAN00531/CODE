<!-- Check trống -->
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

</style>
<body>
    <form action="../index.php?action=signup" method="post" autocomplete="off">
        <div id="loader">
            <div class="circle">
                <div class="circle1"></div>
                <div class="circle2"></div>
            </div>
        </div>
        <h2>Đăng Ký</h2>
        <label>Họ Tên</label><br>
        <input type="text" name="hoten" ><br>
        <br>

        <label>Tên đăng nhập</label><br>
        <input type="text" name="user" ><br>
        <br>

        <label>Mật khẩu</label><br>
        <input type="password" name="pass" ><br>
        <br>

        <label>Email</label><br>
        <input type="email" name="mail" ><br>
       <br>

        <label>Địa chỉ</label><br>
        <input type="text" name="address" ><br>
       <br>

        <label>Điện thoại</label><br>
        <input type="tel" name="phone" ><br>
       <br>

        <input type="submit" name="sign-up" value="Đăng Ký">
      
    </form>
</body>

</html>