FROM nginx:1.10

#ADD  nginx.conf      /etc/nginx/nginx.conf
RUN rm -f /etc/nginx/conf.d/*
COPY  ./nginx.conf      /etc/nginx
#ADD sites-enabled/*    /etc/nginx/conf.d/

#EXPOSE 80

#WORKDIR /var/www

