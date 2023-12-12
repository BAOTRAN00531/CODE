<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">

<style>
.dbtn {
  height: 40px;
  background-color: rgb(127, 182, 255);
  color: white;
  padding: 16px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}
.dbtn {
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.dpdown {
  height: 40px;
  position: absolute;
  display: inline-block;
  margin: 0px;
  text-align: center;
  font-size: 20px;
  line-height: 45px;
}

.content {
    display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  width: 300px;
  height: 300px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin: 5px;
}

.content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dpdown:hover .content {
  display: block;
}

.dpdown:hover .dbtn {
  background-color: rgb(0, 107, 246);
}

.logout{
    background-color: rgb(127, 182, 255);
    height: 40px;
    width: 300px;
}
</style>
</head>
<body>
<?php 
    if (isset($_SESSION['ROLE'])) {
        extract($_SESSION['ROLE']); 
        echo'<div class="dpdown" style="float:right;">
        <button class="dbtn"><i class="fa fa-user"></i>
          </button>
        <div class="content">
          <div class="open-tittle">
          <span></span>
          <img src="uploads/055d9a31e0b31a20e426fb7bf1031ce5.jpg" style="width: 150px; height: 150px; border-radius: 50%;"><br>
          <span>Hi! '.$_SESSION['ROLE']['HOTEN'].'</span><br>
        <a href="index.php?action=user"><button  style="width:250px;class="add-to-cart btn btn-default" >INFO</button></a>

          </div>
        
       
        <div class="google_account">

        
        </div><br>
        ';
  ?> 
  <?php
    }else{
      echo'<div class="dpdown" style="float:right;">
      <button class="dbtn"><i class="fa fa-user"></i>
        </button>
      <div class="content">
        <div class="open-tittle">
        <img style="padding-top:25px" src="/view/images/7.png" width="100px"><br>
        <a href="../index.php?action=login"><button style="width:250px;class="add-to-cart btn btn-default">Đăng nhập</button></a>
        <a href="../index.php?action=signup"><button style="width:250px;class="add-to-cart btn btn-default">Đăng kí</button></a>
        </div>
      <div class="google_account">
      
      </div><br>
      ';}
   ?>

  
  </div>
</div>

</body>
</html>


