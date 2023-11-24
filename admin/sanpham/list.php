 

<div class="row">    
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?action=listsp" method="post">
                    <input type="text" name="keyw">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listdm as $danhmuc) {
                                        extract($danhmuc);
                                        echo'<option value="'.$IDDM.'">'.$LOAISP.'</option>';
                                    }                
                            ?>
                        </select>
                    <input type="Submit" name="listOK" value="Search"> 
                </form>
                <div class="row mb10 frmloai">
                    <table style="color: violet;">
                        <tr>
                            <th></th>
                            <th>MÃ SẢN PHẨM </th>
                            <th>TÊN SẢN PHẨM </th>
                            <th>GIÁ </th>
                            <th>SỐ LƯỢNG </th>
                            <th>SỐ LƯỢNG </th>
                            <th>HÌNH </th>
                            <th>MÔ TẢ </th>
                        </tr>
                        <?php 
                            foreach ($listsp as $sanpham) {
                                extract($sanpham);
                                $suasp="index.php?action=suasp&id=".$MASP;
                                $xoasp="index.php?action=xoasp&id=".$MASP;
                                $imgPATH="../uploads/".$hinhanh;
                                if(is_file($imgPATH)){
                                    $hinh="<img src='".$imgPATH."' height='80'";
                                }else{
                                     $hinh="khum có ảnh";
                                }
                                echo ' 
                                <tr>
                                    <td><input type="checkbox" name="" id></td>
                                    <td>'.$MASP.'</td>
                                    <td>'.$TENSP.'</td>
                                    <td>'.$GIASP.'</td>
                                    <td>'.$TONKHO.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$MOTA.'</td>
                                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
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
                <a href="index.php?action=addsp"><input type="button" value="Nhập thêm"></a>
         


