<?php
require_once "readFromConsole.php";
echo "Программа суммирования чисел";
echo "Для завершения программы нажмите 2 раза Enter \n";

$result=0;

do{
	$input = readFromConsole("Введите число");
	if(is_numeric($input)) $result+=$input;
}while($input != null);

echo "Сумма $result";
