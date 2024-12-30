<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use VanCodX\Data\Validation\Traits\AssocOf\AssocDuoOfTrait;
use VanCodX\Data\Validation\Traits\AssocOf\AssocLenOfTrait;
use VanCodX\Data\Validation\Traits\AssocOf\AssocOfTrait;
use VanCodX\Data\Validation\Traits\AssocOf\AssocQuadOfTrait;
use VanCodX\Data\Validation\Traits\AssocOf\AssocSoloOfTrait;
use VanCodX\Data\Validation\Traits\AssocOf\AssocTrioOfTrait;

trait AssocOfTraits
{
    use AssocOfTrait;
    use AssocLenOfTrait;
    use AssocSoloOfTrait;
    use AssocDuoOfTrait;
    use AssocTrioOfTrait;
    use AssocQuadOfTrait;
}
