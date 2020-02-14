# Install

`composer create-project --prefer-dist laravel/lumen myName`

# Bootstrap 

 - Uncomment `$app->withFacades();` and `$app->withEloquent();` in `bootstrap/app.php`
 - Edit the .env file

# Create 'Clients'

 - `php artisan make:migration create_clients_table` 
 - Go to the generated `database/migration/...` file and edit the fields
 - `php artisan migrate`
 - Create the model, `App/Client.php`
 - In `routes/web.php` add the groupe and routes
 - Create the `ClientController.php` in `app/Http/Controllers`