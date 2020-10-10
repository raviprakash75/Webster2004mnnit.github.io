<?php

public class database ()
{

$pass="MyPass";
$uname="MyUname";

function connect($dbname)
        {

$this.$conn=mysqli_connect($uname,$pass,$dbname) or die("Could Not connect") ;
return $this.$conn;
}
function close()
{

mysqli_close($this.$conn);

}

} 

?>
