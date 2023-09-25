<?php
$numbers = range(1, 10);

function removeEvenNumbers(array $numbers): array
{
    foreach ($numbers as $key => $number) {
        if ($number % 2 === 0) {
            unset($numbers[$key]);
        }
    }

    return $numbers;
}

$oddNumbers = removeEvenNumbers($numbers);
print_r($oddNumbers);
