# Coding Task
This repository consists of demonstration for the fulfillment of tasks pre stated as per https://gist.github.com/geshan/cf09078365d3e17a4542

# Prerequisites

1. [Git](https://git-scm.com/)
2. [Composer](https://getcomposer.org/)
3. [npm](https://www.npmjs.com/)
4. Apache, Mysql and Php
   ## Linux
   [LAMP](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu
   ## Mac
   [MAMP](https://www.mamp.info/en/)
   ## Windows
   [WAMP](http://www.wampserver.com/en/)
   [XAMP](https://www.apachefriends.org/index.html)
5. PHP >= 5.5.9
   OpenSSL PHP Extension
   PDO PHP Extension
   Mbstring PHP Extension
   Tokenizer PHP Extension
   
# Installation

1. Clone the repository using : ##$ git clone {Repository_url}
2. Create a copy of .env.example and save as .env in the root folder.
3. Create a database and adjust settings in the .env file.
4. Migrate tables using : ## $ php artisan migrate
5. Install node dependencies using : ## $ npm install
6. Update composer dependencies using : ## $ composer update
7. Edit .env for logentries : ## LOGENTRIES_TOKEN={your_logentires_key}
   [Register to logentries.com](https://logentries.com/)
8. Address permission issues if any using :
   ## $ sudo chgrp -R www-data storage bootstrap/cache
   ## $ sudo chmod -R ug+rwx storage bootstrap/cache
   https://logentries.com/
9. Generate key using : ## $ php artisan key:generate
10. Process scss files : ## $ gulp
11. Run tests in debug mode using : ## $ phpunit --debug

# Usage

1. Run : ## $ php artisan serve
   You can now browse to http://localhost:8000 directly in your browser

   ### Alternatively

   Run with browserSync : ## $ gulp watch

2. Register with a valid email address.
3. Add personnel records using + sign beside the Personnel header.