export default (src, cb) => {
	const $img = document.createElement('img')
	$img.src = src

	$img.onload = function onLoad() {
		let colorSum = 0
		const
			$canvas = document.createElement('canvas'),
			ctx = $canvas.getContext('2d')

		$canvas.width = this.width
		$canvas.height = this.height

		ctx.drawImage(this, 0, 0)
		const data = ctx.getImageData(0, 0, this.width, this.height).data

		for (let i = 0; i < data.length; i += 4) {
			const
				r = data[i],
				g = data[i + 1],
				b = data[i + 2]

			colorSum += Math.floor((r + g + b) / 3)
		}

		const brightness = Math.floor(colorSum / (this.width * this.height))
		cb(brightness)
	}
}