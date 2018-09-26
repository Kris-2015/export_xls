## Project Setup
 1. Clone the project
 2. Do composer install for project setup
 3. Make an copy of .env.example and rename it to .env
 4. Provide your database name and mysql credential
 5. Do "php artisan migrate" to migrate the table structure in mysql
 6. Do "sudo chmod -R 777 storage/ bootstrap" for giving permission to bootstrap folder
  an storage folder
 7. Perform "php artisan db:seed" for uploading the dummy data in database
 8. After that do "php artisan server" to run the project in localhost