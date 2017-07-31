import './layout/Header'
import './layout/Menu'
import './layout/Footer'

import './components/Slideshow'
import './components/Gallery'
import './components/PopupCard'
import './components/Tabs'

// -----------------------------------------------

import AnimateOut from './modules/AnimateOut'

Array.from(document.querySelectorAll('[href]')).forEach(el => {
	const { href, target } = el

	if (
		(
			href.match(location.origin)
			|| !/http/.test(href)
		)
		&& !/#/.test(href)
		&& !/javascript/.test(href)
		&& target !== '_blank'
	) el.addEventListener('click', (e) => {
		e.preventDefault()
		return AnimateOut(href)
	})
})

window.onload = () => {
	document.body.classList.add('load-in')

	;['animationend', 'webkitAnimationEnd'].map(evt => {
		document.body.addEventListener(evt, () => document.body.classList.add('loaded'))
		return evt
	})
}
