import './components/Slideshow'
import './components/PopupCard'
import './layout/Menu'

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