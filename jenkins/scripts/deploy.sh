#!/usr/bin/env sh

set -x

docker run -d -p 80:80 --name my-apache-php-app -v /var/jenkins_home/3X03:/var/www/html php:7.2-apache
#sudo su root
#cd /var/jenkins_home/3X03 && sudo git pull
#sudo chmod +x jenkins/scripts/deploy.sh
#sudo chmod +x jenkins/scripts/kill.sh
#sudo cp -r /var/jenkins_home/3X03/* /var/www/html
#sudo service apache2 start

sleep 1

set +x

echo 'Now...'
echo 'Visit http://localhost to see your PHP application in action.'