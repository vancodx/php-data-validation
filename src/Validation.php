<?php declare(strict_types=1);

namespace VanCodX\Data\Validation;

use VanCodX\Data\Validation\Traits\ArgumentExceptionTrait;
use VanCodX\Data\Validation\Traits\ArrOfTraits;
use VanCodX\Data\Validation\Traits\AssocOfTraits;
use VanCodX\Data\Validation\Traits\BasicTraits;
use VanCodX\Data\Validation\Traits\ListOfTraits;
use VanCodX\Data\Validation\Traits\OrNullTraits;

class Validation
{
    use BasicTraits;
    use OrNullTraits;
    use ArrOfTraits;
    use ListOfTraits;
    use AssocOfTraits;
    use ArgumentExceptionTrait;
}
