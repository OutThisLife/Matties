<?php
/**
 * matties
 *
 * Footer
 */
?>

<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
	<div id="footer-top">
		<div class="social-block">
			<a href="javascript:;">Follow / Newsletter</a>
			<div class="social">
				<?=gravity_form(2, 0, 0, 0, 0, 1)?>


				<a href="https://www.facebook.com/mattiesaustin/" target="_blank" rel="noopener noreferrer">
					Facebook
				</a>

				<a href="https://www.instagram.com/mattiesaustin/?hl=en" target="_blank" rel="noopener noreferrer">
					Instagram
				</a>
			</div>
		</div>

		<a href="tel:5124441888">(512) 444-1888</a>
	</div>

	<div id="footer-bottom">
		<a class="exit exit-footer"></a>
		<p class="hide-for-small">
			Reserve a table at our a la carte brunch, every Saturday and Sunday from 11am - 2pm
		</p>

		<a href="javascript:;" onClick="javascript:header.querySelector('.popup-link a').click();">
			<span class="hide-for-small">RESERVE NOW</span>
			<span class="show-for-small">RESERVE A TABLE &raquo;</span>
		</a>
	</div>

	<?php if (!is_front_page()): ?>
	<div id="footer-page" itemscope itemtype="http://schema.org/WPFooter">
		<ul><?=BackEnd::getMenu('footer')?></ul>
	</div>
	<?php endif ?>
</footer>

</div> <!-- End #container -->

<?=BackEnd::getOption('extra-scripts')?>
<?php wp_footer() ?>

<script src="<?=assetDir?>/js/dist/main.js?v=<?=ASSET_VERSION?>"></script>

</body>
</html>
