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
	private $userName = 'root';
	private $password = "root";
	private $databaseName = "buymebook";
	private $databaseLink;
	/**
	* Constructor connects to MySQL server
	*/
	function __construct() {
		try {
			$this->databaseLink = new PDO('mysql:host='.$hostAddress.';dbname=buymebook', 'root', 'root');

			/**
			 * set the error reporting attribute 
			 */

			$this->databaseLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
    		die();
		}
	}

	function query($queryText) {
		$PDOQuery = $this->databaseLink->prepare($queryText);
		$PDOQuery->execute();
		echo $PDOQuery->fetchAll()[7]['username'];
	}

}


$abc = new Database();
$abc->query("select username from user");


?>

