<?php
class DB extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function getUser($username, $password)
	{
		$query = "select * from user where Username = '$username' and password = '$password'";
		$runQuery = $this->db->query($query);
		return $runQuery->result();
	}

	public function insert($firstname, $middlename, $lastname, $username, $emailid, $mobilenumber, $housenumber, $street1, $street2, $city_town, $state, $pincode, $password)
	{
		$query = "INSERT INTO user (firstname, middlename, lastname, username, emailid, mobilenumber, housenumber, street1, street2, city_town, state, pincode, password) values('$firstname', '$middlename', '$lastname', '$username', '$emailid', '$mobilenumber', '$housenumber', '$street1', '$street2', '$city_town', '$state', '$pincode', '$password')";
		$runQuery = $this->db->query($query);
		return "inserted";
	}
} 
?>