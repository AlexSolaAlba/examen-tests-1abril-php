
.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t examentests1abril .

build-container:
	docker run -dt --name examentests1abril -v .:/540/ExamenTests1Abril examentests1abril
	docker exec examentests1abril composer install

start:
	docker start examentests1abril

test: start
	docker exec examentests1abril ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it examentests1abril /bin/bash

stop:
	docker stop examentests1abril

clean: stop
	docker rm examentests1abril
	rm -rf vendor
