
<div class="main-area" style="color: violet;" >
            <!-- hiện ra hai nút ẩn khi giao diện nhỏ (nút hiện giao diện bên trái và bên phải) -->
            <button class="btn-show-right-area">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"/></svg>
            </button>
            <button class="btn-show-left-area"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
            <!-- Tiêu đề chính, chứa nút tìm kiếm -->
            <div class="main-area-header">
                <!-- nút tìm kiếm -->
                <div class="search-wrapper" id="searchLine">
                <input class="search-input" type="text" placeholder="Tìm kiếm...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
                        <defs/>
                            <circle cx="11" cy="11" r="8"/>
                        <path d="M21 21l-4.35-4.35"/>
                    </svg>
                </div>
            <?php
                if (isset($_GET['quanly']))
                 {
                     $tam = $_GET['quanly'];
                }else{$tam = '';}
                if ($tam== 'sale') {
                    include("content/sale.php");
                }elseif($tam== 'bestseller') {
                    include("content/bestseller.php");
                }elseif($tam== 'danhmuc') {
                   include("main/danhmuc.php");
                }else{
                    include("content/chinh.php");
                }
            ?>
               
            </div>
</div>
