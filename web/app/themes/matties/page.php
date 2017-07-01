<?php
/**
 * matties
 *
 * Single page
 */

get_header();
the_post();
?>

<!-- MASTHEAD -->
<?php get_template_part('masthead') ?>

<!-- CONTENT -->
<section id="content" role="main">
<div id="page" class="row wrapper center-align animate-in" itemprop="MainContentOfPage">
	<h2><?php the_title() ?></h2>
	<?php the_content() ?>
</div>
</section>

<?php get_footer() ?>