<?php declare(strict_types=1);

namespace VanCodX\Data\Validation;

use VanCodX\Data\Validation\Traits\ArrTrait;
use VanCodX\Data\Validation\Traits\BoolTrait;
use VanCodX\Data\Validation\Traits\FloatTrait;
use VanCodX\Data\Validation\Traits\IntTrait;
use VanCodX\Data\Validation\Traits\ListTrait;
use VanCodX\Data\Validation\Traits\MiscTrait;
use VanCodX\Data\Validation\Traits\NumTrait;
use VanCodX\Data\Validation\Traits\StrTrait;

class Validation
{
    use ArrTrait;
    use BoolTrait;
    use FloatTrait;
    use IntTrait;
    use ListTrait;
    use MiscTrait;
    use NumTrait;
    use StrTrait;
}
