# Mini E-Commerce Platform

A simple Laravel-based mini e-commerce web application that allows users to manage products, categories, and orders.

## Features

- **User Creation**: Basic user records are created and managed through the system.
- **Product Management**: Add, view, and organize products with essential details such as name, price, and category.
- **Category Management**: Define categories to group products for easier browsing and management.
- **Order System**: Create and view orders, including basic status tracking and total calculation.

## Tech Stack

- **Backend**: Laravel (PHP framework)
- **Database**: MySQL
- **Frontend**: Blade templating with basic HTML/CSS

## Usage

Clone the repository, run migrations, and use Laravel's artisan server to run the project locally.

```bash
$ git clone https://github.com/DimaShamoev/Laravel-mini-ecommerce
$ cd <project-directory>
$ composer install
$ php artisan migrate
$ php artisan serve
```