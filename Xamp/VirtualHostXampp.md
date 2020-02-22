# Set up a virtual host in Xampp

- Acivate "mod_log_config" in : xampp\apache\conf\httpd.conf

- Paste in xampp\apache\conf\extra\httpd-vhosts.conf :


```
<VirtualHost *:80>
  DocumentRoot "C:/xampp/htdocs/domain.ext"
  ServerName domain.ext
  ErrorLog "logs/domain.ext-error.log"
  CustomLog "logs/domain.ext-access.log" common
  <Directory "C:/xampp/htdocs/domain.ext">
    DirectoryIndex index.php
    AllowOverride All
    Order allow,deny
    Allow from all
  </Directory>
</VirtualHost>
```

Add this line in the host file :

`127.0.0.1       domain.ext`

- Restart windows and xampp services

# Sample : 

```
##<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host.example.com
    ##DocumentRoot "C:/xampp/htdocs/dummy-host.example.com"
    ##ServerName dummy-host.example.com
    ##ServerAlias www.dummy-host.example.com
    ##ErrorLog "logs/dummy-host.example.com-error.log"
    ##CustomLog "logs/dummy-host.example.com-access.log" common
##</VirtualHost>

##<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host2.example.com
    ##DocumentRoot "C:/xampp/htdocs/dummy-host2.example.com"
    ##ServerName dummy-host2.example.com
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" common
##</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/serapk.lo"
    ServerName serapk.lo
    ServerAlias www.serapk.lo
    ErrorLog "logs/serapk.lo-error.log"
    CustomLog "logs/serapk.lo-access.log" common
    <Directory "C:/xampp/htdocs/serapk.lo">
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
        ##Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/serawp.lo"
    ServerName serawp.lo
    ServerAlias www.serawp.lo
    ErrorLog "logs/serawp.lo-error.log"
    CustomLog "logs/serawp.lo-access.log" common
    <Directory "C:/xampp/htdocs/serawp.lo">
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
        ## Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:80>
  DocumentRoot "C:/xampp/htdocs/bumaine.lo/"
  ServerName bumaine.lo
  ServerAlias www.bumaine.lo
  ErrorLog "logs/bumaine.lo-error.log"
  CustomLog "logs/bumaine.lo-access.log" common
  <Directory "C:/xampp/htdocs/serabumaine.lo">
    DirectoryIndex index.php
    AllowOverride All
    Order allow,deny
    Allow from all
    ## Require all granted
  </Directory>
</VirtualHost>

<VirtualHost *:80>
  DocumentRoot "C:/xampp/htdocs/solo.lo/"
  ServerName solo.lo
  ServerAlias www.solo.lo
  ErrorLog "logs/solo.lo-error.log"
  CustomLog "logs/solo.lo-access.log" common
  <Directory "C:/xampp/htdocs/solo.lo">
    DirectoryIndex index.php
    AllowOverride All
    Order allow,deny
    Allow from all
    ## Require all granted
  </Directory>
</VirtualHost>

<VirtualHost *:80>
  DocumentRoot "C:/xampp/htdocs/seraanchor.lo/"
  ServerName seraanchor.lo
  ServerAlias www.seraanchor.lo
  ErrorLog "logs/seraanchor.lo-error.log"
  CustomLog "logs/seraanchor.lo-access.log" common
  <Directory "C:/xampp/htdocs/seraanchor.lo">
    DirectoryIndex index.php
    AllowOverride All
    Order allow,deny
    Allow from all
    ## Require all granted
  </Directory>
</VirtualHost>

<VirtualHost *:80>
  DocumentRoot "C:/xampp/htdocs/serapmb.lo/"
  ServerName serapmb.lo
  ServerAlias www.serapmb.lo
  ErrorLog "logs/serapmb.lo-error.log"
  CustomLog "logs/serapmb.lo-access.log" common
  <Directory "C:/xampp/htdocs/serapmb.lo">
    DirectoryIndex index.php
    AllowOverride All
    Order allow,deny
    Allow from all
    ## Require all granted
  </Directory>
</VirtualHost>
```