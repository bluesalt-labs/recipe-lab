FROM webdevops/php-nginx:7.3 AS base

# set the document root
ENV WEB_DOCUMENT_ROOT /var/www/html/public

# Accept Microsoft SQL Server Driver EULA
ENV ACCEPT_EULA=Y

# Install packages
RUN apt-get update \
    && apt-get install -y \
    sqlite3 \
    libsqlite3-dev \
#    supervisor \
    libpq-dev

RUN docker-php-ext-install pdo_pgsql

ADD . /var/www/html

# --------------------------------------------------
# Maybe one or some of these things????

#VOLUME /app

#FROM base as production

# Copy files
#COPY . /var/www/html

# set ownership
#RUN chown -R application:www-data /var/www/html

# set permissions
#RUN chmod g+rwx -R /var/www/html/storage
