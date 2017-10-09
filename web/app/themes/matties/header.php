<?php
/**
 * matties
 *
 * Header
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="copyright" content="Copyright <?=date('Y'), ' ', bloginfo('name')?>. All Rights Reserved." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />

	<?php FrontEnd::getTitle() ?>

	<link rel="profile" href="//gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<link rel="image_src" href="<?=assetDir?>/img/logo.png" />
	<link rel="shortcut icon" href="<?=home_url()?>/favicon.ico" />

	<link rel="stylesheet" href="<?=bowerDir?>/materialize/dist/css/materialize.min.css" />
	<link rel="stylesheet" href="<?=assetDir?>/css/dist/main.css?v=<?=ASSET_VERSION?>" />

	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
	<script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
	<script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
	<![endif]-->

	<?=FrontEnd::typekit('bti8yhr')?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


	<?php if (strstr($_SERVER['SERVER_NAME'], 'localhost')): ?>
	<script src="//<?=$_SERVER['SERVER_NAME']?>:9091/livereload.js"></script>
	<?php endif ?>

	<?php wp_head() ?>

	<style>
	body { background: <?=CFS()->get('body_bg') ?: '#ecebe2'?>; }
	</style>
</head>
<body <?php body_class() ?>>

<div id="container">

<!-- HEADER -->
<header id="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
	<span class="popup-link">
		<noscript>
		{
			"cta": "Reserve",
			"title": "Reservations",
			"html": "<script src='//www.opentable.com/widget/reservation/loader?rid=269488&domain=com&type=standard&theme=standard&lang=en&overlay=false&iframe=false'></script>"
		}
		</noscript>
	</span>
	<ul class="main-menu"><?=BackEnd::getMenu('header')?></ul>

	<a href="javascript:;" class="show-on-small toggle-menu">
		Menu <span class="burger"></span>
	</a>
</header>

<!-- Menu -->
<?php Template::partial('menu.php') ?>

<!-- Gallery -->
<?php Template::partial('gallery.php') ?>

<!-- Reserve portal -->
<?php Template::partial('rc-portal.php') ?>
