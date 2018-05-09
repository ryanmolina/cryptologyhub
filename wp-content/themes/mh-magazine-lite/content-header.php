<style type="text/css">
	.nav-emblem-wrap {
    width: 6vw;
    position: absolute;
    z-index: 100;
    border-radius: 50%;
    background-color: #1f1e1e;
    padding: 15px;
    box-sizing: border-box;
    left: 30px;
	}
	.nav-tag-wrap {
    display: inline-block;
    width: 12vw;
    position: absolute;
    left: 8vw;
    top: 15px;
    z-index: 100;
	}
	.nav-logo-tag,
	.nav-logo-emblem {
		width: 100%;
	}
	nav #menu-about-us {
		padding-top: 15px;
    padding-bottom: 15px;
	}

	/* MOBILE MEDIA QUERY */
	@media only screen and (max-width: 480px) {
		.nav-emblem-wrap,
		.nav-tag-wrap {
			display: none;
		}
	}

	/* TABLET MEDIA QUERY */
	@media only screen and (min-width: 481px) and (max-width: 960px) {
		.nav-emblem-wrap,
		.nav-tag-wrap {
			display: none;
		}
	}


</style>

<div class="mh-header-mobile-nav mh-clearfix"></div>
<header class="mh-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div class="mh-container mh-container-inner mh-row mh-clearfix">
		<?php mh_magazine_lite_custom_header(); ?>
	</div>
	<div class="mh-main-nav-wrap">
		<div class="nav-emblem-wrap">
			<a href="#"><img src="http://localhost/projects/cryptologyhub/wp-content/uploads/2018/05/logo-emblem-fin01.png" class="nav-logo-emblem"></a>
		</div>
		<div class="nav-tag-wrap">
			<img src="http://localhost/projects/cryptologyhub/wp-content/uploads/2018/05/logo-tag-fin01.png" class="nav-logo-tag">
		</div>
		<nav class="mh-navigation mh-main-nav mh-container mh-container-inner mh-clearfix" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
		</nav>
	</div>
</header>