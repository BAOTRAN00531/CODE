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
                Thứ Tự: <br>
                <input type="text" name="thutu" value="<?php if (isset($id)&&($id!="")) echo$id;?>">
            </div>
            <div class="">
                Mã: <br>
                <input type="text" name="ma" value="<?php if (isset($iddm)&&($iddm!="")) echo$iddm;?>">
            </div>
            <div class="">
                Tên Loại: <br>
                <input type="text" name="ten" value="<?php if (isset($name)&&($name!="")) echo$name;?>" > 
            </div><br>
            <div>
                <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0)) echo$name;?>">
                <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0)) echo$iddm;?>">

                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=listdm"><input type="button" value="Danh Sách">
            </div>                 
        </form>
    </div>
</div>    
