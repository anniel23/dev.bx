<?php
function readFromConsole($input=''){
	if($input == ''){
		$input = trim(fgets(STDIN));
	}

	if($input === '' || $input==='!stop') {
		$input = NULL;
	}
	elseif($input === 'true') {
		$input = true;
	}
	elseif ($input ==='false'){
		$input = false;
	}
	elseif (is_numeric($input)){
		$input = +$input;
	}
	else{
		$input = (string)$input;
	}
	return $input;
};
