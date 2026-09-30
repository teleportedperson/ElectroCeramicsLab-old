FROM php:8.3-apache

COPY . /var/www/html/

ENV PORT=8080

# Cloud Run sets PORT at runtime. Apache in this image listens on 80.
CMD sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf \
  && sed -i "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf \
  && apache2-foreground
