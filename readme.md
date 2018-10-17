## Laravel Blog Example

A simple blog application to demonstrate how to authentication works on laravel.

## Pre Installation

1. Install XAMP, WAMP or MAMP
2. Create a database and name it ``blog``
3. Install composer follow this link https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

## Installation 


```
$ git clone git@github.com:johndavedecano/laravel-blog-example.git
$ cd laravel-blog-example
$ composer install
```

Open up your favorite text editor and edit .env.example and save it as .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```

After editing the .env file well go ahead and migrate and seed our database. Open up your terminal on your project root.

```
$ php artisan migrate
$ php artisan db:seed
$ php artisan key:generate
$ php artisan serve
```

Open your browser at [http://localhost:8000](http://localhost:8000).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
