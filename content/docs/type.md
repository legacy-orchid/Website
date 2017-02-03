---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Типы
---
@verbatim
#Типы 
----------

Типы основная часть Orchid, заместо генерации CRUD для каждой модели
Вы можете выделить какую либо сущность в отдельный тип и с лёгкостью оперировать ею


Собственные типы необходимо регистрировать в `config/content.php` в разделе types

Тип выглядит следующим образом:

```php
<?php

namespace Orchid\Foundation\Types;

use Orchid\Foundation\Http\Forms\Posts\BasePostForm;
use Orchid\Foundation\Http\Forms\Posts\UploadPostForm;
use Orchid\Type\Type;

class TestType extends Type
{
    /**
     * @var string
     */
    public $name = 'Тестовый тип';

    /**
     * @var string
     */
    public $slug = 'test';

    /**
     * Slug url /news/{name}.
     *
     * @var string
     */
    public $slugFields = 'name';

    /**
     * @var bool
     */
    public $api = true;

    /**
     * Rules Validation.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'             => 'sometimes|integer|unique:posts',
            'content.*.name' => 'required|string',
            'content.*.body' => 'required|string',
        ];
    }

    /**
     * @return array
     */
    public function fields()
    {
        return [
            'name' => 'tag:input|type:text|name:name|max:255|required|title:Название статьи|help:Упоменение',
            'body' => 'tag:textarea|name:body|max:255|required|class:summernote|rows:10',
            'place'    => 'tag:place|type:text|name:place|max:255|required|title:Место положение|help:Адрес на карте',
            'datetime' => 'tag:datetime|type:text|name:open|max:255|required|title:Дата открытия|help:Открытие мероприятия состоиться',
            'title'       => 'tag:input|type:text|name:title|max:255|required|title:Заголовок статьи|help:Упоменение',
            'description' => 'tag:textarea|name:description|max:255|required|rows:5|title:Краткое описание',
            'keywords'    => 'tag:tags|name:keywords|max:255|required|title:Ключевые слова|help:Упоменение',
            'robot'       => 'tag:robot|name:robot|max:255|required|title:Индексация|help:Разрешить поисковым роботам индесацию страницы',
            'free' => 'tag:checkbox|name:robot|max:255|required|title:Бесплатно|help:Мероприятие бесплатно|placeholder:Мероприятие бесплатно|default:1',

        ];
    }

    /**
     * @return array
     */
    public function modules()
    {
        return [
            UploadPostForm::class,
            BasePostForm::class,
        ];
    }

    /**
     * Grid View for post type.
     */
    public function grid()
    {
        return [
            'name'       => 'Название',
            'publish'    => 'Дата публикации',
            'created_at' => 'Дата создания',
        ];
    }
}

```

Где:
1. $name - имя типа
1. $slug - уникальное значение явно пределяющие данный тип
1. $slugName отвечат за генерацию ЧПУ по полю
1. rules() - правила валидации
1. fields() - требуемые поля
1. modules() - реализующие формы
1. grid() - отображение таблицы

Вы можете расширять данные тип все ми доступными методами, что бы добавлять в него новый функционал отвечающего Вашему приложению
 @endverbatim