import React, { PureComponent } from 'react'
import { render } from 'react-dom'
import PropTypes from 'prop-types'

// ---------------------------------------------

class PopupCard extends PureComponent {
	componentDidMount() {
		const $scripts = this.$card.getElementsByTagName('script')

		Array.from($scripts).forEach($script => {
			const s = document.createElement('script')
			s.src = $script.src
			this.$card.querySelector('.inner div').appendChild(s)
			$script.parentNode.removeChild($script)
		})
	}

	handleClick() {
		this.$card.classList.toggle('open')
	}

	render() {
		return (<span>
			<a
				href="javascript:;"
				onClick={this.handleClick.bind(this)}
				dangerouslySetInnerHTML={{ __html: this.props.cta }}
			/>

			<div className="popup-card" ref={c => (this.$card = c)}>
				<a href="javascript:;" className="cover" onClick={this.handleClick.bind(this)}>
					Exit
				</a>

				<div className="inner">
					<a href="javascript:;" className="exit" onClick={this.handleClick.bind(this)}>
						Exit
					</a>

					<h2>{this.props.title}</h2>
					<div dangerouslySetInnerHTML={{ __html: this.props.html }} />
				</div>
			</div>
		</span>)
	}
}

PopupCard.propTypes = {
	cta: PropTypes.string.isRequired,
	title: PropTypes.string.isRequired,
	html: PropTypes.string.isRequired,
}

Array.from(document.getElementsByClassName('popup-link')).forEach($link => {
	const props = $link.querySelector('noscript').innerText
	render(<PopupCard {...JSON.parse(props)} />, $link)
})
