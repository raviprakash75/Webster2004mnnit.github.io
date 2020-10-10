<?php

public class database ()
{

$pass="MyPass";
$uname="MyUname";

connect($dbname)
        {

$this.$conn=mysqli_connect($uname,$pass,$dbname) or die("Could Not connect") ;
return $this.$conn;
}
close()
{

mysqli_close($this.$conn);

}

} 

?>
