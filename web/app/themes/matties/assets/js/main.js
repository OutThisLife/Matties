import './layout/Header'
import './layout/Menu'
import './layout/Footer'

import './components/Slideshow'
import './components/Gallery'
import './components/PopupCard'
import './components/Tabs'

// ---------------------------------------------

// import AnimateOut from './modules/AnimateOut'

// Array.from(document.querySelectorAll('[href]')).forEach(el => {
// 	const href = el.getAttribute('href')

// 	if (
// 		href.match(location.origin)
// 		&& !/#/.test(href)
// 	) {
// 		el.addEventListener('click', (e) => {
// 			e.preventDefault()
// 			return AnimateOut(href)
// 		})
// 	}
// })

// window.onload = () => document.body.classList.add('loaded')

document.body.addEventListener('mousewheel', e => {
	e.preventDefault()

	if (e.deltaY < 0) {
		document.body.scrollTop -= 50
	} else if (e.deltaY > 0) {
		document.body.scrollTop += 50
	}
})