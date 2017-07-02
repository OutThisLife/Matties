const
	ftpd = require('ftp-deploy'),
	deploy = new ftpd(),

	config = {
		username: 'example',
		password: '-_-_-_-_-_-',
		host: 'example.com',
		port: 21,
		localRoot: __dirname,
		remoteRoot: '/public_html/dev/',
		exclude: ['node_modules/*', 'vendor/*', '.git', 'yarn.lock'],
	}

deploy.on('uploading', data => console.log(data.filename, data.percentComplete))

deploy.deploy(config, err => {
	if (err) console.log(err)
	else console.log('Finished!')
})