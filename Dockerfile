FROM php:7.4-apache
RUN a2enmod rewrite

RUN sed -ri -e "s!DirectoryIndex index.php index.html!DirectoryIndex index.md index.php index.html!g" -e "s!</FilesMatch>!</FilesMatch>\n\n<FilesMatch \\.md$>\n\tSetHandler text/html\n</FilesMatch>!g" "/etc/apache2/conf-available/docker-php.conf" \
 && sed -ri -e "s!</VirtualHost>!\n        <Directory /var/www/html>                \n                Options +Includes +FollowSymLinks -MultiViews\n                AllowOverride All\n        </Directory>\n\n        php_value include_path \"/var/www/html/_includes:.\"\n</VirtualHost>!g" "/etc/apache2/sites-available/000-default.conf"
