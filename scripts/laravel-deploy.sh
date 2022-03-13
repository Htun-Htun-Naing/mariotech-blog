#!/bin/bash
# cd /var/www/html

# /usr/local/bin/composer install -d /var/www/html
# npm run dev
# # cp /var/www/html/.env.example /var/www/html/.env
# php81 /var/www/html/artisan key:generate
# php81 /var/www/html/artisan migrate
# php81 /var/www/html/artisan storage:link

# Clear any previous cached views
php /var/www/html/artisan config:clear
php /var/www/html/artisan cache:clear
php /var/www/html/artisan view:clear

# Optimize the application
php /var/www/html/artisan config:cache
php /var/www/html/artisan optimize
#php /var/www/html/artisan route:cache


