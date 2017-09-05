#!/bin/bash

if [ -d wordpress ]
then
    echo "[OK ] Wordpress dir exists"
else
    sudo mkdir wordpress && sudo chown www-data:www-data wordpress
    echo "[OK ] Wordpress dir created!"
fi

if [ -d wp-content ]
then
    echo "[OK ] wp-content dir exists"
else
    sudo mkdir -p wp-content/themes/starkwp && sudo chown -R www-data:www-data wp-content
    echo "[OK ] wp-content dir created!"
fi

echo "###Stopping current containers if running###"
docker-compose stop
sleep 5

echo "###Starting containers###"
docker-compose up -d
sleep 5

echo "###Listing mounted volumes###"
docker inspect --format='{{json .Mounts}}' $(docker ps -aqf "name=wordpress") | python -m json.tool

