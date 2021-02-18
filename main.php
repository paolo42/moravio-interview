<?php

declare(strict_types=1);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'MoravioTestFailedException.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'VendingMachine.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'VendingMachineTestCase.php';

$testCase = new VendingMachineTestCase();
$testCase->createTest(
    [1,6,7],
    48,
    7,
    '7, 7, 7, 7, 7, 7, 6'
);
$testCase->createTest(
    [1, 2, 5],
    10,
    2,
    '5, 5'
);
$testCase->createTest(
    [1, 2, 5],
    8,
    3,
    '5, 2, 1'
);
