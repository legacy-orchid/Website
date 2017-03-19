---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Fields
---
@verbatim
# Fields
----------

Fields are used to generate a template output of the fill / edit form

All possible fields are defined in `config / content.php` in the fields section
Each field can be used in a type and if you need to create your own do not hesitate.
The field consists of one class with the obligatory `create` method, which must raise the 'view' to display to the user
 
As you probably noticed the enumerations of fields in the type, it seems that the parameters have been cross-checked for validation, only here you can pass any parameters to your field:

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
