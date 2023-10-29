<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<style>
    .custom-flex {
        display: flex !important;
    }

    .container {
        display: flex;
        position: relative;
        border: #cfcfcf 1px solid;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 5px;
        background-color: #f5f5f5;
    }

    .footer-left {
        display: flex;
    }

    .footer-right {
        position: absolute;
        right: 0;
    }

    .active {
        list-style: none;
        text-decoration: none;
        padding-left: 10px;
        padding-right: 10px;
        margin-left: 10px;
        margin-right: 10px;
        background: #e1e1e1;
        display: flex;
        align-items: center;
    }

    .custom-a {

        text-decoration: none;
        color: black;
        font-size: 13px;
    }

    .form-search {
        display: flex;
        align-items: center;
    }

    .btn-custom {
        border: 1px solid #9b9393;
        background: white;
        display: flex !important;
        align-items: center !important;
    }

    .form-control {
        border: 1px solid #ccc !important;
        display: block !important;
        width: 100% !important;
        padding: 0.375rem 0.75rem !important;
        font-size: 1rem !important;
        font-weight: 400 !important;
        line-height: 1.5 !important;
        color: var(--bs-body-color) !important;
        -webkit-appearance: none !important;
        -moz-appearance: none !important;
        appearance: none !important;
        background-color: var(--bs-body-bg) !important;
        background-clip: padding-box !important;
        border: var(--bs-border-width) solid var(--bs-border-color) !important;
        border-radius: var(--bs-border-radius) !important;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
    }

    .btn {
        border: var(--bs-border-width) solid var(--bs-border-color) !important;
        border-radius: var(--bs-border-radius) !important;
        background: white !important;
        color: black !important;
        margin-left: 10px;
    }

    .menu {
        display: flex;
        flex-direction: column;
        margin-right: 25px;
        margin-left: 25px;
        align-items: center;

    }

    .icon-search {
        display: flex;
        flex-direction: column;
        margin-right: 25px;
        align-items: center;

    }

    .dropdown {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
        align-items: center;
        list-style: none;
    }

    .dropdown-toggle {
        color: black;
        text-decoration: none;
    }
</style>
<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?>" style="display: block;">
    <div class="container">
        <div class="footer-left">
            <a class="navbar-brand py-3" href="#" style="text-decoration: none;display: flex;
    align-items: center;">
                <?php get_template_part('template-parts/header/site-branding'); ?>
            </a>
            <li class="active"><a href="#" class="custom-a">Home </a></li>

            <form class="form-search py-3">
                <div class="col-auto">
                    <input type="text" class="form-control" name="s" id="adminbar-search" type="text" value=""
                        maxlength="150">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn ">Submit</button>
                </div>
            </form>
        </div>
        <div class="footer-right custom-flex py-2">
            <?php get_template_part('template-parts/header/site-nav'); ?>

            <div class="menu">
                <i><svg xmlns="http://www.w3.org/2000/svg" height="1.25em"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                    </svg> </i>
                <a href="" class="custom-a">menu</a>
            </div>
            <div class="icon-search">
                <i><svg xmlns="http://www.w3.org/2000/svg" height="1.25em"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg> </i>
                <a href="" class="custom-a">Search</a>
            </div>

            <li class="dropdown">
                <i> <svg xmlns="http://www.w3.org/2000/svg" height="1.5em"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                    </svg>
                </i>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    Account
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </div>
    </div>
</header><!-- #masthead -->