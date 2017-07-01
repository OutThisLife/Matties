const
	$header = document.getElementById('header'),
	handleScroll = () => {
		const y = window.scrollY
		$header.classList[y > 50 ? 'add' : 'remove']('animate-out')
	}

['resize', 'scroll'].map(evt => window.addEventListener(evt, handleScroll, {
	passive: true,
}))