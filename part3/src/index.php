<?php

function raiseToPower(float $number, int $power): float
{
	return $number ** $power;
}

function raiseToPowerReference(float &$number, int $power): void
{
	$number = $number ** $power;
}

function getNumericInput(): float|int
{
	$number = trim(fgets(STDIN));
	if (!is_numeric($number)) {
		echo "Ви ввели не число!\n";
		exit;
	}
	return $number;
}

echo "Введіть число: \n";
$number = (float)getNumericInput();

echo "Введіть ступінь: \n";
$power = getNumericInput();

echo "Результат піднесення до ступеню (функція повертає нове число): ";
echo raiseToPower($number, (int)$power) . "\n";
echo "Результат піднесення до ступеню (функція змінює передане число): ";
raiseToPowerReference($number, (int)$power);
echo $number . "\n";