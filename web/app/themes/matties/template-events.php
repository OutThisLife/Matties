<?php
/**
 * matties
 *
 * Template Name: Events List
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

	<div class="the-events">
	<?php foreach (CFS()->get('events') AS $event): ?>
		<figure class="event">
			<img src="<?=FrontEnd::getSrc($event['image'], 'event')?>" />

			<figcaption>
				<p>
					<span><?=$event['title']?></span>
					<strong><?=$event['time']?></strong>
				</p>

				<?=$event['copy']?>
			</figcaption>
		</figure>
	<?php endforeach ?>
	</div>
</div>
</section>

<?php get_footer() ?>
