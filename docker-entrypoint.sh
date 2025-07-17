#!/bin/sh
set -e

# Wait for MySQL to be ready
while ! mysqladmin ping -h"mysql" -P"3306" --silent; do
    echo "Waiting for MySQL..."
    sleep 2
done

# Set permissions
chown -R www-data:www-data /var/www/html/writable
chmod -R 775 /var/www/html/writable

# Run database migrations
php spark migrate

# Execute the main command
exec "$@"