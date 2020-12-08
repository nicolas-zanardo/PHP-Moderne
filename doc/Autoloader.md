# PHP MODERNE

creation du fichier composer.json

```Bash
 composer init
```

Grace a composer on peut mettre l'autoloading dans composer.json

```php
/**
 * Autoloading
 * ex: require 'classes/Calcul.php'
 */
spl_autoload_register(function ($className) {
    // namespace App\Calcul.
    $className = str_replace("App", "src", $className);
    $className = str_replace("\\", "/", $className);
    $className .= '.php';

    require_once($className);
});
```

```Json
//composer.json
{
    "name": "niko/moderne-php",
    "description": "Tutorial PHP",
    "require": {},
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

Creation du dossier vendor pour l'autoload

```Bash
composer dump-autoload
```

```Bash
vendor/
├── autoload.php
└── composer
    ├── autoload_classmap.php
    ├── autoload_namespaces.php
    ├── autoload_psr4.php
    ├── autoload_real.php
    ├── autoload_static.php
    ├── ClassLoader.php
    └── LICENSE

1 directory, 8 files
```

Il n'y a plus qu'a remplacer l'autoloader par cette ligne.

```php
<?php

require "vendor/autoload.php";
```
