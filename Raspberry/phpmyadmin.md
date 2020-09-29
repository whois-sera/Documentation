# Installation

```
wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz
sudo mkdir /var/www/phpMyAdmin
sudo tar xvf phpMyAdmin-latest-all-languages.tar.gz --strip-components=1 -C /var/www/phpMyAdmin
sudo cp /var/www/phpmyadmin/config.sample.inc.php /var/www/phpmyadmin/config.inc.php
sudo nano /var/www/phpmyadmin/config.inc.php
```
- Find this line : `$cfg['blowfish_secret'] = '';` and type a solid passphrase

```
sudo chmod 660 /var/www/phpmyadmin/config.inc.php
sudo chown –R www-data:www-data /var/www/phpmyadmin
```

- Create the virtualhost and reload apache