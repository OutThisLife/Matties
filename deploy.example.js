const
	ftpd = require('ftp-deploy'),
	deploy = new ftpd(),

	config = {
		username: 'sample',
		password: '-_-_-_-_-_-',
		host: 'sample.com',
		port: 21,
		localRoot: __dirname,
		remoteRoot: '/public_html/dev/',
		exclude: [
			'.env',
			'node_modules/*',
			'.git',
			'yarn.lock',
			"deploy.js",
			"sftp-config.json",
			"web/app/themes/matties/node_modules/*",
		],
	}

deploy.on('uploading', data => console.log(data.filename, data.percentComplete))

deploy.deploy(config, err => {
	if (err) console.log(err)
	else console.log('Finished!')
})