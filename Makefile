up:
	docker-compose up -d

down:
	docker-compose down

composer-update:
	docker exec myapp-php composer -d/app update

