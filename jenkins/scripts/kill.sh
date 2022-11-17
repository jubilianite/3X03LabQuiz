#!/usr/bin/env sh

set -x
docker kill my-apache-php-app
docker rm my-apache-php-app
#sudo service apache2 stop
#sudo rm -rf /var/www/html/*