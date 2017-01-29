---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Some Markdown
---
@verbatim
#Меню панели администратора
----------

Меню панели (menu) —  элемент интерфейса администратора, 
позволяющий выбрать одну из нескольких перечисленных опций программного обеспечения. 
Является важнейшим элементом графического интерфейса администратора.

Меню в Orchid делиться на несколько областей, которые в свою очередь могут являться
контейнерами для другого меню.

На текущий момент существуют два вида меню

 - Левое стандартное меню
 - Левое модульное меню
 - Верхнее меню


###Использование :
	
	
Для регистрации нового меню для вашего пакета или модуля необходимо 
указать его в сервис провайдере.
	
```php
<?php

namespace Orchid\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Dashboard\Services\Menu\DashboardMenu;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     */
    public function boot(DashboardMenu $dashboardMenu)
    {
        $this->registerMenu($dashboardMenu);
    }

    protected function registerMenu(DashboardMenu $dashboardMenu = null)
    {
        $usersMenu = [
            'slug' => 'Users',
            'icon' => 'fa fa-users',
            'url' => route('dashboard.users.index'),
            'label' => trans('dashboard::menu.Users'),
            'groupname' => trans('dashboard::menu.Users'),
            'childs' => false,
            'divider' => false,
        ];
        $dashboardMenu->add('Systems', 'dashboard::partials.leftMenu', $usersMenu, 501);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}

```

Метод add(), принимает :

 - Название меню
 - Шаблон
 - Массив значений
 - Порядок
 
 @endverbatim
