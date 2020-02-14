# Installation

```
symfony new MonApp
```

**ou**

```
composer create-project symfony/website-skeleton MonApp
```

# Server interne Symfony

```
cd /racine/projet
symfony server:start
```

# Entity

php bin/console make:entity

# Controller

php bin/console make:controller

# Doctrine

php bin/console doctrine:migration:diff
php bin/console doctrine:migration:migrate

# Associations 

Tutorial : https://symfony.com/doc/current/doctrine/associations.html