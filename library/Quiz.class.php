<?php

/**
 * This is the super-base or super-parent class of Quiz Module
 *
 * This class creates the frame for Quiz Module and has all the common 
 * variables and functions which can be used by sub classes.
 * 
 * PHP Version 5
 * 
 * LICENCE: This source code belongs to Qubit Technologies and should be
 * used, modified or distributed with prior permission from Qubit Technologies 
 * 
 * @category	Quiz Module
 * @package		info.quiz4u.createquiz
 * @author 		Abhishek Upperwal <a.upperwal@gmail.com>
 * @copyright	2014 Qubit Technologies
 * @license		
 * @version 	1.0
 * @link 		
 * @see 		
 * @since 		File available since 1.0
 */ 

require_once('database/Database.class.php');

class Quiz {
	function __construct() {
		$database = new Database();
		$database->query("select * from user");
		echo $database->fetch("id");
	}
}

new Quiz();