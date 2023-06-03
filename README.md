# The simplest PHP Router
To work with PHP router you must run command:

```
composer require aandrosov/php-router
```

## Example of usage
```php
<?php 
use PhpRouter\JSONMessage;
use PhpRouter\Message;
require_once __DIR__ . '/vendor/autoload.php';

\PhpRouter\GET('/api', function() {
    echo new Message('<h1>Hello, world!</h1>', 200, 'text/html; charset=utf-8');
});

\PhpRouter\GET('/api/user/(\d+)/get', function($id) {
    echo new JSONMessage(['user_id' => $id], 200);
});

\PhpRouter\PUT('/api/user/(\d+)', function() {
    //SOME ACTIONS ...
});

//IF NO ROUTES MATCH
echo new Message('<h1>Page not found!</h1>', 404, 'text/html; charset=utf-8');
```

Methods:
- GET
- POST
- PUT
- DELETE

Router use regular expressions like this: **/api/user/(\d+)**
