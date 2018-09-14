#!/bin/bash

# Create some empty directories, otherwise composer complains on dependency install
cd /srv/sites/touri
mkdir -p database/seeds
mkdir -p storage/app/public
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/testing
mkdir -p storage/framework/views