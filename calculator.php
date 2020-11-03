<?php

include 'Stack.php';

function isOperator($c){
	return ($c == chr("+") || $c == chr("-") || $c == chr("/") || $c == chr("*"));
}

function calculate($opr,$var1, $var2) {
	switch($opr){
		case "+":
			return $var1 + $var2;
			break;
		case "-":
			return $var2 - $var1;
			break;
		case "/":
			return $var2 / $var1;
			break;
		case "*":
			return $var1 * $var2;
			break;
	}
}

$stack = new Stack();

// Statement in postfix
$statement="12 2 /";
$array=str_split($statement);
$num='';

foreach ($array as $char) {

	if (is_numeric($char)) {
		$num=$num.$char;

	} else  if ($char == ' '){
		$stack->push($num);
		$num = '';

	} else {
		$var1 = $stack->pop();
		$var2 = $stack->pop();
		$evl = calculate($char,$var1,$var2);
		$stack->push($evl);

	}
	
}

echo "Answer: ".$stack->pop()."\n";

?>
