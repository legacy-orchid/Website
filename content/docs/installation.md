---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Installation
---
@verbatim

#Installation
----------

Orchid based off [Laravel Framework](http://laravel.com), so before you put the Orchid, you must install [Laravel](http://laravel.com).


#### Via Composer

Add the project according
```php
"require": {
    "orchid/platform": "dev-master"
}
```

####  Provider and Facades


Add the following elements in the configuration file `config/app`
```php
Orchid\Providers\FoundationServiceProvider::class,
```

```php
'Alert' =>  Orchid\Facades\Alert::class,
'Dashboard' =>  Orchid\Facades\Dashboard::class,
'Setting' =>  Orchid\Facades\Setting::class,
'Active' => Watson\Active\Facades\Active::class,
'Image' => Intervention\Image\Facades\Image::class,
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