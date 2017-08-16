<?php
/*
    Template Name: Products
*/
?>
<?php get_header(); ?>

    <article id="product-list-wrap" >
                <div class="black-bar-list" id="product-list-nav">
                    <div class="shadow-left"></div>
                    <div class="shadow-right"></div>
                    <div class="container">
                        <h2><a href="<?php echo home_url(); ?>/productos" >> PRODUCTOS</a></h2>
                       <form class="controls" id="Filters">
                          <!-- We can add an unlimited number of "filter groups" using the following format: -->
                          <button class="hidden-xs" id="Reset">RESTABLECER</button>
                            <?php
                                $args = array(
                                'type'                     => 'producto',
                                'child_of'                 => 0,
                                'orderby'                  => 'name',
                                'order'                    => 'ASC',
                                'hide_empty'               => 1,
                                'hierarchical'             => 1,
                                'exclude'                  => '',
                                'include'                  => '',
                                'number'                   => '',
                                'taxonomy'                 => 'categoria',
                                'pad_counts'               => false

                                );
                                $Categoria = get_categories( $args );
                            ?>


                            <?php
                                $argas = array(
                                'type'                     => 'producto',
                                'child_of'                 => 0,
                                'orderby'                  => 'name',
                                'order'                    => 'ASC',
                                'hide_empty'               => 1,
                                'hierarchical'             => 1,
                                'exclude'                  => '',
                                'include'                  => '',
                                'number'                   => '',
                                'taxonomy'                 => 'marca',
                                'pad_counts'               => false

                                );
                                $marcas = get_categories( $argas );
                            ?>

                        <fieldset>
                            <select>
                              <option value="">MARCAS</option>
                                <?php foreach ($marcas as $marca): ?>
                              <option value=".<?php echo $marca->slug; ?>"><?php echo $marca->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                          </fieldset>

                        <fieldset>
                            <select>
                              <option value="">CATEGORIA</option>
                                <?php foreach ($Categoria as $Categ): ?>
                              <option value=".<?php echo $Categ->slug; ?>"><?php echo $Categ->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </fieldset>

                        </form>
                    </div>
                </div>
                <div class="white-bar"></div>
                <div id="product-list" class="container">
                    <div>
                        <ul id="Container" class="container">
                        <?php
                            //$query_postcount = ( (bool) $_GET['viewall'] ) ? '-1' : '8';
                            $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                            $argus = array(
                                'post_type'      => 'producto',
                                'posts_per_page' =>  -1,
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'paged' => $paged
                                );

                            $Autos = new WP_Query($argus);
                            $size = 'medium';
                            while ( $Autos->have_posts() ) : $Autos->the_post();
                            $term_list = wp_get_post_terms($post->ID, 'marca', array("fields" => "all"));
                                $titles = $term_list[0]->name;
                                $titlesslug = $term_list[0]->slug;
                                $titlesid = $term_list[0]->id;
                            $term_list2 = wp_get_post_terms($post->ID, 'categoria', array("fields" => "all"));
                                $titles2 = $term_list2[0]->name;
                                $titlesslug2 = $term_list2[0]->slug;
                                $titlesid2 = $term_list2[0]->id;
                            $Fotos = get_the_terms( $post->ID, 'producto' );
                        foreach ($Fotos as $Foto):
                            $image = get_field('img1', $Foto->id);
                            $thumb = $image['sizes'][ $size ];
                        endforeach; ?>
                            <li class="mix <?php echo $titlesslug2.' '.$titlesslug; ?>">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ($thumb) { ?>
                                    <img class="img-responsive" src="<?php echo $thumb;?>">
                                    <?php }else{ ?>
                                    <img src="<?php bloginfo("template_url"); ?>/images/default2.jpg">
                                    <?php } ?>
                                    <span>
                                        <span class="product-list-title-wrap">
                                            <p><?php echo $titles; ?> - <?php the_title(); ?></p>
                                            <div class="hidde-nav-more"><div></div></div>
                                        </span>
                                        <span class="hidden-xs see-more">VER MÁS</span>
                                    </span>
                                </a>
                            </li>
                           <?php endwhile; ?>
                        </ul>
                    </div>
                        <?php //get_template_part('pagination'); ?>
                </div>
                <div class="white-bar"></div>
            </article>
            <div class="black-bar"></div>
            <div class="grd-line"></div>

<?php get_footer(); ?>

    <script type="text/javascript">
              $(document).ready(function(){

                var filterClass = ".mix";
                $('#Container').mixItUp({
                    load: {
                      filter: filterClass
                    },
                      controls: {
                        enable: false // we won't be needing these
                      }
                    });
                });
    </script>
