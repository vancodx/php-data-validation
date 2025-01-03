<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use VanCodX\Data\Validation\Traits\Basic\ArrTrait;
use VanCodX\Data\Validation\Traits\Basic\AssocTrait;
use VanCodX\Data\Validation\Traits\Basic\BoolTrait;
use VanCodX\Data\Validation\Traits\Basic\FloatTrait;
use VanCodX\Data\Validation\Traits\Basic\IntTrait;
use VanCodX\Data\Validation\Traits\Basic\ListTrait;
use VanCodX\Data\Validation\Traits\Basic\MiscTrait;
use VanCodX\Data\Validation\Traits\Basic\NumTrait;
use VanCodX\Data\Validation\Traits\Basic\ObjTrait;
use VanCodX\Data\Validation\Traits\Basic\StrTrait;

trait BasicTraits
{
    use BoolTrait;
    use IntTrait;
    use FloatTrait;
    use NumTrait;
    use StrTrait;
    use MiscTrait;
    use ArrTrait;
    use ListTrait;
    use AssocTrait;
    use ObjTrait;
}
