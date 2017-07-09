---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: Fields
---
@verbatim
# Fields
----------

Fields are used to generate a template output of the fill / edit form

All possible fields are defined in `config / content.php` in the fields section
Each field can be used in a type and if you need to create your own do not hesitate.
The field consists of one class with the obligatory `create` method, which must raise the 'view' to display to the user
 
```php
// Available fields to form templates
'fields' => [
    'textarea' => Orchid\Fields\TextAreaField::class,
    'input'    => Orchid\Fields\InputField::class,
    'tags'     => Orchid\Fields\TagsField::class,
    'robot'    => Orchid\Fields\RobotField::class,
    'place'    => Orchid\Fields\PlaceField::class,
    'datetime' => Orchid\Fields\DateTimerField::class,
    'checkbox' => Orchid\Fields\CheckBoxField::class,
    'path'     => Orchid\Fields\PathField::class,
    'code'     => Orchid\Fields\CodeField::class,
    'wysiwyg'  => \Orchid\Fields\SummernoteField::class,
],
```

Do not hesitate to add your fields, for example, to use a convenient editor for you, or any components



#### It's as easy as writing conditions for validation

As you probably noticed the enumerations of fields in the type, it seems that the parameters have been cross-checked for validation, only here you can pass any parameters to your field:

```php
return [
    'name' => 'tag:input
            |type:text
            |name:name
            |max:255
            |required
            |title:Name Articles
            |help:Article title',
    'body' => 'tag:textarea
            |name:body
            |max:255
            |required
            |class:summernote
            |rows:10',
    'place'    => 'tag:place
            |type:text
            |name:place
            |max:255
            |required
            |title:Location
            |help:Address on the map
            |placeholder:Location',
    'datetime' => 'tag:datetime
            |type:text
            |name:open
            |required
            |title:Opening date
            |help:The opening event will take place',
    'title'       => 'tag:input
            |type:text
            |name:title
            |max:255
            |required
            |title:Article Title
            |help:SEO title',
    'description' => 'tag:textarea
            |name:description
            |max:255
            |required
            |rows:5
            |title:Short description',
    'keywords'    => 'tag:tags
            |name:keywords
            |max:255
            |required
            |title:Keywords
            |help:SEO keywords',
    'robot'       => 'tag:robot
            |name:robot
            |max:255
            |required
            |title:Индексация
            |help:Allow search bots to index page',

    'free' => 'tag:checkbox
            |name:robot
            |max:255
            |required
            |title:Free
            |help:Event for free
            |placeholder:Event for free|default:1',

];
```

or
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
 
 
 
### Place
 
The 'place' field requires the key for Google map to be specified in `config/service`
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
