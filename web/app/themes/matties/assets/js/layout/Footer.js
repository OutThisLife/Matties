const $footer = document.getElementById('footer')

if ($footer)
	$footer.addEventListener('click', e => {
		if (e.target.classList.contains('exit-footer'))
			$footer.classList.toggle('close')
	})
