 <?php


if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    $uid=$_POST['uid'];
    $password =sha1($_POST['pwd']);
    $sql ="SELECT *From users WHERE  user_uid='".$uid."'  AND user_pwd='".$password."';";
    $result=mysqli_query($conn,$sql);
       
        if(mysqli_num_rows($result)==1)
         {   
            echo ('<h1>'."Successfull Login"."</h1>");
            
         }elseif(empty($uid)&&empty($password))
              {   
               echo("<h1>"."Empty Fields"."</h1>");
              }elseif(empty($uid)){
               echo "empty username";
                   }elseif(empty($password)){
                    echo "empty password";
                   }
}









 /*
session_start();
if(isset($_POST['submit']))
   {
    include_once 'dbh.inc.php';
    $uid= mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd =mysqli_real_escape_string($conn,$_POST['pwd']);
    
    //error handlers
    //checks if fields are empty
    if(empty($uid)||empty($pwd)){   
                header ("Location:../index.php.php?login=empty");
                echo ("empty");
                exit();
        
    }else{
        $sql ="SELECT *From users WHERE  user_uid=$uid ;";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);
        if($resultcheck<1){
                header ("Location:../index.php.php?login=error1");
                exit();
            
        }else{
            if ($row =mysqli_fetch_assoc($result)){
                //dehashing password
                $hashedpwdcheck=password_verify($pwd,$row)['user_pwd'];
                if($hashedpwdcheck==false)
                {
                header("Location ;../index.php?login error");
                 exit();
                }elseif ($hashedpwdcheck==true){
                // lockin user
                //session global
                    $_SESSION["uid"]=$row['user_id'];       
                    $_SESSION["u_first"]=$row['user_first'];   
                    $_SESSION["u_last"]=$row['user_last'];     
                    $_SESSION["u_email"]=$row['user_email'];
                    $_SESSION["us_uid"]=$row['user_uid'];     
                 header ("Location:../index.php.php?login=sucess");
                 exit();
                    
                }
            }
            
            
        }        
    } 
}else{
     header ("Location:../index.php.php?asitis");
    exit();
    }
       

    session_start();
if(isset($_POST['submit']))
   {
     include_once 'dbh.inc.php';
     $uid= mysqli_real_escape_string($conn ,$_POST['uid']);
     $pwd =mysqli_real_escape_string($conn ,$_POST['pwd']);
     $pwdecr= sha1($pwd);
    
     if(empty($uid)||empty($pwd))
     {   
         header ("Location:../index.php?login=empty");
         exit();
     }else{
           $sql ="SELECT *From users WHERE  user_uid=$uid ;";
           $result=mysqli_query($conn,$sql);
           $resultcheck=mysqli_num_rows($result);
                //database check
           if($resultcheck<1)
                 {
                 header ("Location:../index.php?login=error1");
                 exit();
                 }
                 else{
                     if ($row=mysqli_fetch_assoc($result)){
                //COMPARING HASHED PASSWORDS
                //   if($pwdecr==false)
                                                                        // {
             //  header("Location ;../index.php?login error2")
               // exit();
                }elseif($resultcheck<1) {// lockin user
               header("Location ;../index.php?login sucess");
               
                    //session global
                    $_SESSION["uid"]=$row['user_id'];       
                    $_SESSION["uid"]=$row['user_first'];   
                    $_SESSION["uid"]=$row['user_last'];     
                    $_SESSION["uid"]=$row['user_email'];
                    $_SESSION["uid"]=$row['user_uid'];     
                    
                    
                }
            }
            
            
        }        
    }else{
             header ("Location:../index.php");
             exit();
          } */
        
    ?>