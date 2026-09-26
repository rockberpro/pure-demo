<?php

declare(strict_types=1);

function label(int $status): string
{
    return match ($status) {
        1 => 'paid',
        default => 'open',
    };
}
