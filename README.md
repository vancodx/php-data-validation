VanCodX PHP Data Validation
===========================

Installation
------------

Install this package with the following command:

```
composer require vancodx/php-data-validation
```

Usage
-----

```php
<?php declare(strict_types=1);

use VanCodX\Data\Validation\Validation as V;

/**
 * @param list<int> $ids
 * @return void
 */
function printIds(array $ids): void
{
    if (!V::isListLenOfIntId($ids)) {
        throw V::newArgumentException(compact('ids'));
    }
    echo 'IDs: ', implode(', ', $ids), "\n";
}
```

Running tests
-------------

Use the following command for running the tests inside a Docker container:

```
docker compose up --build tests
```
