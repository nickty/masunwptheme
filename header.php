<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- ==== preloader start ==== -->
  <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>
                        <span data-text-preloader="O" class="letters-loading">
                            O
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="D" class="letters-loading">
                            D
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="G" class="letters-loading">
                            G
                        </span>
                    </div>
                </div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
        <!-- ==== / preloader end ==== -->

        <!-- ==== header start ==== -->
        <header class="header header-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="nav">
                            <div class="nav__content">
                                <div class="nav__logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <?php
wp_nav_menu(array(
    'theme_location' => 'custom_menu', // Replace 'custom_menu' with a unique menu location name.
    'container' => false,
    'menu_class' => 'custom-menu',
    'fallback_cb' => false
));
?>

                                <div class="nav__menu">
                                    <div class="nav__menu-logo d-flex">
                                        <a href="index.html" class="text-center hide-nav">
                                            <img src="assets/images/logo.png" alt="Logo">
                                        </a>
                                        <a href="javascript:void(0)" class="nav__menu-close">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    </div>
                                    <ul class="nav__menu-items">
                                        <li class="nav__menu-item nav__menu-item--dropdown">
                                            <button aria-label="dropdown menu container" class="nav__menu-link nav__menu-link--dropdown">
                                                Home
                                            </button>
                                            <div class="nav__dropdown nav__dropdown--alt">
                                                <ul>
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav" href="index.html">Home 01</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav" href="index-two.html">Home
                                                            02</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav" href="index-three.html">Home
                                                            03</a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav" href="index-dark.html">Home
                                                            01
                                                            Dark</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav" href="index-two-dark.html">Home
                                                            02 Dark</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav" href="index-three-dark.html">Home
                                                            03 Dark</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav__menu-item">
                                            <a class="nav__menu-link hide-nav" href="about-us.html">About Us</a>
                                        </li>
                                        <li class="nav__menu-item nav__menu-item--dropdown">
                                            <button aria-label="dropdown menu container" class="nav__menu-link nav__menu-link--dropdown">
                                                Services
                                            </button>
                                            <div class="nav__dropdown mega-menu">
                                                <div class="mega-menu__inner">
                                                    <div class="mega-menu__single">
                                                        <div class="mega-menu__single-head">
                                                            <h5 class="h5">Main Services</h5>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/one.png" alt="Services">
                                                                <span>
                                                                    Clipping path services
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/two.png" alt="Services">
                                                                <span>
                                                                    product color schem
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/three.png" alt="Services">
                                                                <span>
                                                                    photo retouch
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/four.png" alt="Services">
                                                                <span>
                                                                    Clipping path services
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/five.png" alt="Services">
                                                                <span>
                                                                    photo colorize
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/six.png" alt="Services">
                                                                <span>
                                                                    Clipping path services
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__single mega-menu__single-img">
                                                        <div class="mega-menu__single-head">
                                                            <h5 class="h5">Photo editing</h5>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/icon-one.png" alt="Services">
                                                                <span>
                                                                    convert any format
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/icon-two.png" alt="Services">
                                                                <span>
                                                                    photo enlarge
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/icon-three.png" alt="Services">
                                                                <span>
                                                                    image compress
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/icon-four.png" alt="Services">
                                                                <span>
                                                                    image crop
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="mega-menu__single-item">
                                                            <a href="service-details.html">
                                                                <img src="assets/images/services/icon-five.png" alt="Services">
                                                                <span>
                                                                    Special tools
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu__single mega-menu__single--alt">
                                                        <div class="rangu">
                                                            <div class='img background-img'></div>
                                                            <div class='img foreground-img'></div>
                                                            <input type="range" min="1" max="100" value="50" class="rangu-slider" name='rangu-slider' id="ranguslider">
                                                            <div class='rangu-slider-button'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav__menu-item nav__menu-item--dropdown">
                                            <button aria-label="dropdown menu container" class="nav__menu-link nav__menu-link--dropdown">
                                                Pages
                                            </button>
                                            <ul class="nav__dropdown">
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="portfolio.html">Portfolio</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="pricing.html">Pricing</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="teams.html">Our Teams</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="get-quote.html">Get A
                                                        Quote</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="service-details.html">Service Details</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="sign-in.html">Sign In</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="sign-up.html">Create
                                                        Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav__menu-item nav__menu-item--dropdown">
                                            <button aria-label="dropdown menu container" class="nav__menu-link nav__menu-link--dropdown">
                                                Blog
                                            </button>
                                            <ul class="nav__dropdown">
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="blog.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a class="nav__dropdown-item hide-nav" href="blog-single.html">Blog
                                                        Single</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav__menu-item">
                                            <a class="nav__menu-link hide-nav" href="contact-us.html">Contact</a>
                                        </li>
                                        <li class="nav__menu-item d-block">
                                            <a href="get-quote.html" class="btn btn--primary">Get A proposal</a>
                                        </li>
                                    </ul>
                                    <ul class="social d-flex">
                                        <li>
                                            <a href="index.html" aria-label="social media">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html" aria-label="social media">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html" aria-label="social media">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html" aria-label="social media">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nav__uncollapsed">
                                    <button aria-label="open sidebar" class="sidedot-two">
                                        <span class="sidedot-inner">
                                            <span></span><span></span><span></span><span></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="backdrop"></div>
        </header>
        <!-- ==== / header end ==== -->

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <!-- Navigation menu -->
        <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
    </header>
