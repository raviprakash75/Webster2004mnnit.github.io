<?php
 SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Registeration</title>
    <style>
      #Box{
        
        border: 2px groove;
        border-radius:20px;
        background-color:aliceblue;
      
      }
      label{
        text-shadow: 1px 1px 1px grey;
        font-weight: bold;
      }
      #head{
        text-shadow: 5px 5px 5px black;
       
    }
    </style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
<div class="container-fluid overflow-auto bg-info " >
<center><p class="display-4 text-white " id="head" style="font-family: 'Galada',Cursive;">TheGamer'sZone</p></center>
</div>



<div class="alert alert-danger" role="alert">
  <p>Let's take first step towards your Social Gaming ,Just create Your account and Get Connect with your gaming Friends</p>
  </div>

  <div class="container bg-dark rounded overflow-auto " style="height:80px" >
    <p class="display-4 text-white  " id="head"  style="font-family:georgia;" >Get Register Now!</p>
    </div>

<div class=" container shadow-lg p-3 mb-5  " id="Box">
<form class= "form" action="#" method="post">

<label>Name:</label><input type="text" name="name" class="form-control " placeholder="Name"><br>
<label>Gaming Name/Username:</label><input type="text" name="username" class="form-control " placeholder="Username"><br>
<label>Email:</label><input type="email" name="email" class="form-control"  placeholder="Email"><br> 
<label>Age:</label><input type="number" name="age" class="form-control"  placeholder="Age"><br>
<label>Phone No. </label><input type="number" name="phone" class="form-control"  placeholder="Phone No."><br> 
<label>City:</label><input type="text" name="city" class="form-control"  placeholder="City"><br> 
<label>Password:</label><input type="password" name='password' class="form-control" placeholder="Password"><br>
<label>Password:</label><input type="password" name='cpassword' class="form-control" placeholder="Confirm Password"><br>
<center><input type ="submit" class="btn btn-primary "value="Submit"></center>

</form> 
</div>
<br>
<br>
<diV class="container-fluid  bg-info">
  <br>
  <br>
  <center><a class="text-white" href="#">Contact Us</a>|<a class="text-white" href="#">About Us</a></center>
  <br>
  <br>
   </diV>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php //

if(isset($_POST['username']))
{

require_once('private/user.php');
$_SESSION['user']=new User($_POST['name'],$_POST['username'],$_POST['email'],$_POST['password'],$_POST['age'],$_POST['phone'],$_POST['city']);

if(!$_SESSION['user']->isregistered()&&$_SESSION['user']->register())
{
$_SESSION['user']->setregistered(true);
echo "<script>alert('registered successfully');</script>";

}
else if ($_SESSION['user']){
echo "<script>alert('registered already .. go to login');</script>";
}
else 
{echo "<script>alert('Something went wrong');</script>";
}
}

?>
