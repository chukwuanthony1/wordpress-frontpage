<footer>
    <div class="container">
        <div class="footer-menu-grid">
            <div class="footer-menu">
                <div class="menu-title">
                    <h4 class="">Trading</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <?php
                if (function_exists('register_nav_menus')) :
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_trading',
                        'depth'           => 1,
                        'container_class' => '',
                        'menu_class'      => 'footer-menu-menu',
                        'container' => 'ul'
                    ));
                endif;
                ?>
            </div>
            <div class="footer-menu">
                <div class="menu-title">
                    <h4 class="">Resources</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <?php
                if (function_exists('register_nav_menus')) :
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_resources',
                        'depth'           => 1,
                        'container_class' => '',
                        'menu_class'      => 'footer-menu-menu',
                        'container' => 'ul'
                    ));
                endif;
                ?>
            </div>
            <div class="footer-menu">
                <div class="menu-title">
                    <h4 class="">Affiliate</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <?php
                if (function_exists('register_nav_menus')) :
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_affiliate',
                        'depth'           => 1,
                        'container_class' => '',
                        'menu_class'      => 'footer-menu-menu',
                        'container' => 'ul'
                    ));
                endif;
                ?>
            </div>
            <div class="footer-menu">
                <div class="menu-title">
                    <h4 class="">Learn</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <?php
                if (function_exists('register_nav_menus')) :
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_learn',
                        'depth'           => 1,
                        'container_class' => '',
                        'menu_class'      => 'footer-menu-menu',
                        'container' => 'ul'
                    ));
                endif;
                ?>
            </div>
            <div class="footer-menu">
                <div class="menu-title">
                    <h4 class="">About</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <?php
                if (function_exists('register_nav_menus')) :
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_about',
                        'depth'           => 1,
                        'container_class' => '',
                        'menu_class'      => 'footer-menu-menu',
                        'container' => 'ul'
                    ));
                endif;
                ?>
            </div>
            <div class="footer-menu">
                <div class="menu-title">
                    <h4 class="">Help</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <?php
                if (function_exists('register_nav_menus')) :
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_help',
                        'depth'           => 1,
                        'container_class' => '',
                        'menu_class'      => 'footer-menu-menu',
                        'container' => 'ul'
                    ));
                endif;
                ?>
            </div>
        </div>
        <div class="footer-social">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-linkedin-in"></i>
        </div>
        <p class="risk">
            RISK DISCLOSURE:*The services and information provided by The Bored Traders Club are not directed at citizens or residents in the USA.
            Additionally, they are not intended for distribution to or used by any individual in any jurisdiction where such distribution would be contrary to local law or regulation.
        </p>
        <div class="footer-extra-menu">
            <a href="#" class="">Risk Disclosure</a>
            <a href="#" class="">Terms & Conditions</a>
            <a href="#" class="">Privacy Policy</a>
        </div>
    </div>

</footer>

<?php
wp_footer()
?>