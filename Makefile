.PHONY: compose-up
compose-up:
	 docker-compose up -d --build

.PHONY: composer-update
composer-update:
	 docker-compose run --rm composer update

.PHONY: migrate
migrate:
	 docker-compose run --rm artisan migrate --seed

.PHONY: audit
audit:
	 docker-compose run --rm artisan key:gen
	 docker-compose run --rm artisan storage:link