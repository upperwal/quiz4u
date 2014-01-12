<?php

// {{{ Database

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
	// {{{ properties

	/**
	 * Address of the database server
	 *
	 * This variable holds the address of the database server. It will be used
	 * to connect to the database.
	 *
	 * @var 	string
	 */
	private $hostAddress = "localhost";

	/**
	 * Username of the database server
	 *
	 * Holds the username of the database.
	 *
	 * @var 	string
	 */
	private $userName = "root";

	/**
	 * Password of the database server
	 *
	 * This variable holds the password of the database server.
	 *
	 * @var 	string
	 */
	private $password = "root";

	/**
	 * Name of the database server
	 *
	 * This variable holds the name of the database. This database is selected
	 * when connected to the database.
	 *
	 * @var 	string
	 */
	private $databaseName = "buymebook";

	/**
	 * This variable holds the reference to PDO class object
	 *
	 * It acts as the connection reference. It holds the reference to PDO class.
	 * It is an object of PDO class.
	 *
	 * @var 	PDO
	 */
	private $databaseLink;

	/**
	 * PDOStatement object
	 *
	 * Required to prepare, execute and display results of an SQL query.
	 *
	 * @var 	PDOStatement
	 */
	private $PDOQuery;

	// }}}

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

	// {{{ query()

	/**
	 * Execute any query provided in the attribute
	 *
	 * This function execute the query given in the attribute.
	 *
	 * @param 	string 	$queryText	query to execute
	 * @return 	void
	 * @throws 	none
	 * @access  public
	 * @since 	Method available since version 1.0
	 */
	public function query($queryText) {
		$this->PDOQuery = $this->databaseLink->prepare($queryText);
		$this->PDOQuery->execute();		
	}

	// }}}

	// {{{ fetch()

	/**
	 * Fetch one record at a time
	 *
	 * This function fetches one record at a time. If this function is called
	 * recursively, it can return all records.
	 *
	 * @param 	string 	$fieldName 	Name of the field whose data is required
	 * @return 	void
	 * @throws 	none
	 * @access  public
	 * @since 	Method available since version 1.0
	 */
	public function fetch($fieldName='none') {
		if ($fieldName == 'none') {
			return $this->PDOQuery->fetch();
		}
		elseif ($this->PDOQuery->fetch()[$fieldName]) {
			return $this->PDOQuery->fetch()[$fieldName];
		}
		else
			return "Field name not found";
	}

	// }}}

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

// }}}

?>

