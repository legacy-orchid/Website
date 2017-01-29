---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Some Markdown
---
@verbatim
#Installation 
----------

Orchid based off [Laravel Framework](http://laravel.com), so before you put the Orchid, you must install [Laravel](http://laravel.com).


### Via Composer

Add the project according
```php
"require": {
    "orchid/platform": "dev-master"
}
```

###  Provider and Facades


Add the following elements in the configuration file `config/app`
```php
Orchid\Settings\Providers\SettingsServiceProvider::class,
Orchid\Foundation\Providers\FoundationServiceProvider::class,
Orchid\Widget\Providers\WidgetServiceProvider::class,
Orchid\Installer\Providers\InstallerServiceProvider::class,
Orchid\Alert\AlertServiceProvider::class,
```

```php
'Alert' =>  Orchid\Foundation\Facades\Alert::class,
'Dashboard' =>  Orchid\Foundation\Facades\Dashboard::class,
'Setting' =>  Orchid\Foundation\Facades\Setting::class,
'Active' => Watson\Active\Facades\Active::class,
```


### Config

Change the following entry in the configuration file`config/auth.php`

```php
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => Orchid\Dashboard\Models\User::class,
        ],
```

or inherit model App\User

```php
<?php

namespace App;

use Orchid\Foundation\Core\Models\User as UserOrchid;

class User extends UserOrchid
{

}

```


### Publish

To publish a package in your application, use the command
```php
php artisan vendor:publish
php artisan migrate
```


### Creating administrator


To create a user with the maximum (at time of writing) rights
run the following command:


```php
php artisan make:admin nickname email@email.com secretpassword
```

> **Note:** Remember that the next update will not change the data.
@endverbatim