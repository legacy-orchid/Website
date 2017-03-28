---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Defender
---
@verbatim
#Defender
----------

Blacklist and Whitelist

All IP addresses in those lists will no be able to access routes filtered by the blacklist filter.


`config/defender.php`

```php
/*
|--------------------------------------------------------------------------
| Black listed IP  addresses
|--------------------------------------------------------------------------
|
*/
'blacklist'  => [
    // '127.0.0.1',
],
/*
|--------------------------------------------------------------------------
| White listed IP addresses,
|--------------------------------------------------------------------------
|
*/
'whitelist'  => [
    // '127.0.0.2',
],
```

###Scanning

Scanning for dangerous files and functions in the public directory according to the signatures specified in the config.

```php
php artisan defender:scan
```

@endverbatim
