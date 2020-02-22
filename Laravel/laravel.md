

# Install

```
composer create-project --prefer-dist laravel/laravel seraplanning
```

## After Install

```
composer require laravel\ui
php artisan ui vue --auth
npm install
npm run dev
```

# Serve 

```
php artisan serve
```

# Compile Assets

```
npm run dev
```
ou
```
npm run watch
```

- Mix config : webpack.mix.js
- [More](https://laravel.com/docs/6.x/mix)

# Create Database 

## Migrate

```
php artisan migrate
```

## Seed

```
php artisan db:seed --class=ClientsTableSeeder
```

**(Projects seeder launch with Clients seeder)**