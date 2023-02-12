Setup instructions

Composer and node (npm) need to be installed on your machine.

First, position to the project's root folder.

Copy the .env.example to .env.

Afterwards, run the following commands:

php artisan key:generate
php artisan migrate:fresh --seed
composer install
npm install && npm run dev
