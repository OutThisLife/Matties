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
<div class="row wrapper">
	<!-- Page -->
	<div id="page" class="events center-align" itemprop="MainContentOfPage">
		<h2><?php the_title() ?></h2>

		<img src="<?=assetDir?>/img/events-1.jpg" alt="" />

		<p>
			Room lorem ipsum
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique iusto veritatis soluta recusandae consequatur reiciendis, quod rerum harum incidunt minima debitis nihil, nostrum commodi ex eum. Repellat, consequuntur itaque aut.
		</p>

		<p><a href="#" class="btn">BOOK THIS ROOM</a></p>

		<img src="<?=assetDir?>/img/events-1.jpg" alt="" />

		<p>
			Room lorem ipsum
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique iusto veritatis soluta recusandae consequatur reiciendis, quod rerum harum incidunt minima debitis nihil, nostrum commodi ex eum. Repellat, consequuntur itaque aut.
		</p>

		<a href="#" class="btn">BOOK THIS ROOM</a>
	</div>
</div>
</section>

<?php get_footer() ?>