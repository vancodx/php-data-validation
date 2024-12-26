<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use VanCodX\Data\Validation\Traits\OrNull\ArrOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\AssocOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\BoolOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\FloatOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\IntOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\ListOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\MiscOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\NumOrNullTrait;
use VanCodX\Data\Validation\Traits\OrNull\StrOrNullTrait;

trait OrNullTraits
{
    use BoolOrNullTrait;
    use IntOrNullTrait;
    use FloatOrNullTrait;
    use NumOrNullTrait;
    use StrOrNullTrait;
    use MiscOrNullTrait;
    use ArrOrNullTrait;
    use ListOrNullTrait;
    use AssocOrNullTrait;
}
