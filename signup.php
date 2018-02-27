<?php

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="stylesp.css">
     </head>
    <body>
         <h4 id="main">Sign up</h4> 
     <form  class="sign-up "  action="includes/signup_inc.php"  method="POST">
       
        <span class="head">First Name</span></br>
        <input class="input" type="text"      name="first" placeholder="FirstName"></br>  
        <span class="head">Last Name</span><br>
        <input  class="input" input="input" type="text"      name="last" placeholder="lastname"> </br>
        <span class="head">Email</span><br>
        <input  class="input" type="email"     name="email" placeholder="email">    </br>
        <span class="head">UserName</span><br>
        <input  class="input" type="text"      name="UID" placeholder="username/email"></br>

              <span class="head">Password</span><br>
        <input class="input" type="password"  name="pwd" placeholder="password"><br>

        <button  id="in" type="submit" name="submit">Submit </button>
             <a  id="unq" href="index1.php"> LOGIN  </a>
      </form>
   </body>
</html>