# Coding Task
This repository consists of demonstration for the fulfillment of tasks pre stated as per https://gist.github.com/geshan/cf09078365d3e17a4542

# Prerequisites

1. [Git](https://git-scm.com/)
2. [Composer](https://getcomposer.org/)
3. [npm](https://www.npmjs.com/)
4. Apache, Mysql and Php
   <h2>Linux</h2><br>
   [LAMP](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu)
   <h2>Mac</h2><br>
   [MAMP](https://www.mamp.info/en/)
   <h2>Windows</h2>
   [WAMP](http://www.wampserver.com/en/)
   [XAMP](https://www.apachefriends.org/index.html)
5. <h2>PHP Extension</h2>
   PHP >= 5.5.9<br>
   OpenSSL PHP Extension<br>
   PDO PHP Extension<br>
   Mbstring PHP Extension<br>
   Tokenizer PHP Extension<br>

# Composer Packages

1. [laravelcollective/html](https://laravelcollective.com/docs/5.2/html)<br>
    This packages provides access to Html and Form facades for ease of handling forms and html elements.<br>
2. [laracasts/flash](https://github.com/laracasts/flash)<br>
    This packages provides access to Flash facades for ease of handling flash messages.<br>

# Installation

1. Clone the repository using : <h2>$ git clone {Repository_url}</h2>
2. Create a copy of .env.example and save as .env in the root folder.
3. Create a database and adjust settings in the .env file.
4. Migrate tables using : <h2>$ php artisan migrate</h2>
5. Install node dependencies using : <h2>$ npm install</h2>
6. Update composer dependencies using : <h2>$ composer update</h2>
7. Edit .env for logentries : <h2>LOGENTRIES_TOKEN={your_logentires_key}</h2>
   [Register to logentries.com](https://logentries.com/)
8. Address permission issues if any using :
   <h2>$ sudo chgrp -R www-data storage bootstrap/cache</h2><br>
   <h2>$ sudo chmod -R ug+rwx storage bootstrap/cache</h2><br>
   https://logentries.com/
9. Generate key using : <h2>$ php artisan key:generate</h2>
10. Process scss files : <h2>$ gulp</h2>
11. Run tests in debug mode using : <h2>$ phpunit --debug</h2>

# Usage

1. Run : <h2>$ php artisan serve</h2><br>
   You can now browse to http://localhost:8000 directly in your browser

   ### Alternatively

   Run with browserSync : <h2>$ gulp watch</h2>

2. Register with a valid email address.
3. Add personnel records using '+' sign beside the Personnel header.