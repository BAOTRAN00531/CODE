<?php 
// include_once("dao/binhluan.php");
// if ( isset($_GET["a"]) && ($_GET["a"])) {
//     $a = $_GET['a'];
//     switch ($a) {
//         case 'a':
// $noidung = $_POST['noidung'];
// $idsp = $_POST['idsp'];
// $iduser = $_POST['iduser'];
// $ngay_bl = date('d-m-Y H:i:s');
// binhluan_insert( $iduser, $idsp, $noidung , $ngay_bl );
// echo "a";
// break;
//         default:
//         echo "b";
//         break;
//         }
// }
?>
                <form action="<?php binhluan_insert($iduser,$idsp,"a","9") ?>" method="post">
                    <input type="hidden" name="idsp" id="idsp" value="<?=$idsp?>">
                    <input type="hidden" name="iduser" id="iduser" value="<?=$iduser?>">
                    <textarea name="noidung" id="noidung" cols="70" row="9"
                        placeholder="FutureBooks xin đánh giá của quý khách..."></textarea>
                    <div class="btn-group">
                        <button type="submit" name="guibinhluan" class="btn submit">Submit</button>
                        <button onclick="cancel" class="btn cancel">Cancel</button>

                    </div>
                </form>