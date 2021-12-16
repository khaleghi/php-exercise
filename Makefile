up:
	docker-compose up -d

down:
	docker-compose down

clean:
	docker image rm -f php-exercise_php

composer-update:
	docker exec myapp-php composer -d/app update

