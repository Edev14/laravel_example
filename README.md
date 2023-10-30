# laravel_example

## Requirements

Make note of your php.ini file (located in your php install directory), you may have to adjust extensions to allow certain databases or dependencies.

- PHP installed
- Laravel installed
- Composser installed
- (Optional) SQL databases

## Installation

- Rename .env.EXAMPLE to .env, adjust to your desired database settings if need be.

- Incase any dependencies are missing:

```code
composer install
```

- To initiate SQLite database (default), and within the main directory:

```code
php artisan migrate
```

- Select yes

- To seed the database from the JSON file:

```code
php artisan db:seed --class=UsersSeeder
```

## Usage

Default port: 8000

```code
php artisan serve
```