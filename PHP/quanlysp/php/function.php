<?php
        function connectdb(){
            $servername = "localhost";
            $username = "root";
            $password = "";

            try {
            $conn = new PDO("mysql:host=$servername;dbname=futurebook", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo "Connected successfully";
             } catch(PDOException $e) {
         //   echo "Connection failed: " . $e->getMessage();
             }
            return $conn;}
?>

<?php
    function insert($po_id,$po_name,$po_price,$po_sl,$po_tt,$po_img,$po_ttr){
     $conn=connectdb();
     $sql = "INSERT INTO sanpham(MASP,TENSP,GIASP,TONKHO,MOTA,hinhanh,tinhtrang) 
     VALUES ('$po_id','$po_name','$po_price','$po_sl','$po_tt','$po_img','$po_ttr')";
     $conn->exec($sql);
    }
?>