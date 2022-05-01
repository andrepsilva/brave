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

        $rules=array(
            'onwer_id' => 'required',
            'name' => 'required',
            'phone' => 'required'
        );

        $validatedData = $request->validate($rules);

        $this->people->name = $request->name;
        $this->people->phone = $request->phone;
        $this->people->owner_id = $request->owner_id;
        $this->people->save();
        $this->people->id;

        return response()->json('sucess'); 
    }


    /**
	* Check post function
	*
    * This function receive integer, array
	* This function returns array	
	* @return array
	*/
    public function update(Request $request){

        $rules=array(
            'onwer_id' => 'required',
            'name' => 'required',
            'phone' => 'required'
        );

        $validatedData = $request->validate($rules);

        $this->people = People::find($request->people_id);
        $this->people->name = $request->name;
        $this->people->phone = $request->phone;
        $this->people->owner_id = $request->owner_id;
        $this->people->update();

        return response()->json('sucess');                             
    }

    /**
	* Check post function
	*
    * This function receive integer
	* This function returns array	
	* @return array
	*/
    public function remove(Request $request){

        $rules=array(
            'people_id' => 'required'
        );

        $validatedData = $request->validate($rules);



        $person = People::where('id',$request->people_id)->delete();
        return response()->json('sucess');                                         
    }

    /**
	* Check post function
	*
    * This function receive integer
	* This function returns array	
	* @return array
	*/
    public function list(Request $request){

        $rules=array(
            'owner_id' => 'required'
        );

        $validatedData = $request->validate($rules);



        $person = People::where("owner_id","=",$request->owner_id);
        return response()->json('sucess');                                     
    }

}