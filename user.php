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
echo "
<div align='center' style='width:50%;margin-left:300px'>
<form action='index.php?action=edituser' method='post'>

<label style='color:white' for='name'>ID</label><span><input type='text' name='iduser' readonly value='$iduser'></span> <br>
<label style='color:white' for='name'>Ten</label>
<input type='text' name='name' value='$name'> <br>
<label style='color:white' for='user'>Ten dang nhap</label>
<input type='text' name='user' readonly value='$user'> <br>
<label style='color:white' for='age'>Tuoi</label>
<input type='number' name='age' value ='$age'> <br>
<label style='color:white' for='gender'>Gioi tinh</label>
<input type='text' name='gender' value='$gender'> <br>
<label style='color:white' for='phone'>SDT</label>
<input type='number' name='phone' value='$phone'> <br>
<input type='submit' name='edit'>
</form>
</div>
";
}
?>