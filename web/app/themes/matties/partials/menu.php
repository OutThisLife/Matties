<?php
/**
 * matties
 *
 * Popup menu
 */
?>

<nav id="menu">
<div class="scroller">
<?php
Template::loop('menuItem', [
	'post_type' => 'page',
	'post__not_in' => [2],
])
?>
</div>
</nav>