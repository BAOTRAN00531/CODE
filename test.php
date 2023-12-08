<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Books</title>
    <link rel="shortcut icon" href="../IMG/7.png">
    <!-- css giao diện -->
    <link rel="stylesheet" href="view/css/giaodien.css">
    <!-- css sản phẩm -->
    <link rel="stylesheet" href="view/css/sanpham.css">
    <!-- css icon -->
    <link rel="stylesheet" href="view/css/icon.css">
    <!-- menu -->
    <link rel="stylesheet" href="view/css/menu.css">
    <!-- shopping cart-->
    <link rel="stylesheet" href="view/css/shoppingcart.css">
    <!--about us-->
    <link rel="stylesheet" href="view/css/about_us.css">
    <!--back to top-->
    <link rel="stylesheet" href="view/css/backtotop.css">


    <style>
   
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
    <!-- js animation icon -->
    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
</head>
    <body>
      <!-- Phần này là giao diện của ứng dụng Future Books -->
        <div class="app-container">
        <!-- Giao diện bên trái -->
            <div class="left-area">
                <!-- Giao diện bên trái -->
                <a href="../HTML/index.html">
                    <img src="../IMG/7.png"  width="70" height="70" href="../HTML/index.html">
                    <div class="app-name">FutureBooks</div>
                </a>




                <!-- menu -->
                <div class="sidenav">
                  <!-- Giao diện bên trái -->
                 
                      <a href="#about"><i class="fa fa-home"></i> Trang chủ</a>
                      <a href="#services"><i class="fa fa-fire"></i> Sale sốc</a>
                      <a href="#clients"><i class="fa fa-fire"></i> Hot</a>
                      <a href="#contact"><i class="fa fa-phone"></i> Liên hệ</a>
              
                      <div class="dropdown-btn"><i class="fa fa-book"></i> Sách 
                        <i class="fa fa-caret-down"></i>
                      </div>
                      <div class="dropdown-container">
                          <div class="dropdown-btn">Link 1
                              <i class="fa fa-caret-down"></i>
                           </div>
                           <div class="dropdown-container">
                              <a href="#">Link 4</a>
                              <a href="#">Link 5</a>
                           </div>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                      </div>
                      <a href="#contact"><i class="fa fa-search"></i> Search</a>
                      <hr>
<a href="../HTML/gio_hang.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng<span> (0)</span></a>
                      
                    
                <!-- ====== -->
                </div>
                <button class="btn-logout">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out" viewBox="0 0 24 24">
                    <defs/>
                    <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/>
                  </svg>
                </button>
            </div>
        
        <!-- Giao diện giữa -->
        <div class="main-area">
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
                <div class="container">
                  <div class="search-wrapper" id="searchLine">
                      <input class="search-input" type="text" placeholder="tìm kiếm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
                          <defs/>
                          <circle cx="11" cy="11" r="8"/>
                          <path d="M21 21l-4.35-4.35"/>
                      </svg>
                  </div>
                
              </div>
            </div>
            <!-- nội dung -->
            <h2><i class="fa fa-shopping-cart"></i> Giỏ Hàng</h2>
             <!-- Chuyển trang -->
             <section class="content-section">
                <table class="chuyen-trang">
                    <tr>
                        <td><a href="gio_hang.html"><h6><b>1. KIỂM TRA GIỎ HÀNG CỦA BẠN</b></h6></a></td>  
                       <td><a href="gio_hang_tt.html"><h6><b>2. TÍNH TIỀN VÀ THANH TOÁN</b></h6></a></td>
                       <td><a href="gio_hang_thanhcong.html"><h6><b>3. ĐẶT HÀNG THÀNH CÔNG</b></h6></a></td>
                    </tr>
                </table>
            </section>
                 <!-- Sản phẩm đã mua-->
       
          
            <section class="content-section">
                    <table class="table table-striped">
                          <thead>
                        <tr class="heading text-center">
                              <td scope="col">Sản phẩm</td>
                              <td scope="col">Đơn giá</td>
                              <td scope="col">Số lượng</td>
                              <td scope="col">Giá tiền</td>
                              <td scope="col">Thao tác</td>
                        </tr>
                            </thead>
                            <tbody>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            </tbody>
                    </table>
            </section>
            <h2><i class="fa fa-shopping-cart"></i> Giỏ Hàng</h2>
             <!-- Chuyển trang -->
             <section class="content-section">
                <table class="chuyen-trang">
                    <tr>
                        <td><a href="gio_hang.html"><h6><b>1. KIỂM TRA GIỎ HÀNG CỦA BẠN</b></h6></a></td>  
                       <td><a href="gio_hang_tt.html"><h6><b>2. TÍNH TIỀN VÀ THANH TOÁN</b></h6></a></td>
                       <td><a href="gio_hang_thanhcong.html"><h6><b>3. ĐẶT HÀNG THÀNH CÔNG</b></h6></a></td>
                    </tr>
                </table>
            </section>
                 <!-- Sản phẩm đã mua-->
       
          
            <section class="content-section">
                    <table class="table table-striped">
                          <thead>
                        <tr class="heading text-center">
                              <td scope="col">Sản phẩm</td>
                              <td scope="col">Đơn giá</td>
                              <td scope="col">Số lượng</td>
                              <td scope="col">Giá tiền</td>
                              <td scope="col">Thao tác</td>
                        </tr>
                            </thead>
                            <tbody>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            </tbody>
                    </table>
            </section>
            <h2><i class="fa fa-shopping-cart"></i> Giỏ Hàng</h2>
             <!-- Chuyển trang -->
             <section class="content-section">
                <table class="chuyen-trang">
                    <tr>
                        <td><a href="gio_hang.html"><h6><b>1. KIỂM TRA GIỎ HÀNG CỦA BẠN</b></h6></a></td>  
                       <td><a href="gio_hang_tt.html"><h6><b>2. TÍNH TIỀN VÀ THANH TOÁN</b></h6></a></td>
                       <td><a href="gio_hang_thanhcong.html"><h6><b>3. ĐẶT HÀNG THÀNH CÔNG</b></h6></a></td>
                    </tr>
                </table>
            </section>
                 <!-- Sản phẩm đã mua-->
       
          
            <section class="content-section">
                    <table class="table table-striped">
                          <thead>
                        <tr class="heading text-center">
                              <td scope="col">Sản phẩm</td>
                              <td scope="col">Đơn giá</td>
                              <td scope="col">Số lượng</td>
                              <td scope="col">Giá tiền</td>
                              <td scope="col">Thao tác</td>
                        </tr>
                            </thead>
                            <tbody>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            <tr class="product-list">
                                <td scope="col"><img src="../IMG/7.png"></td>
                                <td scope="col">100$</td>
                                <td scope="col">
                                    <div class="buttons_added">
                                        <input name="sl" type="number" min="1" max="100" value="1">
                                    </div>
                                </td>
                                <td scope="col">100$</td>
                                <td scope="col"><button>Xóa</button></td>
                            </tr>
                            </tbody>
                    </table>
            </section>



             
             

             
         </div>
         <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
         
        
        <script src="../JS/add.js"></script>
        <script src="../JS/icon.js"></script>     
        <script src="../JS/menu.js"></script>
        <script src="../JS/saveicon.js"></script>
        <script>let mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
            
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }</script>
        
     
        
        </div>
  </div>

    </body> 
</html>


