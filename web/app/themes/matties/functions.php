<?php
/**
 * CRM
 *
 * Main Functions
 */

require_once 'classes/sys/autoloader.php';
(new BaseTheme())->debug(0)->adminBar(0)

// -----------------------------------------------

/**
 * Set up the front-end
 */
->addImageSizes([[
	'menu' => [465, 308],
	'event' => [400],
]])

// -----------------------------------------------

/**
 * Set up the back-end
 */
->addMenus([[
	'header' => 'Header Menu',
	'footer' => 'Footer Menu',
]])

->addSettings([[
	# Footer settings tab
	'Footer' => [
		'scripts' => [
			'name' => 'Extra Scripts',
			'type' => 'textarea',
			'desc' => 'If used, these scripts will be loaded in the footer. Put things like Google Analytics in here.',
		],
	],
]])

->addShortcodes([[
	# [phone]
	'phone' => function() {
		return BackEnd::getOption('phone');
	},

	# [button]
	'button' => function($args, $content = '') {
		return '<a href="'. $args['url'] .'" class="btn cta '. $args['style'] .'">'. $content .'</a>';
	},

	# [reserve]
	'reserve' => function($args) {
		return '<a
			href="javascript:;"
			class="btn cta"
			onClick="javascript:rc.querySelector(\'.popup-link a\').click();"
		>'. $args['title'] .'</a>';
	},

	# [grid]
	'grid' => function($args, $content) {
		return '<div class="grid grid-'. $args['cols'] .'">'. do_shortcode($content) .'</div>';
	},

	# [grid_item]
	'grid_item' => function($args, $content) {
		return '<div class="item">'. do_shortcode($content) .'</div>';
	},

	# [lead]
	'lead' => function($args, $content) {
		return '<div class="lead">'. $content .'</div>';
	},

	# [youtube]
	'youtube' => function($args, $content) {
		return '<div class="responsive-video"><iframe width="560" height="315" src="https://www.youtube.com/embed/'. $args['id'] .'" frameborder="0" allowfullscreen></iframe></div>';
	},

	# [slideshow]
	'slideshow' => function($args) {
		ob_start();
		include locate_template('partials/shortcodes/slideshow.php');
		return ob_get_clean();
	},
]])

// -----------------------------------------------

->render();

// -----------------------------------------------

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_action('wp_enqueue_scripts', function() {
	if (is_admin()) return;

	wp_deregister_script('wp-embed.min.js');
	wp_deregister_script('wp-embed');
	wp_deregister_script('embed');

	wp_dequeue_style('page-list-style');
	wp_dequeue_style('yoast-seo-adminbar');
}, 999);

add_filter('excerpt_length', function($length) {
	return 30;
}, 999);

add_filter('upload_mimes', function($mimes) {
	$mimes['svg'] = 'img/svg+xml';

	return $mimes;
});

add_filter('wp_get_attachment_url', function($url) {
	return str_replace('localhost:8000', 'mattiesaustin.com/dev', $url);
});

// -----------------------------------------------

function parseSlides($slides, $size = 'full', $options = []) {
	$data = array_merge($options, ['slides' => []]);

	foreach ($slides AS $slide):
		$img = FrontEnd::getSrc($slide['image'], $size);
		list ($width, $height) = getimagesize($img);
		$orientation = $width > $height ? 'landscape' : 'portrait';

		$data['slides'][] = [
			'caption' => $slide['title'],
			'img' => $img,
			'width' => $width,
			'height' => $height,
			'orientation' => $orientation,
			'border' => $slide['has_border'] ?: false,
		];
	endforeach;

	return json_encode($data);
}
