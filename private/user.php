<?php
require_once('database.php');
class User{
private $name="";
private $username="";
private $email="";
private $password="";
private $age="";
private $phone="";
private $city="";
private $registered=false;
private $loggedin=false;
function __construct($name,$username,$email,$password,$age,$phone,$city)
{
$this->name=$name;
$this->email=$email;
$this->password=$password;
$this->age=$age;
$this->phone=$phone;
$this->city=$city;
$this->username=$city;


}

function setregistered($status)
{
$this->registered=$status;


}

function isregistered()
{
return $this->registered;


}



function register()
{

$db = new database;
$conn=$db->dbconnect('web');

$q1="create table if not exists info ( uid SERIAL, name VARCHAR(50),username VARCHAR(50), email VARCHAR(50), password VARCHAR(50), age INT(3), phone VARCHAR(20), city VARCHAR(15), PRIMARY
KEY(uid));";
$q2 = "insert into info(name,username,email,password,age,phone,city) VALUES('$this->name','$this->username','$this->email','$this->password','$this->age','$this->phone','$this->city')";
mysqli_query($conn,$q1);
return mysqli_query($conn,$q2);


}





}

//$u1 = new User("durgesh","kumar","pass","34","45555","ddf");
//$u1->register();
//echo("succes");




?>