<?php
    session_start();
    require_once 'pdo.php';

    function account_insert($username, $password,$fullname,$email,$gender,$address,$phone){
        $sql = "INSERT INTO tk(username,password,HOTEN,EMAIL,GIOITINH,DIACHI,SDT) VALUES(?,?,?,?,?,?,?)";
        pdo_execute($sql, $username, $password, $fullname, $email, $gender, $address, $phone);
    }
    function account_select( $iduser )
    {
        $sql = "SELECT * FROM `tk` WHERE USERID=$iduser";
        $list = pdo_query($sql);
        return $list;
    }
    function account_update( $name , $age , $gender , $phone , $userid ,$img)
    {
        $sql = "UPDATE tk SET HOTEN='$name' , TUOI='$age' , GIOITINH='$gender' , SDT='$phone',hinhanh='$img' WHERE USERID =$userid";
        pdo_execute( $sql );
    }
    function checkuser($email, $password) {
        $password = md5($password); // Mã hóa mật khẩu
        $sql = "SELECT * from tk where EMAIL= :email AND password= :password";
        try {
            $stmt = pdo_execute_acc($sql, array(':email' => $email, ':password' => $password));
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Có lỗi xảy ra: " . $e->getMessage());
        }
    } 
    function check_user($email, $password){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM tk where EMAIL=:email AND password=:password"); 
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    
        // Fetch the user, or return null if not found
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result : null;
    }
?>