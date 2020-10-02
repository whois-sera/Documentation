# Apache

## Install 

- `sudo apt install apache2`

## Services

- `service --status-all`
- `sudo service apache2 restart|start|stop `
- `sudo systemctl apache2 enable`

## Change php version for apache

- `sudo a2dismod php7.3`
- `sudo a2enmod php.7.4`

## SSL Activation

- `sudo a2enmod ssl`
- `sudo a2enmod headers`
- `sudo systemctl reload apache2`
- `apache2ctl -M | grep ssl`
- `sudo apt install certbot python-certbot-apache`
- Test auto renew `sudo certbot renew --dry-run`

## SSL Generation

- `sudo certbot certonly --apache`

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

## Reverse proxy SSL

- `sudo a2enmod proxy`
- `sudo a2enmod proxy_http`
- `sudo a2enmod proxy_ftp`
- `sudo a2enmod proxy_connect`
- `sudo a2enmod proxy_ajp`
- `sudo a2enmod proxy_wstunnel`
- `sudo a2enmod proxy_balancer`
- `sudo a2enmod deflate`

```
<VirtualHost *:80>
    ServerName example.com
    ServerAlias example.com
    ServerAdmin example@example.com
    # Redirection 301  vers le site en HTTPS
    Redirect permanent / https://example.com/
</VirtualHost>

<VirtualHost *:443>
    ServerName example.com
    ServerAlias www.example.com
    ServerAdmin example@example.com
 
    # directives obligatoires pour TLS
    SSLEngine on
	SSLCertificateFile    /etc/letsencrypt/live/example.com/fullchain.pem
	SSLCertificateKeyFile   /etc/letsencrypt/live/example.com/privkey.pem
 
	Header always set Strict-Transport-Security "max-age=15768000"
 
	ErrorLog ${APACHE_LOG_DIR}/error.example.com.log
    LogLevel warn
	CustomLog ${APACHE_LOG_DIR}/access.example.com.log combined
    
    ProxyRequests off
	SSLProxyEngine on
    SSLProxyCheckPeerCN Off
  	SSLProxyCheckPeerName Off
  	SSLProxyVerify none
    ProxyPreserveHost Off
    
    # L'app locale attend un acces https :
    ProxyPass / https://localhost:10000/
    ProxyPassReverse / https://localhost:10000/

    # L'app locale attend un acces http :
    # ProxyPass / http://localhost:10000/
    # ProxyPassReverse / http://localhost:10000/
</VirtualHost>
```

## Conf for code-server

```
<VirtualHost *:80>
    ServerName code.whois-sera.com
    ServerAlias code.whois-sera.com
    ServerAdmin whois.sera@gmail.com
    # Redirection 301  vers le site en HTTPS
    Redirect permanent / https://code.whois-sera.com/
</VirtualHost>

<VirtualHost *:443>
    ServerName code.whois-sera.com
    ServerAlias www.code.whois-sera.com
    ServerAdmin whois.sera@gmail.com
    
    RewriteEngine On
	RewriteCond %{HTTP:Upgrade} =websocket
	RewriteRule /(.*) ws://localhost:8080/$1 [P,QSA,L]
	RewriteCond %{HTTP:Upgrade} !=websocket
	RewriteRule /(.*) http://localhost:8080/$1 [P,QSA,L]
 
    # directives obligatoires pour TLS
    SSLEngine on
	SSLCertificateFile    /etc/letsencrypt/live/code.whois-sera.com/fullchain.pem
	SSLCertificateKeyFile   /etc/letsencrypt/live/code.whois-sera.com/privkey.pem
 
	Header always set Strict-Transport-Security "max-age=15768000"
 
	ErrorLog ${APACHE_LOG_DIR}/error.code.whois-sera.com.log
    LogLevel warn
	CustomLog ${APACHE_LOG_DIR}/access.code.whois-sera.com.log combined
    
    SSLProxyEngine on
    ProxyRequests off
    SSLProxyCheckPeerCN Off
  	SSLProxyCheckPeerName Off
  	SSLProxyVerify none
    ProxyPreserveHost Off
    
    ProxyPass / http://localhost:8080/
    ProxyPassReverse / http://localhost:8080/

</VirtualHost>
```