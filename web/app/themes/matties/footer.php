<?php
/**
 * matties
 *
 * Footer
 */
?>

<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
	<div id="footer-top">
		<a href="javascript:;">Follow / Newsletter</a>
		<a href="tel:5124441888">(512) 444-1888</a>
	</div>

	<div id="footer-bottom">
		<a class="exit"></a>
		<p class="hide-for-small">Reserve a table at our a la carte brunch, every Saturday and Sunday from 11am - 2pm</p>
		<a href="javascript:;">
			<span class="hide-for-small">RESERVE NOW</span>
			<span class="show-for-small">RESERVE A TABLE &raquo;</span>
		</a>
	</div>

	<?php if (!is_front_page()): ?>
	<div id="footer-page" itemscope itemtype="http://schema.org/WPFooter">
		<ul>
			<li><a href="#">Menus</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Private Events</a></li>
			<li><a href="#"><img src="<?=assetDir?>/img/logo.svg" width="129" /></a></li>
			<li><a href="#">Item 6</a></li>
			<li><a href="#">Item 7</a></li>
			<li><a href="#">Item 8</a></li>
			<li><a href="#">Item 9</a></li>
		</ul>
	</div>
	<?php endif ?>
</footer>

</div> <!-- End #container -->

<?=BackEnd::getOption('extra-scripts')?>
<?php wp_footer() ?>

<script src="<?=assetDir?>/js/dist/main.js?v=<?=ASSET_VERSION?>"></script>

</body>
</html>
