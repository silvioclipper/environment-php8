#!/bin/sh

apt-get update -y
apt install docker-php-ext-install mysqli zip unzip -y && docker-php-ext-enable mysqli 

php -r "copy('http://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer
composer require --dev phpunit/phpunit ^9.5
# composer.phar dump-autoload --no-scripts --optimize
php -S  0.0.0.0:80 -t public