const $footer = document.getElementById('footer')

if ($footer) $footer.addEventListener('click', e => {
	if (e.target.className === 'exit')
		$footer.classList.toggle('close')
})