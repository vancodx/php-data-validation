<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Exceptions\Traits;

trait ValueInfoTrait
{
    /**
     * @var string|list<string>|array<string, mixed>
     */
    protected string|array $valueInfo;

    /**
     * @return string|list<string>|array<string, mixed>
     */
    public function getValueInfo(): string|array
    {
        return $this->valueInfo;
    }
}
