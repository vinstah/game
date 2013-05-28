<?php
	class login{
		public function __construct(){
		session_start();
		/* use the construct function to check for $_POST data from default.php(main page) */
		if($_SERVER['REQUEST_METHOD']== 'POST' && stristr($_SERVER['HTTP_REFERER'] ,'default.php') ){
		// if the submit button was from the login form(check for username)
			if (isset($_POST['username']) ) {
				$this->checkLogin();
			}// end of make sure $_POST['username']
		}//end if $_POST
		
	}	// End of construct
	
	public function checkLogin(){
		//create variables
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
	
	$regUser = preg_match('/^[a-zA-Z0-9]{6,10}$/',$username);
	$regPass = preg_match('/^[a-zA-Z0-9]{6,10}$/',$password);
		// do required checks
		if ( $regUser && $regPass ) {
			//do database lookup
			//if($loginModel->checkdetails($username,$password));
			
			$_SESSION['username'] = $username;	
			header('Location:../game.php');
		}
		
		
		header('Location: ../game.php');
	}//end of checkLogin()
	
	}//end of login class

//start the object
$login = new login();
?>