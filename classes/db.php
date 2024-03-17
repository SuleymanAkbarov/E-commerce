<?php  
include_once('classes/db.php');

/**
 * 
 */
class db
{
	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $dbName = "shop";
	public $conn;
	
	function __construct()
	{

		return $this->conn = new mysqli(
			$this->hostname,
			$this->username,
			$this->password,
			$this->dbName
		);		
	}
	public function select($table, $where=null, $where2=null)
	{
		# code...
		if(!is_null($where)){
			$sql = "SELECT * FROM $table WHERE $where2 LIKE '$where'";			
		}
		else{
			$sql = "SELECT * FROM $table";
		};
		$result = $this->conn->query($sql);
		if(!empty($result->num_rows) && $result->num_rows > 0){
    		while($row = $result->fetch_assoc()){
    			$result_data[] = $row;
    		};
    		return $result_data;
    	}
    	else{
    		return [];
    	}

		
	}
	public function update($table, $column, $data, $id)
	{
		# code...
		$sql = "UPDATE $table SET $column = '{$data}' WHERE ID LIKE {$id}";
		$result = $this->conn->query($sql);
	}

}

?>