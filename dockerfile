FROM php:8.2-cli
COPY . /usr
WORKDIR /usr
CMD [ "php", "-S", "0.0.0.0:8000", "-t", "." ]
