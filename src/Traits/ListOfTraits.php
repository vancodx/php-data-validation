<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use VanCodX\Data\Validation\Traits\ListOf\ListDuoOfTrait;
use VanCodX\Data\Validation\Traits\ListOf\ListLenOfTrait;
use VanCodX\Data\Validation\Traits\ListOf\ListOfTrait;
use VanCodX\Data\Validation\Traits\ListOf\ListQuadOfTrait;
use VanCodX\Data\Validation\Traits\ListOf\ListSoloOfTrait;
use VanCodX\Data\Validation\Traits\ListOf\ListTrioOfTrait;

trait ListOfTraits
{
    use ListOfTrait;
    use ListLenOfTrait;
    use ListSoloOfTrait;
    use ListDuoOfTrait;
    use ListTrioOfTrait;
    use ListQuadOfTrait;
}
