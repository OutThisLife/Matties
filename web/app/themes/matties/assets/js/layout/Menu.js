import React, { PureComponent } from 'react'
import { render } from 'react-dom'
import PropTypes from 'prop-types'

// -----------------------------------------------

const $menu = document.getElementById('menu')

class Menu extends PureComponent {
	componentDidMount() {
		const $scroll = this.el.querySelector('.scroller')

		Array.from(document.getElementsByClassName('toggle-menu')).forEach($a => {
			$a.addEventListener('click', () => {
				$menu.classList.toggle('show')
				$a.classList.toggle('is-open')
				document.querySelector('body').classList.toggle('lock')
			})
		})

		this.el.addEventListener('mousewheel', e => {
			if (e.deltaY < 0) {
				$scroll.scrollLeft -= 50
			} else if (e.deltaY > 0) {
				$scroll.scrollLeft += 50
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
