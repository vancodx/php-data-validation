<?php declare(strict_types=1);

namespace Tests\Samples;

use ArrayObject;

/**
 * @template TKey of array-key
 * @template TValue of mixed
 * @extends ArrayObject<TKey, TValue>
 */
class MyArrayObject1 extends ArrayObject
{
}
