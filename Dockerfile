FROM wordpress:php7.1-apache
COPY . /back-end/dist:/var/www/html/wp-content/
