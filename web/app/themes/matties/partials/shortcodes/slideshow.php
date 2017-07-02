<?php
if (!($slides = CFS()->get('slideshow')))
	return;
?>

<div class="slideshow inline">
	<noscript><?=parseSlides($slides, 'large', ['checkBrightness' => true])?></noscript>
	<img class="placeholder-img" />
</div>