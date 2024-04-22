<img width="40%" alt='OrangeHRM' src='https://raw.githubusercontent.com/wiki/orangehrm/orangehrm/logos/logo.svg#gh-light-mode-only'/><img width="40%" alt='OrangeHRM' src='https://raw.githubusercontent.com/wiki/orangehrm/orangehrm/logos/logo_dark_mode.svg#gh-dark-mode-only'/>

# OrangeHRM Starter Application

OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures all the essential functionalities required for any enterprise. Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com/

OrangeHRM is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

## OrangeHRM Smartesting Demo

This version of orangeHRM is built for demonstration purpose. The aim of this version is to provide a sandbox environment, that could be launched locally via docker.

It embeddes [gravity-data-collector](https://github.com/Smartesting/gravity-data-collector) to collect data usefull for [Gravity](https://www.smartesting.com/gravity?utm_source=orangehrm-gravity-demo)

### OrangeHRM Smartesting Demo

1. Copy the file __docker/.env.dist__ to __docker/.env__
1. update /etc/hosts file with following line
 __Example:__
 ```bash
 127.0.0.1 php81
 ```

#### Install Composer
Composer
```bash
sudo php -r "copy('https://getcomposer.org/installer','composer-setup.php');"
```
```bash
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```
```bash
php -r "unlink('composer-setup.php');"
```
Test composer installation
```bash
composer
```
#### Load dependencies
```bash
cd src
composer install
composer dump-autoload --optimize --no-dev --classmap-authoritative
```
```bash
cd client
yarn install
cd ../../installer/client
yarn install
```
#### Build
```bash
cd src/client
yarn build
cd ../../installer/client
yarn build
cd ../../build
wget https://www.phing.info/get/phing-latest.phar
php phing-latest.phar dist
```
#### How to up/down containers 
Up all containers
```bash
cd docker
docker compose up -d
```

Down all container
```bash
docker compose down
```

Stop all container
```bash
docker compose stop
```

#### Open orangeHRM:
Open http://php81/index.php and enjoy...

#### Install
1. Choose "Fresh installation", then Next
1. Accept terms, then Next
1. Choose "New database", hostname="os_dev_mariadb112", port=3306, database name=orangehrm, choose you logins and passwords, then Next



#### Env information 

| PHP Version | Host         | Start command            |
|-------------|--------------|--------------------------|
| PHP 8.1     | http://php81 | `$ bash ./scripts/php81` |

### Config & Database

| DB            | Host        |User  | Password |
|---------------|-------------|---- | ------- |
| MariaDB 11.2  | mariadb112  |root  | root  |

## License 
GNU General Public License
