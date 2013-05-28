<?php #register.php

/*
* this page is accessed by the forms on the main page of the site.
* It checks for all the input boxes and that they are filled out using functions and regExps
*/

class register {
	// check for $_POST array.
	public function __construct(){
		session_start();
		/* use the construct function to check for $_POST data from default.php(main page) */
		if($_SERVER['REQUEST_METHOD']== 'POST' && stristr($_SERVER['HTTP_REFERER'] ,'default.php') ){
		// if the submit button was from the schools registration form(check for schName)
			if (isset($_POST['schName']) ) {
				
				$this->regSchool();
			}// end of make sure $_POST['schName']
		// if the players registration was submitted (check for password2)	
			if (isset($_POST['password2'])) {
				
				$this->regPlayer();
			}
		}//end if $_POST
	}	// End of construct
	
	public function regSchool(){
			// list expected fields
			$expected = array( 'clName','schName', 'email', 'address', 'city', 'phone');
			// set required fields
			$required = array('clName', 'schName', 'email', 'address', 'city', 'phone');
		
		//creat arrays for use
		$missing = array();
		$errors = array();
			// turn $_POST data into variables e.g. $email instead of $_POST['email']
			foreach ($_POST as $key => $value) {
			// assign to temporary variable and strip whitespace if not an array
			$temp = is_array($value) ? $value : trim($value);
			// if empty and required, add to $missing array
			if (empty($temp) && in_array($key, $required)) {
			$missing[] = $key;
			} elseif (in_array($key, $expected)) {
				// otherwise, assign to a variable of the same name as $key
				${$key} = $temp;
				}
				 
			}//end foreach $_POST
			if (!empty($missing)) { //if there are fields missing
					echo '<p class="warning">Please fix the item(s) indicated.</p>';
					foreach($missing as $k) {// display fields to fix
						echo $k.'<br>';	
					}
				}else{// all fields are ok //send user to players registration
				//send query to model
				$_SESSION['schooldone'] = "Thank you. your class $clName is now registered" ;				
				header('Location: ../default.php#reg');
				}
			
			
		
		
		
		}//end function regSchool
		
		public function regPlayer(){
		// list expected fields
		$expected = array( 'username','password','password2', 'clName');
		// set required fields
		$required = array( 'username','password','password2', 'clName');;
		//creat arrays for use
		$missing = array();
		$errors = array();
			// create fields of $_POST into variables e.g. $email instead of $_POST['email']
			foreach ($_POST as $key => $value) {
			// assign to temporary variable and strip whitespace if not an array
			$temp = is_array($value) ? $value : trim($value);
		
			// if empty and required, add to $missing array
			if (empty($temp) && in_array($key, $required)) {
			$missing[] = $key;
			} elseif (in_array($key, $expected)) {
				if (stristr($key,'password')){
					$temp = hash('md5',$temp);	
					
				}
				// otherwise, assign to a variable of the same name as $key
				${$key} = $temp;
				
				}
				 
			}//end foreach $_POST
			
			//start doing validation for player registration
			// passwords match
			if($password !== $password2){
				$errors['password2'] = 'does not match';
					
			} 
			//check against regExp (use the same as javascript validation)
			if (!empty($missing)) {
					echo '<p class="warning">Please fix the item(s) indicated.</p>';
					
				} elseif(!empty($errors)){
					echo '<p class="warning">Please fix the item(s) indicated.</p>';
					foreach($errors as $k => $v){
					echo "your $k $v please go back and fix";				
						}
				 }elseif(empty($errors) && empty($missing)){
					$_SESSION['username'] = $username;
					
						header('Location: ../game.php')	;
					}
			
			}//End of player registration
}// End of class

$register = new register();
?>