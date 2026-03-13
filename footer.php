<?php wp_footer(); ?>
<footer>
    <nav class="footer-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'menu_id'        => 'footer-menu',
            'depth'          => 1,
        ));
        ?>
    </nav>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
</footer>
</body>

</html>