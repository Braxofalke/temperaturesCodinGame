<?php

fscanf(STDIN, "%d", $N);
$inputs = explode(" ", fgets(STDIN));
$closestTemperature = null;

foreach ($inputs as $t) {
    $temp = (int)$t;
    if ($closestTemperature === null || abs($temp) < abs($closestTemperature) ||
        (abs($temp) == abs($closestTemperature) && $temp > $closestTemperature)) {
        $closestTemperature = $temp;
    }
}

echo ($closestTemperature !== null) ? $closestTemperature : 0;