#!/bin/sh

apt-get update -y
php -r "copy('http://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer   
php -S  0.0.0.0:80