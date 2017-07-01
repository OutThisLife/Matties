import React, { Component } from 'react'
import { render } from 'react-dom'
import PropTypes from 'prop-types'

// -----------------------------------------------

class Tabs extends Component {
	constructor(props) {
		super(props)
		this.state = { tab: 0 }
	}

	componentDidMount() {
		this.$links = this.$tabs.getElementsByTagName('li')
		this.$sections = this.$tabs.parentNode.nextElementSibling.getElementsByClassName('tab-content')

		Array.from(this.$links).forEach(($li, i) => {
			$li.addEventListener('click', this.handleClick.bind(this, i))
		})

		this.setActives(0)
	}

	componentWillUpdate(nextProps, nextState) {
		this.$links[this.state.tab].classList.remove('active')
		this.$sections[this.state.tab].classList.remove('active')
		this.setActives(nextState.tab)
	}

	setActives(n) {
		this.$links[n].classList.add('active')
		this.$sections[n].classList.add('active')
	}

	handleClick(tab) {
		this.setState({ tab })
	}

	render() {
		return (<span
			ref={c => (this.$tabs = c)}
			dangerouslySetInnerHTML={{ __html: this.props.html }}
		/>)
	}
}

Tabs.propTypes = {
	html: PropTypes.string.isRequired,
}

Array.from(document.getElementsByClassName('tabs')).forEach(el => {
	render(<Tabs html={el.innerHTML} />, el)
})