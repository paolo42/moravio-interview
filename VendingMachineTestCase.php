<?php

declare(strict_types=1);

class VendingMachineTestCase
{

    public function createTest(
        array $supportedCoinValues,
        int $totalAmount,
        int $expectedCountOfCoins,
        string $expectedCoins
    ) {
        $vendingMachine = new VendingMachine($supportedCoinValues);
        $returnedChange = $vendingMachine->splitTotalAmountIntoCoins($totalAmount);

        $expectedOutputMessage = $vendingMachine->transformFinalCoinCountAndValuesToUserOutput(
            $expectedCountOfCoins,
            $expectedCoins
        );
        $actualOutputMessage = $vendingMachine->transformCoinValuesToUserOutput($returnedChange);
        echo $actualOutputMessage;

        $this->assertEqual($expectedOutputMessage, $actualOutputMessage);
    }

    private function assertEqual(string $expectedOutputMessage, string $actualOutputMessage)
    {
        if ($expectedOutputMessage !== $actualOutputMessage) {
            throw new MoravioTestFailedException($expectedOutputMessage, $actualOutputMessage);
        }
    }

}
