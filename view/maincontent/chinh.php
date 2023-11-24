<!-- nội dung -->

<!-- nội dung -->
<section class="content-section">
                <h1 class="section-header">Tiêu Đề</h1>
                    <div class="games">
                        <h3>Hàng mua <span class="title-highlight">không bán</span></h3>
                        <div class="games-carousel">
                          <?php
                              $i=0;
                              foreach ($spnew as $sp) {
                                  extract($sp);
                                  $hinh=$imgPath.$hinhanh;
                                  if (($i==2)||($i==5)||($i==8)){
                                      $mr="mr"; 
                                  }else {
                                      $mr=""; 
                                  }
                                  $linksp="index.php?action=sanphamct&idsp=".$MASP;
                                  echo '
                                      <div class="game" id="game-1">
                                        <a href="'.$linksp.'">
                                          <div class="game-cover">
                                              <img src="'.$hinh.'" alt="Animal Crossing" />
                                          </div>
                                          <!-- tên sản phẩm / icon trái tim -->
                                          <div class="game-info">
                                              <p class="game-title">'.$TENSP.'
                                                  <lord-icon
                                                  class="game-lord-icon"
                                                  data-alternate="false"
                                                  src="https://cdn.lordicon.com/xyboiuok.json"
                                                  trigger="hover"
                                                  colors="primary:#e83a30"
                                                  >
                                                  </lord-icon>
                                              </p>
                                              <p class="game-viewership" >'.$GIASP.'</p>
                                          </div>
                                          </a>
                                          <!-- sale -->
                                          <a href="index.php?action=giohang">
                                            <div class="game-categories">
                                              <span> + </span> 
                                            </div>
                                          </a>
                                          <form action="index.php?action=addtocart" method="post">
                                           <input type="hidden" name="id" value="'.$MASP.'">  
                                           <input type="hidden" name="ten" value="'.$TENSP.'">  
                                           <input type="hidden" name="hinh" value="'.$hinh.'">  
                                           <input type="hidden" name="gia" value="'.$GIASP.'">  
                                           <input type="submit" name="addtocart" value="+">  
                                          </form>
                                      </div>
                                  ';
                              }
                            ?>

                      <div class="game" id="game-2">

               
                        <!-- ảnh -->
                        <div class="game-cover">
                          <img src="/view/images/8.png" alt="Animal Crossing" />
                        </div>
                        <!-- tên sản phẩm / icon trái tim -->
                        <div class="game-info">
                          <p class="game-title">Gì đó
                            <lord-icon
                            class="game-lord-icon"
                            data-alternate="false"
                            src="https://cdn.lordicon.com/xyboiuok.json"
                            trigger="hover"
                            colors="primary:#e83a30"
                              >
                            </lord-icon>
                          </p>
                          <p class="game-viewership">Gì đó đánh giá</p>
                        </div>
                        <!-- sale -->
                        <div class="game-categories">
                          <span>sale</span> 
                        </div>
                      

                    </div>

                    <div class="game" id="game-3">

                        
                      <!-- ảnh -->
                      <div class="game-cover">
                        <img src="/view/images/8.png" alt="Animal Crossing" />
                      </div>
                      <!-- tên sản phẩm / icon trái tim -->
                      <div class="game-info">
                        <p class="game-title">Gì đó
                          <lord-icon
                          class="game-lord-icon"
                          data-alternate="false"
                          src="https://cdn.lordicon.com/xyboiuok.json"
                          trigger="hover"
                          colors="primary:#e83a30"
                            >
                          </lord-icon>
                        </p>
                        <p class="game-viewership">Gì đó đánh giá</p>
                      </div>
                      <!-- sale -->
                      <div class="game-categories">
                        <span>sale</span> 
                      </div>
                  </div>

                  <div class="game" id="game-4">

                        
                    <!-- ảnh -->
                    <div class="game-cover">
                      <img src="/view/images/8.png" alt="Animal Crossing" />
                    </div>
                    <!-- tên sản phẩm / icon trái tim -->
                    <div class="game-info">
                      <p class="game-title">Gì đó
                        <lord-icon
                        class="game-lord-icon"
                        data-alternate="false"
                        src="https://cdn.lordicon.com/xyboiuok.json"
                        trigger="hover"
                        colors="primary:#e83a30"
                          >
                        </lord-icon>
                      </p>
                      <p class="game-viewership">Gì đó đánh giá</p>
                    </div>
                    <!-- sale -->
                    <div class="game-categories">
                      <span>sale</span> 
                    </div>
                  

                </div>



                    </div>
                  </div>
            </section>
            <!-- nội dung -->
            <section class="content-section">
                <div class="section-header-wrapper">
                  <h1 class="section-header">Tiêu Đề</h1>
                    <div class="games">
                      <h3>Hàng mua <span class="title-highlight">không bán</span></h3>
                      <div class="games-carousel">
                        <!-- số thứ tự của sản phẩm (game-1)-->
                        <div class="game" id="game-1">

                        
                          <!-- ảnh -->
                          <div class="game-cover">
                            <img src="/view/images/8.png" alt="Animal Crossing" />
                          </div>
                          <!-- tên sản phẩm / icon trái tim -->
                          <div class="game-info">
                            <p class="game-title">Tên sản phẩm
                              <lord-icon
                              class="game-lord-icon"
                              data-alternate="false"
                              src="https://cdn.lordicon.com/xyboiuok.json"
                              trigger="hover"
                              colors="primary:#e83a30"
                                >
                              </lord-icon>
                            </p>
                            <!-- đánh giá sản phẩm, hiện chưa có đánh giá -->
                            <p class="game-viewership">hiện chưa có đánh giá</p>
                          </div>
                          <!-- sale -->
                          <div class="game-categories">
                            <span>sale</span> 
                          </div>
                      </div>

                    </div>
                  </div>
            </section>
            <!-- nội dung -->
            <section class="content-section">
                <div class="section-header-wrapper">
                    <h1 class="section-header">Tiêu Đề</h1>
                    <a class="section-header-link">
                    nội dung
                    </a>
                </div>
            </section>