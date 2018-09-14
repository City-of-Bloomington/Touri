#!/bin/bash

apt-get -y install apache2 php composer nodejs
a2dissite 000-default
a2ensite touri.conf

cd /srv/sites/touri
composer install
node install
