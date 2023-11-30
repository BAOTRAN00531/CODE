

<div class="row">    
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmloai">
                    <table style="color: violet;">
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listdm as $danhmuc) {
                                extract($danhmuc);
                                $suadm="index.php?action=suadm&id=".$THUTU;
                                $xoadm="index.php?action=xoadm&id=".$THUTU;
                                echo ' 
                                <tr>
                                    <td><input type="checkbox" name="" id></td>
                                    <td>'.$IDDM.'</td>
                                    <td>'.$LOAISP.'</td>
                                    <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="">
                <input type="button" value="Chọn tất cả" >
                <input type="button" value="Bỏ chọn" >
                <input type="button" value="Xóa" >
                <a href="index.php?action=adddm"><input type="button" value="Nhập thêm"></a>
            </div>    
</div>



