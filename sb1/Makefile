include docker.mk

.PHONY: test

DRUPAL_VER ?= 9
PHP_VER ?= 8.1

test:
	cd ./tests/$(DRUPAL_VER) && PHP_VER=$(PHP_VER) ./run.sh

build_containers:
	sudo docker-compose up -d

bash_mariadb:
	sudo docker exec -it sb1_mariadb bash

bash_php:
	sudo docker exec -it sb1_php bash
