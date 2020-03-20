

# Install

```
composer create-project --prefer-dist laravel/laravel seraplanning
```

## After Install

```
composer require laravel\ui
php artisan ui vue
php artisan ui vue --auth
npm install
npm run dev
```

## Airlock Install

```
composer require laravel/airlock
php artisan vendor:publish --provider="Laravel\Airlock\AirlockServiceProvider"
php artisan migrate
```

- In app/Http/Kernel.php

```
use Laravel\Airlock\Http\Middleware\EnsureFrontendRequestsAreStateful;
```

and 

```
'api' => [
    EnsureFrontendRequestsAreStateful::class,
    'throttle:60,1',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],
```

# Usefull commands

Internal server
```
php artisan serve
```

Compile assets - Once
```
npm run dev
```

Compile assets - watch 
```
npm run watch
```

Make migration
```
php artisan make:migration create_users_table --create=users
php artisan make:migration add_votes_to_users_table --table=users
```

Migrate
```
php artisan migrate
```

```
php artisan db:seed --class=ClientsTableSeeder
```

# References

- Mix config : webpack.mix.js
- [More](https://laravel.com/docs/6.x/mix)

