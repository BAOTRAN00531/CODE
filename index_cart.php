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
    <!-- sang toi -->
    <link rel="stylesheet" href="/view/css/menu_pu.css">
    <!-- menu -->
    <style>

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
    <!-- js animation icon -->
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
    
</head>
    <body>
      <!-- Phần này là giao diện của ứng dụng Future Books -->
      
             <?php
                include "PHP/menu.php";
                include "dao/pdo.php"; 
                include "dao/sanpham.php";
                include "global.php";
                if ( !isset( $_SESSION["cart"] ) ) $_SESSION['cart'] = [];
                $spnew=sanpham_select_all_home();
                if (isset($_GET['action'] )&&($_GET['action'])) {
                    $act = $_GET['action'];
                    switch ($act) {
                        case 'addtocart':
                            //add khai báo biến 
                            //add các biến vào 1 array
                            //thêm vào array cart
                            include "/CODE/test.php";
                            
                            break;
                        case 'sale':
                            include "view/sale.php";
                            break;
                        case 'hot':
                            include "";
                            break;
                        case 'lienhe':
                            include "";
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
        
       
    
        <script src="/js(new)/add.js"></script>
        <script src="/js(new)/button.js"></script>     
        <script src="/js(new)/icon.js"></script>
        <script src="/js(new)/menu_pu.js"></script>
        
    </body> 
</html>