#! /usr/bin/env bash

sudo rm -rf /var/www/stevens.institute
sudo cp -R ./../stevens.institute /var/www/
sudo chown -R www-data:www-data /var/www/stevens.institute
sudo chmod -R 770 /var/www/stevens.institute
