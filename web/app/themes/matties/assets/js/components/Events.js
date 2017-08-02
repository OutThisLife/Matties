const
	$events = document.getElementsByClassName('event'),
	handleScroll = () => {
		Array.from($events).forEach(el => {
			const r = el.getBoundingClientRect()

			if (
				!el.classList.contains('animate-in')
				&& r.top < window.innerHeight / 1.2
			) {
				el.classList.add('animate-in')
				el.classList.remove('event')
			}
		})
	}

if ($events)
	;['load', 'scroll', 'resize'].map(evt => {
		window.addEventListener(evt, handleScroll, {
			passive: true,
		})

		return evt
	})
