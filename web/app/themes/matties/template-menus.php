<?php
/**
 * matties
 *
 * Template Name: Menu
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
	<div id="page" class="menu" itemprop="MainContentOfPage">
		<h2><?php the_title() ?></h2>

		<ul class="tabs">
			<li><a href="javascript:;">Dinner</a></li>
			<li><a href="javascript:;">Brunch</a></li>
			<li><a href="javascript:;">Drink</a></li>
			<li><a href="javascript:;">Dessert</a></li>
		</ul>

		<div class="tabs-container">
			<?php for ($n = 0; $n <= 3; $n++): ?>
			<div class="tab-content">
				<section class="two-col">
					<h3>Starters</h3>

					<?php for ($i = 0; $i <= 10; $i++): ?>
					<div class="item">
						<div class="item-row">
							<strong class="item-name">Pimento Cheese</strong>
							<small class="price">8</small>
						</div>

						<em class="description">
							Grilled ciabatta, Irish cheddar, cornichons
						</em>
					</div>
					<?php endfor ?>
				</section>

				<section class="full">
					<h3>Entrees</h3>

					<?php for ($i = 0; $i <= 10; $i++): ?>
					<div class="item">
						<div class="item-row">
							<strong class="item-name">Pimento Cheese</strong>
							<small class="price">8</small>
						</div>

						<em class="description">
							Grilled ciabatta, Irish cheddar, cornichons
						</em>
					</div>
					<?php endfor ?>
				</section>

				<section class="two-col">
					<h3>Sides</h3>

					<?php for ($i = 0; $i <= 10; $i++): ?>
					<div class="item">
						<div class="item-row">
							<strong class="item-name">Pimento Cheese</strong>
							<small class="price">8</small>
						</div>

						<em class="description">
							Grilled ciabatta, Irish cheddar, cornichons
						</em>
					</div>
					<?php endfor ?>
				</section>
			</div>
			<?php endfor ?>
		</div>

		<div class="disclaimer center-align">
			<p>
				<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet neque, soluta libero nesciunt quasi, adipisci ad illo rem beatae perferendis deserunt accusamus molestias possimus alias !</em>
			</p>

			<p>
				<strong>Consuming raw or undercooked meats, poultry, seafood, shellfish or eggs may increase your risk of foodborne illness</strong>
			</p>
		</div>
	</div>
</div>
</section>

<?php get_footer() ?>