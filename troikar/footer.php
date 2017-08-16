            <!-- footer -->
            <footer class="footer" role="contentinfo">

                <h1><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" ><span><?php bloginfo('name'); ?></span></a></h1>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="footer-icons">
                    <ul id="footer-social-networks">
                        <li id="facebook-icon"><a href="#" target="_blank"><span>Facebook</span></a></li>
                        <li id="twitter-icon"><a href="#" target="_blank"><span>Twitter</span></a></li>
                        <li id="instagram-icon"><a href="#" target="_blank"><span>Instagram</span></a></li>
                    </ul>
                    <h2 id="mostay-footer-logo">
                        <a href="<?php echo esc_url( __( 'http://mostay.co/', 'Nutech' ) ); ?>" target="_blank">
                            <span id="mostay-logo-inner"></span>
                            <span id="mostay-logo-outer"><img src="<?php echo get_template_directory_uri(); ?>/images/mostay-footer-logo-outer.png"></span>
                        </a>
                    </h2>
                </div>

            </footer>
            <!-- /footer -->

        </div>
        <!-- /wrapper -->

        <?php wp_footer(); ?>

        <!-- analytics -->
        <script>
        (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
        (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
        l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
        ga('send', 'pageview');
        </script>

    </body>
</html>
