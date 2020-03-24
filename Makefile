init:
	mkdir -p data
	make docker-start
	make composer-install

composer-up:
	@docker-compose exec -T php composer update

composer-install:
	@docker-compose exec -T php composer install

docker-start:
	@docker-compose up -d --build

docker-stop:
	@docker-compose down -v