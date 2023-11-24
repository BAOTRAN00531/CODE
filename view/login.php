<?php
    if(isset($_POST['btn-log'])){
        $name = $_POST['username'];
        $sql = "SELECT * FROM tt_kh where username='".$name."' LIMIT 1 ";
        $row =mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        if ($count >0) {
            $_SESSION['btn-log'] = $name;
            echo"đăng nhập thành công";
            header("Location:index.php");
        }else{
            echo'<script>alert("đăng nhập ko thành công")</script>';
            header("Location:sign_in.php");
        }
}elseif(isset($_POST['btn-log'])){
    $pass = $_POST['password'];
    $sl = "SELECT * FROM tt_kh where password ='".$password."' LIMIT 1 ";
    $row =mysqli_query($conn,$sl);
    $count = mysqli_num_rows($row);
    if ($count >0) {
        $_SESSION['btn-log'] = $pass;
        echo"đăng nhập thành công";
        header("Location:index.php");
    }else{
        echo'<script>alert("đăng nhập ko thành công")</script>';
        header("Location:sign_in.php");
    }}
?>
