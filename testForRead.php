<?php
require_once "readFromConsole.php";

function testRead(){

	echo assertEquals(readFromConsole('hello'),'hello','Тест 1: hello = ').PHP_EOL;
	echo assertEquals(readFromConsole('true'),true, 'Тест 2: true = ').PHP_EOL;
	echo assertEquals(readFromConsole('false'),false, 'Тест 3: false = ' ).PHP_EOL;
	echo assertEquals(readFromConsole('!stop'),null, 'Тест 4: !stop = ').PHP_EOL;
	echo assertEquals(readFromConsole('3.89'),3.89, 'Тест 5: 3.89 = ').PHP_EOL;
	echo assertEquals(readFromConsole('7'),7, 'Тест 6: 7 = ' ).PHP_EOL;

}

testRead();

function assertEquals($result, $expectResult, $message){
	if($result === $expectResult){
		return $message.' - passed';
	}
	else{
		return $message.' - failed';
	}
}