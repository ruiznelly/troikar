<?php get_header(); ?>

    <div class="services-wrap">
                <div class="what-we-do hidden-xs">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/header-logo-hidden.png">
                        <span class="see-more">NUESTROS PRODUCTOS</span>
                        <span class="see-more-arrow"></span>
                    </div>
                </div>
                <div class="shadow-left"></div>
                <div class="shadow-right"></div>
                <article class="container">

                    <ul>
                        <?php
                    $args = array(
                        'post_type'      => 'servicios',
                        'posts_per_page' =>   5 ,
                        'order'          => 'ASC'
                        );

                    query_posts($args);

                while (have_posts()) : the_post(); ?>
                        <?php
                            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'custom-size' );
                            $url = $thumb['0'];
                            $image = get_field('img');
                        ?>
                        <li class="service-list">
                            <div class="service">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <img src="<?php echo $url; ?>">
                                <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-five.jpg">
                                <?php } ?>
                                <div class="service-shadow-left"></div>
                                <div class="service-shadow-right"></div>
                                <div class="service-icon">
                                    <div class="icon">
                                        <?php if ($image) { ?>
                                        <img src="<?php echo $image['url']; ?>">
                                        <?php }else{ ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-one.png">
                                        <?php } ?>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="service-info">
                                    <div class="arrow-container"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></div>
                                    <div class="info-container">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <?php  wp_reset_postdata(); ?>
                        <?php wp_reset_query() ?>
                    </ul>
                </article>
                <div class="grd-line"></div>
                <div class="container" id="client-list">
                    <div class="flexslider-two">
                      <ul class="slides">
                        <?php
                            $taxonomy     = 'marca';
                            $orderby      = 'name';
                            $show_count   = 0;      // 1 for yes, 0 for no
                            $pad_counts   = 0;      // 1 for yes, 0 for no
                            $hierarchical = 1;      // 1 for yes, 0 for no
                            $title        = '';

                            $cat_args = array(
                              'taxonomy'     => $taxonomy,
                              'orderby'      => $orderby,
                              'show_count'   => $show_count,
                              'pad_counts'   => $pad_counts,
                              'hierarchical' => $hierarchical,
                              'title_li'     => $title

                            );

                        $terms = get_categories( $cat_args );
                        if ( $terms && ! is_wp_error( $terms ) ) :
                        foreach ($terms as $term):
                        $term_link = get_term_link( $term );
                        $termId = $term->term_id;
                        $termSlug = $term->slug;
                        $image = get_field('imgmarca', $term); ?>

                            <li>
                                <?php if ($image) { ?>
                            <a href="<?php echo $term_link; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $term->name; ?>" /></a>
                                <?php }else{ ?>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" /></a>
                                <?php } ?>
                            </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php wp_reset_query() ?>
                      </ul>
                    </div>
                </div>
            </div>
            <div id="product-slide">
                <?php $args3 = array(
                    'post_type'      => 'producto',
                    'posts_per_page' =>   7 ,
                    'order'          => 'DESC',
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'featured',
                        'field' => 'id',
                        'terms' => 24,
                        'include_children' => false
                        ) )
                    );
                    query_posts($args3);

                /*$thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                $thumbs2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
                $urls = $thumbs['0'];
                $urls2 = $thumbs2['0'];*/
                ?>

                <div id="slider" class="flexslider">
                  <ul class="slides">
                     <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                    <li>
                    <?php if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                            <span class="slide-info">
                                <span class="visibble-xs arrow"></span>
                                <span class="visible-xs shadow-left"></span>
                                <span class="visible-xs shadow-right"></span>
                                <article class="slide-info-container container">
                                    <span>
                                        <?php
                                        $terms2 = get_the_terms( $post->ID, 'marca' );;
                                        foreach ($terms2 as $term2):
                                        $images = get_field('imgmarca', $term2); ?>
                                        <img src="<?php echo $images['url']; ?>">
                                        <?php endforeach; ?>
                                        <h1>// <?php the_title(); ?></h1>
                                    </span>
                                    <ul>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/speed-icon.png">
                                            <?php $ace = get_field('aceleracion'); ?>
                                            <span class="right"><h2><?php if ($ace !== ''){echo $ace;}else{echo '--' ;} ?> sec</h2></span>
                                            <span class="bottom"><h2>0-60</h2></span>
                                        </li>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/hp-icon.png">
                                            <?php $hp = get_field('caballos_de_fuerza'); ?>
                                            <span class="right"><h2><?php if ($hp !== ''){echo $hp;}else{echo '--' ;} ?> hp</h2></span>
                                            <span class="bottom"><h2>HP</h2></span>
                                        </li>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/top-icon.png">
                                            <?php $vel = get_field('velocidad_maxima'); ?>
                                            <span class="right"><h2><?php if ($vel !== ''){echo $vel;}else{echo '--' ;} ?> km/h</h2></span>
                                            <span class="bottom"><h2>Top Speed</h2></span>
                                        </li>
                                    </ul>
                                </article>
                            </span>
                            <span class="hidden-xs see-more-wrap"><span class="hidden-xs see-more">VER MÁS</span></span>
                        </a>
                        <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg">
                        <?php } ?>
                    </li>
                      <?php endwhile; ?>
                  </ul>
                </div>
                <div id="carousel" class="flexslider">
                  <ul class="slides">
                      <?php $args4 = array(
                    'post_type'      => 'producto',
                    'posts_per_page' =>   7 ,
                    'order'          => 'DESC',
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'featured',
                        'field' => 'id',
                        'terms' => 24,
                        'include_children' => false
                        ) )
                    );
                    query_posts($args4);
                      if (have_posts()) while (have_posts()) : the_post();
                      $thumb2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );
                      $url2 = $thumb2['0']; ?>

                        <?php if ( $url2 ) { ?>
                            <li><img src="<?php echo $url2; ?>" /></li>
                        <?php } else { ?>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/default3.jpg" /></li>
                        <?php } ?>
                      <?php endwhile; ?>
                  </ul>
                </div>
                <?php  wp_reset_postdata(); ?>
                <?php wp_reset_query() ?>
            </div>
            <div id="view-all-bar">
                <a href="<?php echo home_url(); ?>/productos">
                    <span class="arrow"></span>
                    Ver Productos
                </a>
            </div>
            <div class="black-bar"></div>
            <div class="grd-line"></div>

<?php get_footer(); ?>
