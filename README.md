Setup instructions

Composer and node (npm) need to be installed on your machine.

First, position to the project's root folder.

Copy the .env.example to .env.

Afterwards, run the following commands:

`php artisan key:generate`<br>
`php artisan migrate:fresh --seed`<br>
`composer install`<br>
`npm install && npm run dev`<br>

For API insert through Postman, add `Accept: application/json` to headers, and send the data in the following format,<br>
with `x-www-form-urlencoded` body: 

`name: 'Test form'`<br>
`fields['A title'][value]: 123`<br/>
`fields['A title'][type]: 2`<br/>
