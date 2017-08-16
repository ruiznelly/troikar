<?php
/*
    Template Name: About
*/
?>

<?php get_header(); ?>

    <body>

            <article id="product-detail-wrap" >
                <div class="product-detail-head" id="about-title-wrap">
                    <div class="shadow"></div>
                    <div class="home-header-img" data-z-index="1" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/about-head.jpg"></div>
                    <div class="product-detail-title container" id="about-title">

                        <div>
                            <h1>¿ QUIENES SOMOS ?</h1>
                            <p>
                                Troikar es una marca que pertenece a R&R Carriages LLC. Somos una empresa 100% Americana establecida en La Florida, prestamos  servicio de despacho, venta, envío de automotores, piezas y equipos relacionados con la industria automotriz, aérea, tractores, repuestos y pedidos especiales tales como ambulancias, autos bomberos, vehículos blindados y vehículos especiales.
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    $argas = array(
                        'post_type'      => 'post',
                        'posts_per_page' =>   -1 ,
                        'order'          => 'ASC'
                        );

                   $loop = new WP_Query( $argas );

                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="product-detail-info-wrap" id="about-wrap">

                    <article class="direction-wrap">
                        <div class="container">
                            <h1><?php the_title();?></h1>
                            <div class="description-line">
                                <div class="line-container">
                                       <div class="about-arrow" ></div>
                                    <div class="us-line"></div>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <div class="icon-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png">
                                            <div></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p>---</p>
                                        <h2><?php the_field('localidad'); ?></h2>
                                        <a href="tel:1-888-436-2652"><?php the_field('telefono_1'); ?></a>
                                        <a href="tel:1-954-695-7482"><?php the_field('telefono_2'); ?></a>
                                        <h2>FAX</h2>
                                        <p><?php the_field('fax'); ?></p>
                                        <p>---</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="icon-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.png">
                                            <div></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="contact-info-wrap">
                                            <p class="about-mail" >---</p>
                                            <a href="mailto:<?php echo get_field('email'); ?>"><?php the_field('email'); ?></a>
                                            <a href="mailto:<?php echo get_field('email_2'); ?>"><?php the_field('email_2'); ?></a>
                                            <p>---</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="find-us">
                                <p>PUEDES ENCONTRARNOS EN:</p>
                                <p><?php the_field('direccion'); ?> </p>
                                <span class="find-us-arrow"></span>
                            </div>
                        </div>
                        <div class="about-map-container product-detail-end" >
                            <div class="map-arrow" ></div>
                            <span class="top-shadow"></span>
                            <span class="bottom-shadow"></span>
                            <div class="right"></div>
                            <div class="left"></div>
                            <!-- ************************************************* -->
                            <!-- **********************MAPA*********************** -->
                            <!-- ************************************************* -->

<iframe width="100%" height="250" frameborder="0" center="<?php the_field('mapa'); ?>" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?center=<?php the_field('mapa',$post_id); ?>&q=<?php the_field('mapa',$post_id); ?>&zoom=13&size=300x300&output=embed&iwloc=near"></iframe><br />


                            <!-- ************************************************* -->
                            <!-- ************************************************* -->
                            <!-- ************************************************* -->


                        </div>
                    </article>
                </div>
            </article>
        <?php endwhile; ?>

            <div class="black-bar"></div>
            <div class="grd-line"></div>


<?php get_footer(); ?>
