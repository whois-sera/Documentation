# docker-compose Laravel

This is a docker-compose driven SonarQube Dockerization.
It include the following services :

- Sonarqube
- Postgres

## Usage

- Build : `docker-compose build` 
- Run : `docker-compose up`
- Connect to the app (localhost:9900) whit credentials : admin - admin
- Create a clean user then remove admin
- Install languages extensions

## Ports Binding and volumes

- Ports (host:container):
  - **Postgres** : *5432 : 5432*
  - **Sonarcube** : *9900 : 9000*
- Volumes (host - container):
  - postgres
    - **postgres** - */var/lib/postgresql/data* - (No local folder)
  - Sonarcube
    - **./docker/sonarconf** - */opt/sonarqube/conf*
    - **./docker/sonardata** - */opt/sonarqube/data*
    - **./docker/sonarlogs** - */opt/sonarqube/logs*
    - **./docker/sonarext** - */opt/sonarqube/extensions*


