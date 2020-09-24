# Apache

## Install 

- `sudo apt install apache2`

## Services

- `service --status-all`
- `sudo service apache2 restart|start|stop `
- `sudo systemctl apache2 enable`

## SSL Activation

- `sudo a2enmod ssl`
- `sudo a2enmod headers`
- `sudo systemctl reload apache2`
- `apache2ctl -M | grep ssl`
- `sudo apt install certbot python-certbot-apache`

## SSL Generation

- `sudo certbot certonly --apache`

- Test auto renew `sudo certbot renew --dry-run`


## vhost

- Create domain.conf under '/etc/apache2/sites-available'

```
<VirtualHost *:80>
    ServerName example.com
    ServerAlias www.example.com
    ServerAdmin webmaster@example.com
    # Redirection 301  vers le site en HTTPS
    Redirect permanent / https://example.com/
</VirtualHost>

<VirtualHost *:443>
    ServerName example.com
    ServerAlias www.example.com
    ServerAdmin webmaster@example.com
    DocumentRoot /srv/web/example.com/www
	<Directory /srv/web/example.com/www>
		Options -Indexes +FollowSymLinks +MultiViews
		AllowOverride all
		Require all granted
	</Directory>
 
    # directives obligatoires pour TLS
    SSLEngine on
	SSLCertificateFile    /etc/letsencrypt/live/example.com/fullchain.pem
	SSLCertificateKeyFile   /etc/letsencrypt/live/example.com/privkey.pem
 
	Header always set Strict-Transport-Security "max-age=15768000"
 
	ErrorLog ${APACHE_LOG_DIR}/error.example.com.log
    LogLevel warn
	CustomLog ${APACHE_LOG_DIR}/access.example.com.log combined
</VirtualHost>
```

- `sudo a2ensite domain.conf`
- `sudo systemctl apache2 restart`