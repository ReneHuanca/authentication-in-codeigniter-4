# CodeIgniter 4 Simple Authentication

## CodeIgniter

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.

This is the Codeigniter 4 course repository that you will soon find here [codeigniter coures](#). 

## Installation

Clone this repository and install the dependencies.

```bash
composer install
```

Run the migrations.

```bash
php spark migrate
```

Run the seeders.

```bash
php spark db:seed DatabaseSeeder
```

Run de application.

```bash
php spark serve
```

The credentials are:

Email: admin@gmail.com

Password: admin123

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
