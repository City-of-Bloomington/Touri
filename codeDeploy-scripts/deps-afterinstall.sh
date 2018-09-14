#!/bin/bash

cd /srv/sites/touri
a2dissite 000-default
a2ensite touri.conf
composer install
node install
