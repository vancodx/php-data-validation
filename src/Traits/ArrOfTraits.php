<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use VanCodX\Data\Validation\Traits\ArrOf\ArrDuoOfTrait;
use VanCodX\Data\Validation\Traits\ArrOf\ArrLenOfTrait;
use VanCodX\Data\Validation\Traits\ArrOf\ArrOfTrait;
use VanCodX\Data\Validation\Traits\ArrOf\ArrQuadOfTrait;
use VanCodX\Data\Validation\Traits\ArrOf\ArrSoloOfTrait;
use VanCodX\Data\Validation\Traits\ArrOf\ArrTrioOfTrait;

trait ArrOfTraits
{
    use ArrOfTrait;
    use ArrLenOfTrait;
    use ArrSoloOfTrait;
    use ArrDuoOfTrait;
    use ArrTrioOfTrait;
    use ArrQuadOfTrait;
}
