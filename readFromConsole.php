<?php
function readFromConsole($question){
	echo $question.': ';
	$input = trim(fgets(STDIN));
	if($input === '') {
		$input = null;
	}
	elseif($input === 'true' || $input ==='false'){
		$input = true;
	}
	elseif (is_numeric($input)){
		$input = +$input;
	}
	else{
		$input = (string)$input;
	}
	return $input;
};
