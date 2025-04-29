APP_NAME ?= test-app
DC ?= docker-compose

up:
	$(DC) up -d --build

stop:
	$(DC) stop

restart:
	$(DC) restart

down:
	$(DC) down -v --rmi local --remove-orphans

cli:
	$(DC) run --remove-orphans $(APP_NAME) sh

install:
	composer install -o
	bin/console lexik:jwt:generate-keypair --skip-if-exists
	bin/console assets:install
	bin/console cache:clear
	bin/console doctrine:migration:migrate -q
	bin/console doctrine:fixtures:load -q
