<?php
/**
 * matties
 *
 * Template Name: Menu
 */

get_header();
the_post();

$menus = CFS()->get('menu_cats');
$sections = CFS()->get('sections');
?>

<!-- MASTHEAD -->
<?php get_template_part('masthead') ?>

<!-- CONTENT -->
<section id="content" role="main">
<div class="row wrapper">
	<!-- Page -->
	<div id="page" class="menu" itemprop="MainContentOfPage">
		<h2><?php the_title() ?></h2>

		<ul class="tabs">
		<?php
		foreach ($menus AS $menu)
			echo '<li><a href="javascript:;">', $menu['title'], '</a></li>';
		?>
		</ul>

		<div class="tabs-container">
			<?php foreach ($menus AS $menu): ?>
			<div class="tab-content">
				<a href="<?=$menu['menu_pdf']?>" target="_blank">
					<img src="<?=$menu['pdf_image']?>" />
				</a>
			</div>
			<?php endforeach ?>
		</div>

		<div class="disclaimer center-align">
			<?=CFS()->get('disclaimer')?>
		</div>
	</div>
</div>
</section>

<?php get_footer() ?>