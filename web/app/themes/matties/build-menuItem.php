<?php
$isGallery = get_the_ID() === GALLERY;
$class = $isGallery ? 'toggle-gallery' : '';
$url = $isGallery ? 'javascript:;' : get_permalink();
$img = FrontEnd::getSrc(get_post_thumbnail_id(), 'menu');
?>

<figure>
	<a href="<?=$url?>" class="<?=$class?>" style="
		background-image: url(<?=$img?>);
	">
		<img src="<?=$img?>" alt="<?php the_Title() ?>" />
	</a>

	<figcaption><?php the_title() ?></figcaption>
</figure>