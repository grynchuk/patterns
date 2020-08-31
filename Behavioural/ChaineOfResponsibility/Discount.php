<?php

declare(strict_types=1);

namespace Patterns\Behavioural\ChainOfResponsibility;

class Discount
{
    public const HOLIDAY = 'holiday_discount';
    public const PERSONAL = 'personal_discount';
    public const PROMOTION = 'promotion_discount';

    private const DISCOUNT_VALUES = [
        self::HOLIDAY => 10,
        self::PERSONAL => 20,
        self::PROMOTION => 30
    ];

    public function getValue($value): int {
        return self::DISCOUNT_VALUES[$value];
    }
}