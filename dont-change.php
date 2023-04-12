<?php

$count = 10000;
$win = 0;

for ($i=0; $i<$count; $i++) {
    // 三扇门
    $doors = ['A', 'B', 'C'];

    // 随机指定一个作为有车的门
    $car = $doors[array_rand($doors)];

    // 嘉宾随机选择一个
    $choice = $doors[array_rand($doors)];

    if ($choice == $car) {
        ++$win;
    }
}

echo "$win/$count\n";

