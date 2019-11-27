# Build the image
build:
	docker build -t php-apache-ip:v1 .

# Run the php script with apache
run:
	docker run -d --rm -p 8080:80 --name tanishka-php php-apache-ip:v1

# Stop the container
stop:
	docker stop tanishka-php
