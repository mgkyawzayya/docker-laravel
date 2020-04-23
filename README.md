# Laravel, Nginx, and MySQL with Docker Compose

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
