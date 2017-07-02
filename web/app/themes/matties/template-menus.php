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
				<?php foreach ($menu['sections'] AS $section): ?>
				<section class="<?=key($section['style'])?>">
					<h3><?=$section['title']?></h3>

					<?php foreach ($section['items'] AS $item): ?>
					<div class="item">
						<div class="item-row">
							<strong class="item-name"><?=$item['title']?></strong>
							<small class="price"><?=$item['price']?></small>
						</div>

						<em class="description"><?=$item['desc']?></em>
					</div>
					<?php endforeach ?>
				</section>
				<?php endforeach ?>
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