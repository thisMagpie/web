<?php
/**
 * Display the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Magpie
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
                            <td align="right">
                                <a href="<?php echo esc_url( __( 'http://my.tsohost.com/aff.php?aff=1337', 'magpie' ) ); ?>">
                                <?php printf( __( 'Powered by %s', 'magpie' ), 'TSO Host' ); ?>.
                                </a>
                            </td>
                            <td align="right">
                                Copyright &copy; thismagpie.com unless otherwise noted. All rights reserved.
                            </td>
                            <td align="right">
                                | Home | Privacy | Accessibility |
                            </td>
                        </tr>
                    </table>
                </div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div><!-- #page -->
        <?php wp_footer(); ?>
        <?php include_once "alexa.php"; ?>
    </body>
</html>
