<!-- Giao diện bên trái -->
<div class="left-area">
                <!-- Giao diện bên trái -->
                <a href="../index.php">
                    <img src="/view/images/7.png"  width="70" height="70" href="index.html">
                    <div class="app-name">FutureBooks</div>
                </a>
                <!-- menu -->
                <div class="sidenav">
                    <!-- Giao diện bên trái -->
                    <a href="../index.php"><i class="fa fa-home"></i> Trang chủ</a>
                    <a href="../index.php?action=dangnhap"><i class="fa fa-fire"></i> Sale sốc</a>
                    <a href="../index.php?action=hot"><i class="fa fa-fire"></i> Hot</a>
                    <a href="../index.php?action=lienhe"><i class="fa fa-phone"></i> Liên hệ</a>
                    <div class="dropdown-btn"><i class="fa fa-book"></i> Danh Mục  
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <div class="dropdown-container">
                        <?php
                            foreach ($dsdm as $dm)
                            {
                                $THUTU = $dm['THUTU']; // Trích xuất giá trị của $THUTU từ mỗi phần tử trong mảng
                                $LOAISP = $dm['LOAISP'];
                                $dm = "index.php?action=sanpham&thutu=".$THUTU;
                                echo '<a href="'.$dm.'">'.$LOAISP.'</a>';
                            }
                        ?>
                      </div>
                      <a href="#contact"><i class="fa fa-search"></i> Search</a>
                  </div>
                <button class="btn-logout">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out" viewBox="0 0 24 24">
                    <defs/>
                    <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/>
                  </svg>
                </button>
            </div>