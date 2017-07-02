<?php
if (!($slides = CFS()->get('slideshow', GALLERY)))
	return;
?>

<div id="gallery">
	<a href="javascript:;" class="cover toggle-gallery">
		<i class="exit"></i>
	</a>

	<div class="slideshow inline">
		<noscript><?=parseSlides($slides)?></noscript>
	</div>
</div>