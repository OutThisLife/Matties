import React, { PureComponent } from 'react'
import { render } from 'react-dom'
import PropTypes from 'prop-types'
import raf from 'raf'

// -----------------------------------------------

const $menu = document.getElementById('menu')

class Menu extends PureComponent {
	componentDidMount() {
		this.speed = 0
		this.scroll = 0
		this.prevFrame = new Date().getTime()
		this.$scroller = this.el.querySelector('.scroller')

		Array.from(document.getElementsByClassName('toggle-menu')).forEach($a => {
			$a.addEventListener('click', () => {
				$menu.classList.toggle('show')
				$a.classList.toggle('is-open')
				document.querySelector('body').classList.toggle('lock')
			})
		})

		this.updateScroll()
		this.el.addEventListener('mousemove', this.handleMouseMove.bind(this))
		this.el.addEventListener('mouseleave', this.handleMouseLeave.bind(this))
	}

	handleMouseMove(e) {
		this.speed = (100 * (e.pageX - this.el.offsetLeft) / this.el.clientWidth) - 50
	}

	handleMouseLeave() {
		this.speed = 0
	}

	updateScroll() {
		const fn = () => {
			const
				curFrame = new Date().getTime(),
				elapsed = curFrame - this.prevFrame

			this.prevFrame = curFrame

			if (this.speed !== 0) {
				this.scroll += this.speed * elapsed / 50

				if (this.scroll < 0) {
					this.scroll = 0
				} else if (this.scroll > this.$scroller.scrollWidth) {
					this.scroll = this.$scroller.scrollWidth
				}

				this.$scroller.scrollLeft = this.scroll
			}

			raf(fn)
		}

		raf(fn)
	}

	render() {
		return <div ref={c => (this.el = c)} dangerouslySetInnerHTML={{ __html: this.props.html }} />
	}
}

Menu.propTypes = {
	html: PropTypes.string.isRequired,
}

render(<Menu html={$menu.innerHTML} />, $menu)
