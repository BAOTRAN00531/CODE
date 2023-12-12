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
<div  style='width:86%;margin-left:37px;margin-top:50px'>
<form  action='index.php?action=edituser' method='post'>
<table >
    <tr>
        <td style = 'padding: 0px 20px 30px 0px;text-align: right;'><label style='color:white;' for='name'>ID:</label></td>
        <td style = 'padding: 0px 0px 35px 20px;text-align: left;><label style='color:white'>$iduser </label> </td>
        <td rowspan='5' style = 'width:400px;padding: 0px 0px 0px 20px;text-align: left;><label style='color:white'>$iduser </label> </td>
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
<label for="" style=""></label>



