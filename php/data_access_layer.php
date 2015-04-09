<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]).'/php/config.php';

class DataAccessLayer{
	private $connString; // Contains info about connection.

	public function __construct() 
	{
		$this->connString = "host=".$GLOBALS['dbhost']. " ".
							"port=".$GLOBALS['dbport']. " ".
							"dbname=".$GLOBALS['dbname']. " ".
							"user=".$GLOBALS['dbuser']." ".
							"password=".$GLOBALS['dbpass'];

	}

	public function executeQuery($query) 
	{
		// Connects database.
		$dbconn = pg_connect($this->connString) or die('Connection failed');
		// Prepare to avoid SQL injection
		$stmt=pg_prepare($dbconn,"ps",$query);
		// Executes query.
		$result = pg_query($query);
		// No return from PostgreSQL.
		if (!$result) 
		{
			die("Error in SQL query:" . pg_last_error());
		}

		// Putting data return from query into array.
		$queryResult = array();
    	$row_count = pg_num_rows($result);
		if($row_count>0) 
		{
			while($tuple=pg_fetch_array($result))
			{
				// Add each row of data to array
				array_push($queryResult, $tuple);
			}
		}
		// Free variable and close connection.
		pg_free_result($result);
		pg_close($dbconn);
		
		return $queryResult;
	}
}