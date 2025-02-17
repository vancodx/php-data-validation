<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use Exception;
use Throwable;
use VanCodX\Data\Validation\Exceptions\ArgumentException;
use VanCodX\Data\Validation\Exceptions\ValueException;

trait ExceptionTrait
{
    /**
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newValueException(
        string|array $valueInfo,
        int $code = 0,
        Throwable $previous = null
    ): Exception {
        return new ValueException($valueInfo, $code, $previous);
    }

    /**
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newArgumentException(
        string|array $valueInfo,
        int $code = 0,
        Throwable $previous = null
    ): Exception {
        return new ArgumentException($valueInfo, $code, $previous);
    }
}
