<?php
function readFromConsole($question){
	echo $question.': ';
	$input = trim(fgets(STDIN));
	if($input === '') {
		$input = NULL;
	}
	elseif($input === 'true' || $input ==='false'){
		$input = (bool)$input;
	}
	elseif (is_numeric($input)){
		$input = +$input;
	}
	else{
		$input = (string)$input;
	}
	return $input;
};
