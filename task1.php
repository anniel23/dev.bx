<?php
require_once "readFromConsole.php";
echo "Программа суммирования чисел".PHP_EOL;
echo "Для завершения программы нажмите 2 раза Enter или введите не число".PHP_EOL;

$result=0;

do{
	$input = readFromConsole("Введите число:");
	if(is_numeric($input)) $result+=$input;
}while(is_numeric($input));

echo "Сумма $result";
