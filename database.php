<?php

public class database ()
{

$pass="MyPass";
$uname="MyUname";

connect($dbname)
        {

$this.$conn=mysqli_connect($uname,$pass,$dbname);
return $this.$conn;
}
close()
{

mysqli_close($this.$conn);

}

} 

?>
