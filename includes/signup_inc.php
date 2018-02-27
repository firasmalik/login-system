<?php


if (isset($_POST["submit"]))                                                               //if1
 { 
include_once'dbh.inc.php';
$first=$_POST['first'];
$last =$_POST['last'];
$email=$_POST['email'];
$Uid  =$_POST['UID'];
$pwd  =$_POST['pwd'];
$pwdecr= sha1($pwd);


if(empty($first)||empty($last)||empty($email)||empty($Uid)||empty($pwd))
              {   
           
                echo("<h1>"."Empty Field"."</h1>");
              }else{
//$hasshedPWD
 $sql="INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd)
     VALUES('$first','$last','$email','$Uid','$pwdecr');";
     mysqli_query($conn,$sql);
     header ("Location:../signup.php?signup=success");
                    }         
}else{                                                                                       
    header ("Location:../signup.php");
    exit();
    }






















/*
  if (isset($_POST["submit"]))                                                               //if1
 { 
   
    include_once'dbh.inc.php';
    $first=mysqli_real_escape_string($conn,$_POST['first']);
    $last =mysqli_real_escape_string($conn,$_POST['last']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $Uid  =mysqli_real_escape_string($conn,$_POST['UID']);
    $pwd  =mysqli_real_escape_string($conn,$_POST['pwd']);
  
//check for empty fields
                                 
    /* if(empty($first)||empty($last)||empty(email)||empty($Uid)||empty($pwd))            //if2             
         { 
                                header ("Location:../signup.php?signup=empty");
                                exit();
    
        }else{                                                                           //else2
    
              if(!preg_match("/^[a-z,A-Z]*$/",$first)|| !preg_match("/^[a-z,A-Z]*$/",$last)) //if3
                   {
        
                     header ("Location:../signup.php?signup=invalid");
                      exit();
         
                   //else{                                                                  //else3
                         // if (!filter_var($emailval, FILTER_VALIDATE_EMAIL)                   //if4
                            // { 
                                 //fields dont match
                               // header ("Location:../signup.php?signup=email");
                                 // exit();
                        

              }                  //else5
                                                  //insert row and enrypt password
                                    */
                    /* $sql="SELECT*FROM users;";
                      //$sql="INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) 
                    // VALUES($first,$last, $email,$Uid, $pwd);";
                      $result=mysqli_query($conn,$sql);
                      $resultcheck=mysqli_num_rows($result);
                      if ($resultcheck>0)
                      {
        
                      echo"done";
                       }*/
            // header ("Location:../signup.php?signup=success");
            //   exit();
 /*   $sql="SELECT*FROM users;"; 
    $result=mysqli_query($conn,$sql);
$sqlv="INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd)
VALUES($first,$last, $email,$Uid,$pwd);";
          $result=mysqli_query($sql);
        
          header ("Location:../signup.php?signup=success");
           }
                                           //   }
                                         //    }
                                        //  }
  else{                                                                                       //else1
    header ("Location:../signup.php");
    exit();
        }*/
                          /*   else{ //runntest                                                        //else4
              
                                      $sql="SELECT*FROM users WHERE user_id='UID';";
                                      $result=mysqli_query($conn,$sql);
                                      $resultcheck=mysqli_num_rows($result);
                                      if($resultcheck>0)
                                          {                                                 //if5
                                             header ("Location:../signup.php?signup=usertaken");
                                          $echo($resultcheck);
                                             exit();
                                          }else{ */                          
?>