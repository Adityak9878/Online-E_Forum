<?php 

$showerroe=False;
if($_SERVER['REQUEST_METHOD']=="POST")
{
   include "_dbconnect.php";
   $lg_user=$_POST['lg_email'];
   $lg_pass=$_POST['lg_password'];

   $sql="SELECT * FROM `Users` where user_email='$lg_user' ";
   $res=mysqli_query($conn,$sql);
   $num=mysqli_num_rows($res);

   if($num==1)
   {
        $row=mysqli_fetch_assoc($res);
        if(password_verify($lg_pass,$row['user_pass']))
        {
            session_start();
            $_SESSION['loggedin']=True;
            $_SESSION['useremail']=$lg_user;
           // echo "Logged in".$lg_user;
            header("location:/Forum/index.php");
            exit();
        }
        else
        {
            header("location:/Forum/index.php?login=False");
        }
   }
}

?>