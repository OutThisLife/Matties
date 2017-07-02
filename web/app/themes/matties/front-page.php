<?php
/**
 * matties
 *
 * Front page
 */

get_header();
the_post();

$slides = CFS()->get('slideshow');
?>

<!-- CONTENT -->
<section id="content" role="main" itemprop="MainContentOfPage">

<div class="slideshow">
<noscript><?=parseSlides($slides, 'full', ['checkBrightness' => true])?></noscript>
</div>

</section>

<?php get_footer() ?>