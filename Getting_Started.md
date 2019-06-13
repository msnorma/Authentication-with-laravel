# Athentication-with-laravel
Multi-user authentication for admins, subadmins and users.

## Set up your vagrant box



##### Setting up Database for admins (super users) and for customers (users, the people interacting with the system)



*First step*
> run `php artisan make:migration create_admins_table`
> run `php artisan make:migration create_customers_table`


*Second step*
> navigate to your database folder and you will see your `admins` and `customers` schema, edit the file with the specific coloumn fields you would like for each table to have.

*when all of that is done run `php artisan migrate`*

##### Setting up your `Admin` and `Customer` Models

*First step*
> run `php artisan make:model Admin`
> run `php artisan make:model Customer`

> Extend both your classes to `Athenticatable` and add the following lines to your code **Admin** and **Customer** Models.
> rememmber to include `use Illuminate\Foundation\Auth\User as Authenticatable;` in your Models.
