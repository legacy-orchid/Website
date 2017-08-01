---
view::extends: _includes.ru.docs_post_base
view::yields: post_body
pageTitle: Fields
---
@verbatim
# Поля
----------
Поля используются для генерации вывода шаблона формы заполнения/редактирования

Все возможные поля определены в `config/content.php` в разделе полей.
Каждое поле может использоваться в поведении, и если вам нужно создать своё собственное поле, не стесняйтесь.
Поле состоит из одного класса с обязательным методом `create`, который должен реализовать `представление` для отображения пользователю

```php
// Доступные поля для формирования шаблонов
'fields' => [
    'textarea' => Orchid\Fields\TextAreaField::class,
    'input'    => Orchid\Fields\InputField::class,
    'tags'     => Orchid\Fields\TagsField::class,
    'robot'    => Orchid\Fields\RobotField::class,
    'place'    => Orchid\Fields\PlaceField::class,
    'datetime' => Orchid\Fields\DateTimerField::class,
    'checkbox' => Orchid\Fields\CheckBoxField::class,
    'code'     => Orchid\Fields\CodeField::class,
    'wysiwyg'  => \Orchid\Fields\SummernoteField::class,
],
```

Не стесняйтесь добавлять свои поля, например, для использования удобного редактора для вас или любых компонентов


#### Это так же просто, как условия записи для проверки

Пример отображения поля
```php
return [
    'name' => 'tag:input
            |type:text
            |name:name
            |max:255
            |required
            |title:Name Articles
            |help:Article title',
];
```

или
```php
return [
    'body' => [
        'tag'      => 'wysiwyg',
        'name'     => 'body',
        'max'      => 255,
        'required' => true,
        'rows'     => 10,
    ],
];
```
 
 
 
### Локация
 
Поле `локация` требует, чтобы ключ для карты Google указывался в `config/service`
services.google.maps.key
```php
//
'google' => [
    'maps' => [
        'key' => 'secret string'
    ],
],
```

 
 @endverbatim
