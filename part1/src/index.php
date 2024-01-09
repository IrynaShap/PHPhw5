<?php
function circleArea(float $r): float
{
	return M_PI * $r * $r;
}

echo "Введіть радіус:\n";
$radius = trim(fgets(STDIN));
if (!is_numeric($radius)) {
	echo "Ви ввели не число!\n";
	exit;
}

echo "Площа кола: ";
echo circleArea((float)$radius). "\n";