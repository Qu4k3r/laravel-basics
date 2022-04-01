up:
	@docker-compose -f docker/docker-compose.yml up

shell:
	@docker-compose -f docker/docker-compose.yml exec app sh

init:
	@docker-compose -f docker/docker-compose.yml exec -T app composer init

install:
	@docker-compose -f docker/docker-compose.yml exec -T app composer require "$(filter-out $@, $(MAKECMDGOALS))"

update:
	@docker-compose -f docker/docker-compose.yml exec -T app composer update

install-dev:
	@docker-compose -f docker/docker-compose.yml exec -T app composer require "$(filter-out $@, $(MAKECMDGOALS))" --dev
