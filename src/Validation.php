<?php declare(strict_types=1);

namespace VanCodX\Data\Validation;

use VanCodX\Data\Validation\Traits\ArrOfTraits;
use VanCodX\Data\Validation\Traits\ArrTrait;
use VanCodX\Data\Validation\Traits\BoolTrait;
use VanCodX\Data\Validation\Traits\FloatTrait;
use VanCodX\Data\Validation\Traits\IntTrait;
use VanCodX\Data\Validation\Traits\ListTrait;
use VanCodX\Data\Validation\Traits\MiscTrait;
use VanCodX\Data\Validation\Traits\NumTrait;
use VanCodX\Data\Validation\Traits\OrNull\ArrOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\BoolOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\FloatOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\IntOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\ListOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\MiscOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\NumOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\StrOrNullTrait;
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
    use ArrOrNullTrait;
    use BoolOrNullTrait;
    use FloatOrNullTrait;
    use IntOrNullTrait;
    use ListOrNullTrait;
    use MiscOrNullTrait;
    use NumOrNullTrait;
    use StrOrNullTrait;
    use ArrOfTraits;
}
