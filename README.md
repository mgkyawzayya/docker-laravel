# Laravel, Nginx, and MySQL with Docker Compose

    $ git clone https://github.com/mgkyawzayya/docker-laravel.git docker-app

    $ cd docker-app

    $ docker run --rm -v $(pwd):/app composer install

    $ cp .env.example .env

### For .env Config

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=laravel
```

### Docker Compose Command

    $ docker-compose up -d

    $ docker ps

    $ docker-compose exec app php artisan key:generate

    $ docker-compose exec app php artisan config:cache

### Creating a User for MySQL

    $ docker-compose exec db bash

        # mysql -u root -p

    		mysql> show databases;

    		mysql> GRANT ALL ON laravel.* TO 'laraveluser'@'%'IDENTIFIED BY 'laravel';

    		mysql> FLUSH PRIVILEGES;

    		mysql> EXIT;

    	# exit

    $ docker-compose exec app php artisan migrate

    $ docker-compose exec app php artisan tinker
