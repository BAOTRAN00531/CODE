<?php
    include "dao/pdo.php";
    /**
 * Thêm loại mới
 * @param String $username là tên loại
 * @param String $password là tên loại
 * @param String $fullname là tên loại
 * @param int $age là tên loại
 * @param String $email là tên loại
 * @param String $gender là tên loại
 * @param String $address là tên loại
 * @param String $phone là tên loại
 * @throws PDOException lỗi thêm mới
 */
function acc_insert($username, $password,$fullname,$age,$email,$gender,$address,$phone){
    $sql = "INSERT INTO tk(USERID,HOTEN,username,password,TUOI,EMAIL,GIOITINH,DIACHI,SDT) VALUES('$username', '$password','$fullname','$age','$email','$gender','$address','$address','$phone')";
    pdo_execute($sql);
}
?>