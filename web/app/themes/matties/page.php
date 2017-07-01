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
		background: #EDBA9D;
	}
</style>

<!-- MASTHEAD -->
<?php get_template_part('masthead') ?>

<!-- CONTENT -->
<section id="content" role="main">
<div class="row wrapper">
	<!-- Page -->
	<div id="page" class="center-align animate-in" itemprop="MainContentOfPage">
		<h2><?php the_title() ?></h2>

		<p>
			Room lorem ipsum
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique iusto veritatis soluta recusandae consequatur <a href="#">reiciendis</a>, quod rerum harum incidunt minima debitis nihil, nostrum commodi ex eum. Repellat, consequuntur itaque aut.
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