# IT0049 TFA6 — From Arrays to Eloquent

Laravel example that replaces TFA5's static customer and user arrays with database migrations, sample seed data, Eloquent models, controllers, and Blade views.

## Requirements

- PHP 8.2 or later with the PDO SQLite extension (or configure MySQL)
- Composer

## Run locally

1. Open a terminal in this project folder.
2. Install dependencies: `composer install`
3. Create the local environment file: `cp .env.example .env`
4. Generate the application key: `php artisan key:generate`
5. Create an empty SQLite database file: `touch database/database.sqlite`
6. In `.env`, set `DB_CONNECTION=sqlite` and comment out or remove the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` MySQL settings.
7. Create and seed the tables: `php artisan migrate --seed`
8. Start the server: `php artisan serve`
9. Open `http://127.0.0.1:8000/customers` or `http://127.0.0.1:8000/users`.

To reset the local data and reseed: `php artisan migrate:fresh --seed`.

## MySQL alternative

Create a database, set `DB_CONNECTION=mysql` and the database credentials in `.env`, then run `php artisan migrate --seed`.

## What is included

- `customers` migration: `full_name`, unique `email`, and `phone`
- `users` migration: unique `username` and `full_name`
- `DatabaseSeeder`: five sample customers and five sample users
- `Customer` and `User` Eloquent models
- `CustomerController` and `UserController` using Eloquent `get()` queries
- Blade tables at `/customers` and `/users`

The `User` model intentionally extends Eloquent's base `Model`; this exercise's users table has no password or authentication fields.

## GitHub and hosting submission

Commit the whole project folder to your GitHub repository. For hosting, use a PHP host that supports Laravel and configure its document root to Laravel's `public` directory. Set the production database credentials, run migrations and seeders on the host, and submit both the repository URL and the working application URL. Do not upload `.env` or commit credentials.
