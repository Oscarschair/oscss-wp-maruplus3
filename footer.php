<?php wp_footer(); ?>
<footer>
    <div class="bg-gray-800 text-gray-300 p-8">
        <div class="container mx-auto flex flex-col items-center space-y-4">
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_id'        => 'footer-menu',
                    'depth'          => 1,
                    'menu_class'     => 'flex space-x-4',
                ));
                ?>
            </nav>
            <p class="text-sm">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>

</html>