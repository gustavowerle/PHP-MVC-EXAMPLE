# PHP-MVC-EXAMPLE
 MVC example using PHP.

 ## Structure:

* __Model__      -> /app/Models
* __View__       -> /views
* __Controller__ -> /app/Controllers
* __Routes__ -> /router.php

## Features:

 **Render:**  Both parameters are optional. If the View is not informed it will be resolved by the name of the Controller.
 
```
$this->render([data], '/dir/view');
```