<?php
/**
it is crud class
*/
class crud
{
	private $conn;

	public function __construct($host,$user,$pass,$db)//construct work first so used to connect db
	{
		$this->conn = mysqli_connect($host,$user,$pass,$db); //connect with database
		//check db connect or not
		if (mysqli_connect_errno()) {

			die("can not connect db" . mysqli_connect_error());
		}

	}
	
	public function getall($table,$columns)//get all information fron db 
	{
		$sql="SELECT $columns FROM $table";//queary for table and columns to select..ok
		//now use function mysqli_query(db connction, query) to connect right db with appropite query($sql)
		$query=mysqli_query($this->conn,$sql);
		//check through table no. of columns exist
		if (mysqli_num_rows($query)>0) {
			return mysqli_fetch_all($query,MYSQLI_ASSOC);
			
		}
		else
		{
			return "table empty";
		}


	}

	public function getbyid($table,$columns,$p_key)//get information w.r.t primery key
	{
		$sql="SELECT $columns FROM $table WHERE id='$p_key'";
		$query=mysqli_query($this->conn,$sql);
		if (mysqli_num_rows($query)>0) {
			return mysqli_fetch_assoc($query);
		}
			else
			{
				return "null here";
			}
	}

	public function updatebyid($table,$columns,$p_key)
	{
		$sql="UPDATE $table SET $columns WHERE id='$p_key'";
		$query=mysqli_query($this->conn,$sql);
		if(mysqli_affected_rows($this->conn)==1){
			return true;
		}
		else{
			return false;
		}
	}

	public function deletebyid($table,$p_key)
	{
		$sql="DELETE FROM $table WHERE id='$p_key'";
		$query=mysqli_query($this->conn,$sql);
		if(mysqli_affected_rows($this->conn)==1){
			return true;
		}
		else{
			return false;
		}
	}

	public function insert($table,$columns)
	{
		$sql="INSERT INTO $table SET $columns";
		$query=mysqli_query($this->conn,$sql);
		if(mysqli_affected_rows($this->conn)>0){
			return true;
		}
		else{
			return false;
		}
	}


}

$obj=new crud("localhost","root","","student");//check connection

//echo "<pre>";
//print_r($obj->getbyid("tbl_student","*",5));
//echo "</pre>";

?>