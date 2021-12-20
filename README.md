# UI Frontend to PX-DEPLOY
This is a very basic frontend to PX-Deploy, it uses html and php to call the px-deploy CLI to do the following
 - Deploy Clusters
 - List Clusters
 - Get the Status of Clusters
 - Delete Clusters
 
# Getting Started

 - Install this application on the same server/host your px-deploy installation is on. Clone this repo and copy the html and php files into /var/www/html
 - Install php ver 7 ( depending on which version of Linux you are running the installation might vary slightly )
 - Make sure apache is configured with PHP
 - To test apache is working with PHP copy this file to your document root called test.php
```
<?php
phpinfo();
?>
```
 - Connect to the URL http://10.x.x.x/test.php

Once you have PHP working with Apache, just point your browser to the URL http://10.x.x.x
