import React, { PureComponent } from 'react'
import { render } from 'react-dom'
import PropTypes from 'prop-types'

// -----------------------------------------------

const $menu = document.getElementById('menu')

class Menu extends PureComponent {
	componentDidMount() {
		this.scroll_int = null
		const $scroll = this.el.querySelector('.scroller')

		Array.from(document.getElementsByClassName('toggle-menu')).forEach($a => {
			$a.addEventListener('click', () => {
				$menu.classList.toggle('show')
				$a.classList.toggle('is-open')
				document.querySelector('body').classList.toggle('lock')
			})
		})

		this.el.addEventListener('mousewheel', e => {
			e.preventDefault()

			if (e.deltaY < 0 || e.wheelDeltaX > 0) {
				$scroll.scrollLeft -= 15
			} else if (e.deltaY > 0 || e.wheelDeltaX < 0) {
				$scroll.scrollLeft += 15
			}
		})

		if (window.innerWidth >= 768)
			this.el.addEventListener('mousemove', e => {
				clearInterval(this.scroll_int)

				if (e.clientX <= 500) {
					this.scroll_int = setInterval(() => {
						$scroll.scrollLeft -= 10
					}, 25)
				} else if (e.clientX > window.innerWidth - 500) {
					this.scroll_int = setInterval(() => {
						$scroll.scrollLeft += 10
					}, 25)
				}
			})
	}

	render() {
		return <div ref={c => (this.el = c)} dangerouslySetInnerHTML={{ __html: this.props.html }} />
	}
}

Menu.propTypes = {
	html: PropTypes.string.isRequired,
}

render(<Menu html={$menu.innerHTML} />, $menu)
