<?php declare(strict_types=1);

namespace Tests\Unit\Exceptions\Traits;

use VanCodX\Data\Validation\Exceptions\Traits\PrepareMessageTrait;

class PrepareMessageTraitObject
{
    use PrepareMessageTrait {
        prepareNames as public;
    }
}
