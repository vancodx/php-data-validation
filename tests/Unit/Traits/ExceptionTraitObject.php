<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use Exception;
use Throwable;
use VanCodX\Data\Validation\Traits\ExceptionTrait;

class ExceptionTraitObject
{
    use ExceptionTrait {
        fixExceptionFileAndLine as public;
    }

    /**
     * @param string $message [optional]
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newException(string $message = '', int $code = 0, Throwable $previous = null): Exception
    {
        return new Exception($message, $code, $previous);
    }
}
