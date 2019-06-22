# Tasks-Book
The **Tasks Book** is realized on Laravel 5.8 and MySQL.

#Introduction
This is a simple tasks book for adding tasks, viewing the entire list of tasks, editing a task (for Admin). The project includes sorting by name, sorting by e-mail, filtering by status. Also implemented a preview of the task when adding a new task.

# Official Documentation

Documentation for the framework can be found on the [Laravel documentation](https://laravel.com/docs/5.8)

# How to use:
###### For appropriate work of the program you need:

 Create an empty Database 
`CREATE DATABASE yourdatabasename`

Generate .env file `cp env.example .env`

Fill .env file:

`APP_KEY=`

for key generation `php artisan key:generate`

`DB_DATABASE=yourdatabasename`

 `DB_USERNAME=yourusername`
 
 `DB_PASSWORD=yourpassword`
 
 Run the commands `composer install` and `npm install` to download the necessary packages for The Tasks Book to work correctly.
 
 Run the command `php artisan migrate` to complete the database with tables. And also execute the command `php artisan db:seed` to autocomplete the database with data about users, roles, statuses and tasks.
 
 Run the command `php artisan storage:link` to create a symbolic link between the public and storage directories to display the images correctly.
 
 If the scripts and / or styles are not loaded, run the command `npm run dev`
 
 Use the command `php artisan serve` to start The Tasks Book on the local host.
 
#### To use application the database is seeding with users:
 
 Administrator:
 **email:** admin@admin.com, 
 **password:** = 123
 
 User: 
 **email:** user@user.com, 
 **password:** qwerty
 
