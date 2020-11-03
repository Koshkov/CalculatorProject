<?php

class Stack{

	private $cnt;	// the number of items in stack
	private $stack; // an array based stack

	function __construct(){
		$cnt=0;
		$stack=array();
	}

	/**
	 * Function puhses an object to the
	 * stack
	 * @param integer $object 
	 */
	function push($object){
		if($this->cnt == 0){
			$this->stack[0]=(int)$object;
			$this->cnt++;
		} else {
			$this->stack[$this->cnt]=(int)$object;
			$this->cnt++;
		}
	}

	/**
	 * Function pops an object from the
	 * stack
	 * @return the top object in stack
	 */
	function pop(){
		$this->cnt--;
		return $this->stack[$this->cnt];
	}

	/**
	 * Function peeks at the top object
	 * in stack without removing it
	 * @return the top object in the stack
	 */
	function peek(){
		return $this->stack[($this->cnt - 1)];
	}

	/**
	 * Function returns boolean value based
	 * on status of stack
	 * @return true if stack empty
	 */
	function isEmpty(){
		return $this->cnt == 0;
	}

	/**
	 * Function gets the number of objects
	 * in stack
	 * @return integer objects in stack
	 */
	function getCount(){
		return $this->cnt;
	}

	/**
	 * Clears the stack by setting $cnt to 0
	 * and the first array element to null
	 */
	function clear(){
		$this->cnt = 0;
		$this->stack[0] = null;
	}
}

?>
