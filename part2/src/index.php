<?php
function raiseToPower(float $number, int $power): float
{
	return $number ** $power;
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
$number = getNumericInput();

echo "Введіть ступінь: \n";
$power = getNumericInput();

echo "Результат піднесення до ступеню: ";
echo raiseToPower((float)$number, (int)$power) . "\n";