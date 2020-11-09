<?php
Class PublicController extends Controller{

	var $content = "";

	//load home page
	public function main(){
		$this->loadView("views/header.php");//add nav
		$this->loadView("views/home.php");//go home
		//add subscribe form
		$this->loadData(Countries::getCountries(), "oCountry");
		$this->loadView("views/subscribe.php",); 
		$this->loadLastView("views/main.php");
	}

	//load login page
	public function login(){
		$this->loadView("views/header.php");
		$this->loadView("views/login.php");
		$this->loadLastView("views/main.php");

	}

	//login function secure
	public function doLogIn(){
		$con = DB::connect();
		//save variables from form
		$username = $_POST["username"];
		$password = $_POST["password"];
		//from modal user
		//capes special characters in a string
		$sql = "SELECT * FROM users WHERE username='".mysqli_escape_string($con, $username)."'";

		$results = mysqli_query($con, $sql);

		$user = $results = mysqli_fetch_assoc($results);
		
		if ($user)
		{
			if (password_verify($password, $user["password"])) 
			{
				echo "hello... ". $user["username"];
				//save id in session
				$_SESSION["userId"]=$user["id"];
				new User($user);
				//go to admin
				$this->go("user", "main"); 
			} else {
				//go to login wrong password
				$this->goMsg("public","login","error=1");
			}
		} else {
			//go to login wrong user
			$this->goMsg("public","login","error=2");
		}
	}

	//logout
	public function doLogOut(){

		unset($_SESSION["userId"]);
		$this->go("public", "main");
	}

	//add client
	public function doSubscribe(){
		$con = DB::connect();
		var_dump($_POST);
		//save variables from form
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$email = $_POST["email"];
		$phone= $_POST["phone"];
		$age = $_POST["age"];
		$countryId = $_POST["countryId"];
	}
}
