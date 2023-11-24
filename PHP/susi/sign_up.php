<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="/CSS/sign_new.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form id="sign" action="/PHP/reg.php" method="post" style="border:1px solid #ccc" onsubmit="return kiemtra()" onsubmit="matchpass()">
<div class="container">
    <h2>ĐĂNG KÝ  <i class="fas fa-users"></i></h2>
    <hr>
    <label>Tên đăng nhập: </label>
    <br>
    <input name="username" type="text" id="username" placeholder="Username..." autocomplete="username">
    <h4 id="baoloi"></h4>
    <br>
    <label>Mật khẩu: </label>
    <br>
    <input name="pass" type="password"  id="password" placeholder="PassWord..."autocomplete="password">
    <h4 id="baoloi"></h4>
    <br>
    <label>Nhập lại mật khẩu</label>
    <br>
    <input type="password" id="password placeholder="Repeat Password..." name="pswrepeat" autocomplete="pswrepeat">
    <h4 id="baoloi"></h4>
    <br>
    <hr>
    <h3>Thông Tin Khách Hàng  <i class="fas fa-user-edit"></i></h3>
    <hr>
    <label>Họ và Tên: </label>
    <br>
    <input name="name" id="name" type="text" placeholder="Name..." autocomplete="name">
    <h4 id="baoloi"></h4>
    <br>
    <label>Tuổi: </label>
    <br>
    <input name="age" id="age" type="number" placeholder="Age..." min="1" max="100">
    <h4 id="baoloi"></h4>
    <br>
    <label>Email: </label>
    <br>
    <input name="mail" type="email" id="mail" placeholder="Email..." autocomplete="mail">
    <h4 id="baoloi"></h4>
    <br>
    <label>Giới tính: </label>
        <div>
            <div class="form-check">
                <input class="form-check" type="radio" name="gender" checked
                id="male" value="male">
                <label class="form-check" for="male">NAM</label>
            </div>
            <div class="form-check">
                <input class="form-check" type="radio" name="gender" checked
                id="female" value="female">
                <label class="form-check" for="female">NỮ</label>
            </div>
        </div>
    <label>Địa chỉ: </label>
    <br>
    <input name="address" id="address" type="text" placeholder="Address..." autocomplete="address">
    <h4 id="baoloi"></h4>
    <br>
    <label>Số điện thoại: </label>
    <br>
    <input name="phone" id="phone"  type="tel" placeholder="Phone number..." autocomplete="phone">
    <h4 id="baoloi"></h4>
    <br>
    <hr>
    <label> <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
    <p>Điều khoản sử dụng <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <hr>
    <div class="clearfix">
    <input type="reset" name="reset" class="cancel" onclick="resetForm()" />
    <input type="submit"  name="btn-reg" class="signup" value="Đăng ký" />
    </div>
    <br>
    <hr>
    <h3>-- Đã có tài khoản - <a href="/HTML/signin_new.html">Đăng nhập</a></h3>
</form>
</div>
<script>
    function kiemtra(){
        var u = document.sign.username.value;
        var p = document.sign.password.value;
        var rp = document.sign.pswrepeat.value;
        var n = document.sign.name.value;
        var a = document.sign.age.value;
        var em = document.sign.mail.value;
        var ad = document.sign.address.value;
        var phone = document.sign.phone.value;
        if (u=="") { //quy tắc 1
            document.getElementById("baoloi").innerHTML="Không để trống!";
            return false;
        }
        if (p=="") {  //quy tắc 2
            document.getElementById("baoloi").innerHTML="Không để trống!";
            return false;
        }
        if (rp=="") { //quy tắc 1
            document.getElementById("baoloi").innerHTML="Không để trống!";
            return false;
        }
        if (n=="") { //quy tắc 1
            document.getElementById("baoloi").innerHTML="Không để trống!";
            return false;
        }
        if (a=="") { //quy tắc 1
            document.getElementById("baoloi").innerHTML="Không để trống!";
            return false;
        }
        if (em=="") { //quy tắc 1
            document.getElementById("baoloi").innerHTML="Không để trống!";
            return false;
        }
        if (ad=="") { //quy tắc 1
            document.getElementById("baoloi").innerHTML="Không để trống!";
            return false;
        }
        if (phone=="") { //quy tắc 1
            document.getElementById("baoloi").innerHTML="Không để trống!";
            return false;
        }
        return true;
        alert("Đăng ký thành công!");
        window.location.href = "signin_new.html";
    }
</script>

<script>
    function matchpass(){  
    var firstpassword=document.sign.password.value;  
    var secondpassword=document.sign.pswrepeat.value;  
    if(firstpassword==secondpassword){  
        document.getElementById("sign").addEventListener("submit", function (event) {
        event.preventDefault();
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        localStorage.setItem("username", username);
        localStorage.setItem("password", password);
    });}  
    else{  
    alert("Password nhập lại không trùng khớp!");  
    return false;  
    }  
}
</script>

<script>
    function resetForm() {
        document.getElementById("sign").reset();
    }
</script>

</body>
</html>