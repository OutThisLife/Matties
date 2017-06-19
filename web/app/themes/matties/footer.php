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
        <p>Reserve a table at our a la carte brunch, every Saturday and Sunday from 11am - 2pm</p>
        <a href="javascript:;">RESERVE NOW</a>
    </div>
</footer>

<?=BackEnd::getOption('extra-scripts')?>
<?php wp_footer() ?>

<script src="<?=assetDir?>/js/dist/main.js?v=<?=ASSET_VERSION?>"></script>

</body>
</html>
