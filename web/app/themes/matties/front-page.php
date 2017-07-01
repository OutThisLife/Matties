<?php
/**
 * matties
 *
 * Front page
 */

get_header();
?>

<!-- CONTENT -->
<section id="content" role="main" itemprop="MainContentOfPage">

<div class="slideshow">
<noscript>
{
	"checkBrightness": true,
	"slides": [
		{ "img": "<?=assetDir?>/img/slide-1.jpg" },
		{ "img": "<?=assetDir?>/img/slide-2.jpg" }
	]
}
</noscript>
</div>

</section>

<?php get_footer() ?>
