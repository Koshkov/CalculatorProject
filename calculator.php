<?php
/*
	currently in a broken state do not expect this to
	work
*/
include 'Stack.php';

/**
	Determines if character is an operator
	@param c some character
*/
function isOperator($c){
	return ($c == chr("+") || $c == chr("-") || $c == chr("/") || $c == chr("*"));
}

/**
	Function conducts operation based off of
	given operator. Note var2 is numerator for 
	division
	@param opr some operator
	@param var1 operand 1
	@param var2 operand 2
	@return a numeric value
 */
function calculate($opr,$var1, $var2) {

	switch($opr){
		case "+":	// addition
			return $var1 + $var2;
			break;
		case "-": 	// subtraction
			return $var2 - $var1;
			break;
		case "/":	// division
			return $var2 / $var1;
			break;
		case "*":	// multiplication
			return $var1 * $var2;
			break;
	}

}

$stack = new Stack();

// Statement in postfix
$statement="12 2 /";

// split statement into an array for each character
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

// return the answer to the user
echo "Answer: ".$stack->pop()."\n";

?>
