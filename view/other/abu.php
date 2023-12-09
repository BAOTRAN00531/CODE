<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Books</title>
    <link rel="shortcut icon" href="../IMG/7.png">
    <!-- css giao diện -->
    <link rel="stylesheet" href="../CSS/giaodien.css">
    <!-- css sản phẩm -->
    <link rel="stylesheet" href="../CSS/sanpham.css">
    <!-- css icon -->
    <link rel="stylesheet" href="../CSS/icon.css">
    <!-- menu -->
    <link rel="stylesheet" href="../CSS/menu.css">
    <!-- shopping cart-->
    <link rel="stylesheet" href=".">
    <!--aboutusslideshow-->
    <link rel="stylesheet" href="../CSS/aboutusslideshow.css">
    <!--back to top-->
    <link rel="stylesheet" href="../CSS/backtotop.css">
    <style>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
    <!-- js animation icon -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
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
            <div class="content">  

              <!--slideshow about us-->
              <div class="slideshow-container">

  
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <center><h1>Welcome to Future Books.</h1></center> <br>
                  <p>Since its fuse in 2005, Company Name has cut a specialty for itself in the youngsters’ books section of the distributing business. We have some expertise in books implied for offspring of various ages.
         <br><br>
                 The wide scope of books offered by us incorporates fantasies, moral stories, showed storybooks, reference books, general learning books, sentence structure books, shading books, action books, sticker books, and more. Every one of these books is accessible in both English and Hindi.
         <br><br>
                 Our point is to give significant, charming, and animating substance to youngsters who go much past their normal course books. With this point of view, we treat each book as a work of adoration. Every one of our books is broadly examined, attentively composed, and delightfully planned.
         <br><br>
                 Development and experimentation are indispensable to our methodology toward books. Our broad gathering of books– picture books, sticker books, story and sticker books, 3D Books, spring-up books, innovative idea books, curiosity books, topic-based books, movement books, and so on – are a declaration of this methodology. This encourages us to make energizing and testing items for youngsters.
         <br><br> 
                 We earnestly trust that books can be an extraordinary wellspring of motivation with the ability to impact and shape youthful personalities.
         <br><br>
                 Our books do not simply go for building up the scholarly capacities of youngsters; rather, they are made with the aim of contributing towards their all-encompassing improvement.
          <br><br>
                <a href="../../dtdautu.php">Contact</a>
                 </p>
               
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6604.197564891945!2d106.62949464402713!3d10.856132910415697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2sQuang%20Trung%20Software%20City!5e0!3m2!1sen!2s!4v1700576973782!5m2!1sen!2s" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                 <link rel="stylesheet" href="">
                  
                </div>
              

                <a class="prev" onclick="plusSlides(-1)">&#10095;</a>
                <a class="next" onclick="plusSlides(1)">&#10094;</a>
             
              </div>
              <br>
              
     
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>
            </div>


            <a id="button"></a>

           
       
        
      </div>
         
        
        <script src="/js(new)/add.js"></script>
        <script src="/js(new)/icon.js"></script>     
        <script src="/js(new)/menu.js"></script>
        <script src="/js(new)/saveicon.js"></script>
        <script src="/js(new)/backtotop.js"></script>
        <script src="/js(new)/aboutusslideshow.js"></script>
        
     
        
        </div>
  </div>
    </body> 
</html>