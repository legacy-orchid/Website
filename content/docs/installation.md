---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Some Markdown
---
@verbatim
#Installation 
----------

Orchid основан на [Laravel Framework](http://laravel.com), по этому сначала необходимо [установаить его](http://laravel.com).


### Composer

Добавьте в композер следующий пакет
```php
"require": {
    "orchid/platform": "dev-master"
}
```

###  Provider and Facades

Добавьте следующие строчки в конфигурационный файл `config/app`

```php
Orchid\Foundation\Providers\FoundationServiceProvider::class,
```

```php
'Alert' =>  Orchid\Foundation\Facades\Alert::class,
'Dashboard' =>  Orchid\Foundation\Facades\Dashboard::class,
'Setting' =>  Orchid\Foundation\Facades\Setting::class,
'Active' => Watson\Active\Facades\Active::class,
```


### Config

Измените следующую запись в файле конфигурации `config/auth.php`

```php
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => Orchid\Dashboard\Models\User::class,
        ],
```

или унаследуйте модель App\User

```php
<?php

namespace App;

use Orchid\Foundation\Core\Models\User as UserOrchid;

class User extends UserOrchid
{

}

```


### Publish

Для того, чтобы опубликовать пакет в вашем приложении, используйте команду
```php
php artisan vendor:publish
php artisan migrate
```


### Creating administrator


Для создания пользователя с максимальными (На момент создания) правами необходимо выполнить следующую команду:


```php
php artisan make:admin nickname email@email.com secretpassword
```

> **Примечание:**  Помните, что следующие обновление не изменяет данные.
@endverbatim



### Production

На самом деле пакет имеет графический установщик который помогает установить приложение, для его активации просто перейдите адресу сайта
