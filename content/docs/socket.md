---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Socket
---
@verbatim
#Socket
----------

WebSocket — протокол полнодуплексной связи поверх TCP-соединения, предназначенный для обмена сообщениями между браузером и веб-сервером в режиме реального времени.

WebSocket разработан для воплощения в web-браузерах и web-серверах, но он может быть использован для любого клиентского или серверного приложения. 

Протокол WebSocket - это независимый протокол, основанный на протоколе TCP. Он делает возможным более тесное взаимодействие между браузером и web сайтом, способствуя распространению интерактивного содержимого и созданию игр реального времени.


###Создание :
	
Чтобы создать новый виджет, необходимо выполнить
```php
php artisan make:socket MyNameClass
```
В папке `app/HTTP/Socket/Listener` создаться шаблон веб-сокета.

После создания необходимо установить маршрут который распологается `app/HTTP/Socket/routes.php`

```php
//Основу маршрутизации составляет Symfony Routing Component
$socket->route('/myclass', new MyClass, ['*']);
```

Для запуска веб-сокета используйте команду:
```php
php artisan socket:serve
```

###Частые вопросы

Пример установки уникальных номеров сокета и сессии laravel
```php


    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        
        //Берем user id
        $userId = $this->getUserFromSession($conn);
        
        //Создаем список юзеров подключенных к серверу
        array_push($this->userList, $userId);
        
        //Рассказываем всё что произошло
        echo "New connection! user_id = ({$userId})\n";
    }
    
    public function getUserFromSession($conn)
    {
        // Create a new session handler for this client
        $session = (new SessionManager(App::getInstance()))->driver();
        
        // Get the cookies
        $cookies = $conn->WebSocket->request->getCookies();
        
        // Get the laravel's one
        $laravelCookie = urldecode($cookies[Config::get('session.cookie')]);
        
        // get the user session id from it
        $idSession = Crypt::decrypt($laravelCookie);
        
        // Set the session id to the session handler
        $session->setId($idSession);
        
        // Bind the session handler to the client connection
        $conn->session = $session;
        $conn->session->start();
        
        //Берем юзера из сессии
        $userId = $conn->session->get(Auth::getName());
        return $userId;
    }

```


Подключение веб-сокета на JavaScript

```javascript
var socket = new WebSocket("ws://localhost");

socket.onopen = function() {
  alert("Соединение установлено.");
};

socket.onclose = function(event) {
  if (event.wasClean) {
    alert('Соединение закрыто чисто');
  } else {
    alert('Обрыв соединения'); // например, "убит" процесс сервера
  }
  alert('Код: ' + event.code + ' причина: ' + event.reason);
};

socket.onmessage = function(event) {
  alert("Получены данные " + event.data);
};

socket.onerror = function(error) {
  alert("Ошибка " + error.message);
};


Для посылки данных используется метод socket.send(data). Пересылать можно любые данные.

Например, строку:
socket.send("Привет");

```

@endverbatim
