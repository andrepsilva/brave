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
		echo $inputString;
	}


}
