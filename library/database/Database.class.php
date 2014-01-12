<?php

/**
 * This is the Database connectivity class
 *
 * This class is used for database connectivity and to execute MySQL queries.
 *
 * @category	Database Module
 * @package		info.quiz4u.database
 * @author 		Abhishek Upperwal <a.upperwal@gmail.com>
 * @copyright	2014 Qubit Technologies
 * @license		
 * @version 	1.0
 * @link 		
 * @see 		
 * @since 		File available since 1.0
 */ 

/**
 * This is the Database connectivity class
 *
 * This class is used for database connectivity and to execute MySQL queries.
 *
 * @category	Database Module
 * @package		info.quiz4u.database
 * @author 		Abhishek Upperwal <a.upperwal@gmail.com>
 * @copyright	2014 Qubit Technologies
 * @license		
 * @version 	Release: @package_version@
 * @link 		
 * @see 		
 * @since 		File available since 1.0
 */ 

class Database {
	private $hostAddress = "localhost";
	private $userName = "root";
	private $password = "root";
	private $databaseName = "buymebook";
	private $databaseLink;
	private $PDOQuery;
	/**
	* Constructor connects to MySQL server
	*/
	function __construct() {
		try {
			$this->databaseLink = new PDO('mysql:host='.$hostAddress.';dbname=buymebook', $this->userName, $this->password);

			/**
			 * set the error reporting attribute 
			 */

			$this->databaseLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
    		die();
		}
	}

	public function __toString() {
		//$val = ;
		if ($this->databaseLink) {
			return "Database Connected";
		}
		else {
			return $this->databaseLink->errorInfo();
		}
	}

	function query($queryText) {
		$this->PDOQuery = $this->databaseLink->prepare($queryText);
		$this->PDOQuery->execute();
		
	}

	function fetch() {
		return $this->PDOQuery->fetch()['username'];
	}

}


$abc = new Database();
$abc->query("select username from user");
echo $abc->fetch();
echo $abc->fetch();
echo $abc->fetch();
echo $abc;
?>

