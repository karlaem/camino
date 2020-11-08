<?php
class ErrorMsg{

    public function __construct($data)
	{
		$this->id = $data["id"];
		$this->name = $data["name"];
		$this->description = $data["descriptiond"];
    }
    public static function errormsg($errorId)
    {
         //Error Array
        $errors = array(
            array('id'=>1,'name'=>'Login Error', 'description'=>'Something went wrong, user or pass'),
            array('id'=>2,'name'=>'Login Error', 'description'=>'Something went wrong, user or pass'),
        );
        // acting as a factory
        foreach($errors as $error)
        {
            // create an instance / object for this SPECIFIC 
            $errorArray[] = new Errors($error); // put this  object onto the array
        }

        // return the list of objects
        return $errorArray;
    }
}