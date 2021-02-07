#!/bin/bash

#Sincronizzo in db da produzione
#rm mariadb-init/backup.sql
#scp dhomeka@90.147.144.145:/home/dhwomeka/backup_migrate/400anni_ateneo/backup-2021-02-06T12-55-11.tar.gz mariadb-init/backup.mysql.gz

# docker exec colonizzazioni_db /usr/bin/mysqldump -u drupal --password=drupal drupal > /home/dhomeka/backup_colonizzazioninterne.sql



rsync -vrahe ssh dhomeka@90.147.144.145:/home/dhomeka/colonizzazioninterne/web/files/*  ~/docker/colonizzazioninterne/web/files


docker-compose down;
docker-compose -f docker-compose.yml -f docker-compose-dev.yml up -d;

sleep 60
docker exec -ti 400anni_ateneo_solr make create core=default -f /usr/local/bin/actions.mk

drush updb -y;
drush cim -y;

drush cr;
drush search-api-clear;
#drush search-api-index;
drush upwd admin admin