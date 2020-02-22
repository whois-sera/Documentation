# Installation

```
sudo apt install mariadb-server OU mysql-server
service mysql start
mysql_secure_installation
service mysql restart
```

# Root Login

```
sudo mysql -u root
```

# Creation Base

```
CREATE DATABASE mabase
```

# Ajout User

```
CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
```

# GRANT

## Tous les droits
```
GRANT ALL PRIVILEGES ON * . * TO 'username'@'localhost';
flush privileges;
```

## Une Base
```
GRANT ALL PRIVILEGES ON mabase.* TO 'username'@'localhost';
flush privileges;
```