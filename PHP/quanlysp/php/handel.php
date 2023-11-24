<?php 
 require'../../quanlysp/php/function.php';
require"../../quanlysp/php/functiondm.php";
require"../../quanlysp/php/functionsp.php";
require"../../quanlysp/php/functionadd.php";
if(isset($_POST['addproduct'])){
    $po_name = $_POST['pn'];
    $po_id = $_POST['pid']; 
    $po_price = $_POST['pp'];
    $po_sl = $_POST['psl']; 
    $po_tt=$_POST['tomtat'];
    $po_nd=$_POST['noidung'];
    $po_ttr=$_POST['tinhtrang'];
    $target_dir="../img/";
    $anhpath=$_FILES["pi"]["name"];
    $target_file = $target_dir . basename($_FILES["pi"]["name"]);
    $po_img=$target_file;
    $uploadOk=1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType!="jpg" && $imageFileType!="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
        $uploadOk=0; 
    }
        if (is_uploaded_file($_FILES["pi"]["name"])) {
         move_uploaded_file($_FILES["pi"]["tmp_name"],$target_dir.$anhpath);
         echo 'moved file to destination directory';
         exit;
        }
    insert($po_id,$po_name,$po_price,$po_sl,$po_tt,$po_img,$po_ttr);
}
   
?>