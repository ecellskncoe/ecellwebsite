<?php 
class InsertData
{
  public $server = "localhost";
  public $user = "root";
  public $pass = "";
  public $dbname = "howtoqr";
	public $conn;
  public function __construct()
  {
  	$this->conn= new mysqli($this->server,$this->user,$this->pass,$this->dbname);
  	if($this->conn->connect_error)
  	{
  		die("Database connection failed");
  	}
  }
 	public function insertQr($qrUname,$final,$qrimage,$qrlink,$qrEmail,$qrContact,$qrBranch,$qrYear,$qrUid)
 	{
 			$sql = "INSERT INTO qrcodes(qrCollege,qrName,qrImg,qrlink,qrEmail,qrContact,qrBranch,qrYear,qrUid) VALUES('$qrUname','$final','$qrimage','$qrlink','$qrEmail','$qrContact','$qrBranch','$qrYear','$qrUid')";
 			$query = $this->conn->query($sql);
 			return $query;

 	
 	}
 	public function displayImg()
 	{
 		$sql = "SELECT qrimg,qrlink from qrcodes where qrimg='$qrimage'";

 	}
}
$qrvar = new InsertData();	