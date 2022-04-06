include docker.mk

.PHONY: test

DRUPAL_VER ?= 9
PHP_VER ?= 8.1

test:
	cd ./tests/$(DRUPAL_VER) && PHP_VER=$(PHP_VER) ./run.sh

start:
	docker-compose up

stop:
	docker-compose stop

build_containers:
	docker-compose up -d

bash_mariadb:
	docker exec -it sb1_mariadb bash

bash_php:
	docker exec -it sb1_php bash
