---
view::extends: _includes.ru.docs_post_base
view::yields: post_body
pageTitle: Error log
---
@verbatim
# Журнал ошибок
----------

Laravel использует для регистрации популярной библиотеки Monolog, Orchid использует
Анализатор протоколирования, который позволяет получать данные для построения и анализа.


### Требование

Журнал ошибок поддерживает только ежедневный обработчик журнала, поэтому убедитесь, что обработчик журнала установлен как `daily`, а не` single`:

```php
// config\app.php
return [
...

/*--------------------------------------------------------------
 | Logging Configuration
 |--------------------------------------------------------------
 | Available Settings: "single", "daily", "syslog", "errorlog"
 */
'log' => 'daily',

...
];
```

@endverbatim
