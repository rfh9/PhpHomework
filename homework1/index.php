<?php

//Task №1
$name = 'Никита';
$age = '18';
echo "Меня зовут: $name<br>Мне $age лет<br>";
echo '“!|/’”\\<br><br>';

//Task №2
const TOTAL_IMAGES = 80;
const FLET_IMAGES = 23;
const PENCIL_IMAGES = 40;
$paintImages = TOTAL_IMAGES - FLET_IMAGES - PENCIL_IMAGES;
echo "Красками нарисовано $paintImages рисунков<br><br>";

//Task №3
$age = 33;
if (18 < $age && $age < 65) {
    echo "Вам еще работать и работать<br><br>";
} elseif ($age > 65) {
    echo "Вам пора на пенсию<br><br>";
} elseif (1 <= $age && $age <= 17) {
    echo "Вам ещё рано работать<br><br>";
} else {
    echo "Неизвестный возраст<br><br>";
}

//Task №4
$day = 7;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день<br><br>";
        break;
    case 6:
    case 7:
        echo "Это выходной день<br><br>";
        break;
    default:
        echo "Неизвестный день<br><br>";
}

//Task №5
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Camry',
    'speed' => 110,
    'doors' => 5,
    'year' => 2016
];

$opel = [
    'model' => 'Astra',
    'speed' => 100,
    'doors' => 3,
    'year' => 2017
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $name => $car) {
    echo "CAR $name<br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br>";
}
echo "<br>";

//Task №6
echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo '<td>';
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "($result)";
        } elseif ($i % 2 !== 0 && $j % 2 !== 0) {
            echo "[$result]";
        } else {
            echo $result;
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';