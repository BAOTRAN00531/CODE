<?php
    if(is_array($dm)){
       extract($dm);
    }
    
?>
<div class="row">    
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?action=updatedm" method="post">
            <div class="">
                THỨ TỰ: <br>
                <input type="text" name="thutu">
            </div>
            <div class="">
                Tên: <br>
                <input type="text" name="ten" value="<?php if (isset($name)&&($name!="")) echo$name;?>" > 
            </div>
            <div>
                <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0)) echo$name;?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=listdm"><input type="button" value="Danh Sách">
            </div>                 
        </form>
    </div>
</div>    
