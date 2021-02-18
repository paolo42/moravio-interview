# Vending machine change return algorithm
Algorithm for finding the least amount of `coins` needed to give user back his `total` change. 

```yaml
total = 12  
coins = [1, 2, 5]

// => total of 3 coins with values: 5, 5, 2
```

 * Runs on PHP 7.4
 * The main part is located inside `VendingMachine::splitTotalAmountIntoCoins()` method
 * To run included tests, run this command in root directory of this repository:

```bash
php -f main.php
```
 * To create your own tests, just put your testing data as parameters to  `VendingMachineTestCase::createTest()`

