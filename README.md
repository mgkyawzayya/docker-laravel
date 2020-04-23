# Laravel, Nginx, and MySQL with Docker Compose

    $ git clone https://github.com/mgkyawzayya/docker-laravel.git docker-app
    $ docker run --rm -v $(pwd):/app composer install
    $ cp .env.example .env

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=your_laravel_db_password
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

    		mysql> GRANT ALL ON laravel.* TO 'laraveluser'@'%'IDENTIFIED BY 'your_laravel_db_password';

    		mysql> FLUSH PRIVILEGES;

    		mysql> EXIT;

    	# exit

    $ docker-compose exec app php artisan migrate

    $ docker-compose exec app php artisan tinker
