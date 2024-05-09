#author: René Češka <xceska06@stud.fit.vutbr.cz>
FROM drupal:10-apache
#install dependencies
RUN apt update && apt install -y --no-install-recommends \
        libmemcached-dev \
        zlib1g-dev \
        libssl-dev \
        vim
#install memcached php extension
RUN yes '' | pecl install -f memcached-3.2.0 \
  && docker-php-ext-enable memcached
#install simplesamlphp
COPY ./simplesamlphp /var/simplesamlphp
COPY ./sites-enabled /etc/apache2/sites-enabled

#create cache directory
RUN mkdir -p /var/cache/simplesamlphp/core
#make permissions
RUN chown -R www-data /var/simplesamlphp
RUN chown -R www-data /var/cache/simplesamlphp

#run apache2
CMD ["apache2-foreground"]
