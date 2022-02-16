
## About 

Web Scraping With PHP. A Laravel REST API to fetch content of any website. We’ll be using spatie/crawler package which will provide us with a great features for writing crawlers without going absolutely crazy!

## Requirements
1. PHP verion 5.6 or newer
2. composer

### Setup

```bash 
# Clone the repo
git clone

cd laravel-web-scraping

# Copy .env.example to .env
cp .env.example .env

# Update/Install depencencies
composer update 

# Sets the APP_KEY value in . env file
php artisan key:generate

# First setup database connections in .env such as DB_DATABASE=laravel-web-scraping  DB_USERNAME= and DB_PASSWORD
# Run all migrations and seed database
php artisan migrate:fresh --seed

```
