<?php 
session_start();
include "/github/FutureBooks/dao/binhluan.php"; 
include_once "/github/FutureBooks/dao/pdo.php";
if ( isset( $_POST["guibinhluan"] ) && $_POST["guibinhluan"] )
{
    $noidung = $_POST['noidung'];
    $idsp = $_POST['idsp'];
    $iduser = $_SESSION['ROLE']['USERID'];
    $ngay_bl = date( 'd/m/Y' );
    binhluan_insert( $iduser, $idsp, $noidung , $ngay_bl );
    header("Location: ".$_SERVER['HTTP_SERVER']);
} 
$iduser = $_SESSION['ROLE']['USERID'];
echo $iduser;
?>

<div class="row mb"></div>
<div class="boxtitle">binh luan</div>
<div class="boxcontent binhluan">
    <ul>
        <?php 
        $dsbl = binhluan_select_all();
        foreach ( $dsbl as $bl )
        {
            extract( $bl );

            echo "$noidung <br>";
            
        }
        ?>
    </ul>
</div>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<textarea name="noidung" cols="70" row="9" placeholder="FutureBooks xin đánh giá của quý khách..."></textarea>
<input type="hidden" name="idsp" id="idsp" value="<?="16"?>">
                    <input type="hidden" name="iduser" id="iduser" value="<?="33"?>">
                        <div class="btn-group">
                            <input type="submit" name="guibinhluan" class="btn submit">
                            <button onclick="cancel" class="btn cancel">Cancel</button>
            
                        </div>
                    </form>
                </div>
