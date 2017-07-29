---
view::extends: _includes.ru.docs_post_base
view::yields: post_body
pageTitle: - Laravel Admin panel menu
---
@verbatim
# Меню панели администратора
----------

Меню панели - это элемент интерфейса администратора,
Позволяет выбрать один из нескольких перечисленных вариантов программного обеспечения.
Это важный элемент графического интерфейса пользователя.



### Использование:

Чтобы зарегистрировать новое меню для своего пакета или модуля, вам необходимо
указать его в поставщике композитора.
	
```php
namespace App\Http\Composers;

use Orchid\Kernel\Dashboard;

class MenuComposer
{
    /**
     * MenuComposer constructor.
     *
     * @param Dashboard $dashboard
     */
    public function __construct(Dashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    public function compose()
    {
        $this->dashboard->menu->add('Main', [
            'slug'       => 'slug-my-menu',
            'icon'       => 'icon',
            'route'      => '#',
            'label'      => 'My name Menu',
            'childs'     => true,
            'main'       => true,
            'active'     => 'dashboard.mymenu.*',
            'permission' => 'dashboard.mymenu',
            'sort'       => 1,
        ]);
    }
}
```

Регистрация композера
```php
public function boot()
{
    View::composer('dashboard::layouts.dashboard', MenuComposer::class);
}
```

 
 @endverbatim
