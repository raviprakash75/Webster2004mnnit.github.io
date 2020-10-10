<?php
class database {

private $pass="";
private $uname="root";
private $host ="localhost";
public function dbconnect($dbname)
	{

$this->dbconn=mysqli_connect($this->host,$this->uname,$this->pass,$dbname)or die("Could not connect");
return $this->dbconn;
}
public function dbclose()
{

mysqli_close($this->dbconn);

}


}




?>
