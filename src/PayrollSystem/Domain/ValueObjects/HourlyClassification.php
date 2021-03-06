<?php
declare(strict_types=1);

namespace PayrollSystem\Domain\ValueObjects;


use PayrollSystem\Domain\Exceptions\InvalidArgumentException;

class HourlyClassification implements PayClassification
{
    private int $hourlyRate;

    public function __construct(int $hourlyRate)
    {
        if ($hourlyRate <= 0) {
            throw new InvalidArgumentException();
        }
        $this->hourlyRate = $hourlyRate;
    }
}
