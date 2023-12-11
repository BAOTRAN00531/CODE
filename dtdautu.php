<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/view/css/dkdautu.css">

</head>
<body>
    <h1>Đăng kí đầu tư</h1>
    <br>
  <form class="form-quynh" action="index.php?action=dkdautu" method="post" enctype="multipart/form-data">
    <label class="label-quynh" for="hoten">Họ tên:</label>
    <input class="input-quynh" type="text" id="hoten" name="hoten" required><br><br>
    <label class="label-quynh" for="congty">Công ty:</label>
    <input class="input-quynh" type="text" id="congty" name="congty" required><br><br>
    <label class="label-quynh" for="hopdong">Hợp đồng:</label>
    <input class="input-quynh" type="file" id="hopdong" name="hopdong" required><br><br>
    <input class="input-quynh" type="submit" value="Đăng kí">
  </form>
</body>
</html>
