const
	ftpd = require('ftp-deploy'),
	deploy = new ftpd(),

	config = {
		username: 'domain',
		password: 'password',
		host: 'domain.com',
		port: 21,
		localRoot: __dirname,
		remoteRoot: '/public_html/dev/',
		exclude: ['node_modules/', 'vendor/', '.git', 'yarn.lock'],
	}

deploy.deploy(config, err => {
	if (err) throw err
	console.log('Finished!')
})

deploy.on('uploaded', data => console.log(data . "\n"))