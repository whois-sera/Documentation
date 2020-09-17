# docker-compose Laravel

This is a docker-compose driven Laraver Dockerization.
It include the following services :

- Webesrver
  - nginx
  - php 
  - mysql
  - phpmyadmin
- Tools
  - composer
  - npm
  - artisan

## Usage

*Artisan container does not build if the Laravel application is not present in src folder*

- Build : `docker-compose build` 
- Start : `docker-compose up`
- Use Composer commands : `docker-compose run --rm composer myCmd`
- Use npm commands : `docker-compose run --rm npm myCmd`
- Use artisan commands : `docker-compose run --rm artisan myCmd`

## Ports Binding and volumes

- Ports (host:container):
  - **nginx** - *8080:80*
  - **mysql** - *3306:3306*
  - **php** - *9000:9000*
  - **phpmyadmin** - *8800:80*
- Volumes (host - container):
  - nginx, php, artisan, npm, composer : 
    - **./src** - */var/www/html*
  - mysql :
    - **./docker/mysql** - */var/lib/mysql*
