import React, { PureComponent } from 'react'
import { render } from 'react-dom'

// -----------------------------------------------

class Menu extends PureComponent {
	componentDidMount() {
		const $scroll = this.el.querySelector('.scroller')

		Array.from(document.getElementsByClassName('toggle-menu')).forEach($a => {
			$a.addEventListener('click', () => $menu.classList.toggle('show'))
		})

		this.el.addEventListener('mousewheel', e => {
			if (e.deltaY < 0) {
				$scroll.scrollLeft -= 100
			} else if (e.deltaY > 0) {
				$scroll.scrollLeft += 100
			}
		})
	}

	render() {
		return <div ref={c => (this.el = c)} dangerouslySetInnerHTML={{ __html: this.props.html }} />
	}
}

const $menu = document.getElementById('menu')
render(<Menu html={$menu.innerHTML} />, $menu)