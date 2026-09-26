<?php

declare(strict_types=1);

require __DIR__ . '/src/Invoice.php';

$invoice = new Invoice();
$invoice->add(10.5);
$invoice->add(4.5);

echo $invoice->total(), PHP_EOL;
