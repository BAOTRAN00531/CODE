<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="/CSS/sign_new.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form id="sign" action="/PHP/login.php" method="post" style="border:1px solid #ccc">
        <div class="container">
            <h2>ĐĂNG NHẬP  <i class="fas fa-users"></i></h2>
            <hr>
            <label>Tên đăng nhập: </label>
            <br>
            <input name="username" type="text" placeholder="Username...">
            <h4 id="baoloi"></h4>
            <br>
            <label>Mật khẩu: </label>
            <br>
            <input name="password" type="password" placeholder="PassWord...">
            <h4 id="baoloi"></h4>
            <br>
            <div class="clearfix">
            <input type="submit" name="btn-log" value="Đăng nhập" />
            <input type="reset" name="reset" class="cancel" onclick="resetForm()" />
            </div>
            <h3>-- Chưa có tài khoản - <a href="sign_up.php">Đăng ký</a></h3>
            <script>
                function resetForm(){document.getElementById("sign").reset();}
            </script>
        </div>
    </form>
</body>
</html>


