# apache-php-mysql
Docker compose for Apache - PHP - MySQL


Before you start, make .env file, with folowing enviromental variables (and change it as you wish).
```
# Environment
DOMAIN=localhost

PROJECT_NAME="My Project"
DESCRIPTION="My Project Description"
STACK_NAME=my-project
PROJECT_VERSION=0.1.0

# PHP
PHP_CONTAINER_NAME=website
PHP_PORT=80

# MySQL
MYSQL_CONTAINER_NAME=mysql
MYSQL_PORT=3306
MYSQL_ROOT_PASSWORD=root_password
MYSQL_DATABASE=your_database
MYSQL_USER=your_user
MYSQL_PASSWORD=your_password

# PHPMyAdmin
PHPMYADMIN_CONTAINER_NAME=phpmyadmin
PHPMYADMIN_PORT=3000
```


Run
```
docker compose -f compose.yml up -d --build
```

Or in Watch mode:
```
docker compose up --watch  --force-recreate
```

To shutdown run command:
```
docker compose -f compose.yml down
```
