<?php
$isGallery = get_the_ID() === GALLERY;
$class = $isGallery ? 'toggle-gallery' : '';
$img = FrontEnd::getSrc(get_post_thumbnail_id(), 'menu');
?>

<figure>
	<a href="<?php the_permalink() ?>" class="<?=$class?>" style="
		background-image: url(<?=$img?>);
	">
		<img src="<?=$img?>" alt="<?php the_Title() ?>" />
	</a>

	<figcaption><?php the_title() ?></figcaption>
</figure>