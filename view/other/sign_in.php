<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/view/css/sign.css">
    <title>Sign-in</title>
</head>
<body>
<div class="container">
    <div class="header">
      <div class="header__icon">
        <i class="fa fa-users"></i>
      </div>
      <div class="header__title">
        <h2>Đăng Nhập</h2>
      </div>
    </div>
    <form action="index.php?action=dangnhap" method="post" class="form">
      <div class="form__username">
        <div class="form__username--icon form__icon">
          <i class="fa fa-user"></i>
        </div>
        <div class="form__username--input form__input">
          <input type="text" name="email" id="email" placeholder="email" >
        </div>
      </div>
      <div class="form__password">
        <div class="form__password--icon form__icon">
          <i class="fa fa-lock"></i>
        </div>
        <div class="form__password--input form__input">
          <input type="password" id="password" placeholder="Password" name="password">
        <span class="fa fa-eye" id="togglePassword"></span>
        </div>
      </div>
      <div class="form__submit">
        <input type="submit" name="btn-log" value="Đăng nhập">
      </div>
    </form>
  </div>
        </form>
    </div>
    <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
</body>
</html>