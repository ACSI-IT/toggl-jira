FROM php:7.3.11-alpine
WORKDIR /usr/src/toggl-jira

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	&& php composer-setup.php --install-dir=/usr/bin --filename=composer \
	&& php -r "unlink('composer-setup.php');"
