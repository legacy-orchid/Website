---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Разграничение прав доступа
---
@verbatim
#Разграничение прав доступа
----------
Управление доступом на основе ролей — развитие политики избирательного управления доступом, 
при этом права доступа субъектов системы на объекты группируются с учётом специфики их применения, 
образуя роли.

Формирование ролей призвано определить чёткие и понятные для пользователей 
правила разграничения доступа. Ролевое разграничение доступа позволяет реализовать гибкие, 
изменяющиеся динамически в процессе функционирования системы правила разграничения доступа.

##Middleware

Проверка доступа по умолчанию осуществляется на стадии Middleware, 
поэтому если вы хотите проверять добавьте его (По умолчанию он уже зазервирован и вы можете без болезнено его использовать)

```php
'dashboard' => \Orchid\Access\Middleware\AccessMiddleware::class,
```

##Пользователь

Пользователь имеет ряд возможностей по управлению ролями

```php
//Проверяет есть ли у пользователя расширение
//Проверка осуществляется как у него самого, так и у его ролей
Auth:user()->hasAccess($string);

//Получить разрешения пользователя
Auth:user()->getPermissionsAttribute($permissions);

//Установить разрешения доступов
Auth:user()->setPermissionsAttribute($permissions)

//Получить все роли пользователя
Auth:user()->getRoles();

//Проверить есть ли у пользователя роль
Auth:user()->inRole($role)

//Добавляет пользователю роль
Auth:user()->addRole($role)
```



##Роли

Роли так же имеют процедуры:

```php
$role = Role::getRoleSlug($string);

// Возвращает всех пользователей имеющих данную роль
$role->getUsers();

//Получает разрешения роли
$role->getPermissionsAttribute($permissions);

//Устанавливает разрешения для роли
$role->setPermissionsAttribute($permissions);
```


## Создание администратора

Для создания пользователя с максимальными (На момент создания) правами
необходимо выполнить следующую команду:


```php
php artisan make:admin nickname email@email.com secretpassword
```


## Adding your own permissions

An example of adding their own extensions using the provider

```php
use Illuminate\Support\ServiceProvider;
use Orchid\Foundation\Kernel\Dashboard;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard)
    {
        $permission = $this->registerPermissions();
        $dashboard->permission->registerPermissions($permission);
    }

    protected function registerPermissions()
    {
        return [
            'Modules' => [
                [
                    'slug'        => 'unique name',
                    'description' => 'text',
                ],
                [
                    'slug'        => 'unique name',
                    'description' => 'text',
                ],
                [
                    'slug'        => 'unique name',
                    'description' => 'text',
                ],
                [
                    'slug'        => 'unique name',
                    'description' => 'text',
                ],
            ],

        ];
    }
}
```
@endverbatim