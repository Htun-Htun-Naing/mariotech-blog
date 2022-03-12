#!/bin/bash

# Enter html directory
cd /home/bitnami/htdocs


# Install dependencies
export COMPOSER_ALLOW_SUPERUSER=1
composer install -d /home/bitnami/htdocs
npm install && npm run dev

# Copy configuration from /var/www/.env, see README.MD for more information
# cp /var/www/.env /var/www/html/.env

# Migrate all tables
php /home/bitnami/htdocs/artisan key:generate

php /home/bitnami/htdocs/artisan migrate
php /home/bitnami/htdocs/artisan storage:link

# Clear any previous cached views
php /home/bitnami/htdocs/artisan config:clear
php /home/bitnami/htdocs/artisan cache:clear
php /home/bitnami/htdocs/artisan view:clear

# Optimize the application
php /home/bitnami/htdocs/artisan config:cache
php /home/bitnami/htdocs/artisan optimize
#php /var/www/html/artisan route:cache

# # Change rights
# chmod 777 -R /home/bitnami/htdocs/bootstrap/cache
# chmod 777 -R /home/bitnami/htdocs/storage
# chmod 777 -R /home/bitnami/htdocs/public/files/

# Bring up application
php /home/bitnami/htdocs/artisan up
