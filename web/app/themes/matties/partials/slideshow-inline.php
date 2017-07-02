<?php
$slides = CFS()->get('slides');
if (empty($slides)) return;

$data = (object) ['slides'] = [];

foreach ($slides AS $slide)
	$data[] = (object) [
		'caption' => $slide['title'],
		'img' => $slide['image'],
	];
?>

<div class="slideshow inline">
	<noscript><?=json_encode($data)?></noscript>
	<img src="<?=$slides[0]['image']?>" />
</div>