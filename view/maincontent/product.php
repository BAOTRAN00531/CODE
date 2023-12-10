

<section class="content-section">
                <h1 class="section-header">Tiêu Đề</h1>
                    <div class="games">
                        <h3>Hàng mua <span class="title-highlight">không bán</span></h3>
                        <div class="games-carousel">
                        
                                <?php
                                foreach ($dssp as $sp) {
                                    // Extract product information
                                    extract($sp);
                                    $hinh = $imgPath . $hinhanh;
                                    
                                    // Generate product HTML
                                    echo '
                                        <div class="game" id="game-'.$MASP.'">
                                            <a href="index.php?action=sanphamct&idsp='.$MASP.'">
                                                <div class="game-cover">
                                                    <img src="'.$hinh.'" alt="'.$TENSP.'" />
                                                </div>
                                                <div class="game-info">
                                                    <p class="game-title">'.$TENSP.'</p>
                                                    <p class="game-viewership">'.$GIASP.'</p>
                                                </div>
                                            </a>
                                            <div class="game-categories">
                                                <a href="index.php?action=addtocart&id='.$MASP.'&ten='.$TENSP.'&hinh='.$hinh.'&gia='. $GIASP . " ₫ ".'">+</a>
                                            </div>
                                        </div>';
                                }
                                ?>
                            </div> </div>
                  
</section>