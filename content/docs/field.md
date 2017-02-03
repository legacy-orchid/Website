---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Some Markdown
---
@verbatim
#Поля
----------

Поля используются для генерации шаблонного вывода формы заполнения/редактирования

Все возможные поля определены в  `config/content.php` в разделе fields
Каждое поле может быть использованно в типе и если вам нужно создать своё не стесняйтесь.
Поле состоит из одного класса с обязательным методом `create` который должен возравщать 'view' для отображения пользователю
 
Как вы наверное заметили перечисления полей в типе, похоже на перечесление параметров для валидации, только тут вы можете передавать любые параметры в своё поле:

```php
return [
    'name' => 'tag:input|type:text|name:name|max:255|required|title:Название статьи|help:Упоменение',
    'body' => 'tag:textarea|name:body|max:255|required|class:summernote|rows:10',
    'place'    => 'tag:place|type:text|name:place|max:255|required|title:Место положение|help:Адрес на карте',
    'datetime' => 'tag:datetime|type:text|name:open|max:255|required|title:Дата открытия|help:Открытие мероприятия состоиться',
    'description' => 'tag:textarea|name:description|max:255|required|rows:5|title:Краткое описание',
    'keywords'    => 'tag:tags|name:keywords|max:255|required|title:Ключевые слова|help:Упоменение',
    'robot'       => 'tag:robot|name:robot|max:255|required|title:Индексация|help:Разрешить поисковым роботам индесацию страницы',
    'free' => 'tag:checkbox|name:robot|max:255|required|title:Бесплатно|help:Мероприятие бесплатно|placeholder:Мероприятие бесплатно|default:1',

];
```
 
 @endverbatim
