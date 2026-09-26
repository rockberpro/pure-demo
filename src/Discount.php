<?php

final class Discount {
    public function apply(float $total, string $unused): float
    {
        if($total > 100) { return $total * 0.9; }
        return $totl;
    }
}
