---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Уведомления
---
@verbatim
#Уведомления
----------
Уведомление — это одноразовое сообщение, которое будет удалено при следующем обращении.
Уведомления призваны информировать о происходящих событиях, связанных с вами на сайте.

Orchid имеет удобный вызов и отображение уведомлений по верх одноразовых flash-данных.
##Использование

```php
public function store()
{
    Alert::message('Welcome Aboard!');
    return Redirect::home();
}
```

Вы также можете сделать:

```php
Alert::info('Message')
Alert::success('Message')
Alert::error('Message')
Alert::warning('Message')
```


При использовании, будет установлено несколько ключей в сессии:

- 'flash_notification.message' - Сообщение для отображения
- 'flash_notification.level' - Строка, представляющая тип уведомления (хорошо для применения имен HTML класса)


Для отображения в необходимом месте требуется:
```html
<div class="container">
    @include('dashboard::partials.alert')
    <p>Welcome to my website...</p>
</div>
```
@endverbatim
