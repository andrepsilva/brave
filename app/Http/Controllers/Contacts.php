<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\People;


/**
* Class Home
*
* Project main class
*
* @version 1.0
* @author André Pereira <andre.informata@gmail.com>
* @Contacts 
*/
class Contacts extends Controller
{

    private $people;
    /**
	* The class constructor
	*
	* This sets up the class 
	*/
    public function __construct(){
        $this->people = new People;
    }

    /**
	* Check post function
	*
    * This function receive array
	* This function returns array	
	* @return array
	*/
    public function add(Request $request){

        $this->people->name = $request->name;
        $this->people->phone = $request->phone;
        $this->people->owner_id = $request->owner_id;
        $this->people->save();
        $this->people->id;
        echo json_encode(array("people_id" =>  $this->people->id));
    }


    /**
	* Check post function
	*
    * This function receive integer, array
	* This function returns array	
	* @return array
	*/
    public function update(Request $request){

        $people_id = $request->id;
        $people = array(
                            "name"     => $request->name,
                            "phone"    => $request->phone,
                            "owner_id"    => $request->owner_id
                        );      
        
        echo json_encode($people);                              
    }

    /**
	* Check post function
	*
    * This function receive integer
	* This function returns array	
	* @return array
	*/
    public function remove(Request $request){

        $people_id = $request->id;
        echo json_encode(array($people_id));                                      
    }

    /**
	* Check post function
	*
    * This function receive integer
	* This function returns array	
	* @return array
	*/
    public function list(Request $request){

        $owner_id = $request->owner_id;
        echo json_encode(array());                                 
    }

}