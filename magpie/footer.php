<?php
/**
 * Contains footer content and the closing of the #main and #page div elements.
 * @package Magpie
 * @since Magpie 1.0
 */
?>
            </div><!-- #main -->
                <footer id="colophon" class="site-footer" role="contentinfo">
                     <?php get_sidebar( 'footer' ); ?>
                    <div class="site-info">
                    <?php do_action( 'magpie_credits' ); ?>
                    <table>
                        <tr>
                            <td style="align:right;">
                                <a href="<?php echo esc_url( __( 'http://my.tsohost.com/aff.php?aff=1337', 'magpie' ) ); ?>">
                                <?php printf( __( 'Powered by %s', 'magpie' ), 'TSO Host' ); ?>.
                                </a>
                            </td>
                            <td align="right">
                                Site content is copyright &copy; thismagpie.com unless noted otherwise. 
                                <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.en_US">.
                                 <img alt="Creative Commons License"
                                   style="border-width:0"
                                   src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" />
                                   </a>
                            </td>
                            <td align="right">
                                Home | Privacy | Accessibility
                            </td>
                        </tr>
                    </table>
                </div><!-- .site-info -->
            <?php wp_footer(); ?>
            </footer><!-- #colophon -->
        </div><!-- #page -->
        <?php include "alexa.php"; ?>
    </body>
</html>
