# To Know

**Wordpress asking ftp credentials when installing an extension ?**
- Edit 'wp-config.php' by adding `define('FS_METHOD','direct');`
- run `sudo chmod 777 /wp-content/plugins/`