VanCodX PHP Data Validation
===========================

This library contains a set of static methods for validation the type of arguments and variables of functions and
methods. The main goal is to improve the quality of data validation and static analysis. Each validation method contains
a PHPStan tag in its DocBlock comment to narrow the type of "value" argument.

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

Example of validation the type of a variable:

```php
<?php declare(strict_types=1);

use VanCodX\Data\Validation\Validation as V;

/**
 * @return void
 */
function printUsername(): void
{
    $username = getenv('USER');
    if (!V::isStrLen($username)) {
        throw V::newValueException(compact('username'));
    }
    \PHPStan\dumpType($username); // Reports: Dumped type: non-empty-string
    echo 'Username: ', $username, "\n";
}
```

Running tests
-------------

Use the following command for running the tests inside a Docker container:

```
docker compose up --build tests
```
