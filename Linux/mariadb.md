# Mariadb

## install

- `sudo apt install mariadb-server`
  

## Services

- `service --status-all`
- `sudo service mysql restart|start|stop`
- `sudo systemctl mysql enable`


## change root password

```
sudo service mysql stop
sudo mysqld_safe --skip-grant-tables --skip-networking &
mysql -u root
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'new_password';
exit
sudo kill `/var/run/mariadb/mariadb.pid`
sudo service mysql start
mysql -u root -p
```

## Create user
```
mysql -u root -p
CREATE USER 'name'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES on *.* TO 'name'@'%' IDENTIFIED by "password";
```

## Enable acces from outside localhost

- `sudo nano /etc/mysql/mariadb.conf.d/50-server.cnf`
- Change 'bind-adress=127.0.0.1' to 'bind-adress=0.0.0.0'

## Create User + Database
```
mysql -u root -p
CREATE DATABASE mybase;
CREATE USER 'mybase'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON mybase.* TO mybase@'%' IDENTIFIED by "password";
exit
```
