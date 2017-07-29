---
view::extends: _includes.en.docs_post_base
view::yields: post_body
pageTitle: Installation
---
@verbatim

#Installation
----------

Orchid based off [Laravel Framework](http://laravel.com), so before you put the Orchid, you must install [`Laravel`](http://laravel.com).

You can see the installation on [`YouTube`](https://youtu.be/e9B5eVw7yss)

#### Via Composer

Going your project directory on shell and run this command: 
```php
$ composer require orchid/platform
```

####  Provider and Facades

Add to `config/app.php`:

Service provider to the 'providers' array:
```php
'providers' => [
  // Laravel Framework Service Providers...
  //...

  // Package Service Providers
  Orchid\Providers\FoundationServiceProvider::class,

  // ...

  // Application Service Providers
  // ...
];
```

Facades aliases to the 'aliases' array:
```php
'aliases' => [
  // ...
  'Dashboard' =>  Orchid\Facades\Dashboard::class,
  'Alert' =>  Orchid\Alert\Facades\Alert::class,
  'Setting' =>  Orchid\Setting\Facades\Setting::class,
  'Active' => Watson\Active\Facades\Active::class,
  'Image' => Intervention\Image\Facades\Image::class,
];
```


#### User

Inherit your model App\User

```php
namespace App;

use Orchid\Core\Models\User as UserOrchid;

class User extends UserOrchid
{

}

```

#### Finish


> **Go to url:**  localhost:8000/dashboard

The graphical installation does not work if the server is started using the `artisan serve` command, if you want to use a local server, please go to the public directory and run
```php
php -S localhost:8000
```


@endverbatim
