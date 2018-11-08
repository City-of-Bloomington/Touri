#!/bin/bash

cd /srv/sites/touri
a2dissite 000-default
a2ensite touri.conf
a2enmod rewrite
composer install
npm install

chmod -R 777 bootstrap/cache storage
