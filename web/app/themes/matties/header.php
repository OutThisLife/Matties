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
			"html": "Form will go here"
		}
		</noscript>
	</span>

	<a href="<?=home_url()?>" class="logo">
		<svg width="129" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129.6 50"><path d="M128.2 11.3c-.6-1-1.7-1.5-2.4-.7-1.4 1.4-2.8 3.4-4.5 4.9-.9.8-2.3 1.9-3.1 2.5-1.5 1-2.7 1.7-4.5 2.5-1.2.5-2.7.9-3.9 1-.2 0-.5-.1-.8-.2-.4-.1-.4-.4-.1-.6 1.9-1.2 2.7-2.9 3.2-5.1.3-1.3.1-2.7-.3-3.9-.2-.5-.5-.8-1.2-.7-1.1.2-1.7 1-2.3 1.8-.9 1.1-1.5 2.4-1.8 3.9-.2 1.1-.6 2.3-.7 3.4 0 .7-.3.9-.8 1.3-.5.3-.5.3-.7.5L101 24c-.9.5-1.6.2-1.8-.6-.4-1.9-.5-3.7.5-5.5.6-1.1.9-2.4 1.2-3.6.2-.6-.2-.9-.6-1.1-.5-.2-.8-.2-1 .3-.2.3-.5.6-.6.9-.4 1-.6 2.1-1.1 3-.4.8-.9 1.6-1.5 2.3-.5.6-1.1 1.1-1.6 1.6-1.9 1.7-3.9 3.5-6.5 3.8-.5.1-1.1.1-1.5-.1-.4-.2-.7-.8-.9-1.2-.7-1.6-1.1-4-.5-6.1.6-2 1.1-3.9 1.7-5.9.2-.6.5-1.7.8-2.8 3.7-.5 7-1.1 7.9-1.2 3.6-.6 16.7-2.6 19.2-3.4.5-.2 1-.3 1.4-.5.2-.1.3-.4.3-.6l-.2-.3c-.6-.1-1.1-.1-1.7-.1-3.3.5-18.1 2.7-26.3 3.9.1-.2.1-.4.1-.5 0-.4.1-.7.2-1.1.2-1.2.6-2.4.3-3.7-.1-.3-.4-.7-.6-.8-.3-.1-.8.1-.9.4-.4.5-.6 1.1-.8 1.7C86 4.2 85.4 5.6 85 7c0 .1 0 .2-.1.3-1.2.2-1.9.3-2 .3-1.1.1-4.6.6-7.7 1.1V7.4c-.1-.6-.3-1.2-.9-1.3-.6-.2-1.3-.1-1.7.6-.5.9-.9 1.7-1.4 2.6-.9.1-1.5.2-1.7.2-.7 0-7.7.9-10.4.3-.2 0-.5-.1-.7 0-.4.3-.8.6-.9 1-.1.2.2.7.5.9.4.3.9.5 1.4.6.9.2 1.8.3 2.8.3.7 0 1.3-.2 2-.2.5-.1 3.7-.4 4.7-.6.3-.1 1-.2 1.8-.3-.1.6-.2 1.2-.3 1.5-.3 1.3-.6 2.5-.9 3.8-.4 1.8-.8 3.7-1 5.5-.1 1.2-.5 2.2-1.2 3.1-.5.6-1.2 1.1-1.7 1.7-.6.6-1.3 1.3-1.9 1.8-.9.7-1.8 1.3-2.7 2-1.1.9-2.3.5-3.5.1-.2 0-.4-.3-.4-.5-.2-.8-.3-1.6-.4-2.3-.1-1.1 0-2.3-.1-3.4 0-.3-.3-.7-.5-.7-.6.1-1.3.2-1.8.6-.6.5-1.8 1.8-2.8 3.5-.4.7-1.4 2-2.8 3.2-2.5 2.1-4.3 3.3-7.5 4.2-1.8.5-3.7-.4-4.1-2-.2-.9-.4-1.8-.5-2.8-.1-1.4-.2-2.7-.3-4.1-.1-.9-.5-1.7-1-2.5s-1-1-1.8-.7c-.5.2-.9.6-1.4.9-.3.2-.6.5-.8.4-.2-.1.1-3.9.1-4.9 0-2.3.3-4.7-.3-7-.2-.8-.3-1.6-.8-2.2-.5-.7-1-1.7-2.1-1.6-1 .2-2.1.4-3 .8-2 1-3.8 2.3-5.2 4.1-.6.7-1.2 1.3-1.9 1.9-.3.3-.6.5-.7-.2-.1-1.1-.1-2.1-.2-3.2-.1-1.2-1.2-2-2.2-1.4-.6.3-1.1.7-1.6 1.1-1.6 1.5-3.1 3-4.7 4.5-1.2 1.1-2.3 2.2-3.5 3.2-.7.5-1.4.8-2.2 1.1-.6.2-1 .1-.9-.7.1-.9.2-1.9.3-2.8 0-.3-.2-.8-.5-.8-.3-.1-.7.1-1 .3-.2.1-.4.4-.5.7-.7 1.5-.6 3.1 0 4.5.3.8 1 1.4 1.9 1.3 1-.2 2.2-.5 3-1.1 2.2-1.9 4.2-4 6.3-6 .9-.9 1.7-1.8 2.6-2.7.2-.2.5-.2.7-.2.1 0 .2.4.2.6.2 2.3-.5 4.5-1 6.7-.1 1.1-1 2.2-1.7 3.2-2.8 3.7-4.5 8-6.2 12.3-.4 1-.7 2-1 3.1-.3 1.2-.6 2-1 3.1-.7 2.4-.8 3.7-.9 5.8 0 .3 0 .6.1.8.4.4.8.9 1.2.9.4 0 1-.4 1.2-.8 1.2-2.6 2.4-5.3 3.6-7.9.2-.4.3-.9.5-1.3.8-1.8 1.7-3.5 2.4-5.3.5-1.1.8-2.3 1.2-3.4.9-2.9 1.8-5.8 2.8-8.7.4-1 .9-2.1 1.5-3 .8-1.3 2.2-2.2 3.1-3.6.5-.8 1.3-1.4 2-2 .5-.4 1-.8 1.6-1.2.9-.5 1.7-1.1 2.7-1.5 1.1-.5 1.4-.3 1.8.8.1.3.1.6.2.8l.3 4.2c.1.8 0 2.4-.1 3.1-.1 1.9-.2 2.9-.9 6.5-.2.9-.3 1.7-.5 2.6-.6 2.4-1.5 4.8-2 7.3-.2.9-.7 1.8-.9 2.7-.3 1-.5 2-.6 3-.1.7.8 1.3 1.2.9.5-.4 1-.9 1.2-1.5 1.2-3.3 2.3-6.6 2.7-10.1.1-.7.3-1.4.7-2 .7-1.1 1.5-2.1 2.3-3 .3-.3.7-.9 1.1-.7.4.1.5.8.5 1.2.2 1.9.4 3.7.6 5.6l.3 2.1c.3 1.5 2.1 3.2 3.4 3.2 1.7 0 3.8-.3 5.4-1.2 1.8-1 3.4-1.9 4.5-2.8 1.4-1.1.1.7.2 1.8.1.6.1 1.3.9 1.5.6.1 1.4.2 1.9-.1 1.8-.9 3.3-2.1 4-4.2.2-.5.2-.3.5-.2.6.4 1.1.8 1.6 1.1.3.2.7.3 1.1.3 2-.3 3.6-1.5 3.9-1.7.4-.2.8-.4 1.1-.8 1.3-1.4 2.6-2.7 4.3-3.8.4-.3.5-.3.7.1.1.3.3.5.4.7.9 2.4 3.4 3.2 5.5 1.8.7-.5 1.3-1.2 2-1.8 1.1-.9 2-1.7 3-2.6.4-.3 1.2-1.4 1.9-2.2.3-.4.8-1 1.2-1.3.1.6.3 1.1.5 1.6.8 2.1 1.7 3.1 3.2 3.5 1 .3 2.2.2 3.3-.3 1.1-.5 2.1-1.2 3.1-1.8.9-.6 1.8-1.4 2.6-2.1.8-.6.9-.6 1.2.4.4 1 .9 2.2 2.1 2.5 1.5.3 2.9-.1 4.2-.8 1-.6 2-1.3 2.9-1.9.5-.4 1-.4 1.5-.1.8.5 1.6.6 2.6.3s2.1-.5 3.1-.9c1.7-.7 3.5-1.5 5.1-2.4 1.2-.7 2.3-1.5 3.3-2.4.9-.8 1.5-1.5 2.5-2.4.6-.6 1.6-1.6 2.1-2.2.6-.8.9 0 1.1.8.4 1.6.3 3.1.1 4.7 0 .5-.7.2-.8.1-.3-.2-.5-.5-.8-.7-.5-.4-1-.8-1.6-1.1-.3-.1-.8 0-1 .2-.2.2-.1.7 0 1 0 .2.2.5.3.6.7.7 1.4 1.4 2.1 2 1.6 1.3 3 .9 3.6-1 1.1-3.1.9-6.2-.7-8.9zM11.4 30.4c-.8 2.4-1.7 5-2.3 6.4-.5 1.5-1 2.5-1.4 3.3l-.5 1c-.1.1.5-2.6.8-3.6.4-1.2.7-2.2 1.1-3.4.1-.2 1.1-3.2 2.3-4.5 0-.1.1-.1.2-.1 0 .1.1.2.1.2-.1.3-.2.5-.3.7zm42.6.5c-.5 1.6-1 2.4-1.7 3.1-.4.4-.9.7-1 .7-.2 0-.2-.3-.2-.4.1-.8.4-2.2.9-3 .5-.8.6-1.4 1-1.8.3-.3 1-1.3 1.2-1.2.2.1-.1 2.4-.2 2.6zm28.9-14.1c-1.3 2.8-3.6 6.6-5.3 8.3-.7.7-1.6 1.3-2.3 2.1-.8.8-1.8 1-2.8 1.2-.3.1-.9-.2-1.1-.5-.5-.8-.7-1.7-1.1-2.6-.3-1.1.5-1.9.8-2.8.6-1.5 1.5-2.8 1.8-4.4.2-1.4.9-2.7 1.4-4.1.1-.3.2-.6.3-1 .1-.5.2-1.2.3-2.1.4 0 .7-.1.9-.1 1-.1 4.7-.6 8.6-1.2-.1.8-.3 1.7-.4 2.2-.3 1.2-.7 2.4-.8 3.6 0 .5-.1 1-.3 1.4zm25.5.5c.1-1.1 1-2.8 1.5-3.2.1-.1.3-.3.4-.2.1.1.1.6.1.8-.2 1-.4 1.8-.9 2.7-.4.6-1.2 1.4-1.3 1.5-.1-.3.2-1.3.2-1.6z" /><path d="M119.4 7.9c.2.1.6-.3.8-.5 1.1-1.6 2.1-3.1 3.1-4.7.7-1.1.7-1.1-.1-2.1-.4-.6-.9-.7-1.3-.2-.6.7-1.3 1.5-1.4 2.4-.2 1.3-.8 2.3-1.4 3.3-.1.3-.4.6-.4 1 .1.3.4.7.7.8zM100.6 9c-.3.2-.5.5-.2.9.2.3.4.8.8.9.6.2 1.3.2 1.9.2.1 0 .3-.3.4-.5.1-.2.1-.5 0-.9 0-.1-.1-.3-.3-.5-.6-.4-2-.5-2.6-.1z" /></svg>
	</a>

	<a href="javascript:;" class="toggle-menu">
		Menu <span class="burger"></span>
	</a>
</header>

<!-- Menu -->
<?php Template::partial('menu.php') ?>

<!-- Gallery -->
<?php Template::partial('gallery.php') ?>