<?php

remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'ldm_do_footer' );

function ldm_do_footer() {
?>
    <span class="footer-copy">&copy; <?php echo date('Y'); ?> Website by <a href="http://launchdm.com" target="_blank" rel="external <?php is_front_page() ? '' : print 'nofollow'; ?>">LaunchDM</a></span>
<?php
}