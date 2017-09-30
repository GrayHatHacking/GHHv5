FROM nimmis/apache-php5

ENV DEBIAN_FRONTEND noninteractive

COPY docroot.tgz /tmp/
RUN rm -rf /var/www/html/* && cd /var/www/html && tar -zxvf /tmp/docroot.tgz


