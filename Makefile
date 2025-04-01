.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t kata-php-boilerplate .

build-container:
	docker run -dt --name kata-php-boilerplate -v .:/540/Boilerplate kata-php-boilerplate
	docker exec kata-php-boilerplate composer install

start:
	docker start kata-php-boilerplate

test: start
	docker exec kata-php-boilerplate ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it kata-php-boilerplate /bin/bash

stop:
	docker stop kata-php-boilerplate

clean: stop
	docker rm kata-php-boilerplate
	rm -rf vendor
