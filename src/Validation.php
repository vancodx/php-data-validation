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
use VanCodX\Data\Validation\Traits\ValueOrNull\ArrOrNullTrait;
use VanCodX\Data\Validation\Traits\ValueOrNull\BoolOrNullTrait;
use VanCodX\Data\Validation\Traits\ValueOrNull\FloatOrNullTrait;
use VanCodX\Data\Validation\Traits\ValueOrNull\IntOrNullTrait;
use VanCodX\Data\Validation\Traits\ValueOrNull\ListOrNullTrait;
use VanCodX\Data\Validation\Traits\ValueOrNull\NumOrNullTrait;
use VanCodX\Data\Validation\Traits\ValueOrNull\StrOrNullTrait;

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
    use ArrOrNullTrait;
    use BoolOrNullTrait;
    use FloatOrNullTrait;
    use IntOrNullTrait;
    use ListOrNullTrait;
    use NumOrNullTrait;
    use StrOrNullTrait;
}
