<?php

declare(strict_types=1);

class VendingMachine
{

    private array $supportedCoinsSortedFromHighest;

    public function __construct(array $supportedCoinValues)
    {
        rsort($supportedCoinValues);
        $this->supportedCoinsSortedFromHighest = $supportedCoinValues;
    }

    public function splitTotalAmountIntoCoins(int $total) : array
    {
        $usedCoinValues = [];

        foreach ($this->supportedCoinsSortedFromHighest as $coinValue) {
            if ($total < $coinValue) {
                continue;
            }

            $coinAmount = intdiv($total, $coinValue);
            for ($i = 0; $i < $coinAmount; $i++) {
                $usedCoinValues[] = $coinValue;
            }

            $coinAmountsIndexedByCoinValues[$coinValue] = $coinAmount;
            $total = $total % $coinValue;
        }

        return $usedCoinValues;
    }

    public function transformCoinValuesToUserOutput(array $coinValues) : string
    {
        $coinCount = count($coinValues);
        $coinSum = array_sum($coinValues);

        return 'The machine returned ' . $coinCount . ' coins with values: ' . implode(', ', $coinValues) .
            '. ' . "\n" . 'That makes it total of ' . $coinSum . ' money.' . "\n\n";
    }

    public function transformFinalCoinCountAndValuesToUserOutput(int $coinCount, string $coinsAsString) : string
    {
        $coinSum = array_sum(explode(', ', $coinsAsString));

        return 'The machine returned ' . $coinCount . ' coins with values: ' . $coinsAsString .
            '. ' . "\n" . 'That makes it total of ' . $coinSum . ' money.' . "\n\n";
    }
}