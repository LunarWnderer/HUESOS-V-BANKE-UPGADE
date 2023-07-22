FROM php:7.4-apache
COPY . /var/www/html/
ENV PYTHON_BACKEND_URL=http://python_backend.local/
