<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style>
.badge-default {
  background-color: #777;
}
.badge-primary {
  background-color: #337ab7;
}
.badge-success {
  background-color: #5cb85c;
}
.badge-info {
  background-color: #5bc0de;
}
.badge-warning {
  background-color: #f0ad4e;
}
.badge-danger {
  background-color: #d9534f;
}

.navbar-icon-top .navbar-nav>li>a>.fa, .navbar-icon-top .navbar-nav>li>a>.glyphicon {
    position: relative;
    width: 36px;
    font-size: 24px;
}
.navbar-icon-top .navbar-nav>li>a>.fa>.badge, .navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
    position: absolute;
    right: 0;
    font-family: sans-serif;
}
.navbar-icon-top .navbar-nav>li>a>.fa {
    top: 3px;
    line-height: 12px;
}
.navbar-icon-top .navbar-nav>li>a>.fa>.badge {
    top: -10px;
}
.navbar-icon-top .navbar-nav>li>a>.glyphicon {
    top: 6px;
    line-height: 6px;
}
.navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
    top: -16px;
}

@media (min-width: 768px) {
    .navbar-icon-top .navbar-brand {
        padding: 25px 15px;
    }
    .navbar-icon-top .navbar-text {
        margin-top: 25px;
        margin-bottom: 25px;
    }
    .navbar-icon-top .navbar-btn, .navbar-icon-top .navbar-form {
        margin-top: 18px;
        margin-bottom: 18px;
    }
    .navbar-icon-top .navbar-nav>li>a {
        text-align: center;
        display: table-cell;
        height: 70px;
        vertical-align: middle;
        padding-top: 0;
        padding-bottom: 0;
    }
    .navbar-icon-top .navbar-nav>li>a>.fa, .navbar-icon-top .navbar-nav>li>a>.glyphicon {
        display: block;
        width: 48px;
        margin: 2px auto 4px auto;
        top: 0;
        line-height: 24px;
    }
    .navbar-icon-top .navbar-nav>li>a>.fa>.badge, .navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
        top: -7px;
    }
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

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">

<div class="container">
    <nav class="navbar navbar-icon-top navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
        
                <a class="navbar-brand" href="#"><?php get_template_part( 'template-parts/header/site-branding' ); ?></a>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">Home </li>
                            
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                <ul class="nav navbar-nav navbar-right">
					<li> <?php get_template_part( 'template-parts/header/site-nav' ); ?>
                   </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle-o"></i>
                            Account <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
</header><!-- #masthead -->
