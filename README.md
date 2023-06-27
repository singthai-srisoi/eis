# EIS ERP System

## How to run?

> the main project we are using is **eis**, please merge, intergrate your project in the file

1. connect XAMPP
2. create database name: `db_eis1`
3. import `db_eis1.sql`
4. on `.env` change database connection to follow:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_eis1
DB_USERNAME=root
DB_PASSWORD=
```
5. direct to project file `cd eis`
6. run server `php artisan serve`