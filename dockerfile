FROM php:7.4-apache

WORKDIR /var/www/html
RUN chown www-data .
RUN chown :www-data .
RUN chmod o-w .
RUN chmod o-x .
RUN docker-php-ext-install mysqli 


COPY index.php .
COPY jenkinsidk.php .

EXPOSE 80
