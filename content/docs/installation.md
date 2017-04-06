---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: Installation
---
@verbatim

#Installation
----------

Orchid based off [Laravel Framework](http://laravel.com), so before you put the Orchid, you must install [Laravel](http://laravel.com).


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
  'Setting' =>  Orchid\Settings\Facades\Setting::class,
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


> **Go to :**  http://your-application/dashboard



##### Creating administrator

To create a user with the maximum rights (at the time of creation), execute the following command:

```php
php artisan make:admin nickname email@email.com secretpassword
```

@endverbatim
