<?php 
session_start();
include "/github/FutureBooks/dao/binhluan.php"; 
include_once "/github/FutureBooks/dao/pdo.php";
if ( isset( $_POST["guibinhluan"] ) && $_POST["guibinhluan"] )
{
    $noidung = $_POST['noidung'];
    $idsp = $_POST['idsp'];
    $iduser = $_POST['iduser'];
    $ngay_bl = date( 'd/m/Y' );
    binhluan_insert( $ngay_bl, $iduser, $idsp, $ngay_bl );
    header("Location: ".$_SERVER['HTTP_SERVER']);
} 
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
<input type="hidden" name="onesp">
<textarea name="noidung" cols="70" row="9" placeholder="FutureBooks xin đánh giá của quý khách..."></textarea>
<input type="hidden" name="idsp" id="idsp" value="<?=$idsp?>">
                    <input type="hidden" name="iduser" id="iduser" value="<?=$iduser?>">
                        <div class="btn-group">
                            <input type="submit" name="guibinhluan" class="btn submit">
                            <button onclick="cancel" class="btn cancel">Cancel</button>
            
                        </div>
                    </form>
                </div>
