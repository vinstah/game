<?php #model/registration
define('DBHost','localhost');
define('DBUser','root');
define('DBPass','lampp');
define('DBDB','school');


class regModel {
	public static $db;
 public function __construct(){
	
	 regModel::$db  = new mysqli(DBHost,DBUser,DBPass, DBDB);
 if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 }
	//create function that checks username not in use
	public function check_user($username){
		//$db = new mysqli(DBHost,DBUser,DBPass, DBDB);
		$sql = "SELECT `username` FROM `players` WHERE `username`='$username'";
		$result = regModel::$db->query($sql);
		
		if($result->num_rows == 1 ){
			return false;			
		}
		else{return true;}
	}
}
$regModel = new regModel();
?>