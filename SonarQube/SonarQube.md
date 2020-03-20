# Install

```
docker pull sonarqube
```

# Start

```
docker run -d --name sonarqube -p 9000:9000
```

Accessible at http://localhost:9000
Login: admin
Password: admin

# Scanneur

- [Download the scanner module](https://docs.sonarqube.org/latest/analysis/scan/sonarscanner/)
- Extract it to C:\sonnarqube (for exemple)
- Edit C:\sonnarqube\conf\sonar-scanner.properties :
  
```
#----- Default SonarQube server
#sonar.host.url=http://localhost:9000
```
- Add C:\sonnarqube\bin to Path

# Usage

- Create a 'sonar-project.properties' file at the root of the project to scann
- Edit it like this :

```
sonar-project.properties
# must be unique in a given SonarQube instance
sonar.projectKey=myproject

# --- optional properties ---

# defaults to project key
#sonar.projectName=My project
# defaults to 'not provided'
#sonar.projectVersion=1.0
 
# Path is relative to the sonar-project.properties file. Defaults to .
#sonar.sources=.
 
# Encoding of the source code. Default is default system encoding
#sonar.sourceEncoding=UTF-8
```

- Run ```sonar-scanner``` at the root of the project to scann
- In the end, go to sonarqube dashboard