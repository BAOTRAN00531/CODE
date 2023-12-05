<?php
    ob_start();
?>
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
    <!-- code nguyên (chi tiết sản phẩm) -->
    <link rel="stylesheet" href="/view/css/style5.css">
    <!-- css giao diện menu của Pu -->
    <link rel="stylesheet" href="/view/css/menu_pu.css">
    <!-- menu -->
    <link rel="stylesheet" href="/view/css/sildeshow.css">
    <link rel="stylesheet" href="/view/css/ratingbox.css">
    <link rel="stylesheet" href="/view/css/style6.css">
    <!-- css sản phẩm -->
    <link rel="stylesheet" href="/view/css/style2.css">
    <!-- css icon -->
    <link rel="stylesheet" href="/view/css/style4.css">
    <!-- css nguyên -->
    <link rel="stylesheet" href="/view/css/style5.css">
    <!-- menu -->
    <link rel="stylesheet" href="/view/css/menu_pu.css">
    <!-- danhgia -->
    <link rel="stylesheet" href="/view/css/danhgia.css">
    <link rel="stylesheet" href="/view/css/slideshow.css">
    <link rel="stylesheet" href="/view/css/trungbinhdanhgia.css">
    <!-- đầu trang-->
    <link rel="stylesheet" href="/view/css/backtotop.css">
    <link rel="stylesheet" href="/view/css/user.css">
    <style>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
    <!-- css pu đánh giá -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <!-- <link rel="stylesheet" href="danhgia.css"> -->
    <!-- css nút ... -->
    <link rel="stylesheet" href="/view/css/slideshow.css">
    <link rel="stylesheet" href="trungbinhdanhgia.css">
    <link rel="stylesheet" href="view/css/cd.css">

    <!-- đánh giá 5 sao -->



    <!-- js animation icon -->
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
    <!-- js nguyên -->
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- nút với số lượng -->
    <script src="nguyen.js"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

    

</head>

<body>
    <div class="app-container">
        <?php
            include "dao/pdo.php"; 
            include "dao/danhmuc.php";
            include "dao/sanpham.php";
            include "dao/account.php";
            include "dao/binhluan.php";
            include "dao/dautu.php";
            include "global.php";
            include "dao/cart.php";
            if (!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
            $spnew=sanpham_select_all_home();
            $dsdm=danhmuc_loadall();
            $ctsp=sanpham_chitiet_by_id();
            include "view/menu.php";
            
  
            if (isset($_GET['action'] )&&($_GET['action'])) {
                $act = $_GET['action'];
                    switch ($act) {
                        case 'sanpham':
                            if(isset($_POST['search']) && ($_POST['search'] !="")){
                                $search = $_POST["search"];
                            }
                            else{
                                $search = "";
                            }
                            if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                                $iddm = $_POST['iddm'];
                            } else {
                                $iddm = 0;
                            }
                            $dssp = sanpham_selectall($search, $iddm);
                            include "view/maincontent/product.php";
                            break;
                        
                        case 'dkdautu':
                                if(isset($_POST['dkdautu'])&&($_POST['dkdautu'])){
                                    $ten=$_POST['hoten'];
                                    $congty=$_POST['congty'];
                                    $filename=$_POST($_FILES['hopdong']['name']);
                                    $target_dir = "../uploads/";
                                    $target_file = $target_dir . basename($_FILES["hopdong"]["name"]);
                                    insert_dautu($ten,$congty,'a','');
                                }
                                include "/code2/dtdautu.php";
                                break;
                        case 'thoat':
                                unset( $_SESSION['ROLE'] );
                                $_SESSION['mycart']=[];
                                unset($_SESSION['mycart']);
                                header("Location: ../login.php");
                                break;
                        case 'addtocart':
                            if (isset($_POST['addtocart'] )&&($_POST['addtocart'])) {
                                    $id=$_POST['id'];
                                    $name=$_POST['ten'];
                                    $img=$_POST['hinh'];
                                    $gia = floatval($_POST['gia']);
                                    $soluong = intval($_POST['soluong']);
                                    $ttien=$soluong * $gia;
                                    $found = false;
                                    foreach ($_SESSION['mycart'] as &$item) {
                                        if ($item[0] == $id) {
                                            $item[4] = $soluong;  // Cập nhật số lượng
                                            $item[5] = $soluong * $gia;  // Cập nhật tổng tiền
                                            $found = true;
                                            break;
                                        }
                                    }
                                    if (!$found) {
                                        $spadd=[$id,$name,$img,$gia,$soluong,$ttien];
                                        array_push($_SESSION['mycart'],$spadd);
                                    }
                                }
                                include "view/other/test.php";
                                break;
                        case 'removefromcart':
                                if (isset($_POST['removefromcart'] )&&($_POST['removefromcart'])) {
                                        $id=$_POST['id'];
                                        foreach ($_SESSION['mycart'] as $key => $item) {
                                            if ($item[0] == $id) {
                                                unset($_SESSION['mycart'][$key]);
                                                break;
                                            }
                                        }
                                    }
                                include "view/other/test.php";
                                break;
                        case 'emptycart':
                                    $_SESSION['mycart'] = array();
                                    break;
                        case 'binhluan':
                            if ( isset( $_POST["noidung"] ) && ($_POST['noidung'] != " ") )
                            {
                                $noidung = $_POST['noidung'];
                                $onesp = $_POST['onesp'];
                                $iduser = $_POST['user']['id'];
                                $ngay_bl = date( 'd/m/Y' );
                                binhluan_insert( $ngay_bl, $iduser, $onesp, $ngay_bl );
                                header("Location: ".$_SERVER['HTTP_SERVER']);
                            } 
                            break;
                            case 'donhangtt':
                                if (isset($_POST['dathang'] )&&($_POST['dathang'])) {
                                     $name=$_POST['name'];
                                     $email=$_POST['email'];
                                     $phone=$_POST['tel'];
                                     $pttt=1;
                                     $tinhtrang=1;
                                     $address=$_POST['address'];
                                     $ngaydathang=date('d-m-Y H:i:s');
                                     $tong=tongdon();
                                     $iddh=insert_giohang($name, $address, $phone,$email, $tong, $pttt, $ngaydathang);
                                    //  foreach ($_SESSION['mycart'] as $cart) {
                                    //     insert_donhang($iddh , $name, $address, $phone, $email, $tong, $pttt , $ngaydathang , $tinhtrang);
                                    //  }
                                     $_SESSION['cart']=[];
                                    }
                                    $donhang=loadone_donhang($iddh);
                                    $donhang=loadone_CART($iddh);
                                    include "view/other/dathangtc.php";
                                break;
                       
                        default:
                            include "view/main.php";    
                                    break;
                    }
            }
                else
            {
                include "view/main.php";
            }
            ?>

    </div>
    <script src="button.js"></script>     
        <script src="icon.js"></script>
        <script src="soluong.js"></script>
        <script src="slideshow.js"></script>
        <script src="menu_pu.js"></script>
        <script src="fb.js"></script>
        <script src="/js(new)/chedosangtoi.js"></script>
        

</body>

</html>
<?php
    ob_end_flush();
?>


