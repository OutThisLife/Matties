const $container = document.getElementById('container')

window.onpageshow = e => (e.persisted ? window.location.reload() : null)

export default function (href) {
	document.body.classList.remove('load-in')
	document.body.classList.add('load-out')

	;['animationend', 'webkitAnimationEnd'].map(evt => {
		$container.addEventListener(evt, () => (location.href = href))
		return evt
	})
}