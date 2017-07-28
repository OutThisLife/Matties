import React, { PureComponent } from 'react'
import { render } from 'react-dom'
import PropTypes from 'prop-types'
import ImageBrightness from '../modules/ImageBrightness'
import Arrow from '../../img/arrow.svg'

// ---------------------------------------------

class Slideshow extends PureComponent {
	componentDidMount() {
		this.curSlide = 0

		this.$placeholder = this.$el.querySelector('.placeholder-img')
		this.$slides = this.$el.getElementsByTagName('figure')
		this.max = this.$slides.length - 1

		this.handleClick(0)
	}

	handleClick(i) {
		this.curSlide += i

		if (this.curSlide > this.max) this.curSlide = 0
		else if (this.curSlide < 0) this.curSlide = this.max

		if (this.$el.querySelector('.active'))
			this.$el.querySelector('.active').classList.remove('active')

		const
			$nextSlide = this.$slides[this.curSlide],
			$img = $nextSlide.querySelector('img'),
			src = $nextSlide.style.backgroundImage.slice(4, -1).replace(/"/g, '')

		$nextSlide.classList.add('active')

		if (this.$placeholder)
			this.$placeholder.src = $img.src

		if (this.props.checkBrightness)
			ImageBrightness(src, level => {
				const el = this.$placeholder ? this.$el : document.body
				el.setAttribute('data-bg', level < 127.5 ? 'dark' : 'light')
			})
	}

	render() {
		return (<slideshow ref={c => (this.$el = c)}>
			<div className="the-slides">
				{this.props.slides.map(slide => {
					return (<figure
						key={Math.random()}
						style={{ backgroundImage: `url(${slide.img})` }}
					>
						<img src={slide.img} alt="" />
						<figcaption className="hide-for-small" dangerouslySetInnerHTML={{ __html: slide.caption }} />
					</figure>)
				})}
			</div>

			<nav>
				<a href="javascript:;" onClick={this.handleClick.bind(this, -1)}>
					<Arrow />
				</a>

				<a href="javascript:;" onClick={this.handleClick.bind(this, 1)}>
					<Arrow />
				</a>
			</nav>

			<span dangerouslySetInnerHTML={{ __html: this.props.html }} />
		</slideshow>)
	}
}

Slideshow.propTypes = {
	checkBrightness: PropTypes.bool,
	html: PropTypes.string,
	slides: PropTypes.arrayOf(PropTypes.shape({
		img: PropTypes.string.isRequired,
		caption: PropTypes.string,
	})).isRequired,
}

Slideshow.defaultProps = {
	checkBrightness: false,
	html: '',
	slides: {
		caption: '',
	},
}

Array.from(document.getElementsByClassName('slideshow')).forEach($slideshow => {
	const props = $slideshow.querySelector('noscript').innerText
	render(<Slideshow
		{...JSON.parse(props)}
		html={$slideshow.innerHTML.replace(props, '')}
	/>, $slideshow)
})