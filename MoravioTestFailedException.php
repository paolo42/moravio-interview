<?php

declare(strict_types=1);

class MoravioTestFailedException extends Exception
{

    public function __construct(string $expected, string $actual)
    {
        $message = 'Test failed on string comparison.' . "\n" .
            'Expected string: ' . $expected . "\n" .
            'Actual string: ' . $actual . "\n";

        parent::__construct($message);
    }
}
