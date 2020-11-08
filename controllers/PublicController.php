<?php
Class PublicController extends Controller{

	var $content = "";

	//load home page
	public function main(){
		$this->loadView("views/header.php");
		$this->loadView("views/home.php");
		$this->loadLastView("views/main.php");

	}

	//load login page
	public function login(){
		$this->loadView("views/header.php");
		$this->loadView("views/login.php");
		$this->loadLastView("views/main.php");

	}

	//login function
	public function doLogIn(){
		//from modal user
		$_SESSION["userId"] = User::LogIn($_POST["username"], $_POST["password"]);

		if ($_SESSION["userId"])
		{
			$this->go("user", "main"); // if details entered exist in the db allow user to login
		} else {
			// if details entered do not exist in the db redirect user back to login form with error
			Errors::missingLogin();
			//go to login
			$this->goMsg("public","login","error=1");
		}
	}
}
