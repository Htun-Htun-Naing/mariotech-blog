#!/bin/bash
cd /var/www/html

composer install -d /var/www/html
npm run dev
cp /var/www/html/.env.example /var/www/html/.env
php81 /var/www/html/artisan key:generate
php81 /var/www/html/artisan migrate
php81 /var/www/html/artisan storage:link

# Clear any previous cached views
php81 /var/www/html/artisan config:clear
php81 /var/www/html/artisan cache:clear
php81 /var/www/html/artisan view:clear

# Optimize the application
php81 /var/www/html/artisan config:cache
php81 /var/www/html/artisan optimize
#php /var/www/html/artisan route:cache


