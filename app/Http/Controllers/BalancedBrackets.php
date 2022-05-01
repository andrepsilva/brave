<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



/**
* Class Home
*
* Project main class
*
* @version 1.0
* @author André Pereira <andre.informata@gmail.com>
* @Balanced Brackets 
*/
class BalancedBrackets extends Controller
{
    /**
	* The class constructor
	*
	* This sets up the class 
	*/
    public function __construct(){
	
    }

    /**
	* A validate function
	*
    * This function receive String
	* This function returns String	
	* @return string
	*/
    public function index(Request $request){

		$inputString = $request->inputString;
		$values = $this->checkPost($request->inputString);
		$valid = false;
		$comment = "";

		if($values && $this->checkString($values)){	
			if($this->validateValues($values, $inputString)){
				$valid = true;
			}	
		}else{
			$comment = "string is not valid";
		}

		if($valid){
			echo json_encode(array("string" => $inputString, "status" => "valid", "comment" => $comment));
		}else{
			echo json_encode(array("string" => $inputString, "status" => "not valid", "comment" => $comment));
		}
	}

	/**
	* Order function
	*
    * This function receive String
	* This function returns integer	
	* @return integer
	*/
	public function order($param)
	{	

		$order =  array("3" => "[]", "2" => "{}", "1" => "()");
		$position = array_search($param,$order);
		
		if($position){
			return $position;
		}else{
			false;
		}
	}

	/**
	* Validate Values function
	*
    * This function receive array, string
	* This function returns boolean	
	* @return boolean
	*/
	public function validateValues($values, $inputString){

		$orderOld = "";

		for($count = 0; $count < (count($values)/2); $count++){
				
			$first = $inputString[0];
			$last = $inputString[strlen($inputString) - 1];
			$orderFirst = $this->order($first.$last);

			if(!$orderFirst){		
				return false;
				exit();
			}

			if($orderOld == ""){
				$orderOld = $orderFirst;
			}
			
			if($orderFirst > $orderOld){	
				return false;
				exit();
			}

			$inputString = substr($inputString,1, -1);				
		}

		return true;
	}

	/**
	* Check string function
	*
    * This function receive array
	* This function returns boolean, array	
	* @return boolean, array
	*/
	public function checkString($values = array()){

		$check = array('(',')','{','}','[',']');

		foreach($values as $key => $value){
			if(!in_array($value, $check)){		
				return false;				
			}
		}
		return $values;
	}

	/**
	* Check post function
	*
    * This function receive array
	* This function returns boolean	
	* @return boolean
	*/
	public function checkPost($string = null){

		$values = mb_str_split($string);
		
		if( (count($values) % 2 == 0)){
			return $values;
		}else{
			return false;
		}
	}
}
