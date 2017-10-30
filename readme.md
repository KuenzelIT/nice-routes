Nice Routes for Laravel 5
====

Get a nice overview of your Laravel routes. 

Based on [pretty-routes](https://github.com/garygreen/pretty-routes) made by @garygreen.

![Pretty Routes](https://raw.githubusercontent.com/garygreen/pretty-routes/master/screenshot.png)

# Installation

```bash
composer require kuenzelit/nice-routes
```

Add to your `config/app.php` providers array (not neccessary > Laravel 5.5):

```php
PrettyRoutes\ServiceProvider::class,
```

By default the package exposes a `/routes` url. If you wish to configure this, publish the config.

```bash
php artisan vendor:publish --provider="KuenzelIT\NiceRoutes\NiceRoutesServiceProvider"
```