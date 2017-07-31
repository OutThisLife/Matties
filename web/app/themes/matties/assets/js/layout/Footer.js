const $footer = document.getElementById('footer'),
	  $social = document.querySelector('.social-block > a')

if ($footer)
	$footer.addEventListener('click', e => {
		if (e.target.classList.contains('exit-footer'))
			$footer.classList.toggle('close')
	})

if ($social)
	$social.addEventListener('click', e => {
		e.target.offsetParent.classList.add('active')
	})