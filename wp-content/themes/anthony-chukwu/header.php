<?php

wp_head();

?>

<header>
    <nav class="desktop-header">
        <div class="container">
            <div class="logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
                <h1 class=""><?php echo get_bloginfo('name'); ?></h1>
            </div>
            <div class="nav-menu">
                <?php
                if (function_exists('register_nav_menus')) :
                    wp_nav_menu(array(
                        'theme_location'  => 'header',
                        'depth'           => 1,
                        'container_class' => '',
                        'menu_class'      => '',
                        'container' => 'ul',
                        'walker' => new Custom_Menu_Walker(),
                    ));
                endif;
                ?>
                <div class="login-signup">
                    <a href="#" class="login">Log In</a>
                    <a href="#" class="sign-up">Sign Up</a>
                </div>
            </div>
        </div>


    </nav>
    <nav class="mobile-header">
        <div class="container">
            <div class="logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="login-signup">
                <a class="login">Log In</a>
                <a class="sign-up">Sign Up</a>
            </div>
            <svg id="toggle-menu" width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.75 21.3975C14.75 20.88 15.17 20.46 15.6875 20.46H27.5625C28.08 20.46 28.5 20.88 28.5 21.3975C28.5 21.915 28.08 22.335 27.5625 22.335H15.6875C15.17 22.335 14.75 21.915 14.75 21.3975ZM3.5 15.1475C3.5 14.63 3.92 14.21 4.4375 14.21H27.5625C28.08 14.21 28.5 14.63 28.5 15.1475C28.5 15.665 28.08 16.085 27.5625 16.085H4.4375C3.92 16.085 3.5 15.665 3.5 15.1475ZM8.5 8.89746C8.5 8.37996 8.92 7.95996 9.4375 7.95996H27.5625C28.08 7.95996 28.5 8.37996 28.5 8.89746C28.5 9.41496 28.08 9.83496 27.5625 9.83496H9.4375C8.92 9.83496 8.5 9.41496 8.5 8.89746Z" fill="black" />
            </svg>

            <div id="nav-menu" class="nav-menu">
                <?php
                if (function_exists('register_nav_menus')) :
                    wp_nav_menu(array(
                        'theme_location'  => 'header',
                        'depth'           => 0,
                        'container_class' => '',
                        'menu_class'      => 'header-menu',
                        'container' => 'ul',
                        'walker' => new Custom_Menu_Walker(),
                    ));
                endif;
                ?>
            </div>
        </div>
    </nav>
</header>