<?php
//country table from https://blog.radwell.codes/2013/09/iso-3166-country-list-for-mysql/
Class Client{
    public function __construct($data)
	{
        $this->id = $data["id"];
        $this->first_name = $data["first_name"];
        $this->last_name = $data["last_name"];
        $this->email = $data["email"];
        $this->age = $data["age"];
        $this->countryId = $data["countryId"];
    }

    public static function getClients()
	{
        //get all clients
        $clients = DB::query("SELECT * FROM clients"); 
        //client+country
        //SELECT clients.*, country.code, country.name FROM clients LEFT JOIN country ON clients.countryId = country.id

        // acting as a factory
        // empty array to avoid errors when no assignments were found
		$clientArray = array();
		foreach($clients as $client)
		{
			// create an instance / object for this SPECIFIC 
			$clientArray[] = new Client($client); // put this  object onto the array
        }
		// return the list of objects
		return $clientArray;
	}
}