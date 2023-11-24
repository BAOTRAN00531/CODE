<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Books</title>
    <link rel="shortcut icon" href="/view/images/7.png">
    <!-- css giao diện -->
    <link rel="stylesheet" href="/view/css/style.css">
    <!-- css sản phẩm -->
    <link rel="stylesheet" href="/view/css/style2.css">
    <!-- css icon -->
    <link rel="stylesheet" href="/view/css/style4.css">
    <link rel="stylesheet" href="/view/css/style5.css">
    <!-- sang toi -->
    <link rel="stylesheet" href="/view/css/menu_pu.css">
    <!-- menu -->
    <link rel="stylesheet" href="/view/css/sildeshow.css">
    <link rel="stylesheet" href="/view/css/ratingbox.css">
    <style>
        
      
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
    <!-- js animation icon -->
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>;
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
</head>
    <body>
      <!-- Phần này là giao diện của ứng dụng Future Books -->
        <div class="app-container">
        <?php
                include "dao/pdo.php"; 
                include "dao/danhmuc.php";
                include "dao/sanpham.php";
                include "global.php";
                session_start();
                if (!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
                    # code...
                $spnew=sanpham_select_all_home();
                $dsdm=danhmuc_loadall();
                $ctsp=sanpham_chitiet_by_id();

                include "view/menu.php";

                 if (isset($_GET['action'] )&&($_GET['action'])) {
                        $act = $_GET['action'];
                        switch ($act) {
                            case 'dangki':
                                if(isset($_POST['btn-reg'])){
                                    $username = $_POST['username'];
                                    $password = $_POST['pass'];
                                    $fullname = $_POST['name'];
                                    $age = $_POST['age'];
                                    $email= $_POST['email'];
                                    $gender=$_POST['gender'];
                                    $address= $_POST['address'];
                                    $phone=$_POST['phone'];
                                    if (!empty($username)&&!empty($password)&&!empty($fullname)&&!empty($age)&&!empty($email)&&!empty($gender)&&!empty($address)&&!empty($phone))
                                     {
                                        acc_insert($username, $password,$fullname,$age,$email,$gender,$address,$address,$phone);
                                     }}
                                include "view/dkdn.php";
                                break;
                            
                            case 'addtocart':
                             if (isset($_GET['action'] )&&($_GET['action'])) {
                             $id=$_POST['id'];
                             $name=$_POST['ten'];
                             $img=$_POST['hinh'];
                             $gia=$_POST['gia'];
                             $soluong=1;
                             $ttien=$soluong * $gia;
                             $spadd=[$id,$name,$img,$gia,$soluong,$ttien];
                             array_push($_SESSION['mycart'],$spadd);
                             
                              }

                               include "view/other/test.php";
                                break;
                            case 'dangnhap':
                              include "/view/dkdn.php";
                                break;
                            default:
                                include "view/main.php";
                            break;
                        }
                    }else
                    {
                    include "view/main.php";
                    }
            ?>

        </div>
        <script src="/js(new)/add.js"></script>
        <script src="/js(new)/button.js"></script>     
        <script src="/js(new)/icon.js"></script>
        <script src="/js(new)/menu_pu.js"></script>
        <script src="/js(new)/nguyen.js"></script>
        <script src="/js(new)/soluong.js"></script>
    </body> 
</html>

