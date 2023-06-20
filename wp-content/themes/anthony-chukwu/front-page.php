<?php

get_header();

?>

<main class="frontpage">
    <div class="jumbotron">
        <div class="text-section">
            <h4 class="">Tighter Spreads & Faster Execution</h4>
            <p class="">
                With Forex Bros you trade with the best in the biz!
                With quality execution and some of the best trading conditions in the industry, your trading experience will be none other than epic.
            </p>
            <ul class="">
                <li class="">No dealing desk or requotes</li>
                <li class="">Commissions as low as $0</li>
            </ul>
        </div>
        <div class="jumbotron-image">
            <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/HERO.png" ?>" alt="" class="hero">
        </div>

    </div>
    <div class="tools">
        <div class="title">
            <h4 class="">Tools to Compliment Your Trading</h4>
            <p class="">
                Access news & economic calendar, technical indicators & charts, Forex Calculators, educational resources and many more tools to help you excel.
            </p>
        </div>
        <div class="grid">
            <div class="grid-item">
                <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/shape-1.png" ?>" alt="" class="grid-item-image">
                <h6 class="grid-item-title"> Economic Calendar</h6>
                <p class="grid-item-text">Access all major events & economic news that impact financial markets.</p>
            </div>
            <div class="grid-item active">
                <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/shape-2.png" ?>" alt="" class="grid-item-image">
                <h6 class="grid-item-title"> Trading Calculators</h6>
                <p class="grid-item-text">Make trading calculations in real-time & forecast the potential growth of your account.</p>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/shape-3.png" ?>" alt="" class="grid-item-image">
                <h6 class="grid-item-title">Educational Resources</h6>
                <p class="grid-item-text">From top tips & trading psychology to more ways to earn, we make learning more fun.</p>
            </div>
        </div>
    </div>
</main>

<?php
get_footer()
?>