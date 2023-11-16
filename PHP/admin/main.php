<?php
        if ((isset($_GET['action'] ))&& isset($_GET['query'])) {
            $tam = $_GET['action'];
            $query=$_GET['query'];
        } else {
            $tam = '';
            $query='';
        }if ($tam=='quanlydanhmucsanpham' && $query=='them' ) {
            include("../admin/addproduct.php");
            include("../admin/manage.php");
        }elseif ($tam=='quanlydanhmucsanpham'&& $query=='sua'){
          include("../admin/edit.php");
        } elseif ($tam=='quanlysanpham' && $query=='them' ) {
            include('../quanlysp/php/add.php');
        }elseif ($tam=='quanlysanpham' && $query=='sua'){
         //
        }else{
            //
        }
        
        
    ?>
