---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Активные ссылки
---
@verbatim
#Активные ссылки
----------



Активные ссылки - это вспомогательный пакет, который позволяет легко распознать
 текущий путь (Url) или маршрут (Route), очень полезный для добавления класса
 "active" (например, те, которые используются в Bootstrap), а также выполнения
 различных действий, только тогда, когда определённый маршрут активен.
Она также включает в себя помощников для получения текущего контроллера и действия имен.



## Использование

### Вспомогательные функции


Вспомогательные функций, дают возможность использования без фасада или создания экземпляра класса.

```php
active()
is_active()
```

### Использование `active()`


Вы передаете массив маршрутов и путей, которые вы хотите видеть.
Если какой-либо маршрут совпадёт, функция возвратит строку `active`. 
В качестве альтернативы, вы можете передать свою строку для возврата в качестве второго аргумента.


```php

// Returns 'active' if the current route matches any path or route name.
active('login', 'users/*', 'posts.*', 'pages.contact'); 

 // Returns 'active-class' if the current route is 'login' or 'logout'.
active(['login', 'logout'], 'active-class');
```


In the first example, the function will return the string `active` if the current path is `login`, starts with `users/` or if the name of the current route is `posts.create`.

Do note that a number of argument types are provided: you can use a path string, you can use a path string with a wildcard (using the `*`) and you can also use named routes.

You can use this function with your links to give them an active state.


```php
<a href="{{ route('posts.index') }}" class="{{ active('posts.index') }}">
    All posts
</a>
```


You can also provide certain paths or routes to be exluded when being considered.


```php
active(['pages/*', 'not:pages/contact'])

active(['pages.*', 'not:pages.contact'])
```


### Using `is_active()`

This works much the same as `active()`, you can pass the paths and routes to it but instead it will return a boolean if the current page matches. 


```php
@if (is_active('posts/*'))
    You're looking at a blog post!
@endif
```


### Additional helpers

Two additional functions are provided to get the current controller and action, if your routing is being handled by a controller for a request. These functions will return the lowercase controller/action name, without the method of the request. Here is an example for a request that is routed to `FooController@getBar':


```php
$controller = controller_name(); // foo

$action = action_name(); // bar
```
@endverbatim
