<?php 
session_start();
include("/CODE/dao/pdo.php");
include("/CODE/dao/binhluan.php");
if ( isset( $_POST["guibinhluan"] ) && $_POST["guibinhluan"] )
{
    $noidung = $_POST['noidung'];
    $onesp = $_POST['onesp'];
    $iduser = $_POST['user']['id'];
    $ngay_bl = date( 'd/m/Y' );
    binhluan_insert( $ngay_bl, $iduser, $onesp, $ngay_bl );
    header("Location: ".$_SERVER['HTTP_SERVER']);
} 
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
                        <div class="btn-group">
                            <button type="submit" name="guibinhluan" class="btn submit">Submit</button>
                            <button onclick="cancel" class="btn cancel">Cancel</button>
            
                        </div>
                    </form>
                </div>
