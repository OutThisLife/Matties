import React, { Component } from 'react'
import { render } from 'react-dom'
import PropTypes from 'prop-types'
import Arrow from '../../img/arrow.svg'

// ---------------------------------------------

class Slideshow extends Component {
	constructor(props) {
		super(props)
		this.state = { slide: 0 }
	}

	handleClick(i) {
		let slide = i
		const max = this.props.slides.length - 1

		if (slide > max) slide = 0
		else if (slide < 0) slide = max

		return this.setState({ slide })
	}

	render() {
		return (<slideshow>
			<div className="the-slides">
				{this.props.slides.map(slide => {
					return (<figure key={Math.random()} style={{ backgroundImage: `url(${slide})` }} />)
				})}
			</div>

			<nav>
				<a href="javascript:;" onClick={this.handleClick.bind(this, this.state.slide + 1)}>
					<Arrow />
				</a>

				<a href="javascript:;" onClick={this.handleClick.bind(this, this.state.slide - 1)}>
					<Arrow />
				</a>
			</nav>
		</slideshow>)
	}
}

Slideshow.propTypes = {
	slides: PropTypes.arrayOf(PropTypes.string).isRequired,
}

Array.from(document.getElementsByClassName('slideshow')).forEach($slideshow => {
	const props = $slideshow.querySelector('noscript').innerText
	render(<Slideshow {...JSON.parse(props)} />, $slideshow)
})
