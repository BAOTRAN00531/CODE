<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">
    .upload{
      width: 300px;
      position: relative;
      margin: auto;
      text-align: center;
    }
    .upload img{
      border-radius: 50%;
      border: 8px solid #DCDCDC;
      width: 300px;
      height: 300px;
    }
    .upload .rightRound{
      position: absolute;
      bottom: 0;
      right: 0;
      background: #00B4FF;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .leftRound{
      position: absolute;
      bottom: 0;
      left: 0;
      background: red;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .fa{
      color: white;
    }
    .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }
  </style>
<?php 
include_once "dao/account.php";
$iduser = $_SESSION['ROLE']['USERID'];
$list = account_select($iduser);
foreach( $list as $key => $v )
{
    extract($v);

$name = $v['HOTEN'];
$user = $v['username'];
$age = $v['TUOI'];
$gender = $v['GIOITINH'];
$phone = $v['SDT'];
$image = $v['GIOITINH'];
echo "
<div  style='width:86%;margin-left:37px;margin-top:50px'>
<form  action='index.php?action=edituser' method='post'>
<table >
    <tr>
        <td style = 'padding: 0px 20px 30px 0px;text-align: right;'><label style='color:white;' for='name'>ID:</label></td>
        <td style = 'padding: 0px 0px 35px 20px;text-align: left;><label style='color:white'>$iduser </label> </td>
        <td rowspan='5' style = 'width:400px;padding: 0px 0px 0px 20px;text-align: left;><label style='color:white'>
        <form class='form' id = 'form' action='' enctype='multipart/form-data'method='post'>
        <input type='hidden' name='id' value='<?php echo $iduser; ?>'>
        <div class='upload'>
         <img src='uploads/055d9a31e0b31a20e426fb7bf1031ce5.jpg' id = 'image'>
  
          <div class='rightRound' id = 'upload'>
            <input type='file' name='fileImg' id = 'fileImg' accept='.jpg, .jpeg, .png'>
            <i class = 'fa fa-camera'></i>
          </div>
  
          <div class='leftRound' id = 'cancel' style = 'display: none;'>
            <i class = 'fa fa-times'></i>
          </div>
          <div class='rightRound' id = 'confirm' style = 'display: none;'>
            <input type='submit'>
            <i class = 'fa fa-check'></i>
          </div>
        </div>
      </form> </label> </td>
    </tr>
    <tr>
    <td style = 'padding: 0px 20px 30px 0px;text-align: right;'><label style='color:white; for='name'>TEN:</label></td>
    <td style = 'padding: 0px 0px 35px 20px;text-align: left;'><input style='width: fit-content;' type='text' name='name' value='$name'> </td>
    </tr>
    <tr>
    <td style = 'padding: 0px 20px 30px 0px;text-align: right;'><label style='color:white;' for='name'>TEN DANG NHAP:</label></td>
    <td style = 'padding: 0px 0px 35px 20px;text-align: left;'><label style='color:white'>$user </label> </td>
    </tr>
    <tr>
    <td style = 'padding: 0px 20px 30px 0px;text-align: right;'><label style='color:white;' for='name'>TUOI:</label></td>
    <td style = 'padding: 0px 0px 35px 20px;text-align: left;'><input style='width: fit-content;' type='text' name='name' value='$age'> </td>
    </tr>
    <tr>
        <td style = 'padding: 0px 20px 30px 0px;text-align: right;'><label style='color:white;' for='name'>SODT:</label></td>
        <td style = 'padding: 0px 0px 35px 20px;text-align: left;'><input style='width: fit-content;' type='text' name='name' value='$phone'> </td>
    </tr>
    
</table>
<input type='submit' name='edit'>
</form>


</div>
";
}
?>
<script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
</script>
 <?php
    if(isset($_FILES["fileImg"]["name"])){
      $id = $_POST["iduser"];

      $src = $_FILES["fileImg"]["tmp_name"];
      $imageName = uniqid() . $_FILES["fileImg"]["name"];

      $target = "uploads/" . $imageName;

      move_uploaded_file($src, $target);

      $query = "UPDATE tb_user SET image = '$imageName' WHERE id = $id";
      mysqli_query($conn, $query);

      header("Location: index.php");
    }
    ?>



