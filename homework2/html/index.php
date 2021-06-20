<?php

include "../src/functions.php";

//Task №4
date_default_timezone_set("Europe/Moscow");
echo date("d.m.Y H:i") . "<br>";
echo strtotime("24.02.2016 00:00:00") . "<br>";
echo date("Y-m-d H:i:s", 1456261200) . "<br><br>";

//Task №5
echo str_replace('К', '', "Карл у Клары украл Кораллы") . "<br>";
echo str_replace('Две', 'Три', "Две бутылки лимонада"). "<br><br>";

//Task №6
file_put_contents('test.txt', 'Hello again!');
task6('test.txt');

