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
                                          
                                      </div>
                                  ';
                              }
                            ?>

                        </div></div></section>