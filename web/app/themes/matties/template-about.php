<?php
/**
 * matties
 *
 * Single page
 */

get_header();
the_post();
?>

<style>
	body {
		background: #C5ADBB;
	}
</style>

<!-- MASTHEAD -->
<?php get_template_part('masthead') ?>

<!-- CONTENT -->
<section id="content" role="main">
<div class="row wrapper">
	<!-- Page -->
	<div id="page" class="events center-align" itemprop="MainContentOfPage">
		<h2><?php the_title() ?></h2>

		<div class="slideshow inline">
			<noscript>
			{ "slides": [
				{
					"img": "<?=assetDir?>/img/slide-1.jpg"
				},
				{
					"img": "<?=assetDir?>/img/slide-2.jpg"
				}
			]}
			</noscript>

			<img src="<?=assetDir?>/img/slide-1.jpg" />
		</div>

		<p>
			Room lorem ipsum
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique iusto veritatis soluta recusandae consequatur reiciendis, quod rerum harum incidunt minima debitis nihil, nostrum commodi ex eum. Repellat, consequuntur itaque aut.
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique iusto veritatis soluta recusandae consequatur reiciendis, quod rerum harum incidunt minima debitis nihil, nostrum commodi ex eum. Repellat, consequuntur itaque aut.
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique iusto veritatis soluta recusandae consequatur reiciendis, quod rerum harum incidunt minima debitis nihil, nostrum commodi ex eum. Repellat, consequuntur itaque aut.
		</p>
	</div>
</div>
</section>

<?php get_footer() ?>