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

	public function query($queryText) {
		$this->PDOQuery = $this->databaseLink->prepare($queryText);
		$this->PDOQuery->execute();
		
	}

	public function fetch($fieldName) {
		if ($this->PDOQuery->fetch()[$fieldName]) {
			return $this->PDOQuery->fetch()[$fieldName];
		}
		else
			return "Field name not found";
		
	}

	public function fetchAll($mode='ret') {
		switch ($mode) {
			case 'ret':
				return $this->PDOQuery->fetchAll();
				break;
			case 'display':
				print_r($this->PDOQuery->fetchAll());
				break;
			default:
				echo "Database::fetchAll() does not support this mode.";
				break;
		}
	}

}


$abc = new Database();
echo $abc;
$abc->query("select username from user");
$val = $abc->fetchAll();
echo $val[0][0];
?>

