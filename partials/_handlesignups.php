<?php 


if($_SERVER['REQUEST_METHOD']=="POST")
{
    include "_dbconnect.php";
    $user_email=$_POST['signupemail'];
    $pass=$_POST['password'];
    $cnfpass=$_POST['cnf_password'];


    $showError=False;
    $showAlert=False;
    // Check wheather this exsists.
    $existSql = "select * from `Users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0)
    {
        $showAlert = "Email already in use";
    }
    else{
        if($pass == $cnfpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`) VALUES ( '$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                $showAlert = true;
                 header("Location:/Forum/index.php?signupsuccess=True");
                 exit();
            }

        }
        else{
            $showError = True; 
            
        }
    }
    $showError=True;
    header("Location: /forum/index.php?signupsuccess=False&error=$showError");

}
        

if($insert_successfull)
{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

if($showError)
{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Password Doesnt Match ! Retry 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}


?>