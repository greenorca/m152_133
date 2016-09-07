<?php

class MySQLTables{
	
private $servername = "localhost";
private $username = "sven";
private $password = "sven";
private $dbname = "m105_topomedics_mig";

function __construct(){
	// Create connection
	$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	$this->conn->set_charset("utf8");
	// Check connection
	if ($this->conn->connect_error) {
    	die("Connection failed: " . $this->conn->connect_error);
	}	
}
function getClassNames(){
	$sqlx = "SELECT class_name FROM t_class;";
	$result = array();	
	$myresult = $this->conn->query($sqlx);
	while($row = $myresult->fetch_assoc()) {
		$result[] = $row;
	}	
	return $result;	
}

function getCustomers($limit=10, $offset=0){
	$sqlx = "SELECT id_customer, customer_name, street, zipcode, city, country FROM customer LIMIT ".$limit." OFFSET ".$offset.";";
	error_log('Info from getCustomers($table): '.$sqlx);
	$result = "";
	$myresult = $this->conn->query($sqlx);
	while($row = $myresult->fetch_assoc()) {
		$result = $result."<tr><td>".$row['id_customer']."</td><td>".$row['customer_name']."</td>";
		$result = $result."<td>".$row['street']."</td>";
		$result = $result."<td>".$row['zipcode']."</td>";
		$result = $result."<td>".$row['city']."</td>";
		$result = $result."<td>".$row['country']."</td>";
		$result = $result."</tr>";
		//$result = $result."<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
	}	
	return $result;
}


}
?>