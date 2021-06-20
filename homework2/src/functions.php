<?php

function task1(array $strings, bool $param = false)
{
    $result = '';
    foreach ($strings as $string) {
        $result = $result . "<p>$string</p>\n";
    }
    if ($param) {
        return $result;
    } else{
        echo $result;
    }
}

function task2(string $action, ...$args)
{
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $arg) {
                $result /= $arg;
            }
            return $result;
        case '*':
            $result = array_shift($args);
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;
        default:
            return "Неизвестное действие";
    }
}

function task3($num1, $num2)
{
    if (!(is_int($num1) && is_int($num2) && $num1 > 0 && $num2 > 0)) {
        echo "Аргументы должны быть натуральными числами";
    } else {
        $result = '<table>';
        for ($i = 1; $i <= $num1; $i++) {
            $result .= '<tr>';
            for ($j = 1; $j <= $num2; $j++) {
                $result .= '<td>';
                $result .= $i * $j;
                $result .= '</td>';
            }
            $result .= '</tr>';
        }
        $result .= '</table>';
        echo $result;
    }

}

function task6($name)
{
    $fp = fopen($name, 'r');
    if (!$fp) {
        return false;
    }

    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }

    echo $str;
}