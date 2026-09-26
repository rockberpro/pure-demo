<?php

declare(strict_types=1);

final class Invoice
{
    /** @var float[] */
    private $items = [];

    public function add(float $amount): void
    {
        $this->items[] = $amount;
    }

    public function total(): float
    {
        return array_sum($this->items);
    }
}
