<?php declare(strict_types=1);

namespace VanCodX\Data\Validation;

use VanCodX\Data\Validation\Traits\ArrOfTraits;
use VanCodX\Data\Validation\Traits\BasicTraits;
use VanCodX\Data\Validation\Traits\OrNullTraits;

class Validation
{
    use BasicTraits;
    use OrNullTraits;
    use ArrOfTraits;
}
