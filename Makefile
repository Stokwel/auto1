MAKEFLAGS += --silent

DOCKER_RUN = docker run --rm -i -v "$(CURDIR):/app" -w /app
PHP_CONTAINER = composer:2.2.7

APP = $(DOCKER_RUN) $(PHP_CONTAINER)

.PHONY: *

# Composer
composer-install:
	$(APP) composer install --prefer-dist --no-interaction

composer-require:
	$(APP) composer require $(package)

composer-update:
	$(APP) composer update $(package)

composer-remove:
	$(APP) composer remove $(package)


# Global
.DEFAULT_GOAL := composer-install
