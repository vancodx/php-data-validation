VanCodX PHP Data Validation
===========================

This library contains a set of static methods for validation the types of function/method arguments or just values.

Installation
------------

Install this package with the following command:

```
composer require vancodx/php-data-validation
```

Usage
-----

Example of validation the type of a function argument:

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
    \PHPStan\dumpType($ids); // Reports: Dumped type: non-empty-list<int<1, max>>
    echo 'IDs: ', implode(', ', $ids), "\n";
}
```

Running tests
-------------

Use the following command for running the tests inside a Docker container:

```
docker compose up --build tests
```
