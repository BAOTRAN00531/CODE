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
    <!--about us-->

    <!--back to top-->
    

    <style>
          .content {
            width: 77%;
            margin: 50px auto;
            font-family: 'Merriweather', serif;
            font-size: 17px;
            color: #6c767a;
            line-height: 1.9;
          }
      @media (min-width: 500px) {
        .content {
          width: 43%;
        }
        #button {
          margin: 30px;
        }
      }
      .content h1 {
        margin-bottom: -10px;
        color: #03a9f4;
        line-height: 1.5;
      }
      .content h3 {
        font-style: italic;
        color: #96a2a7;
      }
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
            <div class="content">   
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
             
             </p>

             
             <a href="#button" class="next round">&#8250;</a>

             <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
         </div>
    
       
         
        
         <script src="/js(new)/add.js"></script>
        <script src="/js(new)/icon.js"></script>     
        <script src="/js(new)/menu.js"></script>
        <script src="/js(new)/saveicon.js"></script>
        <script src="/js(new)/aboutusslideshow.js"></script>
        <script> var btn = $('#button');

          $(window).scroll(function() {
            if ($(window).scrollTop() > 100) {
              btn.addClass('show');
            } else {
              btn.removeClass('show');
            }
          });

          btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
          });
        </script>
     
        
        </div>
  </div>
  
  
    </body> 
</html>
