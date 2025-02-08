<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Exceptions;

use Throwable;
use UnexpectedValueException;
use VanCodX\Data\Validation\Exceptions\Interfaces\ValueInfoInterface;
use VanCodX\Data\Validation\Exceptions\Traits\PrepareMessageTrait;
use VanCodX\Data\Validation\Exceptions\Traits\ValueInfoTrait;

class ValueException extends UnexpectedValueException implements ValueInfoInterface
{
    use PrepareMessageTrait;
    use ValueInfoTrait;

    protected const string SINGULAR_MESSAGE_FORMAT = 'Value "%s" is invalid.';
    protected const string PLURAL_MESSAGE_FORMAT = 'One or more values (%s) are invalid.';

    /**
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return void
     */
    public function __construct(string|array $valueInfo, int $code = 0, Throwable $previous = null)
    {
        parent::__construct(
            static::prepareMessage(static::SINGULAR_MESSAGE_FORMAT, static::PLURAL_MESSAGE_FORMAT, $valueInfo),
            $code,
            $previous
        );
        $this->valueInfo = $valueInfo;
    }
}
