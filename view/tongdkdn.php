<?php 
    include "dao/pdo.php"; 
    include "view/reg.php";
    if (isset($_GET['action'] )&&($_GET['action'])) {
        $act = $_GET['action'];
        switch ($act) {
            case 'value':
                # code...
                break;
        }
?>