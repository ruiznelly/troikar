<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<article id="product-detail-wrap" >
        <?php $image = get_field('img1', $post->id); ?>
                <div class="product-detail-head">
                    <div class="shadow" id="top-shadow"></div>
                    <div class="home-header-img" data-z-index="1" data-parallax="scroll" data-image-src="<?php echo $image['url']; ?>"></div>
                    <div class="product-detail-title container">

                        <?php
                            $terms = get_the_terms( $post->ID, 'marca' );;
                        foreach ($terms as $term):
                            $images = get_field('imgmarca', $term); ?>
                                <img src="<?php echo $images['url']; ?>">
                        <?php endforeach; ?>
                        <div><h1>// <?php the_title(); ?> //</h1></div>
                    </div>
                </div>
                <div class="product-detail-info-wrap container">
                    <!-- main slider carousel -->
                    <div class="row">
                        <div class="col-md-12" id="slider">
                            <div class="col-md-12" id="carousel-bounding-box">
                                <div id="product-detail-carousel" class="carousel slide">
                                    <!-- main slider carousel items -->
                                    <ul class="carousel-inner">

                                        <li class="active item" data-slide-number="0">
                                            <?php
                                            $image2 = get_field('img2', $post->id);
                                            $image3 = get_field('img3', $post->id);
                                            $image4 = get_field('img4', $post->id);
                                              $sizes = 'large';
                                              $thumbs = $image['sizes'][ $sizes ];
                                              $thumbs2 = $image2['sizes'][ $sizes ];
                                              $thumbs3 = $image3['sizes'][ $sizes ];
                                              $thumbs4 = $image4['sizes'][ $sizes ];

                                            if ( $thumbs ) { ?>
                                                <img src="<?php echo $thumbs;?>" class="img-responsive" class="img-responsive" >
                                            <?php } else { ?>
                                                <img src="<?php bloginfo("template_url"); ?>/images/default.jpg" class="img-responsive" class="img-responsive" >
                                            <?php } ?>
                                        </li>
                                        <li class="item" data-slide-number="1">
                                            <?php
                                            if ( $thumbs2 ) { ?>
                                                <img src="<?php echo $thumbs2;?>" class="img-responsive" class="img-responsive" >
                                            <?php } else { ?>
                                                <img src="<?php bloginfo("template_url"); ?>/images/default.jpg" class="img-responsive" class="img-responsive" >
                                            <?php } ?>
                                        </li>
                                        <li class="item" data-slide-number="2">
                                            <?php
                                            if ( $thumbs3 ) { ?>
                                                <img src="<?php echo $thumbs3;?>" class="img-responsive" class="img-responsive" >
                                            <?php } else { ?>
                                                <img src="<?php bloginfo("template_url"); ?>/images/default.jpg" class="img-responsive" class="img-responsive" >
                                            <?php } ?>
                                        </li>
                                        <li class="item" data-slide-number="3">
                                            <?php
                                            if ( $thumbs4 ) { ?>
                                                <img src="<?php echo $thumbs4;?>" class="img-responsive" class="img-responsive" >
                                            <?php } else { ?>
                                                <img src="<?php bloginfo("template_url"); ?>/images/default.jpg" class="img-responsive" class="img-responsive" >
                                            <?php } ?>

                                        </li>
                                    </ul>
                                    <a class="carousel-control left" href="#product-detail-carousel" data-slide="prev">‹</a>
                                    <a class="carousel-control right" href="#product-detail-carousel" data-slide="next">›</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" id="slider-thumbs">
                          <ul class="list-inline">
                              <li> <a id="carousel-selector-0" class="selected">
                                  <?php
                                  $size = 'special';
                                  $thumb = $image['sizes'][ $size ];
                                  $thumb2 = $image2['sizes'][ $size ];
                                  $thumb3 = $image3['sizes'][ $size ];
                                  $thumb4 = $image4['sizes'][ $size ];
                                  ?>
                                <img src="<?php echo $thumb;?>" class="img-responsive">
                              </a></li>
                              <li> <a id="carousel-selector-1">
                                <img src="<?php echo $thumb2;?>" class="img-responsive">
                              </a></li>
                              <li> <a id="carousel-selector-2">
                                <img src="<?php echo $thumb3;?>" class="img-responsive">
                              </a></li>
                              <li> <a id="carousel-selector-3">
                                <img src="<?php echo $thumb4;?>" class="img-responsive">
                              </a></li>
                           </ul>
                    </div>
                    <div id="product-detail-info">
                        <?php the_content(); ?>
                        <div>
                            <div id="product-detail-colors">
                                <strong>Colores Disponibles:</strong>
                                <?php
                                $color1 = get_field('color_1', $post->id);
                                $color2 = get_field('color_2', $post->id);
                                $color3 = get_field('color_3', $post->id);
                                $color4 = get_field('color_4', $post->id);
                                $color5 = get_field('color_5', $post->id);
                                $color6 = get_field('color_6', $post->id);
                                $color7 = get_field('color_7', $post->id);
                                $color8 = get_field('color_8', $post->id);
                                $color9 = get_field('color_9', $post->id);
                                $color10 = get_field('color_10', $post->id);
                                ?>
                                <ul>
                                    <?php if ( $color1 ) { ?>
                                    <li><div style="background-color: <?php echo $color1;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color2 ) { ?>
                                    <li><div style="background-color: <?php echo $color2;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color3 ) { ?>
                                    <li><div style="background-color: <?php echo $color3;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color4 ) { ?>
                                    <li><div style="background-color: <?php echo $color4;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color5 ) { ?>
                                    <li><div style="background-color: <?php echo $color5;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color6 ) { ?>
                                    <li><div style="background-color: <?php echo $color6;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color7 ) { ?>
                                    <li><div style="background-color: <?php echo $color7;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color8 ) { ?>
                                    <li><div style="background-color: <?php echo $color8;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color9 ) { ?>
                                    <li><div style="background-color: <?php echo $color9;?> ;"></div></li>
                                    <?php } else {} ?>
                                    <?php if ( $color10 ) { ?>
                                    <li><div style="background-color: <?php echo $color10;?> ;"></div></li>
                                    <?php } else {} ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail-end">
                    <div class="shadow"></div>
                    <div class="home-header-img" data-z-index="1" data-parallax="scroll" data-image-src="<?php echo $image4['url']; ?>"></div>
                    <div class="product-detail-stats container">
                        <ul>
                            <li>
                                <img src="<?php bloginfo("template_url"); ?>/images/speed-icon.png">
                                <?php $ace = get_field('aceleracion'); ?>
                                <div class="right"><h2><?php if ($ace !== ''){echo $ace;}else{echo '--' ;} ?> sec</h2></div>
                                <div class="bottom"><h2>0-60</h2></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo("template_url"); ?>/images/hp-icon.png">
                                <?php $hp = get_field('caballos_de_fuerza'); ?>
                                <div class="right"><h2><?php if ($hp !== ''){echo $hp;}else{echo '--' ;} ?> hp</h2></div>
                                <div class="bottom"><h2>HP</h2></div>
                            </li>
                            <li>
                                <img src="<?php bloginfo("template_url"); ?>/images/top-icon.png">
                                <?php $vel = get_field('velocidad_maxima'); ?>
                                <div class="right"><h2><?php if ($vel !== ''){echo $vel;}else{echo '--' ;} ?> km/h</h2></div>
                                <div class="bottom"><h2>Top Speed</h2></div>
                            </li>
                        </ul>
                    </div>
                    <div class="buttons-wrap container">
                        <div class="prev-bottom" onclick="window.history.go(-1); return false;" ><a href=""><span class="glyphicon glyphicon-chevron-left"></span>  VOLVER</a></div>

                    </div>
                </div>
            </article>

            <div class="black-bar"></div>
            <div class="grd-line"></div>

        <?php endwhile; ?>
        <?php endif; ?>
        <?php  wp_reset_postdata(); ?>
        <?php wp_reset_query() ?>

<?php get_footer(); ?>
