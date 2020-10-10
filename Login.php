<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        #Form-box{
            border:0.05px groove;
            border-radius: 10px;
            width: 500px;
            background-color:aliceblue;
        }
        #Box{
            border:groove;
            border-radius: 10px;
            width: 500px;
            
        }
        #Input-Box{
            margin: 10px;
            padding:20px;   
        }
        #head{
            text-shadow: 5px 5px 5px black;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    //TopHeader
    <div class="container-fluid overflow-auto  bg-info"  >
        <center><p class="display-4 text-white " id="head" style="font-family: 'Galada',Cursive;">TheGamer'sZone</p></Center>
        </div>
        <br>
    
    //login Box
        <div class="container bg-dark  overflow-auto " id="Box" >
            <center><p class="display-4 text-white" style="font-family:georgia;" >Login</p></center>
        </div>   
    //login form
         <div class="container shadow-lg p-3 mb-5 "  id="Form-box">
         <form class="form" method="post" id="Input-Box">  
        <label><b>Username:</b></label><input type="text" name="username" class="form-control" placeholder="Username"><br>
        <label ><b>Password:</b></label><input type="password" name="password" class="form-control" placeholder="Password"><br>
        <center><input type ="submit" class="btn btn-outline-warning"value="Submit"></center> 
        </form>
        <br>
        <center><a href="#">Forget Password</a></center>
        <br>
          <center> <p>New to Gamer's Zone?<br><button class="btn"><a href="Register.html">Sign up</a> </button></p></center> 
         </div>
         <br>
         <br>
      //Footer
         <diV class="container-fluid bg-info">
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
